<header>
    <nav>
        <button class="nav-btn" style="font-family: 'Inknut Antiqua';" onclick="window.location.href='<?= base_url('home'); ?>'">Back</button>
        <div class="logo d-flex align-items-center">  
            <img src="<?= base_url('assets/img/logo.svg'); ?>" alt="">
            <h4>Harris Hotel</h4>
        </div>          
    </nav>
</header>



<section class="reservation-page">

    <div class="title">
        <h1>Reservasi</h1>
        <p>silahkan pilih tipe kamar sesuai kebutuhan</p>
    </div>

    <?php foreach ($tipe_kamar as $type): ?>
    <div class="card-1 card">
        <div class="card-content card-body">
            <img class="room-type-img" src="<?= base_url('assets/img/image.jpg'); ?>" alt="">
            <div class="room-type">
                <div class="room-title">
                    <h5>Harris <?= htmlspecialchars($type['tipe']); ?> room</h5>
                    <h6>Rp. <?= number_format($type['harga']); ?>,-</h6>
                    <p>per malam</p>
                </div>
                <form action="<?= base_url('daftar_kamar'); ?>" method="get">
                    <input type="hidden" name="tipe" value="<?= htmlspecialchars($type['tipe']); ?>">
                    <button class="tipe-btn" type="submit">pilih</button>
                </form>
                
            </div>
            <div class="room-desc">
                <p><?= htmlspecialchars($type['deskripsi']); ?></p>
                <!-- Additional room details can be added here -->
            </div>
        </div>
    </div>
    <?php endforeach; ?>

</section>