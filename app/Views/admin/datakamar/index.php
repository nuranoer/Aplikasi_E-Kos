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
                                <a href="#" class="btn icon btn-warning"><i class="bi bi-pencil"></i></a>
                                <button class="btn icon btn-primary"><i class="bi bi-info-circle"></i></button>
                                <a href="/deletekamar/<?= $k['id_kamar'] ?>" class="btn icon btn-danger" type="button"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

<?= $this->endSection(); ?>
            
