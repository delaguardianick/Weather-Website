<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Current Weather Data</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
		
        <?php include 'template/includes.php';?>
	
		<?php include 'template/navigation.php';?>
		<style>
		.card-title{
			font-size: 300%;

		}


		.current-list-item{
			font-size: 200%
				
		}

		.card-subtitle{
			font-size:250%
			
		}

		.card {
				width: 33%;
				margin: 0 auto; /* Added */
				float: left; /* Added */
				padding: 10px 3% 0px 3%;
				margin-bottom: 10px; /* Added */
				display:inline-block;
		}

		.form-inline {
		  display: flex;
		  flex-flow: row wrap;
		  align-items: center;
		}
		
		</style>
		
		
    </head>
    <body>
    <script src="" async defer></script>
		
		
		
		
<!--Search Bar -->
<div class="input"  style="float:right;">

	  <label for="city">City Name:</label><br>
	  <input type="text" id="city" name="city"><br><br>
	  <button onclick="searchCity()">Search</button>

</div>


<!--Current Weather card -->
<div class="card center">
	<div class ="card-body">
		<h5 class = "card-title" id="name"></h5>
		<h6 class="card-subtitle mb-2 text-muted" style="float:left;" id="description"></h6>
		<img id="icon" src="" width="15%;" height="auto" alt="Card image cap">
	</div>	
	<div style="clear:left;">
	<ul class="list-group list-group-flush">
		<li class="list-group-item current-list-item " id ="temp"></li>
		<li class="list-group-item current-list-item" id="feels_like"></li>
		<li class="list-group-item current-list-item" id="humidity"></li>
	</ul>
	</div>
	<div class="card-body">
		<a href="comparison.php" class="card-link">Comparison </a>
		<a href="#" class="card-link"> Weekly Forecast</a>
	</div>
</div>
	
<div class="card center">
<ul class="list-group list-group-flush">
		<li class="list-group-item current-list-item" id="sunrise">Sunrise: <?php echo date("H:i:s A", ($currentWeather->main->sunrise)); ?> UTC </li>
		<li class="list-group-item current-list-item" id="sunset">Sunset:  <?php echo date("H:i:s A",($currentWeather->main->sunset)); ?> UTC</li>
		<li class="list-group-item current-list-item" id="cloudCoverage">Cloud Coverage: <?php echo $currentWeather->main->clouds; ?>%  </li>
		<li class="list-group-item current-list-item" id="visibility">Visibility: <?php echo ($currentWeather->main->visibility)/1000; ?>km </li>
		<li class="list-group-item current-list-item" id="wind_speed">Wind Speed: <?php echo $currentWeather->main->wind_speed; ?>m/s  </li>
		<li class="list-group-item current-list-item" id="wind_degree">Wind Degree: <?php echo $currentWeather->main->wind_deg; ?>° </li>

	</ul>

</div>		
		
	
<script src="js/currentWeather.js"></script>	
    </body>
</html>