<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Hourly Data</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <?php include 'template/includes.php';?>
    </head>
    <body>
        <?php include 'template/navigation.php';?>
        <div id = "main-container" >
            <div id = "sub-container" class="container">
                <div id="header-div">
                    <h1>Hourly Forecast</h1>
                    <form id="hour-form" class="form-inline">
                        <input class="form-control" type="text" placeholder="Filter By Time (e.g 11:00:00 PM, AM)"  id ="hour-bar"  name = "hour-bar">
                    </form>
                </div>
                <div id="tableDiv" class="table-wrapper-scroll-y my-custom-scrollbar"  class="table">
                    <table id = "hourly-table">
                        <thead>
                            <tr id="heading">
                                <th>Date/Time</th>
                                <th>Icon</th>
                                <th>Temp</th>
                                <th>Feels Like</th>
                                <th>Description</th>
                                <th>Precipitation</th>
                                <th>Wind Speed</th>
                                <th>Wind Gust</th>
                                <th>Wind Degrees</th>
                                <th>Cloudiness</th>
                                <th>Visibility</th>
                                <th>Pressure</th>
                                <th>Humidity</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php include 'template/footer.php';?>
        <script src="" async defer></script>
        <script src="js/hourly.js"></script>
        <script>
            $('#hour-bar').keyup(function(){
                var val=$(this).val();    
                    $('#hourly-table tbody tr').hide();
                    var trs=$('table tbody tr').filter(function(index,d){

                    return $(d).find("td:first").text().toUpperCase().indexOf(val)!=-1 || $(d).find("td:last").text().toUpperCase().indexOf(val)!=-1;
                    });
                    console.log(trs);
                    trs.show();   
            });
        </script>
    </body>
</html>