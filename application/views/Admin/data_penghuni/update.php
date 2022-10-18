<?php $this->load->view('templates/admin/header'); ?>
<?php $this->load->view('templates/admin/sidebar'); ?>

</head><div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Update Data Penghuni Kos</h1>
		</div>
				<form action="http://localhost/kostanisa/Member/update_aksi" method="POST" enctype="multipart/form-data">

			<div class="form-group">
				<label>Nama </label>
				<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama"
				required value="Sri Indah Anggaraeny">
			</div>

			<div class="form-group">
				<label>Password </label>
				<input type="password" name="password" class="form-control" placeholder="Masukkan Password" 
				required value="11111" readonly >
			</div>

			<div class="form-group">
				<label>Email </label>
				<input type="email" name="email" class="form-control" placeholder="Masukkan Email"
				required value="sri15ti@mahasiswa.pcr.ac.id" >
			</div>
			
			<div class="form-group">
				<label>Status/Pekerjaan</label>
				<input type="text" name="status" class="form-control" placeholder="Masukkan Status/Pekerjaan "
				required value="Mahasiswa">
			</div>

			<div class="form-group">
				<label>No HP</label>
				<input type="text" name="nohp" class="form-control" placeholder="Masukkan No HP "
				required value="081219876654">
			</div>

			<div class="form-group">
				<label>Alamat </label>
				<input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat"
				required value="Bukit Kerikil">
			</div>		
			<input type="hidden" name="id_member" value="12">
			<button class="btn btn-primary" type="submit">Perbarui</button>
			<a href="http://localhost/kostanisa/Member/data_member" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/admin/footer'); ?>