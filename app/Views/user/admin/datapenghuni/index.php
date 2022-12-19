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
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Penghuni Kos</h3>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-responsive" id="dataTables">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Fullname</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>No Hp</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($users as $row) :?>
                        <tr>
                            <td><?= $no++;?></td>
                            <td><?= $row->fullname; ?></td>
                            <td><?= $row->username; ?></td>
                            <td><?= $row->email; ?></td>
                            <td><?= $row->no_hp; ?></td>
                            <td>
                                <span class="badge bg-success">Verified</span>
                            </td>
                            <td>
                                <!-- btn edit -->
                                <button class="btn icon btn-warning"  type="button" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $row->userid; ?>"><i class="bi bi-pencil"></i></button>
                                <!-- btn detail using modal -->
                                <button class="btn icon btn-primary"  type="button" data-bs-toggle="modal" data-bs-target="#modalDetail<?= $row->userid; ?>"><i class="bi bi-info-circle"></i></button>
                                <!-- btn delete -->
                                <button type="button" class="btn icon btn-danger" data-bs-toggle="modal" data-bs-target="#danger<?= $row->userid; ?>"><i class="bi bi-trash3"></i></button>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>

                <?php foreach ($users as $row) :?>
                <!-- MODAL HAPUS DATA -->
                <div class="modal fade text-left" id="danger<?= $row->userid; ?>" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel120" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                        role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <h5 class="modal-title white" id="myModalLabel120">PERHATIAN!
                                </h5>
                                <button type="button" class="close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                               <b>Apakah anda yakin menghapus data penghuni <?= $row->username; ?>? <br>
                               Data yang sudah dihapus tidak dapat dikembalikan.</b>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary"
                                    data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Cancel</span>
                                </button>
                                <a href="/deletepenghuni/<?= $row->userid; ?>" type="button" class="btn btn-danger ml-1">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Delete it!</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MODAL DETAIL -->
                <div class="modal fade" id="modalDetail<?= $row->userid; ?>" tabindex="-1" role="dialog"
                    aria-labelledby="username" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><?= $row->username; ?> <span class="badge bg-success">Verified</span></h5>
                                <button type="button" class="close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="assets/images/faces/<?= $row->user_image; ?>" alt="" width="300"> 
                                <br><br>
                                <h6>Fullname :</h6>
                                <p><?= $row->fullname; ?></p>
                                <h6>Email :</h6>
                                <p><?= $row->email; ?></p>
                                <h6>No Hp :</h6>
                                <p><?= $row->no_hp; ?></p>
                                <h6>Alamat Asli :</h6>
                                <p><?= $row->alamat; ?></p>
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

                <!-- MODAL EDIT -->
                <div class="modal fade" id="modalEdit<?= $row->userid; ?>" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel33" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel33">Form Edit Data Penghuni</h4>
                                <button type="button" class="close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                            <form action="/editpenghuni/<?= $row->userid; ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                                <div class="modal-body">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="Username">Username</label>
                                            <input type="text" id="Username" class="form-control" name="username" value="<?= $row->username; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="Fullname">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="Fullname" name="fullname" value="<?= $row->fullname; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="Email">Email</label>
                                            <input type="text" id="Email" class="form-control" name="email" value="<?= $row->email; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="Nohp">No Hp</label>
                                            <input type="text" id="Nohp" class="form-control" name="no_hp" value="<?= $row->no_hp; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="Alamat">Alamat</label>
                                            <input type="text" id="Alamat" class="form-control" name="alamat" value="<?= $row->alamat; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-secondary ml-1" data-bs-dismiss="modal">
                                        <i class="bx bx-check d-block d-sm-none"></i>
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
            </div>
        </div>

    </section>
</div>

<?= $this->endSection(); ?>
            
