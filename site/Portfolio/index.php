<!DOCTYPE html>
<html>
<head>
	<title>Suraj Niyogi</title>
	<?php require_once("include/header.php"); ?>
</head>
<body>
<?php require_once("include/newmenu.php"); ?>
<script>
	$(document).ready(function() {
		$("a[href^='index.php#']").click(function() {
			event.preventDefault();
	        var target = this.hash;
	        $('html, body').stop().animate({
	            'scrollTop': $(target).offset().top - 20
	        }, 500);

		});
	});
</script>
<!--------------------- header ------------------------>
<div class="hd">
	<div class="blk-lyr">
		
		<div class="d-flex justify-content-center col-lg-12 col-md-12 col-sm-6 col-xs-6" id="pp">
			<div class="pp wow bounceInDown">
				<img src="img/personal1.jpg">
			</div>
		</div>

		<div class="content col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<div class="content__container wow bounceInRight">
				<ul class="content__container__list text-center">
			    	<li class="content__container__list__item">Hello Everyone!</li>
				    <li class="content__container__list__item">I'm Suraj Niyogi!</li>
				    <li class="content__container__list__item">Website Developer..</li>
				    <li class="content__container__list__item">Nice To See You..</li>
			    </ul>
		  	</div>
		</div>

		<div class=" col-lg-6 col-md-6 col-sm-6 col-xs-6 container" id="hd-text">
			<h5 class="text-center wow bounceInLeft">Along with web development, I'm a graphic designer as well as a digital artist. So if your need a graphic content or a personal digital artwork such as digital painting or vector art, I'm the right person.</h5>
		</div>
		<div class="d-flex justify-content-center text-center wow rubberBand" id="rs-btn">
			<a href="resume.jpg">Download Resume</a>
		</div>
	</div>
</div>
<!-------------------- about me ------------------------->
<div id="about">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="ab">
		<div class="text-center">
			<h1 class="wow fadeInDown">ABOUT MYSELF</h1>
			<p class="wow zoomIn">I've been working on graphic softwares such as Photoshop, Illustrator and Corel Painter for for almost 4-5 years now. Apart from digital artworks and website desgining, I'm really passionate about digital paintings and football. And I'm also a hobbyist sketch artist.</p>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="sk-w">
		<div class="about-skills wow bounceInLeft">
			<h2 class="text-right">Website Skills</h2>
			<p class="text-right">HTML</p>
			<div class="holder"><div id="html"></div></div>

			<p class="text-right">CSS</p>
			<div class="holder"><div id="css"></div></div>

			<p class="text-right">PHP</p>
			<div class="holder"><div id="php"></div></div>

			<p class="text-right">Bootstrap</p>
			<div class="holder"><div id="bs"></div></div>

			<p class="text-right">JS/jquery</p>
			<div class="holder"><div id="jq"></div></div>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="sk-g">
		<div class="about-skills wow bounceInRight">
			<h2 class="text-left">Graphics Skills</h2>
			<p>Corel Painter 2018</p>
			<div class="holder"><div id="painter"></div></div>

			<p>Photoshop CS6</p>
			<div class="holder"><div id="photoshop"></div></div>

			<p>Illustrator CC18</p>
			<div class="holder"><div id="illust"></div></div>

			<p>Corel Draw X7</p>
			<div class="holder"><div id="draw"></div></div>

			<p>Animate</p>
			<div class="holder"><div id="anime"></div></div>

		</div>
	</div>
