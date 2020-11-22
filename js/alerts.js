$(function () { 
    console.log('jqeury imporeted');
    url = window.location['href'].split('/');
    url = url.slice(0,-1).join('/') + '/src/get_weather_data.php'
    var city = sessionStorage.getItem('currCity');

    function searchCity(){
        var APICallType = 'oneCall';
        //Get the value in the text field
        city = document.getElementById('city').value;
        if(city == ''){
            city = sessionStorage.getItem('currCity');
        }
        //If the text is not empty
        if(city!=""){
            //Get the data for the city in the text field
            getData(APICallType,city);
        //If the button is clicked and the input is blank
        }else{
            alert("Please enter a city");
        }
        //Resets the value
        
    }
    $('#city').change(function (e) { 
        searchCity();
    });

    function makeAlert(data){
        $('#alert').text('');
        for (i in data.alerts){
            createCard(data.alerts[i]);
        }
    }

    function createCard(alertInfo){
        var message = alertInfo.description;
        var title = alertInfo.sender_name;
        var event = alertInfo.event;
        var start = new Date(alertInfo.start * 1000);
        var end = new Date(alertInfo.end * 1000);
        var mainString = '<div class="card border-danger text-center mt-5"><div class="card-header">'+ title +'</div><div class="card-body text-danger"><h5 class="card-title">' + event + '</h5><p class="card-text">' + message + '</p></div><div class="card-footer"><span class="float-left">From: ' + start.toLocaleString() + '</span><span class="float-right">Till: ' + end.toLocaleString() + '</span></div></div>';
        $('#alert').append(mainString);
    }




    function setCityTag(city){
        $('#citySpan').text(city.charAt(0).toUpperCase() + city.slice(1));
        var asOf = new Date();
        $('#asOf').text(asOf.toLocaleString());
        $('#city').val('');
    }

    function getData(type,city)
    {
        //jQuery to get json data
        $.get(url + '?type='+type+'&city='+city, function(data, status){

        //Parse data so it is readable 

            var weatherData = JSON.parse(data);
            console.log(weatherData);
            //Check internal codes for errors. 404=invalid city    400=undefined
            if(weatherData.cod!="404" && weatherData.cod!="400"){
                //Save the current city name in a session variable
                sessionStorage.setItem("currCity", city);
                //Set the inner html
                setCityTag(city);
                if(weatherData.alerts === undefined){
                    console.log('min data not here');
                    $('#noData').removeClass('hidden');
                    $('#alert').addClass('hidden');
                }else{
                    console.log('min data present');
                    makeAlert(weatherData);
                    $('#noData').addClass('hidden');
                    $('#alert').removeClass('hidden');
                }
                //console.log(weatherData);
            }
            //If the city was not valid, make an alert
            else if (weatherData.cod==="404" || weatherData.cod == "400"){
                alert(city+" is not a valid city");
            }

        });

    }  
    $(document).ready(function () {
        //GET REUQEST TO PHP
        // $.get(url + '?type=current', function(data, status){
        //     console.log("Data: " + data + "\nStatus: " + status);
        // });
        if(sessionStorage.getItem('currCity') != null){
            console.log('Session present so searching that');
            searchCity();
        }
    });
 });