<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>About</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <?php include 'template/includes.php';?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php include 'template/navigation.php';?>
        <script src="" async defer></script>
        <div class="main-content mt-4">
            <div class="header text-center">
                <h2>About Us</h2>
            </div>
            <div class="about-message text-justify">
                <p class="abt-box m-4">
                    This page was inspired by ambiguous Canadian Weather and in order to help
                    users survive, this website was made to offer wide range of functionalities.
                </p>
                <p class="abt-box m-4">
                    On the website there are two initial sections; Forecast and Info. Forecast contains Current, Minutely, 
                    Hourly, Daily and Historical which offers wide range of graphs and textual information. Second one is Info 
                    contains About Us, Terminology, and Contact Us, all of which are informative pages. 
                </p>
                <p class="abt-box m-4">
                    Next section includes Alerts pages which collects alerts provided by Government then alerts are shown in card format. 
                    Moreover, another page is Playlist which utilizes Spotify API to give users playlist depending on weather. Lastly, 
                    City Comparison page is provided where User can watch summarized weather information of multiple cities side by side.
                </p>
            </div>
        </div>
        <?php include 'template/footer.php';?>
    </body>
</html>