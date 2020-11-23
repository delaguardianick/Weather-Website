<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Historical Data</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <?php include 'template/includes.php';?>
    </head>
    <body id="historical-body">
        <?php include 'template/navigation.php';?>
        <div id="historicalmain">
            <div id="sub-container2">
                <div id="historical-header">
                    <h1>Historical Weather Data for the Past 5 Days</h1>
                </div>
                <div id="scrollableContainer">
                    <div id="day-container">
                        
                    </div>
                </div>
            </div>
        </div>
        <?php include 'template/footer.php';?>
        <script src="" async defer></script>
        <script src="js/historica.js"></script>
        <script>
            function MoreInfoToggle() {
                var x=document.getElementsByClassName('collapsebtn');
                for(var i = 0; i < x.length; i++){
                    if (x[i].innerText ==="More Info"){
                        x[i].innerText = "Less Info";
                    } 
                    else{
                        x[i].innerText = "More Info";
                    }
                }
               
            }
        </script>
    </body>
</html>