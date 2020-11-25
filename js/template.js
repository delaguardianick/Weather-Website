
//The type of API call you want e.g. 'oneCall' , 'current' ect
var APICallType ='oneCall';

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
	
	//Example code
	
	//Get the tag with ID = temp
	//var temp=document.getElementById("temp");
	//Get the value of the temperature from weatherData 
	//var tempValue = weatherData.main.temp;
	
	//set html
	//temp.innerHTML = "Temp: "+tempValue+"°C";
	
	console.log(weatherData);
	
	//OR it can be done all in 1 line also
	//document.getElementById("temp").innerHTML = "Temp: "+weatherData.main.temp+"°C";
	
	
	

}