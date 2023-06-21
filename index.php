<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kopi Yasmin</title>

    <!-- Fonts! -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- Feather Icons  -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Nako <span>Yasmin</span></a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Contact</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"> <i data-feather="search"></i> </a>
        <a href="#" id="shopping-cart">
          <i data-feather="shopping-cart"></i>
        </a>
        <a href="#" id="hamburger-menu"> <i data-feather="menu"></i> </a>
      </div>
    </nav>
    <!-- Navbar end -->

    <!-- Hero Section Start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Mari Nikmati Secangkir <span>Kopi</span></h1>
        <p>Nikmati Masa Mudamu Sebelum Masa Tuamu.</p>
      </main>
    </section>
    <!-- Hero Section End -->

    <!-- About Section start -->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="img/dani-ZLqxSzvVr7I-unsplash.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Kenapa memilih kopi kami?</h3>
          <p>
            Rasa kopinya smooth, se-smooth PDKT kamu ke si dia. Di sini bisa
            reservasi tempat buat ngopi bareng dia.
          </p>
        </div>
      </div>
    </section>
    <!-- About Section end -->

    <!-- Menu Section start -->
    <section id="menu" class="menu">
      <h2><span>Menu </span>Kami</h2>
      <p>Espresso, Black Cofee, Latte, Cappucino</p>

      <div class="row">
        <div class="menu-card">
          <img
            src="img/nathan-dumlao-dAYJfrtVjh0-unsplash (4).jpg"
            alt="Espresso"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Espresso -</h3>
          <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
          <img
            src="img/adi-goldstein-xKS-1DP4g7A-unsplash.jpg"
            alt="Espresso"
            class="menu-card-img"
          />
          <h3 class="menu-card-title">- Black Coffee -</h3>
          <p class="menu-card-price">IDR 20K</p>
        </div>
        <div class="menu-card">
          <img src="img/latte.jpg" alt="Espresso" class="menu-card-img" />
          <h3 class="menu-card-title">- Latte -</h3>
          <p class="menu-card-price">IDR 25K</p>
        </div>
        <div class="menu-card">
          <img src="img/Cappucino.jpg" alt="Espresso" class="menu-card-img" />
          <h3 class="menu-card-title">- Cappucino -</h3>
          <p class="menu-card-price">IDR 30K</p>
        </div>
      </div>
    </section>

    <!-- Menu Section end -->

    <!-- Contact Session start -->
    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>
      <p>Silahkan Di Isi</p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7218582200862!2d106.77294739999998!3d-6.556754000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5d90f18e3d3%3A0x85905d930a20bb92!2sKopi%20Nako%20Yasmin!5e0!3m2!1sid!2sid!4v1687262289988!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="" method="post">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="Nama" name="nama"/>
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="Email" name="email"/>
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="No Hp" name="nohp"/>
          </div>
          <button type="submit" class="btn" name="submit">Kirim Pesan</button>
        </form>
      </div>
    </section>
    <!-- Contact Session end -->

    <!-- Footer start -->
    <footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i> </a>
        <a href="#"><i data-feather="twitter"></i> </a>
        <a href="#"><i data-feather="facebook"></i> </a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="credit">
        <p>Created By <a href="">Simon</a></p>
      </div>
    </footer>
    <!-- Footer end-->
    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- My Js -->
    <script src="script.js"></script>
  </body>
</html> 
