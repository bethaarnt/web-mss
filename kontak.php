<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MSS SUMSEL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto m-4 ">
        <a href="index.php" class="scrollto logo d-flex align-items-center">
          <img src="assets/img/mssLogo.png" class="" alt="" title="">
        </a>
      </div>
      
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li><a class="nav-link scrollto" href="program.php">Program</a></li>
          <li><a class="nav-link scrollto" href="galeri.php">Gallery</a></li>
          <li><a class="nav-link scrollto" href="blog.php">Blog</a></li>
          <li><a class="nav-link scrollto active" href="kontak.php">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/about.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2>Hubungi kami</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="mt-4">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="row gy-4">
            <div class="col-lg-5">
              <div class="info-item d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-geo"></i>
                <h3>Address</h3>
                <p class="text-center">Jl. Bedil No.102/806, Kemuning, Kota Palembang, Sumatera Selatan 30164</p>
              </div>
            </div><!-- End Info Item -->
  
            <div class="col-lg-4 col-md-6">
              <div class="info-item d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-envelope"></i>
                <h3>Email</h3>
                <p>masyarakatsehatsriwijaya21@gmail.com</p>
              </div>
            </div><!-- End Info Item -->
  
            <div class="col-lg-3 col-md-6">
              <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-telephone"></i>
                <h3>Phone</h3>
                <p>0821 8473 9007</p>
              </div>
            </div><!-- End Info Item -->
  
          </div>
  
          <div class="row gy-4 mt-1">
  
            <div class="col-lg-6 ">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.03148873576004!2d104.75331838261035!3d-2.9576073593177683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b77df56676e79%3A0xbbd4a40714b6fd35!2sMasyarakat%20sehat%20sriwijaya!5e0!3m2!1sid!2sid!4v1711548873983!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div><!-- End Google Maps -->
  
            <div class="col-lg-6">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row gy-4">
                  <div class="col-lg-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-lg-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div><!-- End Contact Form -->
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-5 col-md-5 footer-info">
          <img src="assets/img/mssLogo.png" alt="TheEvenet">
          <p>Masyarakat Sehat Sriwijaya berupaya dalam penanggulangan penyakit Tuberkulosis (TBC) dengan penyuluhan aktif di masyarakat, investigasi kontak, mengampanyekan isu TBC di media sosial dan media massa, serta pendampingan pasien sampai sembuh.</p>
        </div>
        <div class="col-lg-2 col-md-2 footer-links">
          <h4 class="col-lg-6 col-md-6">Menu</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="index.php">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="about.php">About</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="program.php">Program</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="galeri.php">Gallery</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="blog.php">Blog</a></li>
          </ul>
        </div>
        <div class="col-lg-5 col-md-5 footer-contact">
          <h4 class="col-lg-4 col-md-4">Contact Us</h4>
          <p>
            Jl. Bedil complek YPP No.102/806, 20 Ilir D II, Kec. Kemuning, Kota Palembang, Sumatera Selatan 30164 <br>
            <strong>Phone:</strong> 0821 8473 9007<br>
            <strong>Email:</strong> masyarakatsehatsriwijaya21@gmail.com<br>
          </p>
          <div class="social-links">
            <a href="https://www.instagram.com/masyarakatsehatsriwijayasumsel" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.tiktok.com/@mss_palembang" class="tiktok"><i class="bi bi-tiktok"></i></a>
            <a href="https://www.youtube.com/@MasyarakatSehatSriwijaya" class="youtube"><i class="bi bi-youtube"></i></a>
            <a href="https://www.facebook.com/100075098712350" class="facebook"><i class="bi bi-facebook"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; 2024 <strong>Masyarakat Sehat Sriwijaya</strong>. All Rights Reserved
    </div>
  </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>