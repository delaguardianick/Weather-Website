var APICallType ='current';
var defaultCity ='Toronto';


url = window.location['href'].split('/');
url = url.slice(0,-1).join('/') + '/src/get_weather_data.php';



/*
This function will run when the page first opens up or is reloaded
*/
$(function () { 
   
    $(document).ready(function () {
        //GET REUQEST TO PHP
		
		//Get the session variable named currCity (the current city the user was looking at)
		currCity =sessionStorage.getItem("currCity");
		
		//If currCity is null or empty (Meaning the user has not searched for a city yet) 
		// then default to Toronto and get the data
		if(currCity==="" || currCity===null){
			getData(APICallType,defaultCity);
			
		}else{
			getData(APICallType,currCity);
			
		}
    });

 });
 


$("#city").change(function(){
  searchCity();
});

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
		var city = document.getElementById("city").value;
		console.log("City: "+city);
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
			//console.log("CITY: "+city);
			//Check internal codes for errors. 404=invalid city    400=undefined
			if(weatherData.cod!="404" && weatherData.cod!="400"){
				
				//Save the current city name in a session variable
				sessionStorage.setItem("currCity", weatherData.name);
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
	
	var tempValue = weatherData.main.temp;
	var nameValue = weatherData.name;
	var descriptionValue = weatherData.weather[0].description;
	var iconValue = weatherData.weather[0].icon;
	var feels_likeValue = weatherData.main.feels_like;
	var humidityValue = weatherData.main.humidity;
	var sunriseValue = weatherData.sys.sunrise;
	var sunsetValue = weatherData.sys.sunset;
	var cloudCoverageValue = weatherData.clouds.all;
	//var UVIValue = weatherData.visability;
	var visibilityValue = weatherData.visibility;
	var wind_speedValue = weatherData.wind.speed;
	var wind_gustValue = weatherData.wind.gust;
	var wind_degValue = weatherData.wind.deg;
	
	var d= new Date();
	var time= d.getHours()-12 +":"+d.getMinutes()+":"+d.getSeconds();
	
	document.getElementById("temp").innerHTML = "Temp: "+tempValue+"°C";
	document.getElementById("name").innerHTML = nameValue;
	document.getElementById("description").innerHTML = descriptionValue;
	document.getElementById("icon").src = "http://openweathermap.org/img/w/"+iconValue+".png";
	document.getElementById("feels_like").innerHTML = "Feels Like: "+feels_likeValue+"°C";
	document.getElementById("humidity").innerHTML = "Humidity: "+humidityValue+"%";
	
	timeOffset = weatherData.timezone;
	sunrise_time = new Date((sunriseValue+timeOffset)*1000);
	sunriseValue = sunrise_time.toUTCString().slice(-12, -4) + " AM ";
	
	sunset_time = new Date((sunsetValue + timeOffset +(12*60*60))*1000 );
	sunsetValue = sunset_time.toUTCString().slice(-12, -4) + " PM" ;

	document.getElementById("sunrise").innerHTML = "Sunrise: " + sunriseValue;
	document.getElementById("sunset").innerHTML ="Sunset: " + sunsetValue;
	document.getElementById("cloudCoverage").innerHTML = "Cloud Coverage: "+cloudCoverageValue+"%";
	document.getElementById("visibility").innerHTML = "visibility: "+visibilityValue/1000 +" km";
	document.getElementById("wind_speed").innerHTML = "Wind Speed: "+Math.round(((wind_speedValue*18/5)*100)/100) +" km/h";
	//document.getElementById("wind_gust").innerHTML = "Wind Gust: "+Math.round(((wind_gustValue*18/5)*100)/100) +" km/h";
	document.getElementById("wind_degree").innerHTML = "Wind Direction: "+wind_degValue +"°";
	document.getElementById("time").innerHTML = "Weather as of: "+time;
	
	
}