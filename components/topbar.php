<!-- ======= Header ======= -->
<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container-fluid d-flex justify-content-center justify-content-between py-4">
        <div class="contact-info d-flex align-items-center">
            <div class="top-info d-flex align-items-center">
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>Phone:<span>+55 654 541 17</span></i>
                <i class="bi bi-envelope d-flex align-items-center"><span>Email:<span>example@gmail.com</a></i>
                <i class="bi bi-envelope d-flex align-items-center"><span>Hours:<span>Mon-Fri: 8am - 7pm</a></i>
            </div>
        </div>
        <div class="social-links d-none d-md-flex align-items-center me-4">
            <a href="#">News & Media</a>
            <a href="#">Careers</a>
            <div class="top-logo d-flex align-items-center">
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </div>
</section>

<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between px-5">
        <nav id="navbar" class="navbar">
            <ul>
                <a href="./" class="logo d-flex align-items-start flex-column">
                    <img src="./assets/img/logo.png" alt="">
                </a>
                <a href="./"><p class="logo-txt ms-3 pt-2">SKPM <br>Services</p></a>
            </ul>
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li class="dropdown"><a href="./about.php" class=" <?php if ($page == 'company')
                    echo 'active'; ?>">Company</span>
                        <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="./about.php#about" class="dropdown-item <?php if ($page1 == 'about')
                            echo 'active'; ?>">About Us</a></li>
                        <li><a href="./about.php#mission">Our Mission</a></li>
                        <li><a href="./about.php#vision">Our Vision</a></li>
                        <li><a href="./about.php#expertise">Our Expertise</a></li>
                        <li><a href="./about.php#whyChooseUs">Why Choose Us</a></li>
                    </ul>
                </li>
                <li><a href="./project.php">Projects</a></li>
                <li class="dropdown"><a href="./services.php">Service</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="./services.php#temporary">Temporary Staffing</a></li>
                        <li><a href="./services.php#Placement">Permanent Placement</a></li>
                        <li><a href="./services.php#Contract-to-hire">Contract-to-Hire</a></li>
                        <li><a href="./services.php#Outsourcing">Payroll Outsourcing</a></li>
                        <li><a href="./services.php#rpo">RPO</a></li>
                        <li><a href="./services.php#Customized">Customized Solutions</a></li>
                    </ul>
                </li>
                <li><a href="./contact.php">Contact Us</a></li>
            </ul>
            <!-- <ul class="d-flex" style="gap:12px;">
                <a href="#" class="cart"><i class="bi bi-cart-check-fill"></i></a>
                <a href="#" class="search-br">Search</a>
                <button type="button" class="btn btn-primary btn-cng"><i class="bi bi-arrow-right-short"></i></button>
            </ul> -->
        </nav>
        <!-- .navbar -->
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header>