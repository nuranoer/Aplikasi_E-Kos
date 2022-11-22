<?= $this->extend('admin/layouts/templates'); ?>

<?= $this->section('content'); ?>
                
<div class="page-heading">
    <div class="page-title">
    <?php if(session()->getFlashdata('error')) : ?>
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
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Form Tambah Kamar</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <a href="/datakamar" class="btn icon icon-left btn-danger"><i class="bi bi-arrow-left-circle"></i>&nbsp;Kembali</a>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Vertical form layout section start -->
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" action="/store" method="post" enctype="multipart/form-data">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="nama">Nama Kamar</label>
                                                <input type="text" id="nama" class="form-control <?= ($validation->hasError('nama_kamar')) ? 'is-invalid' : '' ?>" name="nama_kamar" placeholder="Nama Kamar" value="<?= old('nama_kamar'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('nama_kamar') ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="deskripsi">Deskripsi Kamar</label>
                                                <textarea class="form-control <?= ($validation->hasError('deskripsi_kamar')) ? 'is-invalid' : '' ?>" id="deskripsi" name="deskripsi_kamar" placeholder="Deskripsi Kamar" rows="3"><?= old('deskripsi_kamar'); ?></textarea>
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('deskripsi_kamar') ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <fieldset class="form-group">
                                                <label for="status">Status Kamar</label>
                                                <select class="form-select" name="status_kamar" id="status">
                                                    <option value="Available" <?= old('status_kamar') == 'Available'? 'selected':''?>>Available</option>
                                                    <option value="Booked" <?= old('status_kamar') == 'Booked'? 'selected':''?>>Booked</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="harga-kamar">Harga Kamar</label>
                                                <input type="number" id="harga-kamar" class="form-control <?= ($validation->hasError('harga_kamar')) ? 'is-invalid' : '' ?>" name="harga_kamar" placeholder="Harga Kamar" value="<?= old('harga_kamar'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('harga_kamar') ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="gambar">Gambar Kamar</label>
                                                <input type="file" id="gambar" class="form-control <?= ($validation->hasError('gambar')) ? 'is-invalid' : '' ?>"
                                                    name="gambar" placeholder="Gambar Kamar" value="<?= old('gambar'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('gambar')?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic Vertical form layout section end -->

</div>

<?= $this->endSection(); ?>
            
