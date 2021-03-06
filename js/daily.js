
//The type of API call you want e.g. 'oneCall' , 'current' ect
var APICallType ='oneCall';

//Default city if no city has been searched
var defaultCity ='Toronto';
var city = defaultCity;

//URL of php file that calls API
url = window.location['href'].split('/');
url = url.slice(0,-1).join('/') + '/src/get_weather_data.php';



/*
This function will run when the page first opens up or is reloaded
*/
$(function () { 
    $(document).ready(function () {
        //GET REUQEST TO PHP
		console.log("Page refreshed");
		//Get the session variable named currCity (the current city the user was looking at)
		currCity =sessionStorage.getItem("currCity");
		
		//If currCity is null or empty (Meaning the user has not searched for a city yet) 
		// then default to Toronto and get the data
		if(currCity==="" || currCity===null){
			console.log("City:"+currCity);
			getData(APICallType,defaultCity);
			
		}else{
			//If there was a previous city in session variable, get the data for that city
			console.log("City1:"+currCity);
			getData(APICallType,currCity);
			
		}
    });

 });
 
 $("#city").change(function(){
	searchCity();
	$('#city').val(" ");
	console.log("change city")
	$(".carousel-inner").html("");
	$(".carousel-indicators").html("");
  });

//Capitalize city name
	

/*
This function will run when a button is pressed to search for a city

Example html code of button (This will probably be the search in the nav bar)
Make sure text field (input) has a matching ID (ID="city") in this case

	  <label for="city">City Name:</label><br>
	  <input type="text" id="city" name="city"><br><br>
	  <button onclick="searchCity()">Search</button>
	  
*/
 function searchCity(){
		
		//Get the value in the text field
		city = document.getElementById('city').value;	
		//If the text is not empty
		if(city!=""){
			//Get the data for the city in the text field
			getData(APICallType,city);
		//If the button is clicked and the input is blank
		}else{
			console.log("City: "+city);
			alert("Please enter a city");
		}			
	}
	


/*
This function will get the json file from php and also call the function to set the inner html of the page
@param
type - the type of api call needed e.g. 'current' 'oneCall' ect
city - the name of the city e.g. 'toronto'
*/
 function getData(type,city)
 {
	//jQuery to get json data
	 $.get(url + '?type='+type+'&city='+city, function(data, status){
			
			//Parse data so it is readable 
			var weatherData = JSON.parse(data);
			
			//Check internal codes for errors. 404=invalid city    400=undefined
			if(weatherData.cod!="404" && weatherData.cod!="400"){
				console.log("Logging City:"+city);
				
				//Save the current city name in a session variable
				sessionStorage.setItem("currCity", city);
				//Set the inner html
				setData(weatherData);
			}
			//If the city was not valid, make an alert
			else if (weatherData.cod==="404"){
				alert(city+" is not a valid city");
			}
			
			});
	 
 }



