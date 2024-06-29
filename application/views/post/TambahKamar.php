<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Tambah kamar
                </div>
                <div class="card-body">
                    <?php if(validation_errors()) : ?>
                        <div class="alert alert-warning" role="alert"> <?= validation_errors(); ?> </div>
                    <?php endif; ?>
                    <form action="<?= base_url('nomor_kamar/TambahNomorKamar') ?>" method="post">
                        <div class="mb-3">
                            <label for="no_kamar" class="form-label">Nomor Kamar</label>
                            <input type="number" class="form-control" id="no_kamar" name="no_kamar" required>
                        </div>
                        <div class="mb-3">
                            <label for="tipe" class="form-label">Tipe Kamar</label>
                            <select class="form-select" name="tipe" aria-label="Default select example">
                                <option selected disabled>Pilih Tipe Kamar</option>
                                <?php foreach ($tipe_kamar as $type): ?>
                                    <option value="<?= $type['id']; ?>"><?= $type['tipe']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" name="status" aria-label="Default select example">
                                <option selected disabled>Pilih Status</option>
                                <option value="available">Available</option>
                                <option value="unavailable">Unavailable</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary"><a style="text-decoration: none; color:white" href="<?= base_url()?>nomor_kamar/index">Back</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
