<?php $this->load->view('templates/User/Header_member'); ?>
<!--_______________________________________Register_________________________________ -->

<div class="allcontain">
	<div class="feturedsection">
		
		<h1 class="text-center"><span class="bdots">&bullet; FORM PEMBAYARAN SEWA  &bullet; </span></h1>
	</div>
</div>
<div class="text-center">		
	<div class="car">
		<center>
			 <?php $this->session->flashdata('sewa') ?>
			<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
				<table align ="text-center">
							<input type="hidden" name="id_sewa" value="<?php echo $id_sewa; ?>">
							<input type="hidden" name="id_hunian" value="<?php echo $id_hunian; ?>">
          					<input type="hidden" name="id_member" value="<?php echo $id_member; ?>">

					<tr> <td> Tanggal Pembayaran </td>
						<td> : </td>
						<td><div class="form-group">
							<input type="date" class="form-control" name="tanggal" placeholder="--Tanggal/Bulan/Tahun--">
						</div></td>
					</tr>
					<tr> <td> Nominal Pembayaran </td>
						<td> : </td>
						<td> <div class="form-group">
							<input type="text" class="form-control" name="nominal" placeholder="Nominal Pembayaran">
						</div></td>
					</tr>

					<tr> <td>Bukti Transfer Pembayaran </td>
						<td> : </td>
						<td><div class="form-group">
							 <input type="file" name="filefoto" class="form-control" placeholder="Inputkan Gambar Bukti Transfer">
						</div></td>
					</tr>

					<tr> <td></td>
						<td><button type="submit" class="btn btn-warning btn-block" value="OK"><?php echo $button; ?> </button></td>
							<td></td>
						</tr>
					</table>
				</form>
			</center>
		</div>
	</div>
</div>
<BR>
<BR>
<br>
<br>
<br>
<BR>
<?php $this->load->view('templates/User/Footer'); ?>