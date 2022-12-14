<?= $this->extend('userlayout/templates'); ?>

<?= $this->section('content'); ?>
                
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-12 order-md-1 order-last">
                <h3>Detail Pembayaran Kamar <?= $data[0]->fullname; ?></h3>
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
                            <th>Nama Penghuni</th>
                            <th>Nama Kamar</th>
                            <th>Harga (perbulan)</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rexana W. A</td>
                            <td>Kamar VIP - 2</td>
                            <td>Rp. 500000</td>
                            <td><span class="badge bg-success">Accept</span></td>
                            <td>
                                <!-- btn edit -->
                                <a href="#" class="btn icon btn-warning"><i class="bi bi-pencil"></i></a>
                                <!-- btn detail using modal -->
                                <button class="btn icon btn-primary btn-detail"  type="button" data-bs-toggle="modal" data-bs-target="#modalDetail"><i class="bi bi-info-circle"></i></button>
                                <!-- btn delete -->
                                <button type="button" class="btn icon btn-danger" data-bs-toggle="modal" data-bs-target="#danger"><i class="bi bi-trash3"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>
            
