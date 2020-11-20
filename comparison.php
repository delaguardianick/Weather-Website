<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>City Comparison</title>
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
		<!--City 1 card-->
<div class="card center">

	<div class="input" method="post">
		  
		  <label for="city">City Name:</label><br>
		  <input type="text" id="city1" name="city1"><br><br>
		  <button onclick="searchCity('1')">Search</button>

	</div>

	<div class ="card-body">
		<h5 class = "card-title" id="name1"></h5>
		<h6 class="card-subtitle mb-2 text-muted" id="desc1" style="float:left;"></h6>
		<img  id="icon1" src="" width="15%" height="auto" alt="Card image cap">
	</div>	
	<div style="clear:left;">
	<ul class="list-group list-group-flush">
		<li class="list-group-item current-list-item" id="temp1"></li>
		<li class="list-group-item current-list-item" id="feels_like1"></li>
		<li class="list-group-item current-list-item" id ="humidity1"></li>
	</ul>
	</div>
	<div class="card-body">
		<a href="https://www.cs.ryerson.ca/~arbenson/Project/weather/current.php" class="card-link">Current </a>
		<a href="#" class="card-link"> Link2</a>
	</div>
</div>


		<!--City 2 card-->
<div class="card center">

	<div class="input" method="post">
		  
		  <label for="city">City Name:</label><br>
		  <input type="text" id="city2" name="city2"><br><br>
		  <button onclick="searchCity('2')">Search</button>

	</div>

	<div class ="card-body">
		<h5 class = "card-title" id="name2">-</h5>
		<h6 class="card-subtitle mb-2 text-muted" id="desc2" style="float:left;">-</h6>
		<img  id="icon2" src="http://2.bp.blogspot.com/-UIjLsu00T6w/UZhz5NuKjnI/AAAAAAAADYw/z6zyAVj_nG4/s1600/white-square-872x844.jpg" width="15%" height="auto" alt="Card image cap">
	</div>	
	<div style="clear:left;">
	<ul class="list-group list-group-flush">
		<li class="list-group-item current-list-item" id="temp2">-</li>
		<li class="list-group-item current-list-item" id="feels_like2">-</li>
		<li class="list-group-item current-list-item" id ="humidity2">-</li>
	</ul>
	</div>
	<div class="card-body">
		<a href="#" class="card-link">Link1 </a>
		<a href="#" class="card-link"> Link2</a>
	</div>
</div>		
		
				<!--City 3 card-->
<div class="card center">

	<div class="input" method="post">
		  
		  <label for="city">City Name:</label><br>
		  <input type="text" id="city3" name="city3"><br><br>
		  <button onclick="searchCity('3')">Search</button>

	</div>

	<div class ="card-body">
		<h5 class = "card-title" id="name3">-</h5>
		<h6 class="card-subtitle mb-2 text-muted" id="desc3" style="float:left;">-</h6>
		<img  id="icon3" src="http://2.bp.blogspot.com/-UIjLsu00T6w/UZhz5NuKjnI/AAAAAAAADYw/z6zyAVj_nG4/s1600/white-square-872x844.jpg" width="15%" height="auto" alt="Card image cap">
	</div>	
	<div style="clear:left;">
	<ul class="list-group list-group-flush">
		<li class="list-group-item current-list-item" id="temp3">-</li>
		<li class="list-group-item current-list-item" id="feels_like3">-</li>
		<li class="list-group-item current-list-item" id ="humidity3">-</li>
	</ul>
	</div>
	<div class="card-body">
		<a href="#" class="card-link">Link1 </a>
		<a href="#" class="card-link"> Link2</a>
	</div>
</div>
		
		
<script src="js/comparison.js"></script>		
    </body>
</html>