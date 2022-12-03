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
                    <form class="form form-vertical" action="/store" method="post" enctype="multipart/form-data">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="Username">Username</label>
                                        <input type="text" id="Username" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" name="username" value="<?= user()->username; ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('username') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="Fullname">Nama Lengkap</label>
                                        <input type="text" class="form-control <?= ($validation->hasError('fullname')) ? 'is-invalid' : '' ?>" id="Fullname" name="fullname" value="<?= user()->fullname; ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('fullname') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="text" id="Email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" name="email" value="<?= user()->email; ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('email') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="Nohp">No Hp</label>
                                        <input type="text" id="Nohp" class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : '' ?>" name="no_hp" value="<?= user()->no_hp; ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('no_hp') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="Alamat">Alamat</label>
                                        <input type="text" id="Alamat" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : '' ?>" name="alamat" value="<?= user()->alamat; ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('alamat') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="foto-profile">Foto Profil</label>
                                        <input type="file" id="foto-profile" class="form-control <?= ($validation->hasError('user_image')) ? 'is-invalid' : '' ?>"
                                            name="user_image" value="<?= user()->user_image; ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('user_image')?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

<?= $this->endSection(); ?>