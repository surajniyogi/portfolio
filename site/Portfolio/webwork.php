<!DOCTYPE html>
<html>
<head>
	<title>Web Designs</title>
	<?php require_once("include/header.php")?>
<style>
	@media only screen and (max-width: 360px) {
	#bound {
		width: 100%;
		margin: 5% 0;
		padding: 0 10%;
	}
	#web-text {
		margin-bottom:6%; 
	}
	#web-text h1 {
		font-size: 30px;
	}
	.hover{
		margin-bottom: 4%;
	}
}

	@media only screen and (max-width: 460px) and (min-width: 361px){
		#bound {
			width: 100%;
			margin: 2% 0;
			padding: 0 10%;
		}
		#web-text {
			margin-bottom:6%; 
			padding-top: 10%;
		}
		#web-text h1 {
			font-size: 30px;
		}
		.hover{
			margin-bottom: 4%;
		}	
	}

	@media only screen and (max-width: 720px) and (min-width: 461px){
		#bound {
			width: 50%;
			margin: 2% 0;
			padding: 0 5%;
		}
		#web-text {
			margin-bottom:4%; 
			padding-top: 5%;
		}
		#web-text h1 {
			font-size: 30px;
		}
		.hover{
			margin-bottom: 4%;
		}	
	}

	@media only screen and (max-width: 920px) and (min-width: 721px){
		#bound {
			width: 33%;
			margin: 2% 0;
			padding: 0 5%;
		}
		#web-text {
			margin-bottom:4%; 
			padding-top: 1%;
		}
		#web-text h1 {
			font-size: 30px;
		}
		.hover{
			margin-bottom: 4%;
		}	
	}

</style>
</head>
<body>
<?php require_once("include/newmenu.php")?>
<div id="web">
	<div class="container">
		<div class="text-center" id="web-text">
			<h1>My Website Designs</h1>
		</div>
		<div class="d-flex justify-content-center">
			<figure class="snip1573">
			    <img img src="img/img/fan2.jpg" alt="img/img/fan2.jpg" />
			    <figcaption>
			    	<h3>Live View</h3>
			    </figcaption>
			    <a href="http://surajniyogi.galaxeepro.com/sites/04%20Fanstasy%20World/"></a>
			</figure>

			<figure class="snip1573">
			    <img img src="img/img/glo2.jpg" alt="img/img/glo2.jpg" />
			    <figcaption>
			    	<h3>Live View</h3>
			    </figcaption>
			    <a href="http://surajniyogi.galaxeepro.com/sites/03%20Glorius/"></a>
			</figure>
		</div>
		<div class="d-flex justify-content-center">
			<figure class="snip1573">
			    <img img src="img/img/can2.jpg" alt="img/img/can2.jpg" />
			    <figcaption>
			    	<h3>Live View</h3>
			    </figcaption>
			    <a href="http://surajniyogi.galaxeepro.com/sites/02%20Candid/"></a>
			</figure>

			<figure class="snip1573">
			    <img img src="img/img/bas1.jpg" alt="img/img/bas1.jpg" />
			    <figcaption>
			    	<h3>Live View</h3>
			    </figcaption>
			    <a href="http://surajniyogi.galaxeepro.com/sites/01%20Besend/"></a>
			</figure>
		</div>
	</div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<?php require_once("include/main-footer.php")?>
<?php require_once("include/footer.php")?>
</body>
</html>