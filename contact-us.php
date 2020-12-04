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
	
	

<div class="container-contact">
  <form action="thank_you.php" style="margin-bottom:80px;" method="post">
    <label for="fname">First Name</label>
    <input class="contact-input" type="text" id="fname" name="fname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input class="contact-input" type="text" id="lname" name="lname" placeholder="Your last name..">

    <label for="lname">E-mail</label>
    <input class="contact-input" type="text" id="email" name="email" placeholder="Your email..">

    <label for="subject">Comments</label>
    <textarea class="contact-input" id="comments" name="comments" placeholder="Comments.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

<div>
<?php 

//get database stuff
print "Test";
//Create connection


$mysqli = new mysqli("localhost","id15298472_cps530","cps530Password","id15298472_photos"); //change to match db

//Error check
if($mysqli -> connect_errno){
	//echo "Failed to Connect: " . $mysqli -> connect_error;
	
	exit();
}else{

	//SQL Query
	$sql= "SELECT first_name, comment FROM feedback"; //Change to match db

	//Check if there is a result
	$result = $mysqli->query($sql);
	if ($result){
		
		//Print the result
		
		while($row = mysqli_fetch_row($result)){
			printf("<p>%s</p><div><p>%s</p></div>", $row[0],$row[1]);
			print("<br/>");
		//}
		$result -> close();
	}
}
?>
</div>



     
        <script src="js/redirect.js" async defer></script>
 		<?php include 'template/footer.php';?>	 
    </body>
</html>