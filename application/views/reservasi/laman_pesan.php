<header>
    <nav>
        <button class="nav-btn" style="font-family: 'Inknut Antiqua';" onclick="window.location.href='<?= base_url('reservasi'); ?>'">Back</button>
        <div class="logo d-flex align-items-center">  
            <img src="<?= base_url('assets/img/logo.svg'); ?>" alt="">
            <h4>Harris Hotel</h4>
        </div>          
    </nav>
</header>

<section class="form-page-pemesanan">
    <div class="form-content">
        <div class="card-1 card">
            <div class="content-inside card-body">
                <div class="title-room">
                    <h5>Harris Room</h5>
                </div>
                <img class="room-type-img-pemesanan" src="<?= base_url('assets/img/image.jpg'); ?>" alt="">
                
                <div class="feature-list">
                    <h6>Informasi Kamar</h6>
                    <ul>
                        <li>26.0 m² room area</li>
                        <li>Max 2 Guests</li>
                    </ul>
                </div>
                
                <div class="feature-list">
                    <h6>Fitur Kamar</h6>
                    <div class="column">
                        <ul>
                            <li>Showers</li>
                            <li>Seating Area</li>
                        </ul>
                        <ul>
                            <li>Hot Water</li>
                            <li>Air Conditioning</li>
                        </ul>
                    </div>
                </div>
                
                <div class="feature-list">
                    <h6>Fasilitas Dasar</h6>
                    <div class="column-list">
                        <ul>
                            <li>Seating Area</li>
                        </ul>
                        <ul>
                            <li>Free Wifi</li>
                        </ul>
                    </div>
                </div>
                
                <div class="feature-list">
                    <h6>Fasilitas Kamar</h6>
                    <div class="column">
                        <ul>
                            <li>Air Conditioning</li>
                            <li>In-House Movie</li>
                            <li>Minibar</li>
                            <li>Desk</li>
                            <li>Blackout drapes/curtains</li>
                        </ul>
                        <ul>
                            <li>Complimentary bottled water</li>
                            <li>Coffee/Tea maker</li>
                            <li>Television</li>
                            <li>In-room safe</li>
                        </ul>
                    </div>
                </div>
                
                <div class="feature-list">
                    <h6>Fasilitas Kamar Mandi</h6>
                    <div class="column">
                        <ul>
                            <li>Hot Water</li>
                            <li>Shower</li>
                            <li>Hair dryer</li>
                        </ul>
                        <ul>
                            <li>Private Bathroom</li>
                            <li>Toiletries</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <?php if ($this->session->userdata('logged_in')) : ?>
        <div class="form-side">
            <?php if (isset($validation_errors) && !empty($validation_errors)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $validation_errors; ?>
                </div>
            <?php endif; ?>
            <form action="<?= base_url('laman_pesan/TambahPemesanan/' . (isset($pemesanan['id']) ? $pemesanan['id'] : '')) ?>" method="post">
                <input type="hidden" name="no_kamar" value="<?= isset($_GET['no_kamar']) ? number_format($_GET['no_kamar']) : ''; ?>">

                
                <div class="mb-3">
                    <label for="tgl_check_in" class="form-label">Tanggal CheckIn</label>
                    <input type="date" class="form-input form-control" id="tgl_check_in" name="tgl_check_in" value="<?= isset($pemesanan['tgl_check_in']) ? $pemesanan['tgl_check_in'] : ''; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="tgl_check_out" class="form-label">Tanggal CheckOut</label>
                    <input type="date" class="form-input form-control" id="tgl_check_out" name="tgl_check_out" value="<?= isset($pemesanan['tgl_check_out']) ? $pemesanan['tgl_check_out'] : ''; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-input form-control" id="nama" name="nama" value="<?= $this->session->userdata('nama'); ?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-input form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?= $this->session->userdata('email'); ?>" readonly>
                </div>

                <div class="form-check">
                    <input class="form-check-input" name="sarapan" type="checkbox" value="yes" id="flexCheckIndeterminate" <?= isset($pemesanan['sarapan']) && $pemesanan['sarapan'] == 'yes' ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        Termasuk Sarapan? (Rp.80.000,-)
                    </label>
                </div>

                <button type="submit" class="btn btn-block btn-secondary">Submit</button>
            </form>
        </div>
        <?php endif; ?>


              
    </div>
</section>