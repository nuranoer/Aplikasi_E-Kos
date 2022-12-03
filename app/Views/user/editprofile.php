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
                    <form class="form form-vertical" action="/updateprofile/<?= $datauser->id; ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="form-body">
                            <div class="row">
                                <input type="hidden" class="form-control" name="id" value="">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="Username">Username</label>
                                        <input type="text" id="Username" class="form-control" name="username" value="<?= $datauser->username; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="Fullname">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="Fullname" name="fullname" value="<?= $datauser->fullname; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="text" id="Email" class="form-control" name="email" value="<?= $datauser->email; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="Nohp">No Hp</label>
                                        <input type="text" id="Nohp" class="form-control" name="no_hp" value="<?= $datauser->no_hp; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="Alamat">Alamat</label>
                                        <input type="text" id="Alamat" class="form-control" name="alamat" value="<?= $datauser->alamat; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="foto-profile">Foto Profil</label>
                                        <input type="file" id="foto-profile" class="form-control"
                                            name="user_image" value="<?= $datauser->user_image; ?>">
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