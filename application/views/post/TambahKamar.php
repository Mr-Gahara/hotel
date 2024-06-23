
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Tambah kamar
                </div>
                <div class="card-body">
                    <?php if(validation_errors()) : ?>
                        <div class="alert alert-warning" role="alert"> <?= validation_errors(); ?> </div>
                    <?php endif; ?>
                    <form action="<?= base_url('tipe_kamar/TambahTipe') ?>" method="post">
                        <div class="mb-3">
                            <label for="no_kamar" class="form-label">Nomor Kamar</label>
                            <input type="number" class="form-control" id="no_kamar" name="no_kamar" required>
                        </div>
                        <div class="mb-3">
                            <label for="tipe" class="form-label">tipe kamar</label>
                            <select class="form-select" name="tipe" aria-label="Default select example">
                                <option selected disabled>Pilih Tipe Kamar</option>
                                <?php foreach ($tipe_kamar as $type): ?>
                                    <option value="<?= $type->id ?>"><?= $type->tipe ?></option> <!-- Corrected this line -->
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="tipe" class="form-label">status</label>
                            <select class="form-select" name="tipe" aria-label="Default select example">
                                <option selected disabled>Pilih status</option>
                                <?php foreach ($tipe_kamar as $type): ?>
                                    <option value="<?= $type->id ?>"><?= $type->tipe ?></option> <!-- Corrected this line -->
                                <?php endforeach; ?>
                            </select>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary"><a style="text-decodation: none; color:white" href="<?= base_url()?>nomor_kamar/index">back</a></button>
                    </fom>
                </div>
            </div>
        </div>
    </div>
</div>