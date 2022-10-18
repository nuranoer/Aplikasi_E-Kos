<?php $this->load->view('templates/User/Header'); ?>
		<!--_______________________________________Register_________________________________ -->

		<<div class="allcontain">
			<div class="feturedsection">
				<h1 class="text-center"><span class="bdots">&bullet; Registrasi Member   &bullet; </span></h1>
			</div>
		</div>
		<div class="text-center">		
			<div class="car">
				<center>

					<form action="<?php echo base_url(). 'Member/daftar_aksi'; ?>" method="post">
						<table align ="text-center">
							<tr> <td> Nama Lengkap </td>
								<td> : 	</td>
								<td> <div class="form-group">
									<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap Anda">
								</div></td>
							</tr>

							<tr> <td> Password </td>
								<td> : </td>
								<td> <div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Password">
								</div></td>
							</tr>

							<tr> <td> Email </td>
								<td> : </td>
								<td><div class="form-group">
									<input type="text" class="form-control" name="email" placeholder="Email Anda">
								</div></td>
							</tr>

							<tr> <td> Status/Pekerjaan </td>
								<td> : </td>
								<td> <div class="form-group">
									<input type="text" class="form-control" name="status" placeholder="Status/Pekerjaan Anda">
								</div></td>
							</tr>

								<tr> <td> No HP </td>
								<td> : </td>
								<td><div class="form-group">
									<input type="text" class="form-control" name="nohp" placeholder="No HP Anda">
								</div></td>
							</tr>

							<tr> <td> Alamat </td>
								<td> : </td>
								<td><div class="form-group">
									<input type="text" class="form-control" name="alamat" placeholder="Alamat Anda">
								</div></td>
							</tr>

							<tr> <td></td>
								<td><button type="submit" class="btn btn-warning" value="DAFTAR" >DAFTAR</button></td>
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
	<?php $this->load->view('templates/User/Footer'); ?>