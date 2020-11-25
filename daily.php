<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Current Weather Data</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/daily.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <?php include 'template/includes.php';?>
    </head>
    <body>
    <script src="" async defer></script>

 <?php include 'template/navigation.php';?>
        

<!-- <div>
    <ul>
        <li id ="time"></li>
        <li id ="tempDay"></li>
        <li id ="tempNight"></li>
        <img id="icon" src="" alt="weather icon">
        <li id ="feels_likeDay"></li>
        <li id ="feels_likeNight"></li>
        <li id ="humidity"></li>
        <li id ="wind_speed"></li>
        <li id="wind_deg"></li>
        <li id="clouds"></li>
        <li id="description"></li>
    </ul>
</div> -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <!-- <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg" -->
        <!-- alt="First slide"> -->
        <div class="card d-block w-100 " id="card">
				<div class ="card-body">
					<h2 class = "card-title city-title" id="name"></h2>
					
					<h2 class="card-subtitle mb-2 text-muted city-title" id="description" ></h2>
					<img id="icon" src="" alt="weather icon">
					
				</div>	
				<div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item current-list-item card-list " >Waddup</li>
					<li class="list-group-item current-list-item card-list " id ="time"></li>
					<li class="list-group-item current-list-item card-list " id ="tempDay"></li>
					<li class="list-group-item current-list-item card-list " id ="tempNight"></li>
					<li class="list-group-item current-list-item card-list " id="feels_likeDay"></li>
					<li class="list-group-item current-list-item card-list " id="humidity"></li>
					<li class="list-group-item current-list-item card-list " id="time"></li>
					
					<!--<li class="list-group-item current-list-item card-list" id="sunrise"></li>
					<li class="list-group-item current-list-item card-list" id="sunset"></li>
					<li class="list-group-item current-list-item card-list" id="cloudCoverage"></li>
					<li class="list-group-item current-list-item card-list" id="visibility"></li>
					<li class="list-group-item current-list-item card-list" id="wind_speed"></li>
					<li class="list-group-item current-list-item card-list" id="wind_degree"></li>

				</ul>-->
				</div>

			</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg"
        alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg"
        alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- <div>
    <div class="card-deck">
        <div class="card">
        
				<div class="card-body">
					<h2 class="card-title city-title" id="name">Toronto</h2>
					
					
					<h2 class="card-subtitle mb-2 text-muted city-title" id="description">overcast clouds</h2>
					<img id="icon" src="http://openweathermap.org/img/w/04d.png" alt="Card image cap" width="auto;" height="auto">
					
				</div>	
				<div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item current-list-item card-list " id="dtt"></li>
					<li class="list-group-item current-list-item card-list " id="tempDay"></li>
					<li class="list-group-item current-list-item card-list " id="feels_likeDay">Feels Like: -4.53°C</li>
					<li class="list-group-item current-list-item card-list " id="humidity">Humidity: 93%</li>
					<li class="list-group-item current-list-item card-list " id="time">Weather as of: 10:6:16</li>
					
				</ul></div>

			
        </div>
        <div class="card">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div> -->
    <script src="js/daily.js"></script>    
    </body>
</html>