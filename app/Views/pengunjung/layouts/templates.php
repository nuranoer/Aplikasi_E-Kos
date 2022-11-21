<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="auth/css/bootstrap.min.css">
	<link rel="stylesheet" href="auth/css/owl.carousel.min.css">
	<link rel="stylesheet" href="auth/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="auth/css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="auth/fonts/icomoon/style.css">
	<link rel="stylesheet" href="auth/fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="auth/css/daterangepicker.css">
	<link rel="stylesheet" href="auth/css/aos.css">
	<link rel="stylesheet" href="auth/css/style.css">
	<link rel="stylesheet" href="assets/extensions/sweetalert2/sweetalert2.min.css">

	<title>KOST-ANISA</title>
</head>

<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<?= $this->include('pengunjung/layouts/navbar'); ?>

	<?= $this->renderSection('content'); ?>

	<div class="site-footer">
		<div class="inner first">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<div class="widget">
							<h3 class="heading">Kelompok 3</h3>
							<p>
                                1. Adine Pramesti Gitaswari <br>
                                2. Dwiana Maryamas Sofa <br>
                                3. Fitri Zuyina Nur Azizah <br>
                                4. Rexana Widyadhana Agusta <br>
                                5. Zulva Nur Fadila <br>
                            </p>
						</div>
						<div class="widget">
							<ul class="list-unstyled social">
								<li><a href="#"><span class="icon-twitter"></span></a></li>
								<li><a href="#"><span class="icon-instagram"></span></a></li>
								<li><a href="#"><span class="icon-facebook"></span></a></li>
								<li><a href="#"><span class="icon-linkedin"></span></a></li>
								<li><a href="#"><span class="icon-dribbble"></span></a></li>
								<li><a href="#"><span class="icon-pinterest"></span></a></li>
								<li><a href="#"><span class="icon-apple"></span></a></li>
								<li><a href="#"><span class="icon-google"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="widget">
							<h3 class="heading">Contact</h3>
							<ul class="list-unstyled quick-info links">
								<li class="phone"><a href="#">0813-3571-2567</a></li>
								<li class="address"><a href="#">Jln.Penangunggan 1b no.10</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-5">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.053912516065!2d112.0053017188679!3d-7.804367229433384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe3eec627f0abd870!2sKos%20Putri%20Anisa%20Kediri!5e0!3m2!1sid!2sid!4v1669055782104!5m2!1sid!2sid" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</div>

		<div class="inner dark">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8 mb-3 mb-md-0 mx-auto">
						<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. 5 Serangkai. &mdash; Designed with love by <a>Adine,Dwiana,Fitri,Rexana,Zulva</a>
						</p>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>

	<script src="auth/js/jquery-3.4.1.min.js"></script>
	<script src="auth/js/popper.min.js"></script>
	<script src="auth/js/bootstrap.min.js"></script>
	<script src="auth/js/owl.carousel.min.js"></script>
	<script src="auth/js/jquery.animateNumber.min.js"></script>
	<script src="auth/js/jquery.waypoints.min.js"></script>
	<script src="auth/js/jquery.fancybox.min.js"></script>
	<script src="auth/js/aos.js"></script>
	<script src="auth/js/moment.min.js"></script>
	<script src="auth/js/daterangepicker.js"></script>
	<script src="assets/extensions/sweetalert2/sweetalert2.min.js"></script>
	<!-- <script src="assets/js/pages/sweetalert2.js"></script> -->
	<script>
		document.getElementById("info").addEventListener("click", (e) => {
			Swal.fire({
				icon: "info",
				title: "Info",
				text: "Jika anda yakin untuk order kamar, silakan buat akun terlebih dahulu!",
			})
		})
	</script>

	<script src="auth/js/typed.js"></script>
	<script>
		$(function() {
			var slides = $('.slides'),
			images = slides.find('img');

			images.each(function(i) {
				$(this).attr('data-id', i + 1);
			})

			var typed = new Typed('.typed-words', {
				strings: ["San Francisco."," Paris."," New Zealand.", " Maui.", " London."],
				typeSpeed: 80,
				backSpeed: 80,
				backDelay: 4000,
				startDelay: 1000,
				loop: true,
				showCursor: true,
				preStringTyped: (arrayPos, self) => {
					arrayPos++;
					console.log(arrayPos);
					$('.slides img').removeClass('active');
					$('.slides img[data-id="'+arrayPos+'"]').addClass('active');
				}

			});
		})
	</script>

	<script src="auth/js/custom.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>
