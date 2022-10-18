<?php $this->load->view('templates/admin/header'); ?>
<?php $this->load->view('templates/admin/sidebar'); ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Kamar</h3>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
        <div class="col-auto">
                <a href="<?= base_url('kamar/tambah') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Data
                    </span>
                </a>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Fasilitas</th>
                            <th>Status</th>
                            <th>Harga</th>
                            <th style="width:200px">Gambar</th>
                            <th style="width: 96px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                if ($kamar) :
                    $no = 1;
                    foreach ($kamar as $k) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?php echo $k->nama_hunian; ?></td>
                            <td><?php echo $k->deskripsi_hunian; ?></td>
                            <td><?php echo $k->status_hunian; ?></td>
                            <td><?php echo $k->harga_hunian; ?></td>
                            
                            <td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/admin/uploads/<?php echo $k->gambar; ?>"></td>
                            <th>
                                
                                <a href="<?php echo site_url('kamar/update/'.$k->id_hunian); ?>"
                                    class="btn btn-primary">
                                    <i class="fa fa-pencil-square"></i>
                                </a>
                                <a href="<?php echo site_url('kamar/delete/'.$k->id_hunian); ?>"
                                    class="btn btn-danger">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </th>	
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>               
        </table>
            </div>
        </div>

    </section>
</div>
<?php $this->load->view('templates/admin/footer'); ?>