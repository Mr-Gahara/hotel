<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Tambah user
                </div>
                
                <div class="card-body">
                    <?php if(validation_errors()) : ?>
                        <div class="alert alert-warning" role="alert"> <?= validation_errors(); ?> </div>
                    <?php endif; ?>
                    <form action="<?= base_url('daftar_user/tambah') ?>" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                        </div>

                        <div class="mb-3">
                            <label for="number" class="form-label">Nomor telepon</label>
                            <input type="number" class="form-control" id="number" name="no-telp" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn btn-secondary"><a style="text-decodation: none; color:white" href="<?= base_url()?>daftar_user/index">back</a></button>
                    </fom>
                </div>
            </div>



        </div>
    </div>
</div>