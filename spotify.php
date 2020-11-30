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
    <h2>WIP</h2>
    <p>How to use: press all 3 buttons left to right and see</p>
</div>

<div>
    <a id="authenticate" href="#" class="btn btn-primary">Authenticate</a>
    <button onclick="code_to_token()">Get Access Token</button> 
    <button onclick="recommend_playlist()">Get Recommended Playlist</button> 

<div>
    <br>
    <h4>Sample Weather: </h4>
    <h5>Description: Sunny</h5>
    <h5>Temp: 12 °C</h5>
</div>
<div id="show-playlist">
    <!-- <table>
        <tr>
            <th> Playlist name: </th>
            <th id="p_name"> Sunny days </th>
        </tr>
        <tr>
            <td> Owner: </td>
            <td id="p_owner"> Spotify </td>
        </tr>
        <tr>
            <td> Description: </td>
            <td id="p_description"> Spotify </td>
        </tr>
        <tr>
            <td> Followers: </td>
            <td id="p_followers"> Spotify </td>
        <tr>
            <td> 
                Cover and playlist link:
            </td>
            <td>
                <a href="" id="p_url" target="_blank">
                    <img src="" alt="Playlist cover" id="p_cover">
                </a> 
            </td>
            
        </tr>
    </table> -->
</div>

    <script src="js/spotify-playlist.js"></script>
    </body>
</html>