<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact Us</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <?php include 'template/includes.php';?>
    </head>
    <body>
	 <?php include 'template/navigation.php';?>
	
	

<?php 

//get database stuff

//Create connection
//$mysqli = new mysqli("localhost","id15298472_cps530","cps530Password","id15298472_photos"); //change to match db

//Error check
//if($mysqli -> connect_errno){
//	echo "Failed to Connect: " . $mysqli -> connect_error;
//	exit();
//}

//SQL Query
//$sql= "INSERT INTO feedback VALUES ($_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['comments']);"; //Change to match db

//Check if there is a result
/*if ($result = $mysqli->query($sql)){
	
	//Print the result
	print($result);
	result->close();
	
}*/

?>



<div >
  <p>Thank you for the feedback</p>
</div>






     
        <script src="js/redirect.js" async defer></script>
 		<?php include 'template/footer.php';?>	 
    </body>
</html>