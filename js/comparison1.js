var APICallType ='current';
var defaultCity ='Toronto';

url = window.location['href'].split('/');
url = url.slice(0,-1).join('/') + '/src/get_weather_data.php';

$(function () { 
    
    $(document).ready(function () {
        //GET REUQEST TO PHP

	//City 1
	currCity =sessionStorage.getItem("currCity"+"1");
 	if(currCity!=null){
			getData(APICallType,currCity,"1")	
	}
	
	//City 2
	currCity =sessionStorage.getItem("currCity"+"2");
	if(currCity!=null){
			getData(APICallType,currCity,"2")			
	}
	
	//City 3
	currCity =sessionStorage.getItem("currCity"+"3");
	if(currCity!=null){
			getData(APICallType,currCity,"3")					
	}
	
	//If there is no previous city, load up Toronto
	currCity =sessionStorage.getItem("currCity1");
	if(currCity==="" || currCity===null){
		getData(APICallType,defaultCity,"1")
		}
		
    });

 });
 
$("#city").change(function(){
  searchCityRedirect();
  $('#city').val(" ");
}); 
 
 $("#city1").change(function(){

  searchCity("1");
   $('#city1').val(" ");
});


$("#city2").change(function(){

  searchCity("2");
    $('#city2').val(" ");
});

$("#city3").change(function(){

  searchCity("3");
  	$('#city3').val(" ");
});
 
 function searchCity(cityNum){
		
		var city = document.getElementById('city'+cityNum).value;	
		if(city!="" || city===null){
			getData(APICallType,city,cityNum);
			sessionStorage.setItem("currCity"+cityNum, city);
		}else{
			alert("Please enter a city");
		}			
	}


 function searchCityRedirect(){
		
		var city = document.getElementById('city').value;	
		if(city!="" || city===null){
			//getData(APICallType,city,cityNum);
			sessionStorage.setItem("currCity", city);
			var newPage = window.location['href'].split('/').slice(0,-1).join('/') + "/current.php";
			window.location.href =newPage;
		}else{
			alert("Please enter a city");
		}			
	}


/*
This function will get the json file from php and also call the function to set the inner html of the page
@param
type - the type of api call needed e.g. 'current' 'oneCall' ect
city - the name of the city e.g. 'toronto'
*/
 function getData(type,city,cityNum)
 {
	 $.get(url + '?type='+type+'&city='+city, function(data, status){
			var weatherData = JSON.parse(data);
			//console.log(weatherData.cod);
			
			if(weatherData.cod!="404" && weatherData.cod!="400" ){
				sessionStorage.setItem("currCity"+cityNum, weatherData.name);
				setData(weatherData,cityNum);
				
			}else if(weatherData.cod==="404" ){
				alert(city+" is not a valid city");
				
			}else{
				
				//If data is undefined, dont do anything
				
			}
			
			});
	 
 }	

/*
This function will set the html of your page
@param
weatherData - the json weather data for the current city

*/	
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
	
	
	
		
	var d = new Date();

	var time= d.toLocaleString();
	
	document.getElementById("time"+cityNum).innerHTML = "Last updated: "+time;
	

}

