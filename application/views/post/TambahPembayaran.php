<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    tambah Pembayaran
                </div>
                <div class="card-body">
                    <?php if(validation_errors()) : ?>
                        <div class="alert alert-warning" role="alert"><?= validation_errors(); ?></div>
                    <?php endif; ?>
                    <form action="<?= base_url('pembayaran_kamar/TambahPembayaran/' . (isset($pembayaran['id']) ? $pembayaran['id'] : '')) ?>" method="post">
                        <div class="mb-3">
                            <label for="no_kamar" class="form-label">Nomor Kamar</label>
                            <select class="form-select" name="no_kamar" aria-label="Default select example">
                                <option selected disabled>Pilih Nomor Kamar</option>
                                <?php foreach ($kamar as $kmr): ?>
                                    <option value="<?= $kmr['id']; ?>" <?= isset($pembayaran['id_pemesanan']) && $pembayaran['id_pemesanan'] == $kmr['id'] ? 'selected' : ''; ?>><?= $kmr['no_kamar']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="nama_user" class="form-label">User</label>
                            <select class="form-select" name="nama_user" aria-label="Default select example">
                                <option selected disabled>Pilih User</option>
                                <?php foreach ($users as $user): ?>
                                    <option value="<?= $user['id']; ?>"><?= $user['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
                            <select class="form-select" name="status_pembayaran" aria-label="Default select example">
                                <option value="sudah dibayar">sudah dibayar</option>
                                <option value="belum dibayar">belum dibayar</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_pembayaran" class="form-label">Tanggal pembayaran</label>
                            <input type="date" class="form-control" id="tanggal_pembayaran" name="tanggal_pembayaran" value="<?= isset($pembayaran['tanggal_pembayaran']) ? $pembayaran['tanggal_pembayaran'] : ''; ?>" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary"><a style="text-decoration: none; color:white" href="<?= base_url()?>pemesanan_kamar">Back</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
