$(function () { 
    var searchBox = document.querySelectorAll('.search-box input[type="text"] + span');
    searchBox.forEach(elm => {
    elm.addEventListener('click', () => {
        elm.previousElementSibling.value = '';
    });
    });
    var url = window.location['href'].split('/');
    url = url.slice(0,-1).join('/') + '/current.php';
    $('input').on('change', function () {
        var city = $('input').val();
        window.location.href = url;
        if(city!="" || city===null){
            sessionStorage.setItem("currCity", city);
            window.location.href = url;
        }else{
            alert("Please enter a city");
        }
    });
 });