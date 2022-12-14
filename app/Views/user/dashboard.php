<?= $this->extend('userlayout/templates'); ?>

<?= $this->section('content'); ?>

    <?php if(in_groups('admin')): ?>
    <div class="page-heading">
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">E-Kos</h4>
                </div>
                <div class="card-body">
                    Aplikasi E-kos adalah sebuah aplikasi berbasis website yang membantu dalam pengaturan di sebuah kos, pengelolaan data penghuni kos, pengelolaan data pembayaran kos , dll
                </div>
            </div>
        </section>
    </div>
    
    <div class="page-content">
      <section class="row">
        <div class="col-12 col-lg-12">
          <div class="row">
            <!-- <div class="col-6 col-lg-3 col-md-6">
              <div class="card">
                <div class="card-body px-4 py-4-5">
                  <div class="row">
                    <div
                      class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                    >
                      <div class="stats-icon purple mb-2">
                        <i class="iconly-boldShow"></i>
                      </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                      <h6 class="text-muted font-semibold">
                        Profile Views
                      </h6>
                      <h6 class="font-extrabold mb-0">112.000</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
              <div class="card">
                <div class="card-body px-4 py-4-5">
                  <div class="row">
                    <div
                      class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                    >
                      <div class="stats-icon blue mb-2">
                        <i class="iconly-boldProfile"></i>
                      </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                      <h6 class="text-muted font-semibold">Followers</h6>
                      <h6 class="font-extrabold mb-0">183.000</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="col-6 col-lg-6 col-md-6">
              <div class="card">
                <div class="card-body px-4 py-4-5">
                  <div class="row">
                    <div
                      class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                    >
                      <div class="stats-icon green mb-2">
                        <i class="iconly-boldAdd-User"></i>
                      </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                      <h6 class="text-muted font-semibold">Jumlah Penghuni</h6>
                      <h6 class="font-extrabold mb-0"><?= $jumlah_penghuni; ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-6 col-md-6">
              <div class="card">
                <div class="card-body px-4 py-4-5">
                  <div class="row">
                    <div
                      class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                    >
                      <div class="stats-icon red mb-2">
                        <i class="iconly-boldBookmark"></i>
                      </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                      <h6 class="text-muted font-semibold">Jumlah Kamar</h6>
                      <h6 class="font-extrabold mb-0"><?= $jumlah_kamar; ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <?php elseif(in_groups('penghuni')): ?>
    <div class="page-content">

      <section class="row">
        <div class="col-12 col-lg-12">
          <div class="row">
            <!-- <div class="col-6 col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body px-4 py-4-5">
                  <div class="row">
                    <div
                      class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                    >
                      <div class="stats-icon purple mb-2">
                        <i class="iconly-boldDocument"></i>
                      </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                      <h6 class="text-muted font-semibold">
                        Tagihan
                      </h6>
                      <h6 class="font-extrabold mb-0">-</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="col-6 col-lg-6 col-md-6">
              <div class="card">
                <div class="card-body px-4 py-4-5">
                  <div class="row">
                    <div
                      class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                    >
                      <div class="stats-icon blue mb-2">
                        <i class="iconly-boldHome"></i>
                      </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                      <h6 class="text-muted font-semibold">Nama Kamar</h6>
                      <h6 class="font-extrabold mb-0">
                        <?php if(empty($kamar_status[0]->nama_kamar)): ?>
                          -
                        <?php else: ?>
                          <?= $kamar_status[0]->nama_kamar; ?>
                        <?php endif; ?>
                      </h6> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-6 col-md-6">
              <div class="card">
                <div class="card-body px-4 py-4-5">
                  <div class="row">
                    <div
                      class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                    >
                      <div class="stats-icon green mb-2">
                        <i class="iconly-boldTick-Square"></i>
                      </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                      <h6 class="text-muted font-semibold">Status</h6>
                      <?php if(empty($kamar_status[0]->status_pemesanan)): ?>
                        -
                      <?php else: ?>
                        <?php if($kamar_status[0]->status_pemesanan == 'Menunggu Verifikasi'): ?>
                          <span class="badge bg-warning"><?= $kamar_status[0]->status_pemesanan; ?></span>
                        <?php elseif($kamar_status[0]->status_pemesanan == 'Disetujui'): ?>
                          <span class="badge bg-success"><?= $kamar_status[0]->status_pemesanan; ?></span>
                        <?php else: ?>
                          <span class="badge bg-danger"><?= $kamar_status[0]->status_pemesanan; ?></span>
                        <?php endif; ?>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-6 col-lg-3 col-md-6">
              <div class="card">
                <div class="card-body px-4 py-4-5">
                  <div class="row">
                    <div
                      class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                    >
                      <div class="stats-icon red mb-2">
                        <i class="iconly-boldShield-Fail"></i>
                      </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                      <h6 class="text-muted font-semibold">Ditolak</h6>
                      <h6 class="font-extrabold mb-0">-</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </section>
      
      <section class="row">
        <div class="col-12 col-lg-12">
          <div class="row">
            <div class="card">
              <div class="card-header">
                <h4>Dashboard</h4>
              </div>
              <div class="card-body">
                <p>
                  Selamat datang di dashboard penghuni. Silahkan pilih menu di sebelah kiri untuk melihat informasi lebih lanjut! <br>
                  Untuk informasi lebih lanjut, silahkan hubungi ibu kost WA 085731872656
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      
    </div>
    <?php endif; ?>

<?= $this->endSection(); ?>