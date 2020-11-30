<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>City Comparison</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/index.css">
        <?php include 'template/includes.php';?>
		<?php include 'template/navigation.php';?>
    </head>
    <body>  
        <script src="" async defer></script>       




<div id="main-container-c" >
	
	<div id="sub-container"  class="container">
		
		<div class="page-title">
			<h1 class="title d-flex justify-content-center">City Comparison</h1>
		</div>
		
		
		
		<!--City 1 card-->
		

		<div class=" card-columns card-main-comp ">
		
		<div class="card">

			<div class="form-inline" method="post">
				  
				  <input class="inline form-control" type="text" id="city1" name="city1" placeholder="Search for a city" >
				  <button class="btn search-btn btn-primary my-2 my-sm-0" onclick="searchCity('1')"><i class="fa fa-search"></i></button>

			</div>

			<div class ="card-body">
				<h2 class = "card-title city-title" id="name1"></h2>
				<h2 class="card-subtitle mb-2 text-muted city-title" id="desc1"></h2>
				<img class="weather-icon" id="icon1" src=""  alt="Card image cap">
			</div>	
			<div style="clear:left;">
			<ul class="list-group list-group-flush">
				<li class="list-group-item current-list-item card-list"><h3 id ="temp1"></h3></li>
				<li class="list-group-item current-list-item card-list"><h3 id ="feels_like1"></h3></li>
				<li class="list-group-item current-list-item card-list"><h3 id ="humidity1"></h3></li>
			</ul>
			</div>
			<div class="card-footer">
			<small class="text-muted" id="time1"></small>
			</div>
		</div>


				<!--City 2 card-->
		<div class="card ">

			<div class="form-inline" method="post">
				  
				  <input class="inline form-control" type="text" id="city2" name="city2" placeholder="Search for a city" >
				  <button class="btn search-btn btn-primary my-2 my-sm-0" onclick="searchCity('2')"><i class="fa fa-search"></i></button>

			</div>

			<div class ="card-body">
				<h2 class = "card-title city-title" id="name2">-</h2>
				<h2 class="card-subtitle mb-2 text-muted city-title " id="desc2">-</h2>
				<img class="weather-icon" class="inline"  id="icon2" src="http://2.bp.blogspot.com/-UIjLsu00T6w/UZhz5NuKjnI/AAAAAAAADYw/z6zyAVj_nG4/s1600/white-square-872x844.jpg"   alt="Card image cap">
			</div>	
			<div style="clear:left;">
			<ul class="list-group list-group-flush">
				<li class="list-group-item current-list-item card-list"><h3 id ="temp2">-</h3></li>
				<li class="list-group-item current-list-item card-list"><h3 id ="feels_like2">-</h3></li>
				<li class="list-group-item current-list-item card-list"><h3 id ="humidity2">-</h3></li>
			</ul>
			</div>
			<div class="card-footer">
			<small class="text-muted" id="time2"></small>
			</div>
		</div>		
				
						<!--City 3 card-->
		<div class="card ">

			<div class="form-inline" method="post">
				  
				  <input class="inline form-control" type="text" id="city3" name="city3" placeholder="Search for a city" >
				  <button class="btn search-btn btn-primary my-2 my-sm-0" onclick="searchCity('3')"><i class="fa fa-search"></i></button>

			</div>

			<div class ="card-body">
				<h2 class = "card-title city-title" id="name3">-</h2>
				<h2 class="card-subtitle mb-2 text-muted city-title" id="desc3" >-</h2>
				<img class="weather-icon" id="icon3" src="http://2.bp.blogspot.com/-UIjLsu00T6w/UZhz5NuKjnI/AAAAAAAADYw/z6zyAVj_nG4/s1600/white-square-872x844.jpg" alt="Card image cap">
			</div>	
			<div style="clear:left;">
			<ul class="list-group list-group-flush">
				<li class="list-group-item current-list-item card-list"><h3 id ="temp3">-</h3></li>
				<li class="list-group-item current-list-item card-list"><h3 id ="feels_like3">-</h3></li>
				<li class="list-group-item current-list-item card-list"><h3 id ="humidity3">-</h3></li>
			</ul>
			</div>
			<div class="card-footer">
			<small class="text-muted" id="time3"></small>
			</div>
		</div>
		</div>

	</div>
</div>
<?php include 'template/footer.php';?>	
<script src="js/comparison1.js"></script>		
    </body>
</html>