<?php $this->load->view('templates/Admin/Header');?>

 <div id="page-wrapper" >
    <div id="page-inner">
      <div class="row">
        <div class="col-lg-12">
           <h2>DATA KOMPLAIN MEMBER</h2>
           <hr>   
       </div><?=$this->session->flashdata('komplain')?>
   </div>          
	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nama Member</th>
					<th>Nama Hunian</th>
					<th>Perihal</th>
					<th>Isi Keluhan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($komplain as $key => $value) { ?>
				<tr class="warning">
					<td><?php echo $value->id_komplain; ?></td>
					<td><?php echo $value->nama_member; ?> </td>
					<td><?php echo $value->nama_hunian; ?></td>
					<td><?php echo $value->perihal; ?></td>
					<td><?php echo $value->isi; ?></td>
					<td>
						<a href="<?php echo site_url('Komplain/delete/'.$value->id_komplain); ?>"
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
<!-- /. PAGE WRAPPER  -->     
<?php $this->load->view('templates/Admin/Footer'); ?>