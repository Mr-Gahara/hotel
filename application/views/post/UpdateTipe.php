<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Update Tipe Kamar
                </div>
                <div class="card-body">
                    <?php if(validation_errors()) : ?>
                        <div class="alert alert-warning" role="alert"><?= validation_errors(); ?></div>
                    <?php endif; ?>
                    <form action="<?= base_url('tipe_kamar/UpdateTipe/' . $tipe_kamar['id']) ?>" method="post">
                        <div class="mb-3">
                            <label for="tipe" class="form-label">Tipe</label>
                            <input type="text" class="form-control" id="tipe" name="tipe" value="<?= $tipe_kamar['tipe']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $tipe_kamar['deskripsi']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" value="<?= $tipe_kamar['harga']; ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?= base_url('tipe_kamar'); ?>" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
