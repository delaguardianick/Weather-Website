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
  <form action="/action_page.php" style="margin-bottom:80px;">
    <label for="fname">First Name</label>
    <input class="contact-input" type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input class="contact-input" type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lname">E-mail</label>
    <input class="contact-input" type="text" id="email" name="email" placeholder="Your email..">

    <label for="subject">Subject</label>
    <textarea class="contact-input" id="subject" name="subject" placeholder="Comments.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>




     
        <script src="js/redirect.js" async defer></script>
 		<?php include 'template/footer.php';?>	 
    </body>
</html>