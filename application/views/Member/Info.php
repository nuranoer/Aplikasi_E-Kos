	<?php $this->load->view('templates/User/Header'); ?>

	<!-- ____________________info kost______________________________--> 
	<div class="allcontain">
		<div class="feturedsection">
			<h1 class="text-center"><span class="bdots">&bullet; INFO KOST / KONTRAKAN  &bullet; </span></h1>
		</div>
		<div class="feturedimage">
			<div class="row firstrow">
				<?php foreach ($hunian as $key => $value) { ?>

				<div class="col-lg-6 costumcol colborder1">
					<div class="row costumrow">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
							<img src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->gambar; ?>" alt="">
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
							<div class="featurecontant">
								<h1><?php echo $value->nama_hunian; ?></h1>
								<p>Fasilitas : <?php echo $value->deskripsi_hunian; ?></p>
								<p>Status : <b><?php echo $value->status_hunian; ?></b></p>
								<h2>Harga Rp.<?php echo $value->harga_hunian; ?></h2><br>
								<center><a  href="<?php echo base_url()."Welcome/Regis";?>" class="btn btn-primary">PESAN</a></center>

							</div>
						</div>
					</div>
				</div><?php } ?>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>

	<?php $this->load->view('templates/User/Footer'); ?>