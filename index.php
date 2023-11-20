<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adam-kun</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CDN Roboto Fonts -->
  <link href="https://fonts.cdnfonts.com/css/roboto" rel="stylesheet">
  <!-- CDN  Caveat Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat">

  <!-- jQuery library -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
    * {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
    }

    body,
    html {
      height: 100%;
    }

    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
      position: relative;
      top: 40px;
    }

    .hero-content {
      max-width: 600px;
      margin: auto;
      text-align: center;
      color: #ffffff;
    }

    .navbar {
      transition: background-color 0.2s ease-in-out;
    }

    .navbar-toggler {
      box-shadow: none !important;
      border: #FFFFFF82 solid 0.2px;
    }

    .navbar .nav-link {
      color: #FFFFFF;
    }

    .navbar-scroll {
      background-color: #FFFFFF !important ; /* Replace with your desired primary color */
    }

    .navbar-scroll .container a,
    .navbar-scroll .container button {
      color: #0d6efd;
    }

    .navbar-scroll .container button {
      border: #0d6dfd82 solid 0.2px;
      background-color: #FFFFFF;
    }

    .navbar-scroll .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(13, 110, 253, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }

    .navbar-scroll.navbar-toggler {
      border-color: #0d6efd;
    } 

    .card-body div a img {
      height: 30px;
      opacity: 40%;
    }

    a img {
      height: 30px;
    }

    #contactme div div a {
      width: 220px;
    }

    @media screen and (max-width: 700px) {
      #contact-row {
        flex-direction: column;
      }
      #skills-row {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" style="font-family: Caveat; font-weight: 600; font-size: 36px;" href="#hero">Gudang Buku</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link fw-medium" style="font-size: 18px;" aria-current="page" href="#aboutme">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-medium" style="font-size: 18px;" href="#collection">Our Collection</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-medium" style="font-size: 18px;" href="#contactme">Contact me</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Hero Section -->
  <section class="hero d-flex align-items-center justify-content-center text-center" id="hero">
    <div class="container">
      <div class="row">
        <div class="order-md-1 d-flex flex-column justify-content-center align-items-center">
          <h1 class="fw-bold" style="font-family: 'Roboto Black', sans-serif;">Gudang Buku</h1>
          <p>Penyedia layanan gudang buku</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <!-- Content below the hero section -->
  <section class="container-fluid mb-5 pt-5" id="aboutme" style="background-color: var(--bs-primary); color: #FFFFFF;">
    <div class="row pb-5 pt-5">
      <div class="pt-4 col-md-12 d-flex flex-column align-items-center">
        <!-- Add your content here -->
        <h2 class="fw-bold" style="font-family: 'Roboto Bold', sans-serif;">About us</h2>
        <div class="d-flex flex-column mb-4 text-start ms-5 me-5 mt-2">
          <p>Gudang Buku adalah tempat yang dibangun dengan dedikasi untuk menyediakan akses mudah dan gratis kepada semua orang yang mencintai dunia literasi. Kami memahami kekuatan kata-kata dan keyakinan bahwa pengetahuan haruslah dapat diakses oleh siapa saja, tanpa hambatan apapun.</p>
        </div>

        <div class="d-flex flex-column mb-4 text-start ms-5 me-5 mt-2">
          <h4 class="fw-bold" style="font-family: 'Roboto Bold', sans-serif;">Visi Kami</h4>
          <p>Visi kami adalah menciptakan sebuah dunia di mana setiap individu memiliki akses bebas terhadap harta intelektual, di mana buku menjadi jendela untuk memahami dunia. Kami berkomitmen untuk menyediakan platform yang mudah digunakan dan ramah pengguna, sehingga setiap orang dapat menikmati keindahan buku digital tanpa biaya.</p>
        </div>

        <div class="d-flex flex-column mb-5 text-start ms-5 me-5 mt-2">
          <h4 class="fw-bold" style="font-family: 'Roboto Bold', sans-serif;">Misi Kami</h4>
          <p>Misi kami adalah menyediakan koleksi buku digital berkualitas tinggi dari berbagai genre, mulai dari fiksi hingga non-fiksi, untuk memenuhi kebutuhan bacaan setiap individu. Kami percaya bahwa dengan memberikan akses gratis, kita dapat memperluas cakrawala pengetahuan dan memberikan peluang baru bagi pertumbuhan pribadi.</p>
        </div>

        <div class="d-flex flex-column mb-5 text-start ms-5 me-5 mt-2">
          <h4 class="fw-bold" style="font-family: 'Roboto Bold', sans-serif;">Mengapa Memilih Gudang Buku?</h4>
          <p><b>Bebas Biaya:</b> Kami yakin bahwa belajar dan mengeksplorasi dunia literasi tidak harus mahal. Di Gudang Buku, semua buku dapat diakses tanpa biaya.</p>
          <p><b>Koleksi Beragam:</b> Dari novel terkenal hingga karya-karya tersembunyi, kami memiliki koleksi buku yang beragam untuk memenuhi selera dan minat berbaca setiap pengunjung.</p>
          <p><b>Mudah Digunakan:</b> Navigasi yang sederhana dan antarmuka yang ramah pengguna membuat pengalaman menjelajahi Gudang Buku menjadi menyenangkan dan tanpa hambatan.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="container mt-5 mb-5" id="collection">
    <h2 class="fw-bold text-center mb-4">Our Collection</h2>
    <div class="row d-flex align-items-stretch">
      <div class="col-md-4 mb-2 mt-2">
        <div class="card h-100">
          <img src="./img/bumi.jpg" class="card-img-top" alt="Project 1">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Bumi</h5>
            <p>By Tere liye</p>
            <p class="card-text"></p>
            <div class="d-flex justify-content-between mt-auto">
              <a href="#" class="btn btn-primary">Read more</a>
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-2 mt-2">
        <div class="card h-100">
          <img src="img/Hafalan_Shalat_Delisa.jpeg" class="card-img-top" alt="Project 2">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title flex-grow-1">Hafalan Shalat Delisa</h5>
            <p>By Tere Liye</p>
            <p class="card-text"></p>
            <div class="d-flex justify-content-between mt-auto">
              <a href="#" class="btn btn-primary">Read more</a>
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-2 mt-2">
        <div class="card h-100">
          <img src="img/5cm.jpg" class="card-img-top" alt="Project 3">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">5cm</h5>
            <p>By Donny Dhirgantoro</p>
            <p class="card-text"></p>
            <div class="d-flex justify-content-between mt-auto">
              <a href="#" class="btn btn-primary">Read more</a>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-flex align-items-stretch">
      <div class="col-md-4 mb-2 mt-2">
        <div class="card h-100">
          <img src="./img/dilan.jpg" class="card-img-top" alt="Project 1">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Dilan</h5>
            <p>By Pidi Baiq</p>
            <p class="card-text"></p>
            <div class="d-flex justify-content-between mt-auto">
              <a href="#" class="btn btn-primary">Read more</a>
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-2 mt-2">
        <div class="card h-100">
          <img src="img/kapal-vanderwijck.jpg" class="card-img-top" alt="Project 2">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title flex-grow-1">Tenggelamnya Kapal Van der Wijck</h5>
            <p>By Hamka</p>
            <p class="card-text"></p>
            <div class="d-flex justify-content-between mt-auto">
              <a href="#" class="btn btn-primary">Read more</a>
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-2 mt-2">
        <div class="card h-100">
          <img src="img/negeri-5-menara.jpg" class="card-img-top" alt="Project 3">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Negeri 5 Menara</h5>
            <p>By A. Fuadi</p>
            <p class="card-text"></p>
            <div class="d-flex justify-content-between mt-auto">
              <a href="#" class="btn btn-primary">Read more</a>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="container-fluid mt-5 pt-5 pb-5" style="background-color: var(--bs-primary); color: #FFFFFF;" id="contactme">
    <div class="column pt-5 pb-5 mb-5">
      <h1 class="fw-bold text-center pb-3">Contact Me</h1>
      <p class="text-center pb-5">feel free if you want contact me</p>
      <div class="row justify-content-evenly" id="contact-row">
        <a href="https://github.com/adamjatim" class="col-4 d-flex justify-content-evenly border mx-auto my-2 position-relative px-2 py-2 rounded-4">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/GitHub_Invertocat_Logo.svg/800px-GitHub_Invertocat_Logo.svg.png" alt="github-icon">
          <div style="color: #FFFFFF;">github</div>
        </a>
        <a href="mailto:adamrahmatilahi@gmail.com" class="col-4 d-flex justify-content-evenly border mx-auto my-2 position-relative px-2 py-2 rounded-4">
          <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Gmail_icon_%282020%29.svg" alt="gmail-icon">
          <div style="color: #FFFFFF;">gmail</div>
        </a>
        <a href="https://www.linkedin.com/in/adam-rahmat-ilahi/" class="col-4 d-flex justify-content-evenly border mx-auto my-2 position-relative px-2 py-2 rounded-4">
          <img src="https://upload.wikimedia.org/wikipedia/commons/8/81/LinkedIn_icon.svg" alt="linkedin-icon">
          <div style="color: #FFFFFF;">linkedin</div>
        </a>
      </div>
    </div>
  </section>

  <footer class="bg-dark text-white py-4">
    <div class="container text-center">
      <p>&copy; 2023 @adamrahmatilahi. All rights reserved.</p>
      <p>Website created with <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#d44646" class="bi bi-heart-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
      </svg> using Bootstrap.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    window.addEventListener("DOMContentLoaded", () => {
      document.addEventListener("scroll", () => {
        const navbar = document.querySelector(".navbar");
        const aboutMeSection = document.querySelector("#aboutme");
        const contactMeSection = document.querySelector("#contactme");
        const rectAboutMe = aboutMeSection.getBoundingClientRect();
        const rectContactMe = contactMeSection.getBoundingClientRect();

        if (rectAboutMe.top <= 80 && rectAboutMe.bottom >= 70 || rectContactMe.top <= 110 && rectContactMe.bottom >= 70) {
          navbar.classList.add("navbar-scroll");
        } else {
          navbar.classList.remove("navbar-scroll");
        }
      });
    });
  </script>

  <script>
    $(document).ready(function() {
      $('.navbar-collapse').on('show.bs.collapse', function() {
        $('.navbar-toggler').addClass('collapsed');
      });

      $('.navbar-collapse').on('hide.bs.collapse', function() {
        $('.navbar-toggler').removeClass('collapsed');
      });
    });
  </script>

</body>

</html>