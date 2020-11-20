$(function () { 
    url = window.location['href'].split('/');
    url = url.slice(0,-1).join('/') + '/src/get_weather_data.php'
    $(document).ready(function () {
        //GET REUQEST TO PHP
		//var city = document.getElementById('city1').value;

		
/* 		var i =1;
			for(i=1;i<3;i++){
				currCity =sessionStorage.getItem("currCity"+i.toString());
				console.log("CITY"+i+":"+currCity);
				
				console.log(url + '?type=current&city='+currCity);
				console.log("i="+i);
				if(currCity!=null){
					console.log("inside the IF");
					var weatherData;
					$.get(url + '?type=current&city='+currCity, function(data, status){
						//console.log("Data: " + weatherData.main.temp + "\nStatus: " + status);
						weatherData = JSON.parse(data);
						console.log("inside the GET for"+ weatherData.name + " i="+i);
						console.log("Setting Data for city"+i);
						setData(weatherData,i.toString());
					});
					
				}
			}  */
	

	currCity =sessionStorage.getItem("currCity"+"1");
 	if(currCity!=null){
		$.get(url + '?type=current&city='+currCity, function(data, status){
			var weatherData = JSON.parse(data);
			setData(weatherData,"1");
						});
	}
	
	
	if(currCity!=null){
	currCity =sessionStorage.getItem("currCity"+"2");
		$.get(url + '?type=current&city='+currCity, function(data, status){
			var weatherData = JSON.parse(data);
			setData(weatherData,"2");
						});	 
	}
	
	
	if(currCity!=null){
	currCity =sessionStorage.getItem("currCity"+"3");
		$.get(url + '?type=current&city='+currCity, function(data, status){
			var weatherData = JSON.parse(data);
			setData(weatherData,"3");
						});	 	
	
	}
	

			//If there is no previous city, load up Toronto
			currCity =sessionStorage.getItem("currCity1");
		if(currCity==="" || currCity===null){
			$.get(url + '?type=current', function(data, status){
			var weatherData = JSON.parse(data);
			sessionStorage.setItem("currCity1",weatherData.name);
			setData(weatherData,"1");
			});
		}
		
    });

 });
 
 
 
 function searchCity(cityNum){
		//currCity =sessionStorage.getItem("currCity");
		var city = document.getElementById('city'+cityNum).value;	
		if(city!="" || city===null){
			
			$.get(url + '?type=current&city='+city, function(data, status){
			
			//console.log("Search City " + city);
			
			//console.log("Data: " + weatherData.main.temp + "\nStatus: " + status);
			var weatherData = JSON.parse(data);
			//sessionStorage.setItem("currentWeather",weatherData);
			sessionStorage.setItem("currCity"+cityNum, weatherData.name);
			console.log("SEARCH - currCity"+cityNum + " : " +  weatherData.name);
			setData(weatherData,cityNum);

			});
		}else{
			alert("Please enter a city");
		}			
	}
	
	
function setData(weatherData,cityNum){
	
	console.log("Setting Data... City"+cityNum +" City Name: " +weatherData.name );
	var tempValue = weatherData.main.temp;
	var nameValue = weatherData.name;
	var descriptionValue = weatherData.weather[0].description;
	var iconValue = weatherData.weather[0].icon;
	var feels_likeValue = weatherData.main.feels_like;
	var humidityValue = weatherData.main.humidity;
	
	
	
	document.getElementById("temp"+cityNum).innerHTML = "Temp: "+tempValue+"°C";
	document.getElementById("name"+cityNum).innerHTML = nameValue;
	document.getElementById("desc"+cityNum).innerHTML = descriptionValue;
	document.getElementById("icon"+cityNum).src = "http://openweathermap.org/img/w/"+iconValue+".png";
	document.getElementById("feels_like"+cityNum).innerHTML = "Feels Like: "+feels_likeValue+"°C";
	document.getElementById("humidity"+cityNum).innerHTML = "Humidity: "+humidityValue+"%";
	


}


