<?= $this->extend('userlayout/templates'); ?>

<?= $this->section('content'); ?>
                
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Pembayaran Bulanan</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <a href="/pembayaranpenghuni" class="btn icon icon-left btn-info"><i data-feather="info"></i>Detail per Penghuni</a>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="dataTables">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Penghuni</th>
                            <th>Kamar</th>
                            <th>Pembayaran</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        <?php foreach($data as $d): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $d->fullname; ?></td>
                            <td><b><?= $d->nama_kamar; ?></b> (Rp. <?= $d->harga_kamar; ?>)</td>
                            <td><?= $d->yg_dibayarkan; ?> / <?= $d->durasi; ?></td>
                            <td>Rp. <?= $d->jumlah_saat_ini; ?></td>
                            <td>
                                <?php if($d->yg_dibayarkan == $d->durasi): ?>
                                <span class="badge bg-success">Lunas</span>
                                <?php else: ?>
                                <span class="badge bg-danger">Belum Lunas</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4">Total</td>
                            <td>Rp. (Total)</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>
            
