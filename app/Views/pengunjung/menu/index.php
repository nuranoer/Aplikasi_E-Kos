<?= $this->extend('pengunjung/layouts/templates'); ?>

<?= $this->section('content'); ?>

	<!-- Jumbotron -->
    <div class="hero">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="intro-wrap">
						<h1 class="mb-5"><span class="d-block">Selamat Datang</span> di Kost Annisa </h1>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="slides">
						<img src="auth/images/hero-slider-1.jpg" alt="Image" class="img-fluid active">
						<img src="auth/images/hero-slider-2.jpg" alt="Image" class="img-fluid">
						<img src="auth/images/hero-slider-3.jpg" alt="Image" class="img-fluid">
						<img src="auth/images/hero-slider-4.jpg" alt="Image" class="img-fluid">
						<img src="auth/images/hero-slider-5.jpg" alt="Image" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Layanan kami -->
	<div class="untree_co-section">
		<div class="container">
			<div class="row mb-5 justify-content-center">
				<div class="col-lg-6 text-center">
					<h2 class="section-title text-center mb-3">Mengapa memilih kami?</h2>
				</div>
			</div>
			<div class="row align-items-stretch">
				<div class="col-lg-4 order-lg-1">
					<div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('auth/images/hero-slider-1.jpg');"></div></div></div>
				</div>

				<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1" >

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-house display-4 text-primary"></span>
							<h3>Kamar Luas</h3>
							<p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
						</div>
					</div>

					<div class="feature-1 ">
						<div class="align-self-center">
							<span class="flaticon-restaurant display-4 text-primary"></span>
							<h3>Dekat dengan berbagai restoran</h3>
							<p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
						</div>
					</div>

				</div>

				<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3" >

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-mail display-4 text-primary"></span>
							<h3>Free Wifi</h3>
							<p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
						</div>
					</div>

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-swimming display-4 text-primary"></span>
							<h3>Kamar Mandi Dalam</h3>
							<p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>

	<!-- Daftar Kamar Kost -->
	<div class="cta-section text-white">
		<div class="untree_co-section">
			<div class="container">
				<div class="row justify-content-center text-center">
					<div class="col-lg-6">
						<h2 class="text-center">Daftar Kamar Kost</h2>
						<hr style="border: 1px solid white;">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi iure vero natus neque unde inventore culpa doloremque harum odio ex, quas sed totam. A nostrum deleniti, fugiat temporibus enim pariatur neque, accusantium fugit soluta sequi modi placeat saepe cupiditate doloremque! Cum et eum debitis ea voluptate quod praesentium vero voluptates!</p>
						<p class="mb-0"><a href="#" class="btn btn-outline-white text-white btn-md font-weight-bold">See more</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Testimoni -->
	<div class="untree_co-section testimonial-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 text-center">
					<h2 class="section-title text-center mb-5">Testimonials</h2>

					<div class="owl-single owl-carousel no-nav">
						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img src="<?= base_url() ?>/auth/images/person_2.jpg" alt="Image" class="img-fluid">
							</figure>
							<h3 class="name">Gita Nur Fadila</h3>
							<blockquote>
								<p>&ldquo;Kos nya sangat nyaman dan sangat terjamin keamanannya.&rdquo;</p>
							</blockquote>
						</div>

						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img src="<?= base_url() ?>/auth/images/person_3.jpg" alt="Image" class="img-fluid">
							</figure>
							<h3 class="name">Agus Marwari</h3>
							<blockquote>
								<p>&ldquo;Lingkungan kos nya dekat dengan kampus, sangat strategis.&rdquo;</p>
							</blockquote>
						</div>

						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img src="<?= base_url() ?>/auth/images/person_4.jpg" alt="Image" class="img-fluid">
							</figure>
							<h3 class="name">Sofa Pramesti Nur Widya</h3>
							<blockquote>
								<p>&ldquo;Kos nya enak dijadikan tempat istirahat sepulang berkuliah.&rdquo;</p>
							</blockquote>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- FAQ -->
	<div class="untree_co-section">
		<div class="container">
			<div class="row mb-5 justify-content-center">
				<div class="col-lg-6 text-center">
					<h2 class="section-title text-center mb-3">FAQ</h2>
				</div>
			</div>
			<div class="row align-items-stretch">
				<div class="custom-accordion" id="accordion_1">
				<div class="accordion-item">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">How to download and register?</button>
					</h2>

					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_1">
						<div class="accordion-body">
							Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
						</div>
					</div>
				</div>

				<div class="accordion-item">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How to create your paypal account?</button>
					</h2>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_1">
						<div class="accordion-body">
							A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How to link your paypal and bank account?</button>
					</h2>

					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_1">
					<div class="accordion-body">
						When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.
					</div>
					</div>

				</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Alamat / Footer -->
	<div class="py-5 cta-section">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
					<h2 class="mb-2 text-white">KOST ANISA</h2>
					<p class="mb-4 lead text-white text-white-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, fugit?</p>
				</div>
			</div>
		</div>
	</div>

<?= $this->endSection(); ?>