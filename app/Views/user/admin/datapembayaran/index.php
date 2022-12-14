<?= $this->extend('userlayout/templates'); ?>

<?= $this->section('content'); ?>
                
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Pembayaran Bulanan</h3>
            </div>
        </div>
    </div>
    <section class="row">
      <?php foreach ($data as $d): ?>
        <div class="col-12 col-lg-6">
          <div class="card">
            <div class="card-body py-4 px-4">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-xl">
                  <img src="assets/images/faces/<?= $d->user_image; ?>" alt="Gambar Penghuni" />
                </div>
                <div class="ms-3 name">
                  <a href="/detailpembayaran-<?= $d->id_penghuni; ?>"><h5 class="font-bold text-primary"><?= $d->fullname; ?> (1/<?= $d->durasi; ?>)</h5></a>
                  <h6 class="text-muted mb-0">@<?= $d->username; ?></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </section>
</div>

<?= $this->endSection(); ?>
            
