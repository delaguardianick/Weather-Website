<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>City Comparison</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/andrew.css">
        <?php include 'template/includes.php';?>
		<?php include 'template/navigation.php';?>
    </head>
    <body>  
        <script src="" async defer></script>       




<div id="main-container" class="overflow-auto">
	
	<div id="sub-container" class="container bg-light ">
		<!--City 1 card-->
		<div id="header-div">
			<h1 class="title d-flex justify-content-center">City Comparison</h1>
		</div>
		<div class="card-deck">
		<div class="card center">

			<div class="input" method="post">
				  
				  <input class="inline" type="text" id="city1" name="city1" placeholder="Search for a city" >
				  <button class="inline" onclick="searchCity('1')">Search</button>

			</div>

			<div class ="card-body">
				<h2 class = "card-title city-title" id="name1"></h2>
				<h3 class="card-subtitle mb-2 text-muted city-title" id="desc1"></h3>
				<img class="weather-icon" id="icon1" src=""  alt="Card image cap">
			</div>	
			<div style="clear:left;">
			<ul class="list-group list-group-flush">
				<li class="list-group-item current-list-item card-list" id="temp1"></li>
				<li class="list-group-item current-list-item card-list" id="feels_like1"></li>
				<li class="list-group-item current-list-item card-list" id ="humidity1"></li>
			</ul>
			</div>
		</div>


				<!--City 2 card-->
		<div class="card center">

			<div class="input" method="post">
				  
				 
				  <input class="inline" type="text" id="city2" name="city2" placeholder="Search for a city">
				  <button class="inline" onclick="searchCity('2')">Search</button>

			</div>

			<div class ="card-body">
				<h2 class = "card-title city-title" id="name2">-</h2>
				<h3 class="card-subtitle mb-2 text-muted city-title " id="desc2">-</h3>
				<img class="weather-icon" class="inline"  id="icon2" src="http://2.bp.blogspot.com/-UIjLsu00T6w/UZhz5NuKjnI/AAAAAAAADYw/z6zyAVj_nG4/s1600/white-square-872x844.jpg"   alt="Card image cap">
			</div>	
			<div style="clear:left;">
			<ul class="list-group list-group-flush">
				<li class="list-group-item current-list-item card-list" id="temp2">-</li>
				<li class="list-group-item current-list-item card-list" id="feels_like2">-</li>
				<li class="list-group-item current-list-item card-list" id ="humidity2">-</li>
			</ul>
			</div>
		</div>		
				
						<!--City 3 card-->
		<div class="card center">

			<div class="input" method="post">
				  
				  
				  <input class="inline" type="text" id="city3" name="city3" placeholder="Search for a city">
				  <button class="inline" onclick="searchCity('3')">Search</button>

			</div>

			<div class ="card-body">
				<h2 class = "card-title city-title" id="name3">-</h2>
				<h3 class="card-subtitle mb-2 text-muted city-title" id="desc3" >-</h3>
				<img class="weather-icon" id="icon3" src="http://2.bp.blogspot.com/-UIjLsu00T6w/UZhz5NuKjnI/AAAAAAAADYw/z6zyAVj_nG4/s1600/white-square-872x844.jpg" alt="Card image cap">
			</div>	
			<div style="clear:left;">
			<ul class="list-group list-group-flush">
				<li class="list-group-item current-list-item card-list" id="temp3">-</li>
				<li class="list-group-item current-list-item card-list" id="feels_like3">-</li>
				<li class="list-group-item current-list-item card-list" id ="humidity3">-</li>
			</ul>
			</div>
		</div>
		</div>
	</div>
</div>




	
		
<script src="js/comparison.js"></script>		
    </body>
</html>