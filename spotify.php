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

<div id="spotify">  
    <h2>WIP</h2>    
    <div id="text">
        <div>
            <a id="authenticate" href="#" class="btn btn-primary">Link Spotify account</a>
        </div>
        <br>
        <div>
            <button class="btn btn-info" onclick="code_to_token()">Playlist for the weather</button> 
        </div>
    </div>
    <br>
    <div id="sample-weather">
        <h6>Sample Weather: </h6>
        <h5>Description:</h5>
        <input type="text" placeholder="Sunny/Rain/Clouds" id="sampleDesc">
        <br>
        <h5>Temp:</h5>
        <input type="text" placeholder="Temperature" id="sampleTemp">
        
    </div>
    <div id="show-playlist">

    </div>
</div>  
    <script src="js/spotify-playlist.js"></script>
    </body>
</html>