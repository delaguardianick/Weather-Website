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
<div id="main-container">
	
	<div id="sub-container" class="container bg-light">
		<div id="header-div">
			<h1 class="title d-flex justify-content-center">Current Weather</h1>
		</div>
		<div class="card-deck">
			<div class="card " id="card">
				<div class ="card-body">
					<h2 class = "card-title city-title" id="name"></h2>
					
					
					<h2 class="card-subtitle mb-2 text-muted city-title" id="description" ></h2>
					<img id="icon" src="" width="auto;" height="auto" alt="Card image cap" >
					
				</div>	
				<div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item current-list-item card-list " id ="temp"></li>
					<li class="list-group-item current-list-item card-list " id="feels_like"></li>
					<li class="list-group-item current-list-item card-list " id="humidity"></li>
					
					<!--<li class="list-group-item current-list-item card-list" id="sunrise"></li>
					<li class="list-group-item current-list-item card-list" id="sunset"></li>
					<li class="list-group-item current-list-item card-list" id="cloudCoverage"></li>
					<li class="list-group-item current-list-item card-list" id="visibility"></li>
					<li class="list-group-item current-list-item card-list" id="wind_speed"></li>
					<li class="list-group-item current-list-item card-list" id="wind_degree"></li>

				</ul>-->
				</div>

			</div>
				
			<div class="card" id="card">
			
				<ul class="list-group list-group-flush">
					<li class="list-group-item current-list-item card-list" id="sunrise">Sunrise: <?php echo date("H:i:s A", ($currentWeather->main->sunrise)); ?> UTC </li>
					<li class="list-group-item current-list-item card-list" id="sunset">Sunset:  <?php echo date("H:i:s A",($currentWeather->main->sunset)); ?> UTC</li>
					<li class="list-group-item current-list-item card-list" id="cloudCoverage">Cloud Coverage: <?php echo $currentWeather->main->clouds; ?>%  </li>
					<li class="list-group-item current-list-item card-list" id="visibility">Visibility: <?php echo ($currentWeather->main->visibility)/1000; ?>km </li>
					<li class="list-group-item current-list-item card-list" id="wind_speed">Wind Speed: <?php echo $currentWeather->main->wind_speed; ?>m/s  </li>
					<li class="list-group-item current-list-item card-list" id="wind_degree">Wind Degree: <?php echo $currentWeather->main->wind_deg; ?>° </li>

				</ul>	
			</div>		
		</div>	
	</div>	
</div>	
    <script src="js/currentWeather.js"></script>
 <!--    <script src="js/template.js"></script> -->
    </body>
</html>