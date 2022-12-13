<?= $this->extend('userlayout/templates'); ?>

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
                <h3>Form Update Pemesanan</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <a href="/datapemesanan" class="btn icon icon-left btn-danger"><i class="bi bi-arrow-left-circle"></i>&nbsp;Kembali</a>
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
                            <form class="form form-vertical" action="/editpemesanan/<?= $pemesanan[0]->id_pemesanan; ?>" method="post" enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="nama">Nama Kamar</label>
                                                <input type="text" id="nama" class="form-control" value="<?= $pemesanan[0]->nama_kamar; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="fullname">Nama Pemesan</label>
                                                <input type="text" class="form-control" name="fullname" id="fullname" value="<?= $pemesanan[0]->fullname; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="harga-kamar">Durasi Tinggal</label>
                                                <input type="number" id="harga-kamar" class="form-control" name="durasi" value="<?= $pemesanan[0]->durasi; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="pengajuan">Rencana Mulai Tinggal</label>
                                                <input type="text" id="pengajuan" class="form-control" name="pengajuan_tgl" value="<?= $pemesanan[0]->pengajuan; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <fieldset class="form-group">
                                                <label for="status">Status Pemesanan</label>
                                                <select class="form-select" name="status" id="status">
                                                    <option value="Menunggu Verifikasi" <?= $pemesanan[0]->status_pemesanan == 'Menunggu Verifikasi'? 'selected':''?>>Menunggu Verifikasi</option>
                                                    <option value="Disetujui" <?= $pemesanan[0]->status_pemesanan == 'Disetujui'? 'selected':''?>>Disetujui</option>
                                                    <option value="Ditolak" <?= $pemesanan[0]->status_pemesanan == 'Ditolak'? 'selected':''?>>Ditolak</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="keterangan">Keterangan</label>
                                                <textarea class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : '' ?>" id="keterangan" name="keterangan" rows="3"><?= old('keterangan'); ?></textarea>
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
            
