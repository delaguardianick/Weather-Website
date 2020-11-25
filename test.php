<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Current Weather Data</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/andrew.css">
		
        <?php include 'template/includes.php';?>
    </head>
    <body>
    <script src="" async defer></script>
	

 <?php include 'template/navigation.php';?>
		
		
<!--Search Bar
<div class="input"  style="float:right;">

	  <label for="city">City Name:</label><br>
	  <input type="text" id="city" name="city"><br><br>
	  <button onclick="searchCity()">Search</button>

</div> -->

<!--Current Weather card 

<div id="header-div">
		<h6 class="title d-flex justify-content-center">Current Weather</h6>
	</div>

-->
<div>
    <h1>Current Weather</h1>
        <!-- <h2 id="description" ></h2> -->
        	
    <div>
        <p id="sunrise"></p>
        <p id="name"></p>
    <ul>
        <li id ="temp"></li>
        <li id="feels_like"></li>
        <li id="humidity"></li>
        <li id="time">REEE</li>
    </ul>	
</div>
</div>	
    <script src="js/current.js"></script>
 <!--    <script src="js/template.js"></script> -->
    </body>
</html>