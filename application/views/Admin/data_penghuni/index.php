<?php $this->load->view('templates/admin/header'); ?>
<?php $this->load->view('templates/admin/sidebar'); ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Penghuni</h3>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No.</th>
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
                <?php
                if ($member) :
                    $no = 1;
                    foreach ($member as $m) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?php echo $m->nama_member; ?></td>
                            <td><?php echo $m->pass_member; ?></td>
                            <td><?php echo $m->email_member; ?></td>
                            <td><?php echo $m->status; ?></td>
                            <td><?php echo $m->nohp; ?></td>
                            <td><?php echo $m->alamat_member; ?></td>
                            <th>
                                
                                <a href="<?php echo site_url('penghuni/update/'.$m->id_member); ?>"
                                    class="btn btn-primary">
                                    <i class="fa fa-pencil-square"></i>
                                </a>
                                <a href="<?php echo site_url('penghuni/delete/'.$m->id_member); ?>"
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