<?= $this->extend('penghuni/layouts/templates'); ?>

<?= $this->section('content'); ?>

    <div class="page-heading">
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Profile saya 
                    <?php if(in_groups('admin')): ?>
                    (Admin)
                    <?php elseif(in_groups('penghuni')): ?>
                    (Penghuni)
                    <?php endif; ?>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="assets/images/faces/<?= user()->user_image; ?>" width="250">
                        </div>
                        <div class="col-lg-7">
                            <h4>Fullname:</h4>
                            <p><?= user()->fullname; ?></p>
                            <h4>Username:</h4>
                            <p><?= user()->username; ?></p>
                            <h4>Email:</h4>
                            <p><?= user()->email; ?></p>
                            <button class="btn btn-primary rounded-pill">Edit Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?= $this->endSection(); ?>