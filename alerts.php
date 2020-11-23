<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Government Alerts</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <?php include 'template/includes.php';?>
        <script src="js/alerts.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php include 'template/navigation.php';?>
        <script src="" async defer></script>
        <div class="main-content border border-dark mt-4">
            <div class="city-content ml-2">
                <h3>City: <span id="citySpan"></span></h3>
                <h3>As of: <span id="asOf"></span></h3>
            </div>
            <div id="dataSection">
                <div id="info">
                </div>
                <div id="alert">
                    <h4 class="bg-primary text-white mr-3 ml-3 mt-5 mb-5 text-center">Please select a city</h4>
                </div>
                <div id="noData" class="hidden">
                    <h4 class="bg-success text-white mr-3 ml-3 mt-5 mb-5 text-center">No alerts available.</h4>
                </div>
            </div>
        </div>
        <?php include 'template/footer.php';?>
    </body>
</html>