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


//The type of API call you want e.g. 'oneCall' , 'current' ect
var APICallType ='current';

//Default city if no city has been searched
var defaultCity ='Toronto';
var city = defaultCity;

//URL of php file that calls API
url = window.location['href'].split('/');
url = url.slice(0,-1).join('/') + '/src/get_weather_data.php';



$(function () { 
    $(document).ready(function () {
        //GET REUQEST TO PHP
        var auth_code = window.location.href.split("code=")[1];
        if (auth_code != undefined)
        {
            code_to_token();
        }
        authenticate();
        console.log("Page refreshed");
		//Get the session variable named currCity (the current city the user was looking at)
		currCity =sessionStorage.getItem("currCity");
		
		//If currCity is null or empty (Meaning the user has not searched for a city yet) 
		// then default to Toronto and get the data
		if(currCity==="" || currCity===null){
			console.log("City:"+currCity);
			getData(APICallType,defaultCity);
			
		}else{
			//If there was a previous city in session variable, get the data for that city
			console.log("City1:"+currCity);
			getData(APICallType,currCity);
			
		}
    });
 });

$("#city").change(function(){
searchCity();
$('#city').val(" ");
console.log("change city")
$(".carousel-inner").html("");
$(".carousel-indicators").html("");
});
        
function searchCity(){
    
//Get the value in the text field
city = document.getElementById('city').value;	
//If the text is not empty
if(city!=""){
    //Get the data for the city in the text field
    getData(APICallType,city);
//If the button is clicked and the input is blank
}else{
    console.log("City: "+city);
    alert("Please enter a city");
}
}	


function getData(type,city)
{
   //jQuery to get json data
    $.get(url + '?type='+type+'&city='+city, function(data, status){
           
           //Parse data so it is readable 
           var weatherData = JSON.parse(data);
           
           //Check internal codes for errors. 404=invalid city    400=undefined
           if(weatherData.cod!="404" && weatherData.cod!="400"){
               console.log("Logging City:"+city);
               
               //Save the current city name in a session variable
               sessionStorage.setItem("currCity", city);
               //Set the inner html
               setData(weatherData);
           }
           //If the city was not valid, make an alert
           else if (weatherData.cod==="404"){
               alert(city+" is not a valid city");
           }
           
           });
    
}
function setData(weatherData){
    var tempValue = weatherData.main.temp;
    var descriptionValue = weatherData.weather[0].main;
	var iconValue = weatherData.weather[0].icon;
    var nameValue = weatherData.name;
    var d= new Date();
	var time= d.getHours()-12 +":"+d.getMinutes()+":"+d.getSeconds();

    document.getElementById("sampleCity").innerHTML = nameValue
    // document.getElementById("currentTime").innerHTML = time
    document.getElementById("sampleTemp").innerHTML = tempValue + "°C"
    document.getElementById("sampleDesc").innerHTML = descriptionValue
    document.getElementById("w-icon").src = "http://openweathermap.org/img/w/" + iconValue + ".png"
    
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
    ;
}
function changeLink(url) {
    var link = document.getElementById("authenticate");
    link.setAttribute('href',  url);
    return false;
}

function code_to_token(){
    var url = document.getElementById("authenticate");
    var auth_code = window.location.href.split("code=")[1];
    // if (auth_code == undefined){
    //     window.location = url;
    //     code_to_token()
    // }
    if (auth_code != undefined) {
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
    }



function recommend_playlist(){
    temp = document.getElementById("sampleTemp").innerHTML
    descr = document.getElementById("sampleDesc").innerHTML

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

    $("#spotify-appended").append(
        `<div class="col-md-6"  id="spotify-card">
              <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                  <strong class="d-inline-block mb-2 text-success">Playlist Recommendation</strong>
                  <h3 class="mb-0">
                    <a class="text-dark" href="#">`+ p_name +`</a>
                  </h3>
                  <div class="mb-1 text-muted">By: `+ p_owner +`</div>
                  <br>
                  <p class="card-text mb-auto">Description: `+ p_description+` </p>
                  <br>
                  <p class="card-text mb-auto">Followers: `+ p_followers +` </p>
                    <a href="`+ p_url +`" target="_blank" class="" id="p_url">
                        <img src="https://www.cs.ryerson.ca/~ndelagua/project/weather/src/spotify-logo.png" alt="" id="spotify-icon" style="width:15%">
                    </a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" id="playlist-cover" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="`+ p_cover +`" data-holder-rendered="true">
              </div>
            </div>
          `
);
}

