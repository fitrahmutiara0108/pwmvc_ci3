<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tiara's Web - Index</title>
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
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="<?php echo base_url('');?>">Tiara's Web</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?php echo base_url('Welcome/profile');?>">Profile</a></li>
	        <li><a href="<?php echo base_url('Welcome/hometown');?>">Hometown</a></li>
	        <li><a href="<?php echo base_url('Welcome/food');?>">Food</a></li>
	        <li><a href="<?php echo base_url('Welcome/tourist');?>">Tourist</a></li>
          <!-- </li> -->
          <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Tiara's Web</span></h2>
          <p class="animate__animated fanimate__adeInUp">Hello there, i created this website for Web Programming Task ^-^</p>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">My Hometown Surabaya</h2>
          <p class="animate__animated animate__fadeInUp">This is where you found anything about Surabaya</p>
          <a href="<?php echo base_url('Welcome/hometown');?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Find More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Surabaya's Food</h2>
          <p class="animate__animated animate__fadeInUp">Do you know that we have lots of local food :D They all taste so delicious</p>
          <a href="<?php echo base_url('Welcome/food');?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Find More</a>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Tourist Page</h2>
          <p class="animate__animated animate__fadeInUp">Here are beautiful places you can visit in Surabaya</p>
          <a href="<?php echo base_url('Welcome/tourist');?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Find More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>About</h2>
          <p>Who am i</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
              I am one of a living creature in this world, who live exactly in Surabaya for aged
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> I'm a human</li>
              <li><i class="ri-check-double-line"></i> Have two eyes</li>
              <li><i class="ri-check-double-line"></i> And Craved for Food</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              If you want to know more about me, you can visit my profile page here, but if you wont, its okay too <3 
            </p>
            <a href="<?php echo base_url('Welcome/profile');?>" class="btn-learn-more">My Profile </a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Curious about Surabaya's Local Food?</h3>
            <p>Psst! There also plant based food in here</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?php echo base_url('Welcome/food');?>">Click here</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3" data-aos="zoom-in">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
              <i class="ri-gps-line"></i>
              <h4 class="d-none d-lg-block">Surabaya at A Glance</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
              <i class="ri-body-scan-line"></i>
              <h4 class="d-none d-lg-block">People in Here</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
              <i class="ri-sun-line"></i>
              <h4 class="d-none d-lg-block">The Weather</h4>
            </a>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
              <i class="ri-building-line"></i>
              <h4 class="d-none d-lg-block">The Building</h4>
            </a>
          </li>
          </li>
        </ul>

        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>A Glance About My City</h3>
                <p class="fst-italic">
		Surabaya, provincial capital of East Java and Indonesia's second largest city encompasses 290,44 sq km and is inhabited by more than 3 million people. Served for over half a millennium as trading port the inland empires of Java. Surabaya known as the "city of Heroes" because of its role in the nation’s independence struggle, has grown into an elegant city of large, colonnaded buildings bordering broad, tree shaded avenues. It serves as the commercial center of a thriving industrial and agricultural hinterland. Surabaya is also home to one of south east Asia's oldest and largest zoos.
		<br><br>Today's reality is mundane by comparison. Surabaya is a warm, sprawling city. Primarily a centre for trade, finance and manufacturing. Over the past few years the latest developments include the establishment of some new residential suburbs and a large industrial estate at Rungkut in the southeast of the city.</br></br>
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="<?php echo base_url('/assets/webprofile/');?>assets/img/features-1.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>FYI, Majority of our people is Javanese</h3>
                <p class="fst-italic"><br>
                  Javanese people form the majority in Surabaya while the Madurese are significant minorities. Surabaya also has ethnic populations from other parts of Indonesia: Sundanese, Minang, Batak, Banjar, Balinese, and Bugis. Surabaya is one of the major cities in Indonesia that has a significant population of Chinese, Indian and Middle East people; there are Arabs, especially the Hadhrami people who originate from the Hadhramaut region in Yemen, Armenian people, and Jews.
                </br></p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="<?php echo base_url('/assets/webprofile/');?>assets/img/features-2.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Bring a fan with you if you aren't the person who survive summer >_< </h3>
                <p class="fst-italic"><br>
                  Under the Köppen climate classification system, Surabaya features a tropical wet and dry climate (Aw), with distinct wet and dry seasons. The city's wet season runs from October through May, while the dry season covers the remaining four months. Unlike many cities and regions with a tropical wet and dry climate, average high and low temperatures are very consistent throughout the year, with an average high temperature of around 31 °C and average low temperatures around 23 °C.
                </br></p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="<?php echo base_url('/assets/webprofile/');?>assets/img/features-3.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Some of Surabaya's building</h3>
                <ul>
                  <li><i class="ri-check-double-line"></i> Al-Akbar Mosque, the largest mosque in East Java.</li>
                  <li><i class="ri-check-double-line"></i> Church of the Birth of Our Lady, Surabaya, one of the first churches to be built in Indonesia, and the first one ever built in East Java.</li>
                  <li><i class="ri-check-double-line"></i> Heroes Monument, a 41 metres (135 ft) high monument, is the main symbol of Surabaya and commemorates the heroes of the revolutionary struggle. There is a museum on location as well, exhibiting reminders of the struggle for independence.</li>
		  <li><i class="ri-check-double-line"></i> Museum Bank Indonesia, a bank museum occupying the former De Javasche Bank built in 1904.</li>
		  <li><i class="ri-check-double-line"></i> Jalesveva Jayamahe Monument, a large, admiral-like statue which commemorates the Indonesian Navy.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="<?php echo base_url('/assets/webprofile/');?>assets/img/features-4.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->


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
