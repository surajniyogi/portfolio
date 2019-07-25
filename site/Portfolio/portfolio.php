<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portfolio</title>
    <?php require_once("include/header.php"); ?>
<style>
    .row a {
        height: 200px;
    }
    @media only screen and (max-width: 360px) {
        #gall {
            margin-top: 5%;
        }
    }

    @media only screen and (max-width: 460px) and (min-width: 361px){
        #gall {
            margin-top: 5%;
        }   
    }

    @media only screen and (max-width: 720px) and (min-width: 461px){
        #gall {
        margin-top: 5%;
        }   
    }
</style>
</head>
<body>
<<?php require_once("include/newmenu.php") ?>

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
                        <button class="btn btn-default filter-button" id="illustration" onclick="call(this.id)">Illustration</button>
                        <button class="btn btn-default filter-button" id="logo" onclick="call(this.id)">Logo</button>
                        <button class="btn btn-default filter-button" id="cover" onclick="call(this.id)">cover</button>
                        <button class="btn btn-default filter-button" id="ad" onclick="call(this.id)">Ads</button>
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
                <a href="img/graphic/53.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter cover wow fadeInUp">
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
                </a>
                <a href="img/graphic/27.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter graphic wow fadeInUp">
                    <img src="img/graphic/27.jpg">
                </a>
                <a href="img/graphic/51.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
                    <img src="img/graphic/51.jpg">
                </a>
                <a href="img/graphic/2.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter illustration wow fadeInUp">
                    <img src="img/graphic/2.jpg">
                </a>
                <a href="img/graphic/3.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
                    <img src="img/graphic/3.jpg">
                </a>
                <a href="img/graphic/4.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter graphic wow fadeInUp">
                    <img src="img/graphic/4.jpg">
                </a>
                <a href="img/graphic/5.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
                    <img src="img/graphic/5.jpg">
                </a>
                 <a href="img/graphic/candid.png" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter web wow fadeInUp">
                    <img src="img/graphic/candid.png">
                </a>
                <a href="img/graphic/6.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
                    <img src="img/graphic/6.jpg">
                </a>
                <a href="img/graphic/7.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter logo wow fadeInUp">
                    <img src="img/graphic/7.jpg">
                </a>
                <a href="img/graphic/8.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter graphic wow fadeInUp">
                    <img src="img/graphic/8.jpg">
                </a>
                <a href="img/graphic/11.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
                    <img src="img/graphic/11.jpg">
                </a>
                <a href="img/graphic/12.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter illustration wow fadeInUp">
                    <img src="img/graphic/12.jpg">
                </a>
                <a href="img/graphic/13.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter illustration wow fadeInUp">
                    <img src="img/graphic/13.jpg">
                </a>
                <a href="img/graphic/14.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter graphic wow fadeInUp">
                    <img src="img/graphic/14.jpg">
                </a>
                <a href="img/graphic/15.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter graphic wow fadeInUp">
                    <img src="img/graphic/15.jpg">
                </a>
                <a href="img/graphic/16.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter illustration wow fadeInUp">
                    <img src="img/graphic/16.jpg">
                </a>
                <a href="img/graphic/17.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter logo wow fadeInUp">
                    <img src="img/graphic/17.jpg">
                </a>
                <a href="img/graphic/18.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
                    <img src="img/graphic/18.jpg">
                </a>
                <a href="img/graphic/19.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter cover wow fadeInUp">
                    <img src="img/graphic/19.jpg">
                </a>
                <a href="img/graphic/20.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
                    <img src="img/graphic/20.jpg">
                </a>
                <a href="img/graphic/gl.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter web wow fadeInUp">
                    <img src="img/graphic/gl.jpg">
                </a>
                <a href="img/graphic/25.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter illustration wow fadeInUp">
                    <img src="img/graphic/25.jpg">
                </a>
                <a href="img/graphic/23.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter illustration wow fadeInUp">
                    <img src="img/graphic/23.jpg">
                </a>
                <a href="img/graphic/24.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter cover wow fadeInUp">
                    <img src="img/graphic/24.jpg">
                </a>
                <a href="img/graphic/30.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter logo wow fadeInUp">
                    <img src="img/graphic/30.jpg">
                </a>
                <a href="img/graphic/28.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter logo wow fadeInUp">
                    <img src="img/graphic/28.jpg">
                </a>
                <a href="img/graphic/29.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter logo wow fadeInUp">
                    <img src="img/graphic/29.jpg">
                </a>
                <a href="img/graphic/31.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
                    <img src="img/graphic/31.jpg">
                </a>
                <a href="img/graphic/32.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter cover wow fadeInUp">
                    <img src="img/graphic/32.jpg">
                </a>
                <a href="img/graphic/33.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter illustration wow fadeInUp">
                    <img src="img/graphic/33.jpg">
                </a>
                <a href="img/graphic/34.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter illustration wow fadeInUp">
                    <img src="img/graphic/34.jpg">
                </a>
                <a href="img/graphic/35.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
                    <img src="img/graphic/35.jpg">
                </a>
                <a href="img/graphic/37.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter logo wow fadeInUp">
                    <img src="img/graphic/37.jpg">
                </a>
                <a href="img/graphic/38.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
                    <img src="img/graphic/38.jpg">
                </a>
                <a href="img/graphic/39.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter illustration wow fadeInUp">
                    <img src="img/graphic/39.jpg">
                </a>
                <a href="img/graphic/40.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter graphic wow fadeInUp">
                    <img src="img/graphic/40.jpg">
                </a>
                <a href="img/graphic/41.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter illustration wow fadeInUp">
                    <img src="img/graphic/41.jpg">
                </a>
                <a href="img/graphic/42.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter illustration wow fadeInUp">
                    <img src="img/graphic/42.jpg">
                </a>
                <a href="img/graphic/43.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter ad wow fadeInUp">
                    <img src="img/graphic/43.jpg">
                </a>
                <a href="img/graphic/44.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
                    <img src="img/graphic/44.jpg">
                </a>
                <a href="img/graphic/basend.png" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter web wow fadeInUp">
                    <img src="img/graphic/basend.png">
                </a>
                <a href="img/graphic/45.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
                    <img src="img/graphic/45.jpg">
                </a>
                <a href="img/graphic/46.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
                    <img src="img/graphic/46.jpg">
                </a>
                <a href="img/graphic/47.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
                    <img src="img/graphic/47.jpg">
                </a>
                <a href="img/graphic/48.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter ad wow fadeInUp">
                    <img src="img/graphic/48.jpg">
                </a>
                <a href="img/graphic/49.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter ad wow fadeInUp">
                    <img src="img/graphic/49.jpg">
                </a>
                <a href="img/graphic/55.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter logo wow fadeInUp">
                    <img src="img/graphic/55.jpg">
                </a>
                <a href="img/graphic/54.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter cover wow fadeInUp">
                    <img src="img/graphic/54.jpg">
                </a>
                <a href="img/graphic/52.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter illustration wow fadeInUp">
                    <img src="img/graphic/52.jpg">
                </a>
                <a href="img/graphic/56.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter ad wow fadeInUp">
                    <img src="img/graphic/56.jpg">
                </a>
                <a href="img/graphic/57.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
                    <img src="img/graphic/57.jpg">
                </a>
                <a href="img/graphic/58.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
                    <img src="img/graphic/58.jpg">
                </a>
                <a href="img/graphic/59.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
                    <img src="img/graphic/59.jpg">
                </a>
                <a href="img/graphic/60.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
                    <img src="img/graphic/60.jpg">
                </a>
                <a href="img/graphic/61.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter art wow fadeInUp">
                    <img src="img/graphic/61.jpg">
                </a>
                <a href="img/graphic/62.jpg" class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter illustration wow fadeInUp">
                    <img src="img/graphic/62.jpg">
                </a>
            </div>
        </div>
    </div>
</div>


<?php require_once("include/main-footer.php"); ?>
<?php require_once("include/footer.php"); ?>
</body>
</html>