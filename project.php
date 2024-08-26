<title>Team</title>
<?php require "./components/head.php"; ?>

<style>
  .hero {
    background-image: url(./assets/img/project.jpg);
    background-size: cover;
  }
</style>

</head>

<body>

  <?php require "./components/topbar.php"; ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero hero-main">
    <div class="container position-relative about-container about-pad">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Projects</h2>
          <p class="about-para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, quod aliquam dolorem
            obcaecati at laborum?</p>
          <div class="d-flex justify-content-center justify-content-lg-start " style="gap: 20px;">
            <a href="./contact.php" class="btn-get-started about-first">Contact Us <span class="arrow-bar"><i
                  class="bi bi-arrow-right-short"></i></span></a>
            <a href="#!" class="btn-get-started about-second">Request and Estimate<span class="arrow-bar"><i
                  class="bi bi-arrow-right-short"></i></span></a>
          </div>
        </div>
      </div>
    </div>
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <nav>
        <div class="container">
          <ol>
            <li><a href="./">Home</a></li>
            <li>Project</li>
          </ol>
        </div>
      </nav>
    </div>
    <!-- End Breadcrumbs -->
  </section>
  <section id="project-details" class="about">
  <div class="container" data-aos="fade-up">
      <div class="section-header col-7">
        <h3>Let Us Help You With Your Cleaning And Disinfecting Responsibilities.</h3>
      </div>
      <div class="row gy-4">
        <div class="col-lg-6 padding-para">
          <p>With more than 35 years getting to know every kind of client, from homeowners to facility & property
            managers to healthcare decision-makers. Our relentless passion for excellence and customer service means we
            continuously invest in improving our processes.</p>
          <p class="pt-3 pb-3">Sanera is a leading provider of cleaning and restoration services in both the residential
            and commercial
            markets, operating through an extensive service network.</p>

          <div class="button-div d-flex">
            <button type="button" class="btn btn-primary btn-cng btn-conus">Contact Us<i
                class="bi bi-arrow-right-short"></i></button>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="content ps-0 ps-lg-5">
            <img src="assets/img/pr1.jpg" class="img-fluid rounded-4 mb-4" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="Project" class="portfolio sections-bg">
    <div class="container pb-5" data-aos="fade-up">
      <div class="section-header text-center">
        <h2>Our Project</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, sed.</p>
      </div>
      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
        data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 portfolio-container">
          <div class="col-xl-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <a href="assets/img/project/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="assets/img/project/app-1.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="./projectDetails.php" title="More Details">Demo</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <a href="assets/img/project/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="assets/img/project/product-1.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="./projectDetails.php" title="More Details">Demo</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <a href="assets/img/project/branding-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="assets/img/project/branding-1.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="./projectDetails.php" title="More Details">Demo</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <a href="assets/img/project/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="assets/img/project/books-1.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="./projectDetails.php" title="More Details">Demo</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <a href="assets/img/project/app-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="assets/img/project/app-2.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="./projectDetails.php" title="More Details">Demo</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <a href="assets/img/project/product-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="assets/img/project/product-2.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="./projectDetails.php" title="More Details">Demo</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require "./components/footer.php"; ?>



</body>

</html>