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
                <h3>Data Pembayaran Bulanan</h3>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inlineForm"><i data-feather="edit"></i> Tambah Pembayaran</button>
                <button class="btn icon btn-danger btn-detail"  type="button" data-bs-toggle="modal" data-bs-target="#info"><i data-feather="info"></i> Info Pembayaran</button>
                <div class="table-responsive">
                    <table class="table table-lg">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Jumlah yang dibayar</th>
                                <th>Tanggal Pembayaran</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>username</td>
                                <td>Jumlah yang dibayar</td>
                                <td>Tanggal Pembayaran</td>
                                <td>
                                    <span class="badge bg-success">Status</span>
                                </td>
                                <td>
                                    <!-- btn edit -->
                                    <a href="#" class="btn icon btn-warning"><i class="bi bi-pencil"></i></a>
                                    <!-- btn detail using modal -->
                                    <button class="btn icon btn-primary btn-detail" type="button" data-bs-toggle="modal" data-bs-target="#modalDetail"><i class="bi bi-info-circle"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- form Modal -->
                <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel33" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                        role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel33">Form Pembayaran Bulanan</h4>
                                <button type="button" class="close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                            <form action="/bayar" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                                <div class="modal-body">
                                    <!-- id pemesanan -->
                                    <?php if(empty($id_pemesanan[0]->id_pemesanan)): ?>
                                    <input type="hidden" value="-" class="form-control" name="id_pemesanan">
                                    <?php else: ?>
                                    <input type="hidden" value="<?= $id_pemesanan[0]->id_pemesanan; ?>" class="form-control" name="id_pemesanan">
                                    <?php endif; ?>
                                    <!-- transfer -->
                                    <div class="col-12">
                                        <fieldset class="form-group">
                                            <label>Transfer Via:</label>
                                            <select class="form-select" name="transfer_via" id="transfer_via">
                                                <option value="BRI" <?= old('transfer_via') == 'BRI'? 'selected':''?>>BRI</option>
                                                <option value="BNI" <?= old('transfer_via') == 'BNI'? 'selected':''?>>BNI</option>
                                                <option value="BCA" <?= old('transfer_via') == 'BCA'? 'selected':''?>>BCA</option>
                                                <option value="LinkAja" <?= old('transfer_via') == 'LinkAja'? 'selected':''?>>LinkAja</option>
                                                <option value="Dana" <?= old('transfer_via') == 'Dana'? 'selected':''?>>Dana</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <!-- gambar / bukti pembayaran -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Bukti Pembayaran</label>
                                            <input type="file" name="bukti" class="form-control <?= ($validation->hasError('bukti')) ? 'is-invalid' : '' ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('bukti')?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- status pembayaran -->
                                    <input type="hidden" value="Menunggu Verifikasi" class="form-control" name="status_pembayaran">
                                    
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
                                        <span class="d-none d-sm-block">Bayar Sekarang</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!--scrolling content Modal -->
                <div class="modal fade" id="info" tabindex="-1" role="dialog"
                    aria-labelledby="nama_kamar" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Info Pembayaran</h5>
                                <button type="button" class="close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Pembayaran dapat dilakukan secara transfer melalui:</h5>
                                <h6>Rekening BRI :</h6>
                                <p>0832374973979</p>
                                <h6>Rekening BNI :</h6>
                                <p>0832374973979</p>
                                <h6>Rekening BCA :</h6>
                                <p>0832374973979</p>
                                <h6>Linkaja (e-wallet) :</h6>
                                <p>083237497397</p>
                                <h6>Dana (e-wallet) :</h6>
                                <p>083237497397</p>
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
            </div>
        </div>

    </section>
</div>

<?= $this->endSection(); ?>
            
