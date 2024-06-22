<header>
    <nav>
        <div class="logo">  
            <h4>Harris Hotel</h4>
        </div>

        <ul>
            <li><a href="<?= base_url('home'); ?>">Home</a></li>
            <li><a href="#ammenities">Amenities</a></li>
            <li><a href="#localareas">Local Areas</a></li>
            <li><a href="#contact">Contact</a></li>
            <?php if ($this->session->userdata('logged_in')): ?>
            <li>
                <button>
                    <?= $this->session->userdata('nama'); ?>
                </button>
                <button onclick="window.location.href='<?= base_url('logout'); ?>'">Logout</button>
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
                    <button>Reserve now</button>
                </div>
            </div>
        </div>
    </section>
</main>
