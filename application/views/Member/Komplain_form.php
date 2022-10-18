<?php $this->load->view('templates/User/Header_member'); ?>
		<!--_______________________________________Register_________________________________ -->

		<<div class="allcontain">
			<div class="feturedsection">
				<h1 class="text-center"><span class="bdots">&bullet; Sampaikan Keluhan Anda tentang Fasilitas Hunian  &bullet; </span></h1>
			</div>
		</div>	
				<center>
					<form action="<?php echo $aksi; ?>" method="POST">
						<table align ="text-center">
							<input type="hidden" name="id_komplain" value="<?php echo $id_komplain; ?>">
							<input type="hidden" name="id_hunian" value="<?php echo $id_hunian; ?>">
          					<input type="hidden" name="id_member" value="<?php echo $id_member; ?>">
          					

							<tr> <td>Perihal</td>
								<td> &nbsp; : </td>
								<td><div class="form-group">
									<input type="radio" name="perihal" value="Air"> Air &nbsp;
									<input type="radio" name="perihal" value="Listrik"> Listrik &nbsp;
									<input type="radio" name="perihal" value="Keran Air"> Keran Air &nbsp;
									<input type="radio" name="perihal" value="Keran Air"> Lampu &nbsp;
									<input type="radio" name="perihal" value="Kerusakan Lain"> Kerusakan Lain &nbsp;
								</div></td>
							</tr>

							<tr> <td>Isi</td>
								<td> : </td>
								<td><div class="form-group">
									<textarea name="isi" cols="50" rows="5"></textarea>
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
	<br>
	<br>
	<br>
	<?php $this->load->view('templates/User/Footer'); ?>