/*
This function will set the html of your page
@param
weatherData - the json weather data for the current city

*/	
function setData(weatherData){
	console.log(weatherData);
	var offset = weatherData.timezone_offset;
	// temp (day night), feels like, humidy, time, sunrise, sunset, cloud coverage
	// visibility, wind speed, wind direction
	$.each(weatherData.daily, function(index, item){
		$( "#test" ).append( "<strong>pre</strong>" );
		var UnixTimeStamp = item.dt + offset;
		var milliseconds = UnixTimeStamp* 1000 ;
		var dateObject = new Date(milliseconds);
		const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
		var humanDateFormat = dateObject.toLocaleDateString(undefined, options);

		var sunrise = item.sunrise;
		var sunset = item.sunset;
		sunrise_time = new Date((sunrise+offset)*1000);
		sunriseValue = sunrise_time.toUTCString().slice(-12, -4) + " AM ";
	
		sunset_time = new Date((sunset + offset +(12*60*60))*1000 );
		sunsetValue = sunset_time.toUTCString().slice(-12, -4) + " PM" ;
		
		var wind_speed = item.wind_speed;
		var wind_deg= item.wind_deg;
		
		var pressure= item.pressure;
		   
		var tempDay = item.temp.day;
		var tempNight = item.temp.night;
		var feels_likeDay = item.feels_like.day;
		var feels_likeNight = item.feels_like.night;
		var humidity = item.humidity;
		var clouds = item.clouds;
		var description = item.weather[0].description;
		var iconValue = item.weather[0].icon

		

		var dressValue;
		if(tempDay >25){
			dressValue="Currently warm. Light clothing recommended. ";
		}else if(tempDay >15){
			dressValue="It's a cool day. Sweater recommended. ";
		}else if(tempDay >10){
			dressValue="Chilly outside. Minimal outerwear recommeded.";
		}else if(tempDay >0){
			dressValue="It's a cold day. Jacket with a beanie recommeded.";
		}else if(tempDay <=0){
			dressValue="Freezing temperatures. Double-layered down jackets recommeded.";
		}else{
			dressValue ="";
		}
		
		$(".carousel-indicators").append(`
		<li data-target="#carouselExampleIndicators" data-slide-to="`+ index +`" `+ (index == 0 ? 'class="active"' : '') +`></li>
		`)

		$(".carousel-inner").append(`<div class="carousel-item `+ (index == 0 ? 'active': '') +` >
		<div id="main-container-c">
			
			<div id="sub-container" class="container">
			  <div class="page-title">
				<h1 class="title d-flex justify-content-center" id="date">` + humanDateFormat + `</h1>
			  </div>
			  
			  <div class="card-columns card-main">
				
				
				<div class="weather-main">
				<!-- Current Weather card -->
				  <div class="card">
					<div class ="card-body">
					  <h2 class = "card-title city-title" id="name"> `+ (city == "" ? defaultCity : city) +` <img id="daily-icon" src="http://openweathermap.org/img/w/`+ iconValue +`.png" width="auto;" height="auto" alt="Card image cap" ></h2>
					  
					  
					  <h2 class="card-subtitle mb-2 text-muted city-title" id="description" >`+description+`</h2>
					  
					</div>	
					<div>
					<ul class="list-group list-group-flush" id="temp-card">
						<table >
							<tr>
								<th></th>
								<th >Temp:</th>
								<th>Feels like:</th>
							</tr>
							<tr>
								<td>Day</td>
								<td><h3>`+ tempDay+`°C</h3></td>
								<td><h3>`+ tempNight+`°C</h3></td>
							</tr>
							<tr>
								<td>Night</td>
								<td><h3>`+ feels_likeDay+`°C</h3></td>
								<td><h3>`+ feels_likeNight+`°C</h3></td>
							</tr>
					</table>

					 </div>
				  </div>
				  <!-- Current Weather card -->	
				  <div class="card p-3">
					<div class="card-body">
					  <h5 class="card-title">Dress For The Weather!</h5>
					  <p class="card-text" id="dress-recommend">`+ dressValue +`</p>
					</div>
				  </div>				
				</div>		
								 
				<!-- Details Weather card -->	
				<div class="card">
				
				  <ul class="list-group list-group-flush">
					<li class="list-group-item current-list-item detail-weather-item"><p id="sunrise" class="current-details">Sunrise: `+ sunriseValue + ` </p></li>
					<li class="list-group-item current-list-item detail-weather-item"><p id="sunset" class="current-details">Sunset: `+ sunsetValue + `</p></li>
					<li class="list-group-item current-list-item detail-weather-item"><p id="cloudCoverage" class="current-details">Cloud coverage: `+ clouds + `% </p></li>
					<li class="list-group-item current-list-item detail-weather-item"><p id="cloudCoverage" class="current-details">Humidity: `+ humidity + `% </p></li>
					<li class="list-group-item current-list-item detail-weather-itemt"><p id="wind_speed" class="current-details">Wind speed: `+ wind_speed + ` km/h </p></li>
					<li class="list-group-item current-list-item detail-weather-itemt"><p id="wind_speed" class="current-details">Wind Direction: `+ wind_deg + `° </p></li>
					<li class="list-group-item current-list-item detail-weather-item"><p id="pressure" class="current-details">Pressure: `+ pressure + ` hPa </p></li>
					
				  </ul>	
				  
				</div>

			</div>	
		  </div>	
	  </div>
	  </div>`)
		
	})

}