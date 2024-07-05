<header>
    <nav>
        <div class="logo d-flex align-items-center">  
            <img src="<?= base_url('assets/img/logo.svg'); ?>" alt="">
            <h4>Harris Hotel</h4>
        </div>

        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#ammenities">Amenities</a></li>
            <li><a href="#local_area">Local Areas</a></li>
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
                <h5>Curated Spaces, Modern Comforts & Local Vibes</h5>
            </div>
            <div class="banner-profile">
                <div class="text">
                    <h1>Profile</h1>
                    <p>
                        HARRIS Hotel Pontianak menawarkan akomodasi di Pontianak dengan WiFi gratis dan pusat spa. Hotel <br> 
                        ini memiliki kolam renang outdoor dan teras. Anda bisa menikmati hidangan di restorannya. Parkir <br> 
                        pribadi gratis tersedia di tempat. Layanan antar-jemput gratis di wilayah Pontianak dapat diatur. <br> <br>
                        
                        Setiap kamar menyediakan TV kabel layar datar. Anda akan menemukan teko dan brankas pribadi di <br> 
                        dalam kamar. Kamar-kamar memiliki kamar mandi pribadi. Sandal kamar, amenitas kamar mandi <br> 
                        gratis, dan pengering rambut disediakan untuk kenyamanan Anda. <br> <br>
                        
                        Tersedia resepsionis 24 jam di akomodasi. <br> <br>
                        
                        Hotel ini juga memiliki area lounge dan toko suvenir. Bandara terdekat adalah Bandara Supadio, 14 km <br> 
                        dari akomodasi.
                    </p>
                    <button onclick="window.location.href='<?= base_url('reservasi'); ?>'">Reserve now</button>
                </div>
            </div>
        </div>
    </section>

    <section class="ammenities-section" id="ammenities">
        <h1 style="color: white;">Amenities and facilites</h1>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner costum-img">
                <div class="carousel-item active">
                    <img src="<?= base_url('assets/img/pool.jpg'); ?>" class="d-block w-100 costum-img" alt="...">
                </div>
                
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/canteen.jpg'); ?>" class="d-block w-100 costum-img" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/gym.jpg'); ?>" class="d-block w-100 costum-img" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/playground.jpg'); ?>" class="d-block w-100 costum-img" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/rooftop.jpg'); ?>" class="d-block w-100 costum-img" alt="...">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="local_area-section" id="local_area">
        <h1>Local Areas</h1>
        <div class="areas">
                <div class="area-desc">
                    <h2>Ayani megamall</h2>
                    <p>
                        Ayani Mega Mall adalah salah satu pusat perbelanjaan terbesar di Pontianak, Kalimantan Barat.
                        Dari segi konsep, Ayani merupakan family mall yang menyediakan seluruh kebutuhan keluarga dalam satu tempat.
                    </p>
                </div>

                <img src="<?= base_url('assets/img/mal-ayani.jpg'); ?>" alt="">
        </div>

        <div class="areas">
            <img src="<?= base_url('assets/img/bandara.jpeg'); ?>" alt="">

            <div class="area-desc">
                <h2>Bandara Supadio</h2>
                <p>
                    Bandara Supadio berada di Kabupaten Kubu Raya, Kalimantan Barat, Indonesia. Jaraknya dari Kota Pontianak adalah 17 km dengan luas Bandar Udara Internasional Supadio adalah 528 hektar.
                </p>
            </div>
        </div>

        <div class="areas">
                <div class="area-desc">
                    <h2>Rumah Radakng</h2>
                    <p>
                    Adalah rumah adat terbesar yang ada di Indonesia, sekaligus menjadi landmark bagi Kota Pontianak setelah Tugu Khatulistiwa. Dikatakan sebagai rumah adat terbesar, karena bangunannya memiliki panjang 138 meter dan tinggi 7 meter. 
                    </p>
                </div>

                <img src="<?= base_url('assets/img/rumah-radankg.jpg'); ?>" alt="">
        </div>

        <div class="areas">
            <img src="<?= base_url('assets/img/museum.jpg'); ?>" alt="">

            <div class="area-desc">
                <h2>Museum Kalimantan Barat</h2>
                <p>
                    Museum Provinsi Kalimantan Barat merupakan museum umum yang dirintis sejak tahun 1974 oleh Kantor Wilayah Departemen Pedidikan dan Kebudayaan Provinsi Kalimantan Barat melalui Proyek Rehabilitasi dan Perluasan Permuseuman Kalimatan Barat.
                </p>
            </div>
        </div>

        <div class="areas">
                <div class="area-desc">
                    <h2>Tugu Khatulistiwa</h2>
                    <p>
                        Tugu Khatulistiwa terletak di Jalan Khatulistiwa, Kecamatan Pontianak Utara, Kalimantan Barat. Menuju tugu ini dapat ditempuh sekitar 30 menit dari pusat Kota Pontianak.
                    </p>
                </div>

                <img src="<?= base_url('assets/img/tugu.jpg'); ?>" alt="">
        </div>
    </section>

    <section class="contact-section" id="contact">
        <h1 style="color: white;">Contact</h1>
        <div class="contact-list">
            <div class="inner-list">
                <img src="<?= base_url('assets/img/location.svg'); ?>" alt="">
                <a href="https://maps.app.goo.gl/k2GmJ5awoTGx2UQE6" target="_blank">Jl. Gadjah mada No. 150, Pontianak, Indonesia 78121</a>
            </div>

            <div class="inner-list">
                <img src="<?= base_url('assets/img/mail.svg'); ?>" alt="">
                <a href="mailto:res1-harris-pontianak@tauzia.com" target="_blank">res1-harris-pontianak@tauzia.com</a>
            </div>

            <div class="inner-list">
                <img src="<?= base_url('assets/img/phone.svg'); ?>" alt="">
                <a href="tel:+62 561 8120 888" target="_blank">+62 561 8120 888</a>
            </div>

            <div class="inner-list">
                <img src="<?= base_url('assets/img/instagram.svg'); ?>" alt="">
                <a href="https://www.instagram.com/harrishotels/" target="_blank">@harrishotels</a>
            </div>
        </div>
    </section>
</main>
