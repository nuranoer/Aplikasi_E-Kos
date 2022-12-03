<?= $this->extend('userlayout/templates'); ?>

<?= $this->section('content'); ?>
                
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Pemesanan Kamar</h3>
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
                            <th>Username</th>
                            <th>Kamar</th>
                            <th>Status</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($pemesanan as $row) :?>
                        <tr>
                            <td><?= $no++;?></td>
                            <td><?= $row->username; ?></td>
                            <td><?= $row->nama_kamar; ?></td>
                            <td>
                                <span class="badge <?= ($row->status_pemesanan == 'Menunggu Verifikasi') ? 'bg-warning' : 'bg-success' ?>"><?= $row->status_pemesanan ?></span>
                            </td>
                            <td><?= $row->tgl_pesan; ?></td>
                            <td>
                                <!-- btn edit -->
                                <a href="#" class="btn icon btn-warning"><i class="bi bi-pencil"></i></a>
                                <!-- btn detail using modal -->
                                <button class="btn icon btn-primary btn-detail"  type="button" data-bs-toggle="modal" data-bs-target="#modalDetail<?= $row->id_pemesanan; ?>"><i class="bi bi-info-circle"></i></button>
                                <!-- btn delete -->
                                <button type="button" class="btn icon btn-danger" data-bs-toggle="modal" data-bs-target="#danger"><i class="bi bi-trash3"></i></button>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>

                <?php foreach ($pemesanan as $row) :?>
                <!--scrolling content Modal -->
                <div class="modal fade" id="modalDetail<?= $row->id_pemesanan; ?>" tabindex="-1" role="dialog"
                    aria-labelledby="nama_kamar" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Pengajuan Pemesanan <?= $row->nama_kamar; ?> <span class="badge <?= ($row->status_pemesanan == 'Menunggu Verifikasi') ? 'bg-warning' : 'bg-success' ?>"><?= $row->status_pemesanan ?></span></h5>
                                <button type="button" class="close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="gambar_kamar/<?= $row->gambar ?>" alt="<?= $row->nama_kamar; ?>" width="300"> 
                                <br><br>
                                <h6>Nama Kamar :</h6>
                                <p><?= $row->nama_kamar; ?></p>
                                <br>
                                <h6>Nama yang Mengajukan :</h6>
                                <p>
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="avatar avatar-xl">
                                                <img src="assets/images/faces/<?= $row->user_image; ?>" alt="Face 1" />
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="ms-3 name">
                                                <h5 class="font-bold"><?= $row->fullname; ?></h5>
                                                <h6 class="text-muted"><?= $row->username; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </p>
                                <br>
                                <h6>Tanggal Pesan :</h6>
                                <p><?= $row->tgl_pesan; ?></p>
                                <h6>Rencana Tinggal :</h6>
                                <p><?= $row->pengajuan; ?></p>
                                <h6>Selama :</h6>
                                <p><?= $row->durasi; ?> bulan</p>
                                <h6>Status Kamar Saat Ini :</h6>
                                <p><span class="badge <?= ($row->status_kamar == 'Available') ? 'bg-success' : 'bg-danger' ?>"><?= $row->status_kamar ?></span></p>
                                <h6>Keterangan dari Ibu Kost :</h6>
                                <p><?= $row->keterangan; ?></p>
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
                <?php endforeach;?>
            </div>
        </div>

    </section>
</div>

<?= $this->endSection(); ?>
            
