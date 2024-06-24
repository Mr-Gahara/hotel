<header>
    <nav>
        <div class="logo d-flex align-items-center">  
            <img src="<?= base_url('assets/img/logo.svg'); ?>" alt="">
            <h4>Harris Hotel</h4>
        </div>

        <ul>
            <li><a href="<?= base_url('home'); ?>">Home</a></li>
            <li><a href="#ammenities">Amenities</a></li>
            <li><a href="#localareas">Local Areas</a></li>
            <li><a href="#contact">Contact</a></li>
            <?php if ($this->session->userdata('logged_in')) : ?>
                <li>
                    <div class="btn-group">
                        <button type="button" class="nav-btn btn btn-tool dropdown-toggle" data-toggle="dropdown" style="font-family: 'Inknut Antiqua';">
                            <?= $this->session->userdata('nama'); ?>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                            <?php if ($this->session->userdata('role_id') == 1): ?>
                                <a href="<?= base_url('dashboard'); ?>" class="dropdown-item">Dashboard</a>
                            <?php elseif ($this->session->userdata('role_id') == 2): ?>
                                <a href="<?= base_url('histori_pemesanan'); ?>" class="dropdown-item">Histori Pemesanan</a>
                            <?php endif; ?>
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url('logout'); ?>" class="dropdown-item">Log out</a>
                        </div>
                    </div>
                </li>
            <?php else: ?>
                <li>
                    <button onclick="window.location.href='<?= base_url('register/index'); ?>'">Register</button>
                    <button onclick="window.location.href='<?= base_url('login/index'); ?>'">Login</button>
                </li>
            <?php endif; ?>
        </ul>            
    </nav>
</header>



<main>
    <section class="home-section" id="home">
        <div class="banner">
            <div class="banner-img">
                <img src="<?= base_url('assets/img/banner.jpg'); ?>" alt="">
                <div class="overlay"></div>
                <h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci et non doloremque culpa saepe.</h5>
            </div>
            <div class="banner-profile">
                <div class="text">
                    <h1>Mr. Zarak</h1>
                    <p>
                        Concept artist / illustrator / character designer <br><br>
                        Zarak/Narak is specialized in concept art with 2 different art styles. <br><br>
                        I'm actively designing various character designs, including fanart and original characters. My aim is to create various paintings in new different art styles.
                    </p>
                    <button onclick="window.location.href='<?= base_url('reservasi'); ?>'">Reserve now</button>
                </div>
            </div>
        </div>
    </section>
</main>
