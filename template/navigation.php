<?php 
echo '
<nav class="navbar navbar-expand-lg navbar-light text-white d-flex" style="background:#1D3557; ">
<a class="navbar-brand text-white" href="#"> <img src="https://images-na.ssl-images-amazon.com/images/I/61nuuPxUvaL.png" alt="" id="logo"> Weather</a>
<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse " id="navbarNavDropdown">
  <ul class="navbar-nav ml-md-auto">
    <li class="nav-item dropdown ">
      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Forecast
      </a>
      <div style="background:#264672;" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item text-white" href="#">Current</a>
        <a class="dropdown-item text-white" href="#">Minutely</a>
        <a class="dropdown-item text-white" href="#">Hourly</a>
        <a class="dropdown-item text-white" href="#">Daily</a>
        <a class="dropdown-item text-white" href="#">Historical</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</a>
      <div style="background:#264672; " class="  text-white dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item text-white" href="#">About Us</a>
        <a class="dropdown-item text-white" href="#">Terminology</a>
        <a class="dropdown-item text-white" href="#">Contact Us</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="#">Government Alert</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="#">Spotify Playlist</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="#">City Comparison</a>
    </li>
    
  </ul>
</div>
</nav>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
';
?>