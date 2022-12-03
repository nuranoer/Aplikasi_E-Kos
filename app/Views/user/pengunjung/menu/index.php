<?= $this->extend('user/pengunjung/layouts/templates'); ?>

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
							<p class="mb-0">Kamar berkisar berukuran 5 x 5 m2 , 4 x 3 m2, dan 3 x 3 m2</p>
						</div>
					</div>

					<div class="feature-1 ">
						<div class="align-self-center">
							<span class="flaticon-restaurant display-4 text-primary"></span>
							<h3>Dekat dengan berbagai tempat makan</h3>
							<p class="mb-0">Penghuni kos tidak akan kesulitan mencari makanan karena tempat kost dekat dengan penjual makanan maupun rumah makan</p>
						</div>
					</div>

				</div>

				<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3" >

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-mail display-4 text-primary"></span>
							<h3>Free Wifi</h3>
							<p class="mb-0">Penghuni kos tidak kesulitan untuk mengakses internet di area kos dikarekan sudah free wifi</p>
						</div>
					</div>

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="flaticon-swimming display-4 text-primary"></span>
							<h3>Kamar Mandi Dalam</h3>
							<p class="mb-0">Privasi penghuni kos akan terjaga dikarenakan kamar mandi kos ada di dalam kamar</p>
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
						<p>Bagi Kalian yang ingin melihat daftar kamar kos di kost anisa. Bisa Kalian Klik tombol di bawah ini !</p>
						<p class="mb-0"><a href="/info#kamarTersedia" class="btn btn-outline-white text-white btn-md font-weight-bold">See more</a></p>
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
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Apa yang membuat harus memesan kamar kos di kos anisa?</button>
					</h2>

					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_1">
						<div class="accordion-body">
						Kos Anisa Dekat dengan banyak kampus dan terjangkau untuk mahasiswa.						
					</div>
					</div>
				</div>

				<div class="accordion-item">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Siapa yang bisa memesan kamar kos di kos anisa?</button>
					</h2>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_1">
						<div class="accordion-body">
						Kos anisa untuk khalayak umum dan siapapun yang ingin nge kos.						
					</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Dimana letak kos anisa ?</button>
					</h2>

					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_1">
					<div class="accordion-body">
					Jln.Penangunggan 1b no.10					
					</div>
					</div>

				</div>

				<div class="accordion-item">
					<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Dimana letak kos anisa ?</button>
					</h2>

					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion_1">
					<div class="accordion-body">
					Pemesanan kamar kos di kos anisa bisa dilakukan offline dan Online melalui Transfer Bank, Gopay, dll.					
					</div>
					</div>

				</div>

				<div class="accordion-item">
					<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Dimana letak kos anisa ?</button>
					</h2>

					<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion_1">
					<div class="accordion-body">
					Karena Lokasi strategis, Terjangkau, dan Mudah pembayaran.					
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
					<p class="mb-4 lead text-white text-white-opacity">Melayani dengan sepenuh hati</p>
				</div>
			</div>
		</div>
	</div>

<?= $this->endSection(); ?>