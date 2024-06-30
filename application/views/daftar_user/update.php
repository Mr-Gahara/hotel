<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Update data user
                </div>
                
                <div class="card-body">
                    <?php if(validation_errors()) : ?>
                        <div class="alert alert-warning" role="alert"> <?= validation_errors(); ?> </div>
                    <?php endif; ?>
                    <form action="<?= base_url('daftar_user/update/' . $users['id']) ?>" method="post">

                        <div class="mb-3">
                            <label for="nama" class="form-label">nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $users['nama']; ?>" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?= $users['email']; ?>" readonly>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>

                        <div class="mb-3">
                            <label for="role_id" class="form-label"> pilih Role</label>
                            <select class="form-select" name="role_id" aria-label="Default select example">
                                <?php foreach ($user_role as $role): ?>
                                    <option value="<?= $role['id']; ?>"><?= $role['role']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="number" class="form-label">Nomor telepon</label>
                            <input type="number" class="form-control" id="number" name="no-telp" value="<?= $users['no_hp']; ?>" readonly>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary"><a style="text-decoration: none; color:white" href="<?= base_url('daftar_user')?>">Back</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
