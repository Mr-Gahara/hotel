<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    tambah Pemesanan
                </div>
                <div class="card-body">
                    <?php if(validation_errors()) : ?>
                        <div class="alert alert-warning" role="alert"><?= validation_errors(); ?></div>
                    <?php endif; ?>
                    <form action="<?= base_url('pemesanan_kamar/TambahPemesanan/' . (isset($pemesanan['id']) ? $pemesanan['id'] : '')) ?>" method="post">
                        <div class="mb-3">
                            <label for="no_kamar" class="form-label">Nomor Kamar</label>
                            <select class="form-select" name="no_kamar" aria-label="Default select example">
                                <option selected disabled>Pilih Nomor Kamar</option>
                                <?php foreach ($kamar as $kmr): ?>
                                    <option value="<?= $kmr['id']; ?>" <?= isset($pemesanan['id_kamar']) && $pemesanan['id_kamar'] == $kmr['id'] ? 'selected' : ''; ?>><?= $kmr['no_kamar']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="nama_user" class="form-label">User</label>
                            <select class="form-select" name="nama_user" aria-label="Default select example">
                                <option selected disabled>Pilih User</option>
                                <?php foreach ($users as $usr): ?>
                                    <option value="<?= $usr['id']; ?>" <?= isset($pemesanan['id_user']) && $pemesanan['id_user'] == $usr['id'] ? 'selected' : ''; ?>><?= $usr['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="tgl_check_in" class="form-label">Tanggal CheckIn</label>
                            <input type="date" class="form-control" id="tgl_check_in" name="tgl_check_in" value="<?= isset($pemesanan['tgl_check_in']) ? $pemesanan['tgl_check_in'] : ''; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="tgl_check_out" class="form-label">Tanggal CheckOut</label>
                            <input type="date" class="form-control" id="tgl_check_out" name="tgl_check_out" value="<?= isset($pemesanan['tgl_check_out']) ? $pemesanan['tgl_check_out'] : ''; ?>" required>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" name="sarapan" type="checkbox" value="yes" id="flexCheckIndeterminate" <?= isset($pemesanan['sarapan']) && $pemesanan['sarapan'] == 'yes' ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                Termasuk Sarapan? (Rp.80.000,-)
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary"><a style="text-decoration: none; color:white" href="<?= base_url()?>pemesanan_kamar">Back</a></button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
