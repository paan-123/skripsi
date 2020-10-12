<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page2</title>
	<link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/assets/img/favicon.ico" />
    <script src="assets/fonts/fa-5.15.5/js/all.js"></script>
    <link rel="stylesheet" href="assets/bs4.5.2-dist/css/bootstrap.min.css">
    <style>
		/* latin-ext */
		@font-face {
			font-family: 'Lato';
			font-style: italic;
			font-weight: 400;
			font-display: swap;
			src: local('Lato Italic'), local('Lato-Italic'), url('<?= base_url("assets/fonts/lato/Lato-Italic.ttf") ?>') format('font/ttf');
			unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}

		/* latin */
		@font-face {
			font-family: 'Lato';
			font-style: italic;
			font-weight: 400;
			font-display: swap;
			src: local('Lato Italic'), local('Lato-Italic'), url('<?= base_url("assets/fonts/lato/Lato-Italic.ttf") ?>') format('font/ttf');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}

		/* latin-ext */
		@font-face {
			font-family: 'Lato';
			font-style: italic;
			font-weight: 700;
			font-display: swap;
			src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url('<?= base_url("assets/fonts/lato/Lato-BoldItalic.ttf") ?>') format('font/ttf');
			unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}

		/* latin */
		@font-face {
			font-family: 'Lato';
			font-style: italic;
			font-weight: 700;
			font-display: swap;
			src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url('<?= base_url("assets/fonts/lato/Lato-BoldItalic.ttf") ?>') format('font/ttf');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}

		/* latin-ext */
		@font-face {
			font-family: 'Lato';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: local('Lato Regular'), local('Lato-Regular'), url('<?= base_url("assets/fonts/lato/Lato-Regular.ttf") ?>') format('font/ttf');
			unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}

		/* latin */
		@font-face {
			font-family: 'Lato';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: local('Lato Regular'), local('Lato-Regular'), url('<?= base_url("assets/fonts/lato/Lato-Regular.ttf") ?>') format('font/ttf');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}

		/* latin-ext */
		@font-face {
			font-family: 'Lato';
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: local('Lato Bold'), local('Lato-Bold'), url('<?= base_url("assets/fonts/lato/Lato-Bold.ttf") ?>') format('font/ttf');
			unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}

		/* latin */
		@font-face {
			font-family: 'Lato';
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: local('Lato Bold'), local('Lato-Bold'), url('<?= base_url("assets/fonts/lato/Lato-Bold.ttf") ?>') format('font/ttf');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}

		/* cyrillic-ext */
		@font-face {
			font-family: 'Montserrat';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: local('Montserrat Regular'), local('Montserrat-Regular'), url('<?= base_url("assets/fonts/montserrat/Montserrat-Regular.ttf") ?>') format('font/ttf');
			unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}

		/* cyrillic */
		@font-face {
			font-family: 'Montserrat';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: local('Montserrat Regular'), local('Montserrat-Regular'), url('<?= base_url("assets/fonts/montserrat/Montserrat-Regular.ttf") ?>') format('font/ttf');
			unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}

		/* vietnamese */
		@font-face {
			font-family: 'Montserrat';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: local('Montserrat Regular'), local('Montserrat-Regular'), url('<?= base_url("assets/fonts/montserrat/Montserrat-Regular.ttf") ?>') format('font/ttf');
			unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
		}

		/* latin-ext */
		@font-face {
			font-family: 'Montserrat';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: local('Montserrat Regular'), local('Montserrat-Regular'), url('<?= base_url("assets/fonts/montserrat/Montserrat-Regular.ttf") ?>') format('font/ttf');
			unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}

		/* latin */
		@font-face {
			font-family: 'Montserrat';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: local('Montserrat Regular'), local('Montserrat-Regular'), url('<?= base_url("assets/fonts/montserrat/Montserrat-Regular.ttf") ?>') format('font/ttf');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}

		/* cyrillic-ext */
		@font-face {
			font-family: 'Montserrat';
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: local('Montserrat Bold'), local('Montserrat-Bold'), url('<?= base_url("assets/fonts/montserrat/Montserrat-Bold.ttf") ?>') format('font/ttf');
			unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}

		/* cyrillic */
		@font-face {
			font-family: 'Montserrat';
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: local('Montserrat Bold'), local('Montserrat-Bold'), url('<?= base_url("assets/fonts/montserrat/Montserrat-Bold.ttf") ?>') format('font/ttf');
			unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}

		/* vietnamese */
		@font-face {
			font-family: 'Montserrat';
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: local('Montserrat Bold'), local('Montserrat-Bold'), url('<?= base_url("assets/fonts/montserrat/Montserrat-Bold.ttf") ?>') format('font/ttf');
			unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
		}

		/* latin-ext */
		@font-face {
			font-family: 'Montserrat';
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: local('Montserrat Bold'), local('Montserrat-Bold'), url('<?= base_url("assets/fonts/montserrat/Montserrat-Bold.ttf") ?>') format('font/ttf');
			unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}

		/* latin */
		@font-face {
			font-family: 'Montserrat';
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: local('Montserrat Bold'), local('Montserrat-Bold'), url('<?= base_url("assets/fonts/montserrat/Montserrat-Bold.ttf") ?>') format('font/ttf');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
    </style>
    <style>
        *{
            font-family: Lato;
        }
        footer, .copyright{
            color:white;
            /* background-color: #101940; */
        }
        h4{
            font-weight: 700;
        }
		.fs-700{
			font-weight: 700;
		}
		.Montserrat-700{
			font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
			font-weight: 700;
		}
		.Montserrat-400{
			font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
			font-weight: 400;
		}
    </style>
</head>
<body>
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger Montserrat-700" href="#carouselExampleIndicators">Masjid</a>
			<button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="navbar-collapse collapse" id="navbarResponsive" style="">
				<ul class="navbar-nav ml-auto my-2 my-lg-0">
					<li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700" href="page1">Page 1</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700" href="page2">Page 2</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700" href="page3">Page 3</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger Montserrat-700" href="#footer">About</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Carousel -->
	<div id="carouselExampleIndicators" class="carousel slide vh-100" data-ride="carousel" style="overflow:hidden">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="assets/images/masjid1.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="assets/images/masjid2.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="assets/images/masjid3.jpg" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- Footer-->
	<footer class="footer text-center pt-5 pb-5 bg-dark" id="footer">
		<div class="container">
			<div class="row">
				<!-- Footer Location-->
				<div class="col-lg-4 mb-5 mb-lg-0">
					<h4 class="text-uppercase mb-4">Location</h4>
					<p class="lead mb-0">
						2215 John Daniel Drive
						<br />
						Clark, MO 65243
					</p>
				</div>
				<!-- Footer Social Icons-->
				<div class="col-lg-4 mb-5 mb-lg-0">
					<h4 class="text-uppercase mb-4">Around the Web</h4>
					<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
					<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
					<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
					<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
				</div>
				<!-- Footer About Text-->
				<div class="col-lg-4">
					<h4 class="text-uppercase mb-4">About Masjid</h4>
					<p class="lead mb-0">
						Freelance is a free to use, MIT licensed Bootstrap theme created by
						<a href="http://startbootstrap.com">Start Bootstrap</a>
						.
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Copyright Section-->
	<div class="copyright py-4 text-center text-white" style="background-color: #1a252f">
		<div class="container"><small>Copyright © Masjid 2020</small></div>
	</div>
	<!-- Bootstrap core JS-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/bs4.5.2-dist/js/bootstrap.min.js"></script>
</body>
</html>