<?= $this->extend('auth/template/header'); ?>

<?= $this->section('content'); ?>
<body>
    <div id="auth">
        
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href=""><img src="admin/assets/images/logo/logo.svg" alt="Logo"></a>
            </div>
            <h1 class="auth-title">Log in</h1>
            <p class="auth-subtitle mb-5">Kost Annisa</p>

            <form method="post" action="<?= route_to('login') ?>">    
            <?= csrf_field() ?>
            <?php if ($config->validFields === ['email']): ?>            
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="email" class="form-control form-control-xl <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?=lang('Auth.email')?>">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                    <div class="invalid-feedback">
								<?= session('errors.login') ?>
					</div>
                </div>
            <?php else: ?>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                    <div class="invalid-feedback">
						<?= session('errors.login') ?>
					</div>
                </div>
            <?php endif; ?>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?=lang('Auth.password')?>">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    <div class="invalid-feedback">
						<?= session('errors.password') ?>
					</div>
                </div>
                <div class="text-center mt-5 text-lg fs-4">
                <p class='text-gray-600'><?=lang('Belum Punya Akun ?')?> <a href="<?= url_to('register') ?>"><?=lang('Auth.register')?></a></p>
            </div>
                <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5"><?=lang('Auth.loginAction')?></button> -->
            </form>
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
