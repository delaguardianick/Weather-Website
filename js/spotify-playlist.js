var user_id = "nickdlgg";
// var token = "Bearer BQDin7EwflnzGe0-Pea6l7ZEulED0YX72cPmw51gIcJmjkodmmfqWaWgJXXVPCfNb95PD9nI6ughqsYliMEunaIDDpEWf-QqLpuIT7rkg27mmZ0lgD3gkTkLMMgYANdNOy24CsLP_EfjI6HooEwEAlZ0Ev6LZTNtJpI";
var token = 'Bearer AQC87bntpm8h-d3gMUZWmsRT4wuBrG81T6DgPsP9XskHxBy-gm4kaRcmzgtzKSTTgMnLxkc05EeEXK1GzDMDi0dcE6SMC01Cp92PjBskTmo_cS1KmJdTReolpxxp3bHTMrO3goPkqaTCLhfJ458oAnztPoqLtGHHQ4MJMHFWFZSkec6OhaO92PqqJsiTvs2tYra6kWpc4bf6_rAwGEcBJUl3-pprzV_fvnpJ85dGo9ju0-xKmfZhT-rGD4xM9bars6Y11Pj8oPl9-V1Pk09IqgSh';
var playlists_url="https://api.spotify.com/v1/users/"+user_id+"/playlists";
var redirect_uri = 'https://www.cs.ryerson.ca/~ndelagua/project/weather/spotify.php';
var my_client_id = 'b0a4d712f27a41a7859ddcdc511cd13d';
var my_secret_id = `933877f01d6c40009ddd4f766654babe`;
var access_token;
var refresh_token;
var playlistData;
var descr = "Rain";
var temp = 12;
var playlist;
var playlist_id = "37i9dQZF1DX1BzILRveYHb";

$(function () { 
   
    $(document).ready(function () {
        //GET REUQEST TO PHP
        authenticate();
        console.log("Page refreshed");
        
        // getData(user_id);
    });

 });

function getData(user){
    authenticate();
}
function authenticate(){
    var scopes = "streaming user-read-email user-read-private";
    var url = 'https://accounts.spotify.com/authorize' +
      '?response_type=code' +
      '&client_id=' + my_client_id +
      (scopes ? '&scope=' + encodeURIComponent(scopes) : '') +
      '&redirect_uri=' + encodeURIComponent(redirect_uri);
    console.log("authorization url = " + url);
    changeLink(url);
    // redirect to url not working
    // document.location.href=url;
    ;
}
function changeLink(url) {
    var link = document.getElementById("authenticate");
    link.setAttribute('href',  url);
    return false;
}

function code_to_token(){
    var auth_code = window.location.href.split("code=")[1];
        if (auth_code == undefined) {
            // console.log("Auth denied");
            authenticate();
        };
    console.log("auth_code = " + auth_code);
    ids = btoa(my_client_id+":"+my_secret_id)
    // var type = 'authorization_code';
    var body = {
        grant_type: 'authorization_code',
        code : auth_code,
        redirect_uri : redirect_uri,
        // processData: false,
        dataType: 'json',
    };
    $.ajax({
        headers: {
            'Content-Type' : 'application/x-www-form-urlencoded',
            'Authorization': 'Basic ' + ids
        },
        url: 'https://accounts.spotify.com/api/token',
        type: "POST",
        data : body,
        success: function(msg) {
            // $("#playlist-name").append("The result =" + (JSON.stringify(msg)));
            console.log(JSON.stringify(msg));
            access_token = msg.access_token;
            refresh_token = msg.refresh_token;
            recommend_playlist();
        }
    });
  }



function recommend_playlist(){
    descr = document.getElementById("sampleDesc").value
    temp = document.getElementById("sampleTemp").value

    // console.log(a, b);
    if (descr == "Sunny"){
        playlist = "Sunny Day";
    } else if (descr == "Rain" && temp > 10){
        playlist = "Rainy Day Jazz";
    } else if (descr == "Clouds"){
        playlist = "Cloudy Days";
    } else if (descr == "Rain" && temp < 10) {
        playlist = "cold days cold nights";
    }

    (playlist == "Sunny Day" ? playlist_id = '37i9dQZF1DX1BzILRveYHb' : '');
    (playlist == "Rainy Day Jazz" ? playlist_id = '37i9dQZF1DWYxwmBaMqxsl' : '');
    (playlist == "Cloudy Days" ? playlist_id = '3oh3NmpgHy2leLcu7oobAr' : '');
    (playlist == "cold days cold nights" ? playlist_id = '00p7Hl47ZoodxWVuFjDpEE' : '');    
    console.log("playlist_id =" + playlist_id)
    get_playlist_id();
    request_playlist() ;
}

function get_playlist_id() {
    $.getJSON("src/playlistsJSON.json", function(json) {
        playlist_id = json.playlists[playlist];
        console.log("RETURNS = " + playlist_id)
    });
   
}

function request_playlist(){
    console.log("playlist_id =" + playlist_id)
    var body = {
    };
    $.ajax({
        headers: {
            'Content-Type' : 'application/x-www-form-urlencoded',
            'Authorization': 'Bearer ' + access_token,
        },
        url: 'https://api.spotify.com/v1/playlists/' + playlist_id,
        type: "GET",
        data : body,
        success: function(msg) {
            // $("#playlist-name").append("The result =" + (JSON.stringify(msg)));
            // console.log(JSON.stringify(msg));
            playlistData = msg;
            // console.log("Playlist data = " + playlistData)
            set_playlist_data(playlistData);
        }
    });
}

function set_playlist_data(playlistData) {
    p_name = playlistData.name;
    p_owner = playlistData.owner.display_name;
    p_description = playlistData.description;
    p_url = playlistData.external_urls.spotify;
    p_cover = playlistData.images[0].url;
    p_followers = playlistData.followers.total;

    $("#show-playlist").append(`<div class="container">
    <div class="card flex-row flex-wrap" id="rec-playlist">
        <img src="`+ p_cover +`" alt="" id="p_cover">
        <div class="card-block px-2">
            <h4 class="card-title" id="p_name">Title: `+ p_name +`</h4>
            <h5 class="card-title" id="p_owner">Owner: `+ p_owner +`</h5>
            <p class="card-text" id="p_descr">Description: `+ p_description +`</p>
            <p class="card-text" id="p_followers">Followers: `+ p_followers +`</p>
            <a href="`+ p_url +`" target="_blank" class="" id="p_url">
                <img src="https://www.cs.ryerson.ca/~ndelagua/project/weather/src/spotify-logo.png" alt="" id="">
            </a>
        </div>
        <div class="w-100"></div>
    </div>
    <br>
</div>`);
    
    // document.getElementById("p_name").innerHTML = p_name;
    // document.getElementById("p_owner").innerHTML = p_owner;
    // document.getElementById("p_description").innerHTML = p_description;
    // document.getElementById("p_url").href = p_url;
    // document.getElementById("p_cover").src = p_cover;
    // document.getElementById("p_followers").innerHTML = p_followers;
    // console.log("Setting complete");
}
