<header>
    <nav>
        <button class="nav-btn" style="font-family: 'Inknut Antiqua';" onclick="window.location.href='<?= base_url('reservasi'); ?>'">Back</button>
        <div class="logo d-flex align-items-center">  
            <img src="<?= base_url('assets/img/logo.svg'); ?>" alt="">
            <h4>Harris Hotel</h4>
        </div>          
    </nav>
</header>

<section class="reservation-page">

    <div class="title">
        <h1>Ruangan tersedia</h1>
        <p>silahkan pilih ruangan kamar yang tersedia</p>
    </div>

    <?php foreach ($kamar as $kmr): ?>
    <div class="card-1 card">
        <div class="card-content card-body">
            <img class="room-type-img" src="<?= base_url('assets/img/image.jpg'); ?>" alt="">
            <div class="room-type">
                <div class="room-title">
                    <h5>nomor ruangan</h5>
                    <h6><?= number_format($kmr['no_kamar']); ?></h6>
                    <p>status: <?= htmlspecialchars($kmr['status']);?></p>
                </div>
                <button class="tipe-btn">pesan</button>
                
            </div>
        </div>
    </div>
    <?php endforeach; ?>

</section>