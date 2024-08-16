<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UrbanArt - Premium</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/css/cart-icon.css" rel="stylesheet">
  <link href="assests1/css/variables.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/account.css" rel="stylesheet" >
  <link href="assests1/css/premium.css" rel="stylesheet">

  <style>
    #icon1 {
  color: black;
  transition: color 0.3s ease;
}

/* Change icon color on hover */
  #icon1:hover {
  color: green;
}
.navbar a:hover{
  text-decoration:none;
}
.disabled-link {
  pointer-events: none;
  cursor: default;
  color: #999; /* Optionally change the color to indicate it's disabled */
}
  </style>
  


</head>

<body>
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>UrbanArt</h1>
      </a>

      <nav id="navbar" class="navbar">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="agents-grid.php">Artists</a></li>
        <li class="dropdown"><a class="disabled-link" href="#"><span>Categories</span><i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="category1_sketches.php">Sketches</a></li>
            <li><a href="category1_portraits.php">Portraits</a></li>
            <li class="dropdown"><a href="category1_homedecor.php"><span>Home Decor</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="category1_sculpture.php">Sculpture</a></li>
                <li><a href="category1_flowerpots.php">Flower Pot</a></li>
                <li><a href="category1_wallpainting.php">Wall Painting</a></li>
              </ul>
            </li>
            <li><a href="category1_canvas.php">Canvas</a></li>
            <li><a href="category1_watercolor.php">Watercolor</a></li>

          </ul>
        </li>

        <li><a href="exhibition2.php">Exhibitions</a></li>
        <li><a href="premium.php">Go Premium</a></li>
      </ul>
    </nav><!-- .navbar -->

      <div class="position-relative">
        <?php
          $count=0;
          if(isset($_SESSION['cart']))
          {
            $count = count($_SESSION['cart']);
          }
        ?>
        <?php
          if (isset($_SESSION['role_id']) && $_SESSION['role_id'] == 1) {
              ?>
              
                  <a href="cart1.php" class="mx-2 cart-icon-container">
                      <span id="icon1" class="bi bi-cart cart-icon"></span>
                      <span class="cart-count">
                          <?php echo "$count"; ?>
                      </span>
                  </a>
                  <!-- HTML -->
                  <div class="dropdown1">
                      <div class="account-dropdown">
                          <span id="account1" class="bi bi-person-circle" onclick="toggleDropdown()"></span>
                          <div class="dropdown-content" id="dropdownContent">
                              <span id="name1"><?php echo $_SESSION['uname']; ?></span>
                              <a id="logout1" href="logout.php">Logout</a>
                          </div>
                      </div>
                  </div>

          <?php } else { ?>
              <div class="dropdown1">
                  <a href="login.php" class="mx-2">
                      <span class="bi bi-person-circle"></span>
                  </a>
              </div>
          <?php } ?>
        <a href="#" class="mx-2 js-search-open"><span id="icon1" class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->

      <!-- ======= Pricing Section ======= -->
      <section id="pricing" class="pricing" style="margin-top: 80px;">
        <div class="container" data-aos="fade-up">
  
        <div class="section-header">
          <h2>UrbanArt Pricing</h2>
          <p>Discover the exquisite world of art with us. From captivating paintings to stunning sculptures, our pricing reflects the passion and dedication of our artists. Explore the beauty of creation and find the perfect piece to adorn your space.</p>
        </div>

  
          <div class="row gy-4">
  
            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
              <div class="pricing-item">
  
                <div class="pricing-header">
                  <h3>Free Plan</h3>
                  <h4><sup>$</sup>0<span> / month</span></h4>
                </div>
  
                <ul>
                  <li><i class="bi bi-dot"></i> <span>Access to basic art resources</span></li>
                  <li><i class="bi bi-dot"></i> <span>Limited feature set</span></li>
                  <li><i class="bi bi-dot"></i> <span>Community access</span></li>
                  <li class="na"><i class="bi bi-x"></i> <span>No premium content</span></li>
                  <li class="na"><i class="bi bi-x"></i> <span>No personalized support</span></li>
                </ul>
  
                <div class="text-center mt-auto">
                  <a href="#" class="buy-btn">Buy Now</a>
                </div>
  
              </div>
            </div><!-- End Pricing Item -->
  
            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
              <div class="pricing-item featured">
  
                <div class="pricing-header">
                  <h3>Art Basic Plan</h3>
                  <h4><sup>$</sup>29<span> / month</span></h4>
                </div>
  
                <ul>
                  <li><i class="bi bi-dot"></i> <span>Expanded art collection</span></li>
                  <li><i class="bi bi-dot"></i> <span>Priority support</span></li>
                  <li><i class="bi bi-dot"></i> <span>Exclusive events access</span></li>
                  <li><i class="bi bi-dot"></i> <span>Monthly art showcases</span></li>
                  <li><i class="bi bi-dot"></i> <span>Discounts on featured pieces</span></li>
                </ul>
  
                <div class="text-center mt-auto">
                  <a href="#" class="buy-btn">Buy Now</a>
                </div>
  
              </div>
            </div><!-- End Pricing Item -->
  
            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
              <div class="pricing-item">
  
                <div class="pricing-header">
                  <h3>Art Collector Plan</h3>
                  <h4><sup>$</sup>49<span> / month</span></h4>
                </div>
  
                <ul>
                  <li><i class="bi bi-dot"></i> <span>Premium art collection</span></li>
                  <li><i class="bi bi-dot"></i> <span>Personal art curator</span></li>
                  <li><i class="bi bi-dot"></i> <span>Invitations to exclusive exhibitions</span></li>
                  <li><i class="bi bi-dot"></i> <span>Art investment insights</span></li>
                  <li><i class="bi bi-dot"></i> <span>Customized art consultations</span></li>
                </ul>
  
                <div class="text-center mt-auto">
                  <a href="#" class="buy-btn">Buy Now</a>
                </div>
  
              </div>
            </div><!-- End Pricing Item -->
  
          </div>
  
        </div>
      </section><!-- End Pricing Section -->
  
      <!-- ======= F.A.Q Section ======= -->
      <section id="faq" class="faq">
        <div class="container-fluid" data-aos="fade-up">
  
          <div class="row gy-4">
  
            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
  
              <div class="content px-xl-5">
                <h3>Frequently Asked <strong>Questions</strong></h3>
                <p>
                  Explore commonly asked questions about our services and offerings. If you don't find what you're looking for, feel free to reach out to us directly.
                </p>
              </div>
  
              <div class="accordion accordion-flush px-xl-5" id="faqlist">
  
            <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                        <i class="bi bi-question-circle question-icon"></i>
                        Is there a refund policy in place?
                    </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                        Our refund policy ensures your satisfaction. Please review our terms and conditions for detailed information.
                    </div>
                </div>
            </div><!-- # Faq item-->
  
            <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                        <i class="bi bi-question-circle question-icon"></i>
                        How do I contact customer support?
                    </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                        Our customer support team is available 24/7. You can reach us via email, phone, or live chat for assistance.
                    </div>
                </div>
            </div><!-- # Faq item-->
  
            <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                        <i class="bi bi-question-circle question-icon"></i>
                        Can I upgrade or downgrade my plan at any time?
                    </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                        Yes, you can easily upgrade or downgrade your plan at any time through your account settings.
                    </div>
                </div>
            </div><!-- # Faq item-->
  
            <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                        <i class="bi bi-question-circle question-icon"></i>
                        How secure is my personal information?
                    </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                        We prioritize the security of your personal information. Our platform adheres to the highest standards of data protection.
                    </div>
                </div>
            </div><!-- # Faq item-->
  
            <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                        <i class="bi bi-question-circle question-icon"></i>
                        How can I access my account if I forget my password?
                    </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                        If you forget your password, you can easily reset it by following the 'Forgot Password' link on the login page.
                    </div>
                </div>
            </div><!-- # Faq item-->
  
            </div>
  
            <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/download4.jpg");'>&nbsp;</div>
          </div>
  
        </div>
      </section><!-- End F.A.Q Section -->

      <?php include("./layout/footer1.php")  ?>
  

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->

  <script>// JavaScript
function toggleDropdown() {
    var dropdownContent = document.getElementById("dropdownContent");
    if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
    } else {
        dropdownContent.style.display = "block";
    }
}
</script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>