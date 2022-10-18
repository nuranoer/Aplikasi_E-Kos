<?php $this->load->view('templates/Admin/Header');?>
<div id="page-wrapper" >
	<div id="page-inner">
		<div class="row">
			<div class="col-lg-12">
				<h2>DATA PEMESANAN</h2>
				<hr> 
			</div><?=$this->session->flashdata('Pesan')?>	
		</div>
		<div class="row">
			<table id="example" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nama Pemesan</th>
						<th>No HP</th>
						<th>Nama Hunian</th>
						<th>Tanggal Mulai</th>
						<th>Durasi per Bulan</th>
						<th style="width: 96px">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($pesan as $key => $value) { ?>
					<tr class="warning">
						<td><?php echo $value->id_pesan; ?></td>
						<td><?php echo $value->nama_member; ?> </td>
						<td><?php echo $value->nohp; ?></td>
						<td><?php echo $value->nama_hunian; ?></td>
						<td><?php echo $value->tanggal_mulai; ?></td>
						<td><?php echo $value->durasi; ?></td>
						<td>
							<a href="<?php echo site_url('Pesan/update/'.$value->id_pesan); ?>"
								class="btn btn-primary">
								<i class="fa fa-pencil-square"></i>
							</a>
							<a href="<?php echo site_url('Pesan/delete/'.$value->id_pesan); ?>"
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
</div>
</div>    
<?php $this->load->view('templates/Admin/Footer'); ?>