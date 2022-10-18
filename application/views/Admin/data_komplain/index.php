<?php $this->load->view('templates/admin/header'); ?>
<?php $this->load->view('templates/admin/sidebar'); ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Komplain</h3>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                        <th>No</th>
                        <th>Nama Member</th>
                        <th>Nama Hunian</th>
                        <th>Perihal</th>
                        <th>Isi Keluhan</th>
                        <th style="width: 96px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                if ($komplain) :
                    $no = 1;
                    foreach ($komplain as $c) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?php echo $c->nama_member; ?> </td>
                            <td><?php echo $c->nama_hunian; ?></td>
                            <td><?php echo $c->perihal; ?></td>
                            <td><?php echo $c->isi; ?></td>
                            <th>
                                
                                <a href="<?php echo site_url('penghuni/update/'.$c->id_komplain); ?>"
                                    class="btn btn-primary">
                                    <i class="fa fa-pencil-square"></i>
                                </a>
                                <a href="<?php echo site_url('penghuni/delete/'.$c->id_komplain); ?>"
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