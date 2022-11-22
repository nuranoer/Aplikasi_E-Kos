<?= $this->extend('admin/layouts/templates'); ?>

<?= $this->section('content'); ?>
                
<div class="page-heading">
    <div class="page-title">
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
    <?php endif; ?>
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Kamar Kos</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <a href="/formkamar" class="btn icon icon-left btn-primary"><i data-feather="edit"></i>Tambah Kamar</a>
                </nav>
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
                            <th>Nama Kamar</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($kamar as $k) :
                      ?>
                        <tr>
                            <td><?= $k['id_kamar'] ?></td>
                            <td><?= $k['nama_kamar'] ?></td>
                            <td><?= $k['harga_kamar'] ?></td>
                            <td>
                                <span class="badge <?= ($k['status_kamar'] == 'Available') ? 'bg-success' : 'bg-danger' ?>"><?= $k['status_kamar'] ?></span>
                            </td>
                            <td>
                                <!-- btn edit -->
                                <a href="#" class="btn icon btn-warning"><i class="bi bi-pencil"></i></a>
                                <!-- btn detail using modal -->
                                <button class="btn icon btn-primary btn-detail"  type="button" data-bs-toggle="modal" data-bs-target="#modalDetail<?= $k['id_kamar'] ?>"><i class="bi bi-info-circle"></i></button>
                                <!-- btn delete -->
                                <button type="button" class="btn icon btn-danger" data-bs-toggle="modal" data-bs-target="#danger<?= $k['id_kamar'] ?>"><i class="bi bi-trash3"></i></button>
                                <!-- <a href="#" class="btn icon btn-danger" type="button"><i class="bi bi-trash3"></i></a> -->
                            </td>
                        </tr>
                        
                        <?php endforeach; ?>
                    </tbody>
                </table>
                
                
                <?php foreach ($kamar as $k) :
                ?>
                <!--Danger theme Modal -->
                <div class="modal fade text-left" id="danger<?= $k['id_kamar'] ?>" tabindex="-1" role="dialog"
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
                               <b>Apakah anda yakin menghapus data ini? <br>
                               Data yang sudah dihapus tidak dapat dikembalikan.</b>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary"
                                    data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Cancel</span>
                                </button>
                                <a href="/deletekamar/<?= $k['id_kamar'] ?>" type="button" class="btn btn-danger ml-1">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Delete it!</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--scrolling content Modal -->
                <div class="modal fade" id="modalDetail<?= $k['id_kamar'] ?>" tabindex="-1" role="dialog"
                    aria-labelledby="nama_kamar" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><?= $k['nama_kamar'] ?> <span class="badge <?= ($k['status_kamar'] == 'Available') ? 'bg-success' : 'bg-danger' ?>"><?= $k['status_kamar'] ?></span></h5>
                                <button type="button" class="close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="gambar_kamar/<?= $k['gambar'] ?>" alt="" width="450"> 
                                <br><br>
                                <h6>Deskripsi Kamar :</h6>
                                <p><?= $k['deskripsi_kamar'] ?></p>
                                <h6>Harga Kamar :</h6>
                                <p ><?= $k['harga_kamar'] ?></p>
                                <!-- <p>Rp 200000</p> -->
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
            
