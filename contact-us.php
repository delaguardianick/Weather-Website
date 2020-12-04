<?php 


$conn = mysqli_connect("localhost","id15298472_u_feedback","UserFeedback#12","id15298472_user_feedback");

if(mysqli_connect_errno()){
	echo 'Failed to connect' . mysqli_connect_errno() ;
	
}

$query= "SELECT * FROM feedback"; //Change to match db

$posts = mysqli_query($conn,$query);


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
    <input class="contact-input" type="text" id="fname" name="fname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input class="contact-input" type="text" id="lname" name="lname" placeholder="Your last name.." required>

    <label for="lname">E-mail</label>
    <input class="contact-input" type="text" id="email" name="email" placeholder="Your email.." required>

    <label for="subject">Comments</label>
    <textarea class="contact-input" id="comments" name="comments" placeholder="Comments.." style="height:200px" required></textarea>

    <input id="contactbtn" type="submit" value="Submit">
  </form>
</div>

<!-- Output database stuff -->
<div id="feedbackbox">
    <h1 id='ty-head'>Thanks for your feedback!</h1>
    <table id="fbtable">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Comment</th>
            </tr>
        </thead>
        <tbody>
<?php 
foreach($posts as $post){
    echo "<tr>";
	echo "<td style='border:black 1px solid' class='feedback'>".$post['first_name']." ".$post['last_name']."</td>";
	echo "<td class='feedback'>".$post['comments']."</td>";
	echo "</tr>";
}

?>
        </tbody>
    </table>
</div>



     
        <script src="js/redirect.js" async defer></script>
 		<?php include 'template/footer.php';?>	 
    </body>
</html>