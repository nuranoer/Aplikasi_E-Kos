<?php $this->load->view('templates/Admin/Header'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?php echo $button; ?> Data Pesanan</h1>
		</div>
		<?php $this->session->flashdata('pesan') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama Pemesan: </label>
				<input type="text" name="nama" class="form-control" readonly>
			</div>
			<div class="form-group">
				<label>Jenis Hunian</label>
				<input type="text" name="nama_hunian" class="form-control" readonly>
			</div>

			<div class="form-group">
				<label>Tanggal Mulai</label>
				<input type="date" name="tanggal_mulai" class="form-control" value="<?php echo $tanggal_mulai; ?>">
			</div>
			<div class="form-group">
				<label>Durasi</label><br>
				<input type="radio" name="durasi" value="1 Bulan"> 1 Bulan &nbsp;
				<input type="radio" name="durasi" value="3 Bulan"> 3 Bulan &nbsp;
				<input type="radio" name="durasi" value="6 Bulan"> 6 Bulan
			</div>			
			<input type="hidden" name="id_pesan" value="<?php echo $id_pesan; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('Pesan')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/Admin/Footer'); ?>