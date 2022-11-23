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
					<div class="col-md-6 col-lg-4">
						<div class="widget">
							<h3 class="heading">Contact</h3>
							<ul class="list-unstyled quick-info links">
								<li class="phone"><a href="#">0813-3571-2567</a></li>
								<li class="address"><a href="#">Jln.Penangunggan 1b no.10</a></li>
							</ul>
						</div>
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

	<script src="<?= base_url() ?>/auth/js/jquery-3.4.1.min.js"></script>
	<script src="<?= base_url() ?>/auth/js/popper.min.js"></script>
	<script src="<?= base_url() ?>/auth/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>/auth/js/owl.carousel.min.js"></script>
	<script src="<?= base_url() ?>/auth/js/jquery.animateNumber.min.js"></script>
	<script src="<?= base_url() ?>/auth/js/jquery.waypoints.min.js"></script>
	<script src="<?= base_url() ?>/auth/js/jquery.fancybox.min.js"></script>
	<script src="<?= base_url() ?>/auth/js/aos.js"></script>
	<script src="<?= base_url() ?>/auth/js/moment.min.js"></script>
	<script src="<?= base_url() ?>/auth/js/daterangepicker.js"></script>

	<script src="<?php echo base_url();?>/auth/js/typed.js"></script>
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

	<script src="<?= base_url() ?>/auth/js/custom.js"></script>

    <?= $this->renderSection('js') ?>