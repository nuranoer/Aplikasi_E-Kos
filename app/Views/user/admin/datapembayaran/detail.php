<?= $this->extend('userlayout/templates'); ?>

<?= $this->section('content'); ?>
                
<div class="page-heading">
    <div class="page-title">

        <!-- flash data -->
        <?php if(session()->getFlashdata('success')) : ?>
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle"></i> 
                    <?= session()->getFlashdata('success'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <?php elseif(session()->getFlashdata('error')): ?>
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-file-excel"></i>
                    <?= session()->getFlashdata('error'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <!-- end flash data -->

        <div class="row">
            <div class="col-12 col-md-12 order-md-1 order-last">
                <?php if(empty($data[0]->fullname)): ?>
                <h3>-</h3>
                <?php else: ?>
                <h3>Detail Pembayaran Kamar <?= $data[0]->fullname; ?></h3>
                <?php endif; ?>
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
                            <th>Tanggal Bayar</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        <?php foreach($data as $d): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $d->fullname; ?></td>
                            <td><?= $d->tanggal_pembayaran; ?></td>
                            <td>
                                <?php if($d->status_pembayaran == 'Diterima'): ?>
                                <span class="badge bg-success"><?= $d->status_pembayaran; ?></span>
                                <?php elseif($d->status_pembayaran == 'Menunggu Verifikasi'): ?>
                                <span class="badge bg-warning"><?= $d->status_pembayaran; ?></span>
                                <?php else: ?>
                                <span class="badge bg-danger"><?= $d->status_pembayaran; ?></span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <!-- btn edit -->
                                <button class="btn icon btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#formEdit<?= $d->id_pembayaran; ?>"><i class="bi bi-pencil"></i></button>
                                <!-- btn detail using modal -->
                                <button class="btn icon btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalDetail<?= $d->id_pembayaran; ?>"><i class="bi bi-info-circle"></i></button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <?php foreach ($data as $d): ?>
                <!-- form edit -->
                <div class="modal fade text-left" id="formEdit<?= $d->id_pembayaran; ?>" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel33" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable"
                        role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel33">Form Edit Pembayaran Bulanan</h4>
                                <button type="button" class="close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                            <form action="/editpembayaran/<?= $d->id_pembayaran; ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                                <div class="modal-body">
                                    <input type="hidden" value="<?= $d->id_penghuni; ?>" class="form-control" name="id_penghuni">
                                    <!-- transfer -->
                                    <div class="col-12">
                                        <fieldset class="form-group">
                                            <label>Transfer Via:</label>
                                            <select class="form-select" name="transfer_via" id="transfer_via" aria-readonly="readonly">
                                                <option value="BRI" <?= $d->transfer_via == 'BRI'? 'selected':''?>>BRI</option>
                                                <option value="BNI" <?= $d->transfer_via == 'BNI'? 'selected':''?>>BNI</option>
                                                <option value="BCA" <?= $d->transfer_via == 'BCA'? 'selected':''?>>BCA</option>
                                                <option value="LinkAja" <?= $d->transfer_via == 'LinkAja'? 'selected':''?>>LinkAja</option>
                                                <option value="Dana" <?= $d->transfer_via == 'Dana'? 'selected':''?>>Dana</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <!-- Status -->
                                    <div class="col-12">
                                        <fieldset class="form-group">
                                            <label>Status:</label>
                                            <select class="form-select" name="status_pembayaran" id="status_pembayaran">
                                                <option value="Diterima" <?= $d->status_pembayaran == 'Diterima'? 'selected':''?>>Diterima</option>
                                                <option value="Ditolak" <?= $d->status_pembayaran == 'Ditolak'? 'selected':''?>>Ditolak</option>
                                                <option value="Menunggu Verifikasi" <?= $d->status_pembayaran == 'Menunggu Verifikasi'? 'selected':''?>>Menunggu Verifikasi</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-secondary"
                                        data-bs-dismiss="modal">
                                        <i class="bx bx-x d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Close</span>
                                    </button>
                                    <button type="submit" class="btn btn-primary ml-1"
                                        data-bs-dismiss="modal">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Edit Sekarang</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                
                <!-- detail pembayaran -->
                <?php foreach ($data as $d): ?>
                <div class="modal fade" id="modalDetail<?= $d->id_pembayaran; ?>" tabindex="-1" role="dialog"
                    aria-labelledby="nama_kamar" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Detail Pembayaran <?= $d->fullname; ?> 
                                <?php if($d->status_pembayaran == 'Diterima'): ?>
                                <span class="badge bg-success"><?= $d->status_pembayaran; ?></span>
                                <?php elseif($d->status_pembayaran == 'Menunggu Verifikasi'): ?>
                                <span class="badge bg-warning"><?= $d->status_pembayaran; ?></span>
                                <?php else: ?>
                                <span class="badge bg-danger"><?= $d->status_pembayaran; ?></span>
                                <?php endif; ?>
                                </h5>
                                <button type="button" class="close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h6>Bukti Pembayaran :</h6>
                                <img src="pembayaran/<?= $d->bukti; ?>" alt="" width="450"> 
                                <h6 class="mt-2">Transfer Ke</h6>
                                <p><?= $d->transfer_via; ?></p>
                                <h6>Nama Kamar (Harga per Bulan):</h6>
                                <p><?= $d->nama_kamar; ?> (<?= $d->harga_kamar; ?>)</p>
                                <h6>Tanggal Pembayaran :</h6>
                                <p><?= $d->tanggal_pembayaran; ?></p>
                                <h6>Durasi Tinggal :</h6>
                                <p><?= $d->durasi; ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Close</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>
            
