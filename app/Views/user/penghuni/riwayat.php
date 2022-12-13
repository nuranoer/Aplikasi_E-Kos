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
                                    <th>Keterangan</th>
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
                                        <span class="badge <?= ($p->status_pemesanan == 'Menunggu Verifikasi') ? 'bg-warning' : 'bg-success' ?>"><?= $p->status_pemesanan ?></span>
                                    </td>
                                    <td><?= $p->keterangan ?></td>
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