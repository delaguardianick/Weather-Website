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

<div id="spotify">
    <div class="row mb-2 d-flex" id="spotify-appended" >
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250" id="spotify-card">
                    <div class="card-body d-flex flex-column align-items-end" id="current-weather-card">
                        <strong class="d-inline-block mb-2 text-primary">Current Weather
                            <h3 class="mb-0">
                                <a class="text-dark" href="#" id="sampleCity"></a>
                            </h3>
                        </strong>
                        <img class="card-img-right flex-auto d-none d-md-block" id="w-icon" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: auto" src="" data-holder-rendered="true">
                        <ul class="card-text mb-auto" id="weather-list">
                            <li>Description: <h4 id="sampleDesc"></h4></li>
                            <li>Temperature °C:<h4 id="sampleTemp"></h4></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    <div id="spotify">  
        <div id="spotify-buttons">
            <div>
                <a id="authenticate" href="#" class="btn btn-primary">Link Spotify and Get Playlist Recommendation</a>
            </div>
            <br>
        </div>       
    </div>      
</div>
    <?php include 'template/footer.php';?>
    <script src="js/spotify-playlist.js"></script>
    </body>
</html>