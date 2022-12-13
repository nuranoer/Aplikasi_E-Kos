<?= $this->extend('userlayout/templates'); ?>

<?= $this->section('content'); ?>

    <div class="page-heading">
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kamar</th>
                                    <th>Rencana Tinggal</th>
                                    <th>Durasi</th>
                                    <th>Status</th>
                                    <th>Keterangan Ibu Kost</th>
                                    <th>Tgl Pesan</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($pemesanan as $p) :
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $p->nama_kamar ?></td>
                                    <td><?= $p->pengajuan ?></td>
                                    <td><?= $p->durasi ?> bulan</td>
                                    <td>
                                        <?php if($p->status_pemesanan == 'Menunggu Verifikasi'): ?>
                                            <span class="badge bg-warning"><?= $p->status_pemesanan ?></span>
                                        <?php elseif($p->status_pemesanan == 'Disetujui'): ?>
                                            <span class="badge bg-success"><?= $p->status_pemesanan ?></span>
                                        <?php else: ?>
                                            <span class="badge bg-danger"><?= $p->status_pemesanan ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if(empty($p->keterangan)): ?>
                                            <h6 class="text-danger">(Mohon menunggu verifikasi ibu kost)</h6>
                                        <?php else: ?>
                                            <?= $p->keterangan ?>
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $p->tgl_pesan ?></td>
                                </tr>
                                
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </section>
    </div>

<?= $this->endSection(); ?>