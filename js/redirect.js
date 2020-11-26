$("#city").change(function(){
  searchCityRedirect("city");
}); 

$("#city1").change(function(){
  searchCityRedirect("city1");
}); 


 function searchCityRedirect(citySession){
		
		var city = document.getElementById(citySession).value;	
		if(city!="" || city===null){
			//getData(APICallType,city,cityNum);
			sessionStorage.setItem("currCity", city);
			var newPage = window.location['href'].split('/').slice(0,-1).join('/') + "/current.php";
			window.location.href =newPage;
		}else{
			alert("Please enter a city");
		}			
	}
	
	


