<?= $this->extend('userlayout/templates'); ?>

<?= $this->section('content'); ?>

    <div class="page-heading">
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Profile saya 
                    <?php if(in_groups('admin')): ?>
                        <span class="badge bg-primary">Admin</span>
                    <?php elseif(in_groups('penghuni')): ?>
                        <span class="badge bg-success">Penghuni</span>
                    <?php endif; ?>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="assets/images/faces/<?= user()->user_image; ?>" width="250">
                        </div>
                        <div class="col-lg-4">
                            <h4>Fullname:</h4>
                            <p><?= user()->fullname; ?></p>
                            <h4>Username:</h4>
                            <p><?= user()->username; ?></p>
                            <h4>Email:</h4>
                            <p><?= user()->email; ?></p>
                        </div>
                        <div class="col-lg-4">
                            <h4>No Hp:</h4>
                            <p><?= user()->no_hp; ?></p>
                            <h4>Alamat Asli:</h4>
                            <p><?= user()->alamat; ?></p>
                            <br>
                            <a href="/editprofile">
                                <button class="btn btn-primary rounded-pill">Edit Profile</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?= $this->endSection(); ?>