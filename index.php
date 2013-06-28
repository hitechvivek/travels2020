<?php
function spamcheck($field)
  {
  //filter_var() sanitizes the e-mail
  //address using FILTER_SANITIZE_EMAIL
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);

  //filter_var() validates the e-mail
  //address using FILTER_VALIDATE_EMAIL
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }

if (isset($_REQUEST['email']))
  {//if "email" is filled out, proceed

  //check if the email address is invalid
  $mailcheck = spamcheck($_REQUEST['email']);
  if ($mailcheck==FALSE)
    {
    echo "Invalid input";
    }
  else
    {//send email
    $email = $_REQUEST['email'] ;
    $subject = $_REQUEST['subject'] ;
    $message = $_REQUEST['message'] ;
    mail("hitechvivek@gmail.com", "Subject: $subject",
    $message, "From: $email" );
    header("location: index.php");
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="author" content="VIVEK">
<meta name="description" content="Travels 2020">

<title>Travels 2020</title>

<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

<!-- Typekit Franklin Gothic -->
<script type="text/javascript" src="//use.typekit.net/qqz5urg.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<link href="fonts/Colaborate/stylesheet.css" type="text/css" rel="stylesheet"/>
<link href="css/stylesheet.css" type="text/css" rel="stylesheet"/>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/scripts.js"></script>
<style>
	.sfe-break-top{
		font-size: 36px;
	}
</style>
</head>



<body>

<div class="container">

<div class="navbar" id="navbar">
	<div id="navbar-logo">
		<a href="#"><img alt="travels2020" src="img/ts_brand.png" id="homebutton"/></a>
	</div>

	<nav>
	  <ul>
	    <li><a href="#" id="aboutbutton">About Us</a></li>
	    <li><a href="#" id="clientsbutton">Packages</a></li>
	    <li><a href="#" id="contactsbutton">Contact Us</a></li>
	    <li><a href="#" id="teambutton">The Team</a></li>
	  </ul>
	</nav>
</div> <!-- navbar end -->

<div class="hero" id="home">
	<div class="herologo">
		<img src="img/ts_logo.png">
	</div>


	<div class="headline">
		<!--<h2>DELIVERING A LEVEL OF SERVICE UNIQUELY OURS</h2>-->
	</div>
</div> <!-- hero end -->


<div class="aboutus-wrapper" id="about">
	<div class="aboutus">
		<div class="headline-section-about">
			<!--<h1>ABOUT US</h1>-->
			<div class="aboutus-copy">
				<h3>Travels 2020</h3>
				<hr>
				<p>A part of 2020 groups based in India is an avant-garde travel ingress for the Indian folks to dive into the ecstacy of exploring the world.</p>
				<br>
				<h3>Mission</h3>
				<hr>
				<p>The main aspiration of Travels 2020 is Customer Satisfaction. We work for you and assure that all your needs are replenished with utmost care to make your voyage both affordable and enjoyable. Feel free to contact us on any queries. We are here to serve you and don't forget to send us your feedback which would make us improve our services and offer better travel solutions.</p>
			</div>
		</div>
	</div>
</div> <!-- aboutus-wrapper end -->


<div class="clients-wrapper" id="clients">
	<div class="clients">
		<div class="headline-section-copy">
		  <div class="clients-copy">
	      <h3>Our 18 new domestic trips</h3>
<p>BANGALORE,MYSORE(3DAYS)</p>
<p>BANGALORE,MYSORE,COORG(4DAYS)</p>
<p>DELHI,AGRA,JAIPUR(8DAYS)</p>
<p>MANGALORE,COORG(3DAYS)</p>
<p>MANGALORE,GOA(5DAYS</p>
<p>COCHIN,MUNNAR(3DAYS)</p>
<p>GOA(4DAYS)</p>
<p>CHENNAI,PONDICHERRY(4DAYS)</p>
<p>HYDERABAD(4DAYS)</p>
</div>
 <div class="clients-copy-right">
<p>HYDERABAD,BANGALORE(6DAYS)</p>
<p>MUMBAI(5DAYS)</p>
<p>MUMBAI,GOA(7DAYS)</p>
<p>COCHIN,TRIVANDRUM,KOVALAM,KANYAKUMARI(4DAYS)</p>
<p>WAYANAD,BANGALORE,MYSORE,COORG(6DAYS)</p>
<p>DELHI,AGRA,SHIMLA,KULLUMANALI(10DAYS)</p>
<p>DELHI,CHANDIGARH,AMRISTAR,KULLUMANALI(12DAYS)</p>
<p>KOLKATA,DARJEELING,GANGTOK,KALIMPONG(10DAYS)</p>
<p>COCHIN,ALLEPPEY,CHERAI BEACH,ATHIRAPALLY FALLS(2DAYS)</p>
</div>
		</div>
	</div>
</div> <!-- clients-wrapper end -->



<div class="contact-wrapper" >
  <div class="contact">
  	<div class="contact-left" id="contact">
  		<?php 
  		if (isset($_REQUEST['email'])) {
  			echo "<h4>Success!</h4>";
  		}
  		$mail_form = include('php/mail_form.php'); ?>
  	</div> <!-- end div contact -->

  	

  	<div class="contact-right">
  		<h5>Visit Us</h5>
      <hr>
  		<h3>Travels 2020<br>Mukesh kanna<br></h3>

  		<h5>Call Us</h5>
      <hr>
  		<h3>87 5498 5498</h3>

  		<h5>Mail</h5>
      <hr>
  		<h3>travels2020@gmail.com</h3>

  		<h5>Facebook</h5>
      <hr>
  		<a href="http://www.facebook.com/pages/Travels2020/138377559661863" target="blank">@Travels 2020</a>
  	</div>
  </div>
</div> <!-- contact-wrapper end -->

<div class="team-wrapper" id="team">
  <div class="team">


    <div class="teamcopy" id="beth">
      <div class="team-pic">
        <a href="mailto:travels2020@gmail.com"><img src="img/mukesh_off.png" class="rollover" /></a>
      </div>
      <div class="teamcopy-left">
      <h3>Mukesh Kanna</h3><h6>Travel Consultant</h6>
      <hr>
      <p>Young and energetic person, loves to travel</p>
      <hr>
      <ul>
        <li>BE degree in ComputerScience</li>
        <li>2 years travel industry experience</li>
        <li>3 years event planning and coordination</li>
      </ul>
      </div>
    </div>

  </div>
</div> <!-- team-wrapper end -->

  <footer>
    <div id="footer-content">
      <div id="footer-address">
        <h3>Travels 2020<br></h3>
      </div>
      <div id="footer-logo">
        <img src="img/footer_logo.png">
      </div>
      <div id="footer-hr">
        <hr>
        <p>&copy;2013 Travels 2020, Inc. &nbsp; All rights reserved. &nbsp;</p>
        <a href="https://www.facebook.com/pages/Travels2020/138377559661863" target="blank"><img src="img/fb_off.png" class="rollover"></a>
      </div>
    </div>
  </footer>



</div> <!-- container end -->

</body>
</html>

