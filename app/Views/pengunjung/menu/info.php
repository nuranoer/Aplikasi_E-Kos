<?= $this->extend('pengunjung/layouts/templates'); ?>
<?= $this->section('content'); ?>

	<!-- Jumbotron -->
	<div class="hero hero-inner">
		<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 mx-auto text-center">
			<div class="intro-wrap">
				<h1 class="mb-0">Seputar Kost</h1>
				<p class="text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
			</div>
			</div>
		</div>
		</div>
  	</div>

	<!-- info detail kost -->
	<!-- <div class="untree_co-section">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-lg-6">
					<h2 class="section-title text-center mb-3">Info Harga Kamar Kos</h2>
					<p>Silahkan di pesan kakak!!</p>
				</div>
			</div>
			<div class="row">
            	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
					<div class="media-1">
                    	<a class="d-block mb-3"><img src="" alt=""></a>
						<div class="d-flex align-items-center">
							<div>
                            	<h1>Nama kamar</h1>
								<p>Fasilitas : </p>
								<p>Status : </p>
								<h2>Harga Rp.</h2><br>
								<a  href="#" class="btn btn-primary">PESAN</a>
							</div>							
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Kamar yang Tersedia -->
	<div class="untree_co-section" id="kamarTersedia">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-lg-6">
					<h2 class="section-title text-center mb-3">Kamar yang Tersedia</h2>
					<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> -->
				</div>
			</div>
			<div class="row">
			<?php foreach ($kamar as $k) : ?>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-lg-0">
					<div class="media-1">
						<img src="gambar_kamar/<?= $k['gambar'] ?>" alt="Image" class="img-fluid d-block mb-3">
						<span class="d-flex align-items-center loc mb-2">
							<span class="icon-room mr-3"></span>
							<span>Kost Putri Anisa Kediri</span>
						</span>
						<div class="d-flex align-items-center">
							<div>
								<h3><?= $k['nama_kamar'] ?></h3>
								<div class="price ml-auto mb-2">
									<span>Rp. <?= $k['harga_kamar'] ?></span>
								</div>
								<?php if(in_groups('admin')): ?>
								<div class="modal-info me-1 mb-1 d-inline-block">
									<!-- Button trigger for info theme modal -->
									<button type="button" class="btn btn-primary" data-bs-toggle="modal"
										data-bs-target="#admin">Order</button>

									<!--info theme Modal -->
									<div class="modal fade text-left" id="admin" tabindex="-1" role="dialog"
										aria-labelledby="myModalLabel130" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
											role="document">
											<div class="modal-content">
												<div class="modal-header bg-info">
													<h5 class="modal-title text-white" id="myModalLabel130">Info
													</h5>
													<button type="button" class="close" data-bs-dismiss="modal"
														aria-label="Close">
														<i data-feather="x"></i>
													</button>
												</div>
												<div class="modal-body">
													<h5>Anda adalah pengelola!</h5>
												</div>
												<div class="modal-footer">
												<button type="button" class="btn btn-info ml-1"
														data-bs-dismiss="modal">
														<i class="bx bx-check d-block d-sm-none"></i>
														<span class="d-none d-sm-block">Ok!</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php elseif(in_groups('penghuni')): ?>
								<!-- Button trigger for form modal -->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal"
										data-bs-target="#inlineForm<?= $k['id_kamar'] ?>">Order</button>

                                <!-- form Modal -->
                                <div class="modal fade text-left" id="inlineForm<?= $k['id_kamar'] ?>" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel33" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel33">Form Pemesanan</h4>
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <form action="#">
                                                <div class="modal-body">
													<!-- username -->
													<input type="hidden" value="<?= user()->id; ?>" class="form-control" disabled>
													<!-- id kamar -->
                                                    <label>ID Kamar: </label>
                                                    <div class="form-group">
                                                        <input type="text" value="<?= $k['nama_kamar'] ?>" class="form-control" disabled>
                                                    </div>
													<!-- durasi -->
                                                    <label>Durasi</label>
													<select class="custom-select">
														<option value="3">3 Bulan</option>
														<option value="6">6 Bulan</option>
														<option value="9">9 Bulan</option>
														<option value="12">1 Tahun</option>
														<option value="18">1,5 Tahun</option>
														<option value="24">2 Tahun</option>
													</select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-secondary"
                                                        data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                    <button type="button" class="btn btn-primary ml-1"
                                                        data-bs-dismiss="modal">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">login</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

								<?php else: ?>
								<div class="modal-danger me-1 mb-1 d-inline-block">
									<!-- Button trigger for danger theme modal -->
									<button type="button" class="btn btn-primary" data-bs-toggle="modal"
										data-bs-target="#danger">Order</button>

									<!--Danger theme Modal -->
									<div class="modal fade text-left" id="danger" tabindex="-1" role="dialog"
										aria-labelledby="myModalLabel120" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
											role="document">
											<div class="modal-content">
												<div class="modal-header bg-danger">
													<h5 class="modal-title text-white" id="myModalLabel120">Perhatian!</h5>
													<button type="button" class="close" data-bs-dismiss="modal"
														aria-label="Close">
														<i data-feather="x"></i>
													</button>
												</div>
												<div class="modal-body">
													Jika anda yakin ingin memesan kamar ini, silakan untuk membuat akun khusus penghuni terlebih dahulu!
												</div>
												<div class="modal-footer">
													<!-- <button type="button" class="btn btn-light-secondary"
														data-bs-dismiss="modal">
														<i class="bx bx-x d-block d-sm-none"></i>
														<span class="d-none d-sm-block">Close</span>
													</button> -->
													<button type="button" class="btn btn-danger ml-1"
														data-bs-dismiss="modal">
														<i class="bx bx-check d-block d-sm-none"></i>
														<span class="d-none d-sm-block">Ok!</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			</div>
		</div>
	</div>

	<!-- Layanan kami -->
	<div class="untree_co-section" id="layananKamar">
		<div class="container">
			<div class="row mb-5 justify-content-center">
				<div class="col-lg-6 text-center">
					<h2 class="section-title text-center mb-3">Layanan Kamar</h2>
				</div>
			</div>
			<div class="d-flex justify-content-center">
				<div class="row">
					<div class="col-lg-6" >
						<div class="feature-1">
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
					<div class="col-lg-6" >
	
						<div class="feature-1">
							<div class="align-self-center">
								<span class="flaticon-mail display-4 text-primary"></span>
								<h3>Free Wifi</h3>
								<p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
							</div>
						</div>
	
						<div class="feature-1">
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
	</div>
	
	<!-- gallery / detail -->
	<div class="untree_co-section" id="galleryKamar">
		<div class="container">
			<div class="row mb-5 justify-content-center">
				<div class="col-lg-6 text-center">
					<h2 class="section-title text-center mb-3">Detail Kamar</h2>
				</div>
			</div>
			<div class="d-flex justify-content-center">
			<div class="row gutter-v2 gallery">
              <div class="col-4">
                <a href="auth/images/gal_1.jpg" class="gal-item" data-fancybox="gal"><img src="auth/images/gal_1.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4">
                <a href="auth/images/gal_2.jpg" class="gal-item" data-fancybox="gal"><img src="auth/images/gal_2.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4">
                <a href="auth/images/gal_3.jpg" class="gal-item" data-fancybox="gal"><img src="auth/images/gal_3.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4">
                <a href="auth/images/gal_4.jpg" class="gal-item" data-fancybox="gal"><img src="auth/images/gal_4.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4">
                <a href="auth/images/gal_5.jpg" class="gal-item" data-fancybox="gal"><img src="auth/images/gal_5.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4">
                <a href="auth/images/gal_6.jpg" class="gal-item" data-fancybox="gal"><img src="auth/images/gal_6.jpg" alt="Image" class="img-fluid"></a>
              </div>
            </div>
			</div>
		</div>
	</div>

<?= $this->endSection(); ?>