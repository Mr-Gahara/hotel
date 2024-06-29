
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Tambah tipe
                </div>
                
                <div class="card-body">
                    <?php if(validation_errors()) : ?>
                        <div class="alert alert-warning" role="alert"> <?= validation_errors(); ?> </div>
                    <?php endif; ?>
                    <form action="<?= base_url('tipe_kamar/TambahTipe') ?>" method="post">
                        <div class="mb-3">
                            <label for="tipe" class="form-label">tipe</label>
                            <input type="text" class="form-control" id="tipe" name="tipe" required>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp" name="deskripsi" required>

                        </div>

                        <div class="mb-3">
                            <label for="harga" class="form-label">harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary"><a style="text-decodation: none; color:white" href="<?= base_url()?>tipe_kamar/index">back</a></button>
                    </fom>
                </div>
            </div>
        </div>
    </div>
</div>