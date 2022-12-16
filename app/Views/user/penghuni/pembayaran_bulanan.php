<?= $this->extend('userlayout/templates'); ?>

<?= $this->section('content'); ?>
                
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle"></i> 
                    here alert
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Pembayaran Bulanan</h3>
            </div>
            <!-- <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <a href="#" class="btn icon icon-left btn-primary"><i data-feather="edit"></i>Tambah Pembayaran</a>
                </nav>
            </div> -->
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <a href="/formpembayaran" class="btn icon icon-left btn-primary"><i data-feather="edit"></i>Tambah Pembayaran</a>
                <button class="btn icon btn-danger btn-detail"  type="button" data-bs-toggle="modal" data-bs-target="#modalDetail"><i data-feather="info"></i>Info Pembayaran</button>
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

                <!--scrolling content Modal -->
                <div class="modal fade" id="modalDetail" tabindex="-1" role="dialog"
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
            
