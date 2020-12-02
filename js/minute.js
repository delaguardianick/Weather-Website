$(function () { 
    console.log('jqeury imporeted');
    url = window.location['href'].split('/');
    url = url.slice(0,-1).join('/') + '/src/get_weather_data.php'
    var city = sessionStorage.getItem('currCity');
    var $ctx = $('#myChart');


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

    function makeGraph(data){
        console.log($ctx);

        var min = data.minutely;
        if(min === undefined){
            console.log('min data not here');
            $('#noData').removeClass('hidden');
            $('#graph').addClass('hidden');
        }else{
            console.log('min data present');
            $('#noData').addClass('hidden');
            $('#graph').removeClass('hidden');
        }
        var big = [];
        var label = [];
        for (var i in min){
            big.push({x: new Date(min[i].dt * 1000), y: min[i].precipitation}); //Change y back to precip
        }

        for (var i in min){
            if(parseInt(i)%10 == 0){
                label.push(new Date(min[i].dt * 1000));
            }
        }
        console.log(label)
        console.log(big);
        if (window.MyChart != undefined)
        {
            window.MyChart.destroy();
        }
        window.MyChart = new Chart($ctx,
            {
                "type":"line",
                // "responsive": false,
                "maintainAspectRatio": false,
                "data":{
                    "labels":label,
                    "datasets":[{
                        "label":"Precipitation Graph",
                        "data":big,
                        "fill":false,
                        "borderColor":"rgb(75, 192, 192)",
                        "lineTension":0.1}]},
                "options":{
                    "scales": {
                        "yAxes": [{
                            "scaleLabel": {
                                "display": true,
                                "labelString": 'Precipitation (mm)',
                                "fontSize": 16
                            }
                        }],
                        "xAxes": [{
                            "type": 'time',
                            "time": {
                                "unit": 'minute'
                            },
                            "scaleLabel": {
                                "display": true,
                                "labelString": 'HH:MM (AM/PM)',
                                "fontSize": 16
                            }
                        }]
                    }
                }
                });
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
                makeGraph(weatherData);
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