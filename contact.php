<title>Contact Us</title>
<?php require "./components/head.php"; ?>

<style>
  .hero {
    background-image: url(./assets/img/contact.jpg);
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
          <h2>Contact Us</h2>
          <p class="about-para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, quod aliquam dolorem
            obcaecati at laborum?</p>
          <div class="d-flex justify-content-center justify-content-lg-start " style="gap: 20px;">
            <a href="#" class="btn-get-started about-second">Request and Estimate<span class="arrow-bar"><i
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
            <li>Contact Us</li>
          </ol>
        </div>
      </nav>
    </div>
    <!-- End Breadcrumbs -->
  </section>

  <section id="get-in-touch" class="get-started contact-padding">
    <div class="container pb-5 pt-3" data-aos="fade-up">
      <div class="row gx-lg-0 gy-4 back-col get-started-flex main-contact">
        <div class="col-lg-6">
          <div class="contact-header">
            <div class="button-div icon-button d-flex pb-5">
              <a href="#!"><button type="button" class="btn btn-primary btn-cng btn-conus btn-contact">Get in Touch</button></a>
            </div>
            <p class="customer-cng">
              Ready to elevate your workforce with [Company Name]? Contact us today to discuss your manpower
              requirements and discover how we can support your business objectives with our extensive
              network and expertise.
            </p>
          </div>
        </div>
        <div class="col-lg-4 get-started">
          <img src="assets/img/co1.jpg" class="img-fluid rounded-4 mb-4" alt="">
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="mission">
    <div class="container-fluid bg-light overflow-hidden px-lg-0 pb-5">
      <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0">
          <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
            <div class="p-lg-5 ps-lg-0">
              <div class="section-title text-start">
                <h3 class="display-5 mb-4">Contact Us</h3>
              </div>
              <form>
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="name" placeholder="Your Name">
                      <label for="name">Your Name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input type="email" class="form-control" id="email" placeholder="Your Email">
                      <label for="email">Your Email</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="subject" placeholder="Phone Number">
                      <label for="subject">Phone Number</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea class="form-control" id="message" style="height: 100px"></textarea>
                      <label for="message">Message</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-danger contact-btn w-100 py-3" type="submit">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
            <div class="position-relative h-100">
              <iframe class="position-absolute w-100 h-100" style="object-fit: cover;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117925.35231274091!2d88.26495097637454!3d22.53540637452065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882db4908f667%3A0x43e330e68f6c2cbc!2sKolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1715403953642!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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