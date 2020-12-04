<?php 


$conn = mysqli_connect("localhost","id15298472_cps530","cps530Password","id15298472_photos");

if(mysqli_connect_errno()){
	echo 'Failed to connect' . mysqli_connect_errno() ;
	
}

$query= "SELECT first_name, comment FROM feedback"; //Change to match db

$result = mysqli_query($conn,$query);

$posts= mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);

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

<!-- Output database stuff -->
<div>
<?php foreach($posts as $post) : ?>
	<p><?php echo $post['first_name'];?></p><br>
	<p><?php echo $post['comments'];?></p><br>


<?php endforeach; ?>
</div>



     
        <script src="js/redirect.js" async defer></script>
 		<?php include 'template/footer.php';?>	 
    </body>
</html>