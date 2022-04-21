<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Profile Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.2/css/boxicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/css/glightbox.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.1.3/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('/assets/webprofile/');?>assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="<?php echo base_url('n');?>">Tiara's Web</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
              <li><a href="<?php echo base_url('Welcome/profile');?>">Profile</a></li>
	      <li><a href="<?php echo base_url('Welcome/hometown');?>">Hometown</a></li>
	      <li><a href="<?php echo base_url('Welcome/food');?>">Food</a></li>
	      <li><a href="<?php echo base_url('Welcome/tourist');?>">Tourist</a></li>
          </li>
          <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>My Profile</h2>
          <ol>
            <li><a href="<?php echo base_url('');?>">Home</a></li>
            <li>Profile</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
	    <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div>
                  <img src="<?php echo base_url('/assets/webprofile/');?>assets/img/photo.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>About me</h3>
              <ul>
                <li><strong>Full name</strong>: Fitrah Mutiara</li>
                <li><strong>Born at</strong>: August 2001</li>
              <p><br>
                I'm in my third year of studies towards a bachelor's in Informatics Engineering at Institut Teknologi Sepuluh Nopember.
              </br></p>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Tiara's Web</h3>
      <p>Thank you for visiting my web <3.</p>
      <div class="social-links">
        <a href="https://id-id.facebook.com/fitrahmutiaraa" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="http://instagram.com/fitrahmutiara" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="http://linkedin.com/in/fitrah-mutiara" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/js/glightbox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.1.3/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('/assets/webprofile/');?>assets/js/main.js"></script>

</body>

</html>