<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Current Weather Data</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/index.css">
		
   <?php include 'template/includes.php';?>
    </head>
    <body>
    <script src="" async defer></script>
	

 <?php include 'template/navigation.php';?>
		
		

<div id="main-container-c">
	
	<div id="sub-container" class="container">
		<div class="page-title">
			<h1 class="title d-flex justify-content-center">Current Weather</h1>
		</div>
		
		<div class="card-columns card-main">
			
			
			<div class="weather-main">
			<!-- Current Weather card -->
				<div class="card " >
					<div class ="card-body">
						<h2 class = "card-title city-title" id="name"></h2>
						
						
						<h2 class="card-subtitle mb-2 text-muted city-title" id="description" ></h2>
						<img id="icon" src="" width="auto;" height="auto" alt="Card image cap" >
						
					</div>	
					<div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item current-list-item main-weather-item "><h3 id ="temp"></h3></li>
						<li class="list-group-item current-list-item main-weather-item "><h3 id="feels_like"></h3></li>
						<li class="list-group-item current-list-item main-weather-item "><h3 id="humidity"></h3></li>
					</div>
				</div>
				<!-- Current Weather card -->	
				<div class="card p-3">
					 <div class="card-body">
					  <h5 class="card-title">Dress For The Weather!</h5>
					  <p class="card-text" id="dress-recommend"></p>
					 </div>
				</div>				
			</div>		
				
				
				
			<!-- Details Weather card -->	
			<div class="card">
			
				<ul class="list-group list-group-flush">
					<li class="list-group-item current-list-item detail-weather-item"><p id="sunrise" class="current-details"></p></li>
					<li class="list-group-item current-list-item detail-weather-item"><p id="sunset" class="current-details"></p></li>
					<li class="list-group-item current-list-item detail-weather-item"><p id="cloudCoverage" class="current-details"></p></li>
					<li class="list-group-item current-list-item detail-weather-item"><p id="visibility" class="current-details"></p></li>
					<li class="list-group-item current-list-item detail-weather-itemt"><p id="wind_speed" class="current-details"></p></li>
					<li class="list-group-item current-list-item detail-weather-item"><p id="wind_degree" class="current-details"></p></li>
					<li class="list-group-item current-list-item detail-weather-item"><p id="uvi" class="current-details"></p></li>
					<li class="list-group-item current-list-item detail-weather-item"><p id="pressure" class="current-details"></p></li>
					
				</ul>	
				
			</div>

		</div>	
			<div class="card-footer">
			<small class="text-muted" id="time"></small>
			</div>
	</div>	
</div>	
		<?php include 'template/footer.php';?>	
    <script src="js/current1.js"></script>
 <!--    <script src="js/template.js"></script> -->
    </body>
</html>