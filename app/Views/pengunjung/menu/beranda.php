<?= $this->extend('pengunjung/layouts/app'); ?>
<?= $this->section('content'); ?>

<body>

	<div class="hero">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="intro-wrap">
						<h1 class="mb-5"><span class="d-block">Selamat Datang</span> di Kost Annisa </h1>

						<div class="row">
							<div class="col-12">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="slides">
						<img src="<?= base_url() ?>/auth/images/kos/kos1.jpeg" alt="Image" class="img-fluid active">
						<img src="<?= base_url() ?>/auth/images/kos/kos2.jpeg" alt="Image" class="img-fluid">
						<img src="<?= base_url() ?>/auth/images/kos/kos3.jpeg" alt="Image" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>




	<div class="untree_co-section testimonial-section mt-5">
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


	
	
	<div class="py-5 cta-section">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
					<h2 class="mb-2 text-white">KOST ANNISA</h2>
					<p class="mb-4 lead text-white text-white-opacity">Jln.Penangunggan 1b no.10</p>
					
				</div>
			</div>
		</div>
	</div>

</body>

<?= $this->endSection(); ?>
