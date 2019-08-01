<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Me</title>
    <?php require_once("include/header.php"); ?>
    <style>
    	body {
		    background-color: #dbd8de;
		    margin-top: 5%;
		}
		.adda a {
			text-decoration: none;
			color: #fff
		}
    </style>
</head>
<body>
    <!--------------------- header ------------------------>
<?php require_once("include/newmenu.php"); ?>
<div class="text-center" id="cnt-hd">
    <h1 class="wow bounceInDown">Get in touch with me :)</h1>
    <h4 class="wow zoomIn">Find me at :</h4>
</div>
<div class="container wow bounceInUp">
    <iframe class="col-12 col-sm-12	col-md-12 col-lg-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.305100681308!2d77.04223451455519!3d28.470356982482166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19b2a2fa5c4b%3A0x332eab92b8a2c627!2sArena+Animation!5e0!3m2!1sen!2sin!4v1560234613434!5m2!1sen!2sin" width="1140" height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!-- add and form -->
<div id="formadd">
	<div class="blak">
		<div class="col-12 col-sm-12 col-md-6 col-lg-6" id="addr">
			<div class="container text-secondary wow slideInLeft">
				<div class="adda">
					<h3>Give me a call :</h3>
					<a href="tel:+919654851506">+91 9654851506</a>
				</div>
				<div class="adda">
					<h3>Mail me at :</h3>
					<a href="mailto:surajniyogi@yahoo.in">surajniyogi@yahoo.in</a>
				</div>
				<div class="adda">
					<h3>Find me at :</h3>
					<h5>543-A/21, <br>Shivji Park, Khandsa Road, <br>Gurgaon, Haryana<br>122001</h5>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-12 col-md-6 col-lg-6" data-aos="zoom-in-left" id="forml">
			<form class="wow lightSpeedIn">
			    <div>
			        <input type="text" name="firstname" placeholder="Full Name">
			        <input type="text" name="email" placeholder="Your Email">
			    </div>
			    <div>
			        <textarea  id="msg-box" placeholder="Your Messege"></textarea>
			    </div>
			    <input id="snd-btn" type="submit" value="Send Messege">
			</form>
		</div>
	</div>
</div>
<!----------------------- footer --------------------------->
<?php require_once("include/footer.php"); ?>
<?php require_once("include/main-footer.php"); ?>
</body>
</html>