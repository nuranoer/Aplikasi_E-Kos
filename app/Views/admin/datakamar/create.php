<?= $this->extend('admin/layouts/templates'); ?>

<?= $this->section('content'); ?>
                
<div class="page-heading">
    <div class="page-title">
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
                            <form class="form form-vertical">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="nama">Nama Kamar</label>
                                                <input type="text" id="nama" class="form-control" name="nama_kamar" placeholder="Nama Kamar">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="deskripsi">Deskripsi Kamar</label>
                                                <textarea class="form-control" id="deskripsi" name="deskripsi_kamar" placeholder="Deskripsi Kamar" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <fieldset class="form-group">
                                                <label for="status">Status Kamar</label>
                                                <select class="form-select" id="status">
                                                    <option>--</option>
                                                    <option value="Available"><p class="text-success">Available</p></option>
                                                    <option value="Booked">Booked</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="harga-kamar">Harga Kamar</label>
                                                <input type="number" id="harga-kamar" class="form-control"
                                                    name="harga_kamar" placeholder="Harga Kamar">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="gambar">Gambar Kamar</label>
                                                <input type="file" id="gambar" class="form-control"
                                                    name="gambar_kamar" placeholder="Gambar Kamar">
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
            
