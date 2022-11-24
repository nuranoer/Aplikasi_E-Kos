<?= $this->extend('auth/template/templates'); ?>

<?= $this->section('content'); ?>

<body>
    <div id="auth">
        
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <a href="/register"><img src="assets/images/logo/logo.svg" alt="Logo" width="100"></a>
                    <h1 class="auth-title"><?=lang('Auth.register')?></h1>
                    <p class="auth-subtitle mb-1">Kost Annisa</p>

                    <?= view('Myth\Auth\Views\_message_block') ?>
                    
                    <form action="<?= route_to('register') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="form-group position-relative has-icon-left mb-2">
                            <input type="text" class="form-control form-control-xl <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-2">
                            <input type="text" class="form-control form-control-xl <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>"  name="username"  name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-2">
                            <input type="password" class="form-control form-control-xl <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                            <div class="form-group position-relative has-icon-left mb-2">
                            <input type="password" class="form-control form-control-xl <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-1"><?=lang('Auth.register')?></button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-6">
                        <p class='text-gray-600'><?=lang('Auth.alreadyRegistered')?> <a href="<?= url_to('login') ?>"><?=lang('Auth.signIn')?></a></p>
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