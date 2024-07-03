<div class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
        <a href=""><b>Admin</b>LTE</a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new account</p>
                <?php if(validation_errors()) : ?>
                    <div class="alert alert-warning" role="alert"> <?= validation_errors(); ?> </div>
                <?php endif; ?>

                <form action="<?= base_url('register/tambah') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?= set_value('nama');?>">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email" value="<?= set_value('email');?>">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Nomor Hp" name="no-telp" value="<?= set_value('no-telp');?>">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Retype password" name="retype-password">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                            <button type="button" class="btn btn-secondary btn-block" onclick="window.location.href='<?= base_url('home'); ?>'">Back</button>
                        </div>
                    </div>
                </form>

                <div class="login-text mt-3">
                    <a href="<?php echo base_url(); ?>login" class="text-center">Already have an account? Login!</a>
                </div>

            </div>

        </div>
    </div>

</div>