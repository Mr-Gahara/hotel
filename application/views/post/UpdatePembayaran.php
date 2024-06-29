<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    update Pembayaran
                </div>
                <div class="card-body">
                    <?php if(validation_errors()) : ?>
                        <div class="alert alert-warning" role="alert"><?= validation_errors(); ?></div>
                    <?php endif; ?>
                    <form action="<?= base_url('pembayaran_kamar/UpdatePembayaran' . (isset($pembayaran['id']) ? '/' . $pembayaran['id'] : '')) ?>" method="post">
                        <div class="mb-3">
                            <label for="id_pemesanan" class="form-label">ID Pemesanan</label>
                            <input type="number" class="form-control" id="id_pemesanan" name="id_pemesanan" value="<?= isset($pembayaran['id_pemesanan']) ? $pembayaran['id_pemesanan'] : ''; ?>" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
                            <select class="form-select" name="status_pembayaran" aria-label="Default select example">
                                <option value="sudah dibayar">sudah dibayar</option>
                                <option value="belum dibayar">belum dibayar</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_pembayaran" class="form-label">Tanggal Pembayaran</label>
                            <input type="date" class="form-control" id="tanggal_pembayaran" name="tanggal_pembayaran">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary"><a style="text-decoration: none; color:white" href="<?= base_url('pembayaran_kamar')?>">Back</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
