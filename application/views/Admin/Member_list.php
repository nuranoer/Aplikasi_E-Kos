<?php $this->load->view('templates/Admin/Header');?>
<div id="page-wrapper" >
    <div id="page-inner">
      <div class="row">
        <div class="col-lg-12">
           <h2>DATA MEMBER </h2>
           <hr>   
		</div><?=$this->session->flashdata('member')?>	
	</div>
	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nama Member</th>
					<th>Password</th>
					<th>E-mail</th>
					<th>Status</th>
					<th>No HP</th>
					<th>Alamat</th>
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($member as $key => $value) { ?>
				<tr class="warning">
					<td><?php echo $value->id_member; ?></td>
					<td><?php echo $value->nama_member; ?></td>
					<td><?php echo $value->pass_member; ?></td>
					<td><?php echo $value->email_member; ?></td>
					<td><?php echo $value->status; ?></td>
					<td><?php echo $value->nohp; ?></td>
					<td><?php echo $value->alamat_member; ?></td>
					<td>
						
						<a href="<?php echo site_url('member/update/'.$value->id_member); ?>"
							class="btn btn-primary">
							<i class="fa fa-pencil-square"></i>
						</a>
						<a href="<?php echo site_url('member/delete/'.$value->id_member); ?>"
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
</div>
<!-- /. PAGE WRAPPER  -->     
<?php $this->load->view('templates/Admin/Footer'); ?>