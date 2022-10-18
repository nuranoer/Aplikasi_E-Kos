<?php $this->load->view('templates/Admin/Header'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?php echo $button; ?> Data Member</h1>
		</div>
		<?php $this->session->flashdata('pesan') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">

			<div class="form-group">
				<label>Nama </label>
				<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama"
				required value="<?php echo $nama; ?>">
			</div>

			<div class="form-group">
				<label>Password </label>
				<input type="password" name="password" class="form-control" placeholder="Masukkan Password" 
				required value="<?php echo $password; ?>" readonly >
			</div>

			<div class="form-group">
				<label>Email </label>
				<input type="email" name="email" class="form-control" placeholder="Masukkan Email"
				required value="<?php echo $email; ?>" >
			</div>
			
			<div class="form-group">
				<label>Status/Pekerjaan</label>
				<input type="text" name="status" class="form-control" placeholder="Masukkan Status/Pekerjaan "
				required value="<?php echo $status; ?>">
			</div>

			<div class="form-group">
				<label>No HP</label>
				<input type="text" name="nohp" class="form-control" placeholder="Masukkan No HP "
				required value="<?php echo $nohp; ?>">
			</div>

			<div class="form-group">
				<label>Alamat </label>
				<input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat"
				required value="<?php echo $alamat; ?>">
			</div>		
			<input type="hidden" name="id_member" value="<?php echo $id_member; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('Member/data_member')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/Admin/Footer'); ?>