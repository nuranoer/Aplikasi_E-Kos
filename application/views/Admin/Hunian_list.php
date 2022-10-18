<?php $this->load->view('templates/Admin/Header');?>

<div id="page-wrapper" >
    <div id="page-inner">
      <div class="row">
        <div class="col-lg-12">
           <h2>DATA KOST/KONTRAKAN</h2>
           <hr> 
		</div><?=$this->session->flashdata('pesan')?>	
		<div class="col-md-12 text-right">
		<a href="<?php echo site_url('hunian/tambah'); ?>" class="btn btn-warning" 
		style="margin-top:20px; margin-bottom:20px">
		<i class="fa fa-plus-circle"></i> Tambah Data</a>
		</div>	

	</div>
	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th style="width: 10px">ID</th>
					<th>Nama</th>
					<th>Jenis</th>
					<th>Fasilitas</th>
					<th>Status</th>
					<th>Harga</th>
					<th style="width:200px">Gambar</th>
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($hunian as $key => $value) { ?>
				<tr class="warning">
					<td><?php echo $value->id_hunian; ?></td>
					<td><?php echo $value->nama_hunian; ?></td>
					<td><?php echo $value->jenis_hunian; ?></td>
					<td><?php echo $value->deskripsi_hunian; ?></td>
					<td><?php echo $value->status_hunian; ?></td>
					<td><?php echo $value->harga_hunian; ?></td>
					
					<td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/admin/uploads/<?php echo $value->gambar; ?>"></td>
					<td>
						
						<a href="<?php echo site_url('hunian/update/'.$value->id_hunian); ?>"
							class="btn btn-primary">
							<i class="fa fa-pencil-square"></i>
						</a>
						<a href="<?php echo site_url('hunian/delete/'.$value->id_hunian); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash-o"></i>
						</a>
					</td>	
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<!-- /. ROW  --> 
</div>
<!-- /. PAGE INNER  -->

<?php $this->load->view('templates/Admin/Footer'); ?>
	