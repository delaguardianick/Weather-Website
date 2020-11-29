var user_id = "nickdlgg";
// var token = "Bearer BQDin7EwflnzGe0-Pea6l7ZEulED0YX72cPmw51gIcJmjkodmmfqWaWgJXXVPCfNb95PD9nI6ughqsYliMEunaIDDpEWf-QqLpuIT7rkg27mmZ0lgD3gkTkLMMgYANdNOy24CsLP_EfjI6HooEwEAlZ0Ev6LZTNtJpI";
var token = 'Bearer AQC87bntpm8h-d3gMUZWmsRT4wuBrG81T6DgPsP9XskHxBy-gm4kaRcmzgtzKSTTgMnLxkc05EeEXK1GzDMDi0dcE6SMC01Cp92PjBskTmo_cS1KmJdTReolpxxp3bHTMrO3goPkqaTCLhfJ458oAnztPoqLtGHHQ4MJMHFWFZSkec6OhaO92PqqJsiTvs2tYra6kWpc4bf6_rAwGEcBJUl3-pprzV_fvnpJ85dGo9ju0-xKmfZhT-rGD4xM9bars6Y11Pj8oPl9-V1Pk09IqgSh';
var playlists_url="https://api.spotify.com/v1/users/"+user_id+"/playlists";
var redirect_uri = 'https://www.cs.ryerson.ca/~ndelagua/project/weather/spotify.php';
var my_client_id = 'b0a4d712f27a41a7859ddcdc511cd13d';
var my_secret_id = `933877f01d6c40009ddd4f766654babe`;


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
    console.log(url);

    changeLink(url);
    document.getElementById("playlist-name").innerHTML = "Hello";
    // redirect to url not working
    // document.location.href=url;
    ;
}

function changeLink(url) {
    var link = document.getElementById("authenticate");

    link.setAttribute('href',  url);
    return false;
}
// function authenticate(){
//     $.get('/login', function(req, res) {
//         var scopes = 'user-read-private user-read-email';
//         res.redirect('https://accounts.spotify.com/authorize' +
//             '?response_type=code' +
//             '&client_id=' + my_client_id +
//             (scopes ? '&scope=' + encodeURIComponent(scopes) : '') +
//             '&redirect_uri=' + encodeURIComponent(redirect_uri));
//         });
// }    

// function authenticate() {
//     var url = 'https://accounts.spotify.com/authorize' +
//       '?response_type=code' +
//       '&client_id=' + my_client_id +
//       (scopes ? '&scope=' + encodeURIComponent(scopes) : '') +
//       '&redirect_uri=' + encodeURIComponent(redirect_uri);
//       console.log(url);
//     $.ajax({
//         type: "GET",
//         url: url,
//         success: success,
//       });
// }

// function code_to_token(){
//     // authenticate();
//     code = window.location.href.split("code=")[1];
//         if (code == undefined) {
//             console.log("Auth denied");
//         };
//     console.log(code);
//     auth = btoa(my_client_id+":"+my_secret_id)
//     $.ajax({
//         type: "POST",
//         beforeSend: function(request) {
//             request.setRequestHeader("Authoritzation", "Basic " + auth);
//         },
//         grant_type = "authorization_code",
//         code = code,
//         redirect_uri = encodeURIComponent(redirect_uri),
//         url: playlists_url,
//         data: "json",
//         processData: false,
//         success: function(msg) {
//             $("#playlist-name").append("The result =" + StringifyPretty(msg));
//         }
//     });
//   }

// function getPlaylist(){
//     $.ajax({
//         type: "GET",
//         beforeSend: function(request) {
//             request.setRequestHeader("Authoritzation", token);
//         },
//         url: playlists_url,
//         data: "json",
//         processData: false,
//         success: function(msg) {
//         $("#playlist-name").append("The result =" + StringifyPretty(msg));
//         }
//     });
// }

// $.get()
// beforeSend: function(xhr) { xhr.setRequestHeader("Authorization", "Basic " + btoa(username + ":" + password)); };
  