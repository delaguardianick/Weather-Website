$(function () { 
    url = window.location['href'].split('/');
    url = url.slice(0,-1).join('/') + '/src/get_weather_data.php'
    $(document).ready(function () {
        //GET REUQEST TO PHP
		
		currCity =sessionStorage.getItem("currCity");
		 //sessionStorage.setItem("currCity", "Smith");
		//var city = document.getElementById('city').value;
		if(currCity==="" || currCity===null){
			$.get(url + '?type=current', function(data, status){
			
			console.log("Data: " + data + "\nStatus: " + status);
			
			//console.log("Data: " + weatherData.main.temp + "\nStatus: " + status);
			var weatherData = JSON.parse(data);
			//sessionStorage.setItem("currentWeather",weatherData);
			
			sessionStorage.setItem("currCity", weatherData.name);
			setData(weatherData);
			});
		}else{
			$.get(url + '?type=current&city='+currCity, function(data, status){
			
			console.log("Data: " + data + "\nStatus: " + status);
			
			//console.log("Data: " + weatherData.main.temp + "\nStatus: " + status);
			var weatherData = JSON.parse(data);
			//sessionStorage.setItem("currentWeather",weatherData);
			
			sessionStorage.setItem("currCity", weatherData.name);
			setData(weatherData);
			});
			
		}
    });

 });
 
 
 
 function searchCity(){
		var city = document.getElementById('city').value;	
		//currCity =sessionStorage.getItem("currCity");
		if(city!=""){
			$.get(url + '?type=current&city='+city, function(data, status){
			
			console.log("Search City " + city);
			
			//console.log("Data: " + weatherData.main.temp + "\nStatus: " + status);
			var weatherData = JSON.parse(data);
			//sessionStorage.setItem("currentWeather",weatherData);
			sessionStorage.setItem("currCity", weatherData.name);
			setData(weatherData);

			});
		}else{
			alert("Please enter a city");
		}			
	}
	
	
function setData(weatherData){
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

}