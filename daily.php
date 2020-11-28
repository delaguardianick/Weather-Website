<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Daily Weather Data</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="css/index.css"> -->
        <!-- <link rel="stylesheet" href="css/daily.css"> -->
        
        <?php include 'template/includes.php';?>
    </head>
    <body>
    <script src="" async defer></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet"> 
 <?php include 'template/navigation.php';?>
 <?php include 'template/footer.php';?>

        
    
<div id="carousel-main" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <!-- new item goes here -->
  </div>
  <a class="carousel-control-prev" href="#carousel-main" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-main" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <ol class="carousel-indicators">
    <!-- Indicators go here -->
  </ol>
</div>
    <script src="js/daily.js"></script>    
    </body>
</html>