</div>
<!------------------- Education and Experience ---------------------->
<div id="education">
	<div class="blk">
		<div class="ed-pad">
			<div class="text-center" id="ql">
				<h1>My Qualification</h1>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="ed-l">
				<div class="yr-box flex-column-reverse">
					<div class="years-l text-right  wow bounceInDown"><h5>2018-2019</h5></div>
					<div class="ed-card-l text-right lg-card wow bounceInLeft">
						<h4>Maharshi Dayanand University</h4>
						<p>Bach. of Computer Application </p>
						<p>Sec-9 Govt. P.G. College,</p>
						<p>Haryana</p>
					</div>
					<div class="ed-card-r xs-card wow bounceInRight">
						<h4>Arena Animation</h4>
						<p>Graphics and Web Designing and Development</p>
						<p>Arena Animation Sec-14</p>
						<p>Gurgaon</p>
					</div>


					<div class="years-l text-right lg-card  wow bounceInDown"><h5>2012-2013</h5></div>
					<div class="years-l text-right xs-card wow bounceInDown"><h5>2013-2017</h5></div>
					<div class="ed-card-l text-right lg-card wow bounceInLeft">
						<h4>Haryana Board of School Education</h4>
						<p>Secondary with Sanskrit</p>
						<p>S. D. Sr. Sec. School,</p>
						<p>Gurgaon, Haryana</p>
					</div>
					<div class="ed-card-l text-right xs-card wow bounceInLeft" id="mdu">
						<h4>Maharshi Dayanand University</h4>
						<p>Bach. of Computer Application </p>
						<p>Sec-9 Govt. P.G. College,</p>
						<p>Haryana</p>
					</div>


				</div>
			</div>
			<hr class="d-flex justify-content-center">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="ed-r">
				<div class="ed-card-r lg-card wow bounceInRight">
					<h4>Arena Animation</h4>
					<p>Graphics and Web Designing and Development</p>
					<p>Arena Animation Sec-14</p>
					<p>Gurgaon</p>
				</div>

				<div class="years-r xs-card wow bounceInDown"><h5>2012-2013</h5></div>

				<div class="ed-card-r xs-card wow bounceInRight">
					<h4>Haryana Board of School Education</h4>
					<p>Higher Secondary with Science and Maths</p>
					<p>S. D. Sr. Sec. School,</p>
					<p>Gurgaon, Haryana</p>
				</div>


				<div class="years-r lg-card wow bounceInDown"><h5>2013-2017</h5></div>
				<div class="ed-card-r lg-card wow bounceInRight">
					<h4>Haryana Board of School Education</h4>
					<p>Higher Secondary with Science and Maths</p>
					<p>S. D. Sr. Sec. School,</p>
					<p>Gurgaon, Haryana</p>
				</div>
				<div class="years-r wow bounceInDown"><h5>2009-2010</h5></div>
				<div class="ed-card-l text-right xs-card wow bounceInLeft">
					<h4>Haryana Board of School Education</h4>
					<p>Secondary with Sanskrit</p>
					<p>S. D. Sr. Sec. School,</p>
					<p>Gurgaon, Haryana</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!--------------------------- gallery ------------------------>
<div id="gall">
	<div class="blk-lyr">
		<div class="container">
		    <div class="row">
				<div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h1 class="gallery-title wow fadeInUp"> MyGallery</h1>
					<div class="text-center wow fadeInUp">
						<button class="btn btn-default filter-button active" id="all" onclick="call(this.id)">All</button>
						<button class="btn btn-default filter-button" id="graphic" onclick="call(this.id)">Graphic Designs</button>
						<button class="btn btn-default filter-button" id="web" onclick="call(this.id)">Web Designs</button>
						<button class="btn btn-default filter-button" id="art" onclick="call(this.id)">Artworks</button>
						<!-- <button class="btn btn-default filter-button" id="panda" onclick="call(this.id)">Panda</button> -->
					</div>
				</div>

				<a href="img/graphic/36.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
					<img src="img/graphic/36.jpg">
				</a>
				<a href="img/graphic/64.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter web wow fadeInUp">
					<img src="img/graphic/64.jpg">
				</a>
				<a href="img/graphic/50.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter graphic wow fadeInUp">
					<img src="img/graphic/50.jpg">
				</a>
				<a href="img/graphic/53.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter graphic wow fadeInUp">
					<img src="img/graphic/53.jpg">
				</a>
				<a href="img/graphic/10.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
					<img src="img/graphic/10.jpg">
				</a>
				<a href="img/graphic/22.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter web wow fadeInUp">
					<img src="img/graphic/22.jpg">
				</a>
				<a href="img/graphic/9.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter web wow fadeInUp">
					<img src="img/graphic/9.jpg">
				</a><a href="img/graphic/27.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter graphic wow fadeInUp">
					<img src="img/graphic/27.jpg">
				</a><a href="img/graphic/51.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
					<img src="img/graphic/51.jpg">
				</a>
		    </div>
		</div>
	</div>
</div>
<!------------------------------ footer ------------------------->
<script>
	// Lightbox init
$('#mdb-lightbox-ui').load('../mdb-addons/mdb-lightbox-ui.html');
// Filter init
$('.filter-lightbox').mdbFilter();
</script>
<?php require_once("include/main-footer.php"); ?>
<?php require_once("include/footer.php"); ?>
<?php require_once("include/scrollfun.php"); ?>

</body>
</html>