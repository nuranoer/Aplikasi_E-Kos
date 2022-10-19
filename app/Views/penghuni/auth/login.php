<?= $this->extend('penghuni/auth/template/header'); ?>

<?= $this->section('content'); ?>

<body>
    <div id="auth">
        
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="index.html"><img src="<?= base_url() ?>/admin/assets/images/logo/logo.svg" alt="Logo"></a>
            </div>
            <h1 class="auth-title">Log in</h1>
            <p class="auth-subtitle mb-5">Kost Annisa</p>

            <form action="index.html">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" name="username" placeholder="Username">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" name="password" placeholder="Password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
            </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p class="text-gray-600">Don't have an account? <a href="<?php echo base_url()."Welcome/Regis";?>" class="font-bold">Sign
                        up</a>.</p><br>
                <p class="text-gray-600">Login Sebagai Admin <a href="<?= base_url('/loginadmin') ?>" class="font-bold">Log In</a>.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>

    </div>
</body>
<?= $this->endSection(); ?>
