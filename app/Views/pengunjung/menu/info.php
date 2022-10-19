<?= $this->extend('pengunjung/layouts/app'); ?>
<?= $this->section('content'); ?>

<div class="untree_co-section">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-lg-6">
					<h2 class="section-title text-center mb-3">Info Harga Kamar Kos</h2>
					<p>Silahkan di pesan kakak!!</p>
				</div>
			</div>
			<div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
                <?php foreach ($kamar as $kamar => $k) { ?>
					<div class="media-1">
                    <a class="d-block mb-3"><img src="<?php echo site_url()?>/admin/uploads/<?php echo $k->gambar; ?>" alt=""></a>
						<div class="d-flex align-items-center">
							<div>
                            <h1><?php echo $k->nama_hunian; ?></h1>
								<p>Fasilitas : <?php echo $k->deskripsi_hunian; ?></p>
								<p>Status : <b><?php echo $k->status_hunian; ?></b></p>
								<h2>Harga Rp.<?php echo $k->harga_hunian; ?></h2><br>
								<center><a  href="<?php echo base_url()."Welcome/Regis";?>" class="btn btn-primary">PESAN</a></center>
							</div>
							
						</div>
						
					</div><?php } ?>
				</div>
</div>
</div>



<?php $this->load->view('templates/pengunjung/footer'); ?>

<?= $this->endSection(); ?>