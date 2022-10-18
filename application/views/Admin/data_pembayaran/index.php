<?php $this->load->view('templates/admin/header'); ?>
<?php $this->load->view('templates/admin/sidebar'); ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Pembayaran Penghuni Kos</h3>
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
                        <th>ID </th>
                        <th>Nama</th>
                        <th>Hunian</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Nominal</th>
                        <th>Bukti Transfer Sewa</th>
                        <th>Bulan-Tahun </th>
                        <th>Status</th>
					
                        <th style="width: 96px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                if ($bayar) :
                    $no = 1;
                    foreach ($bayar as $b) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?php echo $b->id_sewa; ?></td>
                            <td><?php echo $b->nama_member ?></td>
                            <td><?php echo $b->nama_hunian; ?></td>
                            <td><?php echo $b->tanggal; ?></td>
                            <td><?php echo $b->nominal; ?></td>
                            <td><?php echo $b->gambar; ?><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/admin/uploads/<?php echo $b->gambar; ?>"></td>
                            <td><?php echo $b->bulan; ?></td>
                            <td><?php echo $b->status; ?></td>
                            <th>
                                
                                <a href="<?php echo site_url('penghuni/update/'.$b->id_sewa); ?>"
                                    class="btn btn-primary">
                                    <i class="fa fa-pencil-square"></i>
                                </a>
                                <a href="<?php echo site_url('penghuni/delete/'.$b->id_sewa); ?>"
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