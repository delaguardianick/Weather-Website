<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Playlist for the Weather</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="css/index.css"> -->
        <!-- <link rel="stylesheet" href="css/daily.css"> -->
        
        <?php include 'template/includes.php';?>
    </head>
    <body>
    <script src="" async defer></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet"> 
 <?php include 'template/navigation.php';?>
 <?php include 'template/footer.php';?>
        
<div>
    <h2>WIP</h2>
    <p>How to use: press all 3 buttons left to right and see</p>
</div>

<div>
    <a id="authenticate" href="#" class="btn btn-primary">Authenticate</a>
    <button onclick="code_to_token()">Playlist for the weather</button> 
    <!-- <button onclick="recommend_playlist()">Get Recommended Playlist</button>  -->

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

<!-- Card -->
<div class="playlist-card">
  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" id="p_cover" src=""
      alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title" id="p_name">Card title</h4>
    <!-- Text -->
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
      content.</p>
    <!-- Button -->
    <a href="#" class="btn btn-primary" id="p_url">
        <img src="src\spotify-logo.png" alt="">
    </a>

  </div>

</div>
<!-- Card -->

    <script src="js/spotify-playlist.js"></script>
    </body>
</html>