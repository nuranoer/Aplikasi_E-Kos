<?php $this->load->view('templates/Admin/Header'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"> Data Konfirmasi Pembayaran Sewa</h1>
		</div>
		<?php $this->session->flashdata('Sewa') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">

			<div class="form-group">
				<label>Bulan Pembayaran</label><br>
				<input type="text" name="bulan" class="form-control" value="<?php echo $bulan; ?>">
			</div>	

			<div class="form-group">
				<label>Status Pembayaran</label><br>
				<input type="radio" name="status" value="LUNAS"> LUNAS <br>
				<input type="radio" name="status" value="BELUM LUNAS"> BELUM LUNAS
			</div>			
			<input type="hidden" name="id_sewa" value="<?php echo $id_sewa; ?>">


			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('Sewa')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/Admin/Footer'); ?>