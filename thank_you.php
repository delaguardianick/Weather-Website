<?php 


$conn = mysqli_connect("localhost","id15298472_u_feedback","UserFeedback#12","id15298472_user_feedback");

if(mysqli_connect_errno()){
	echo 'Failed to connect' . mysqli_connect_errno() ;
	
}

$fname = mysqli_real_escape_string($conn,$_POST['fname']);
$lname = mysqli_real_escape_string($conn,$_POST['lname']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$comments = mysqli_real_escape_string($conn,$_POST['comments']);


$query= "INSERT INTO feedback VALUES ('$fname', '$lname','$email','$comments');"; //Change to match db

if(mysqli_query($conn,$query)){
	echo "Feedback success";
	
}else{
	echo 'Error:' . mysqli_error($conn);
	
}

?>



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
	
	


<div >
  <p>Thank you for the feedback</p>
</div>






     
        <script src="js/redirect.js" async defer></script>
 		<?php include 'template/footer.php';?>	 
    </body>
</html>