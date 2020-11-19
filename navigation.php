<?php 
$file_path = "https://www.cs.ryerson.ca/~arbenson/weather2/";
echo '<nav class="navbar navbar-default"> 
  <div class="container-fluid"> 
    <div class="navbar-header"> 
      <a class="navbar-brand" href="#">WebSiteName</a> 
    </div> 
    <ul class="nav navbar-nav"> 
      <li class="active"><a href="#">Home</a></li> 
      <li><a href="' . $file_path . 'comparison.php">Comparison</a></li> 
      <li><a href="' . $file_path . 'test.php">SESSION TEST</a></li> 
      <li><a href="' . $file_path . 'current_weather.php">Current Weather</a></li> 
    </ul> 
  </div> 
</nav>';
?>