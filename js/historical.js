
//The type of API call you want e.g. 'oneCall' , 'current' ect
var APICallType ='historical';

//Default city if no city has been searched
var defaultCity ='Toronto';

//URL of php file that calls API
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
			//If there was a previous city in session variable, get the data for that city
			getData(APICallType,currCity);
			
		}
    });

 });
 

/*
This function will run when a button is pressed to search for a city

Example html code of button (This will probably be the search in the nav bar)
Make sure text field (input) has a matching ID (ID="city") in this case

	  <label for="city">City Name:</label><br>
	  <input type="text" id="city" name="city"><br><br>
	  <button onclick="searchCity()">Search</button>
	  
*/
$("#city").change(function(){
  searchCity();
  $('#city').val('');
});
 function searchCity(){
		
		//Get the value in the text field
		containerEmpty();
		var city = document.getElementById('city').value;	
		//If the text is not empty
		if(city!=""){
			//Get the data for the city in the text field
			getData(APICallType,city);
		//If the button is clicked and the input is blank
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
 function getData(type,city)
 {
  //jQuery to get json data

	 $.get(url + '?type=oneCall&city='+city, function(data, status){
			
			//Parse data so it is readable 
      var weatherData = JSON.parse(data);
			//Check internal codes for errors. 404=invalid city    400=undefined
			if(weatherData.cod!="404" && weatherData.cod!="400"){
				
				//Save the current city name in a session variable
				sessionStorage.setItem("currCity", city);
				//Set the inner html
				getDataHistorical(APICallType,city,weatherData.current.dt);
			}
			//If the city was not valid, make an alert
			else if (weatherData.cod==="404"){
				alert(city+" is not a valid city");
			}
			
			});
	 
 }

function sortDiv(){
	console.log("here");
	var $wrapper = $('#day-container');
    $wrapper.find('.historical-standard').sort(function (a, b) {
    return +b.dataset.day - a.dataset.day;
	})
	.appendTo( $wrapper );

}

function getDataHistorical(type,city,dt){
  var day = 3600 * 24;
  for (i = 1; i <= 5; i++){
    $.get(url + '?type='+type+'&city='+city+'&time='+dt, function(data, status){
			
			//Parse data so it is readable 
      var weatherData = JSON.parse(data);
			//Check internal codes for errors. 404=invalid city    400=undefined
			if(weatherData.cod!="404" && weatherData.cod!="400"){
				
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
      dt = dt-day;
	}
	sortDiv();
}
function valueCheck(value){
  if (typeof value == "undefined"){
    return "-";
  }
  return value;
}

/*
This function will set the html of your page
@param
weatherData - the json weather data for the current city

*/	
var count =5;
function containerEmpty(){
	$("#day-container").empty();
	count = 5;
}
function setData(weatherData){
	console.log(weatherData);
	var offset = weatherData.timezone_offset;
	var item =weatherData.current;
	var UnixTimeStamp = item.dt + offset;
	var milliseconds = UnixTimeStamp* 1000 ;
	var dateObject = new Date(milliseconds);
	var humanDateFormat = dateObject.toLocaleString();
	$('#day-container').append(`
		<div class="historical-standard" data-day=`+count+`>
				<p class="date-heading">`+humanDateFormat+`</p>
				<img class="iconimg" src="http://openweathermap.org/img/wn/`+item.weather[0].icon+`.png"/>
				<p class="historical-info"><b>Temp:</b> `+valueCheck(item.temp)+`</p>
				<p class="historical-info"><b>Feels Like:</b> `+valueCheck(item.feels_like)+`</p>
				<p class="historical-info"><button class="btn btn-primary collapsebtn" data-toggle="collapse" onClick="MoreInfoToggle()" href="#o" data-target="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">More Info</button></p>
				<div class="collapse MoreInfo" id="collapseExample">
					<div class="card card-body ">
						<p class="historical-info"><b>Description:</b></p>
						<p class="historical-info">`+valueCheck(item.weather[0].description)+`</p>
						<p class="historical-info"><b>Pressure:</b> `+valueCheck(item.pressure)+`</p>
						<p class="historical-info"><b>Humidity:</b> `+valueCheck(item.humidity)+`</p>
						<p class="historical-info"><b>Visibility:</b> `+valueCheck(item.visibility)+`</p>
						<p class="historical-info"><b>UV:</b> `+valueCheck(item.uvi)+`</p>
						<p class="historical-info"><b>Wind Speed:</b> `+valueCheck(item.wind_speed)+`</p>
						<p class="historical-info"><b>Wind Gust:</b> `+valueCheck(item.wind_gust)+`</p>
						<p class="historical-info"><b>Wind Degree:</b> `+valueCheck(item.wind_deg)+`</p>
					</div>
				</div>
			</div>
	`);
	count--;
}

