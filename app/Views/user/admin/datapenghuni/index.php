<?= $this->extend('userlayout/templates'); ?>

<?= $this->section('content'); ?>
                
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Penghuni Kos</h3>
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
                            <th>Fullname</th>
                            <th>Username</th>
                            <th>Email</th>
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
                            <td>
                                <span class="badge bg-success">Verified</span>
                            </td>
                            <td>
                                <!-- btn edit -->
                                <a href="#" class="btn icon btn-warning"><i class="bi bi-pencil"></i></a>
                                <!-- btn detail using modal -->
                                <button class="btn icon btn-primary btn-detail"  type="button" data-bs-toggle="modal" data-bs-target="#modalDetail<?= $row->userid; ?>"><i class="bi bi-info-circle"></i></button>
                                <!-- btn delete -->
                                <button type="button" class="btn icon btn-danger" data-bs-toggle="modal" data-bs-target="#danger"><i class="bi bi-trash3"></i></button>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>

                <?php foreach ($users as $row) :?>
                <!--scrolling content Modal -->
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
            
