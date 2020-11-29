<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Current Weather Data</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/index.css">
		
        <?php include 'template/includes.php';?>
    </head>
<body>
<script src="" async defer></script>

 <?php include 'template/navigation.php';?>
        
<div>
    <a id="authenticate" href="#" class="btn btn-primary">authenticate</a>
    <button onclick="code_to_token()">Click me</button> 
    <button onclick="getPlaylist()">player</button> 

<div>
    <p id="playlist-name"> Bish </p>
    <ul>        
    </ul>
</div>

 <div>
    <div id="login">
     <h1>First, log in to spotify</h1>
     <a href="/login">Log in</a>
    </div>
    <div id="loggedin">
    </div>
 </div>

 <script id="loggedin-template" type="text/x-handlebars-template">
    <h1>Logged in as </h1>
    <img id="avatar" width="200" src="" />
    <dl>
     <dt>Display name</dt><dd></dd>
     <dt>Username</dt><dd></dd>
     <dt>Email</dt><dd></dd>
     <dt>Spotify URI</dt><dd><a href=""></a></dd>
     <dt>Link</dt><dd><a href=""></a></dd>
     <dt>Profile Image</dt><dd></dd>
    </dl>
    <p><a href="/">Log in again</a></p>
 </script>

    <!-- <script src="https://sdk.scdn.co/spotify-player.js"></script> -->
    <script src="js/spotify-playlist.js"></script>
    </body>
</html>