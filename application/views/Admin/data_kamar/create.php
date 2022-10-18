<?php $this->load->view('templates/admin/header'); ?>
<?php $this->load->view('templates/admin/sidebar'); ?>

<section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Data Kamar Kost</h4>
                    </div>
                    <?php $this->session->flashdata('pesan') ?>
                    <div class="card-content">
                        <div class="card-body">
                        <form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Nama Kamar :</label>
                                            <input type="text" name="nama" class="form-control" placeholder="Nama Kamar" 
				                            required value="<?php echo $nama; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Fasilitas :</label>
                                            <textarea name="deskripsi" cols="50" rows="5"><?php echo $deskripsi; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Status Kamar :</label>
                                            <input type="text" name="status" class="form-control" placeholder="Inputkan Status Hunian" 
				                            required value="<?php echo $status; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Harga Kamar :</label>
                                            <input type="text" name="harga" class="form-control" placeholder="Inputkan Harga Hunian" 
				                                required value="<?php echo $harga; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Foto :</label>
                                            <input type="file" name="filefoto" class="form-control" placeholder="Inputkan Gambar Hunian">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $this->load->view('templates/admin/footer'); ?>