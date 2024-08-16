<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UrbanArt - Category</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  
  <!-- Template Main CSS Files -->
  <link href="assets/css/account.css" rel="stylesheet" >
  <link href="assets/css/cart-icon.css" rel="stylesheet">
  <link href="./assets/css/main1.css"  rel="stylesheet">
  <link href="./assets/css/variables.css"  rel="stylesheet">

<style>
  #icon1 {
  color: black;
  transition: color 0.3s ease;
}

/* Change icon color on hover */
  #icon1:hover {
  color: green;
}

.drop11{
  margin-top:130px;
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
        <li class="dropdown"><a href="category1.php"><span>Categories</span><i class="bi bi-chevron-down dropdown-indicator"></i></a>
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

  <div class="container-fluid drop11">
      <ul class="grid-list">

    <li>
      <form action="manage_cart.php" method="POST">
        <div  class="product-card">

          <figure class="card-banner">
            <img src="./assets/img/images/product-1.png" width="189" height="189" loading="lazy" alt="Fresh Orangey">
          </figure>

          <div class="rating-wrapper">
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
          </div>

          <h3 class="h4 card-title">
            <a href="./product-details.html">Fresh Orangey</a>
          </h3>

          <div class="price-wrapper">
            <del class="del">$75.00</del>
            <data class="price1">$85.00</data>
          </div>

          <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Fresh Orangey">
          <input type="hidden" name="Price" value="85">
        </div>
      </form>
    </li>

    <li>
      <form action="manage_cart.php" method="POST">
        <div  class="product-card">

          <figure class="card-banner">
            <img src="./assets/img/images/product-2.png" width="189" height="189" loading="lazy" alt="Fresh Orangey">
          </figure>

          <div class="rating-wrapper">
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
          </div>

          <h3 class="h4 card-title">
            <a href="./product-details.html">Key Lime</a>
          </h3>

          <div class="price-wrapper">
            <del class="del">$65.00</del>
            <data class="price1">$75.00</data>
          </div>

          <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="key Lime">
          <input type="hidden" name="Price" value="75">
        </div>
      </form>
    </li>

    <li>
      <form action="manage_cart.php" method="POST">
        <div  class="product-card">
          <figure class="card-banner">
            <img src="./assets/img/images/product-3.png" width="189" height="189" loading="lazy" alt="Fresh Orangey">
          </figure>

          <div class="rating-wrapper">
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
          </div>

          <h3 class="h4 card-title">
            <a href="./product-details.html">Fresh Watermelon</a>
          </h3>

          <div class="price-wrapper">
            <del class="del">$65.00</del>
            <data class="price1">$95.00</data>
          </div>

          <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Fresh Watermelon">
          <input type="hidden" name="Price" value="95">
        </div>
      </form>
    </li>

    <li>
      <form action="manage_cart.php" method="POST">
        <div  class="product-card">

          <figure class="card-banner">
            <img src="./assets/img/images/product-4.png" width="189" height="189" loading="lazy" alt="Fresh Orangey">
          </figure>

          <div class="rating-wrapper">
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
          </div>

          <h3 class="h4 card-title">
            <a href="./product-details.html">Strawberry</a>
          </h3>

          <div class="price-wrapper">
            <del class="del">$75.00</del>
            <data class="price1">$185.00</data>
          </div>

          <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Strawberry">
          <input type="hidden" name="Price" value="185">
        </div>
      </form>
    </li>

    <li>
      <form action="manage_cart.php" method="POST">
        <div class="product-card">

          <figure class="card-banner">
            <img src="./assets/img/images/product-5.png" width="189" height="189" loading="lazy" alt="Fresh Orangey">
          </figure>

          <div class="rating-wrapper">
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
          </div>

          <h3 class="h4 card-title">
            <a href="./product-details.html">Pomogranate</a>
          </h3>

          <div class="price-wrapper">
            <del class="del">$65.00</del>
            <data class="price1">$175.00</data>
          </div>

          <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Pomogranate">
          <input type="hidden" name="Price" value="175">
        </div>
      </form>
    </li>

    <li> 
      <form action="manage_cart.php" method="POST">
        <div class="product-card">

          <figure class="card-banner">
            <img src="./assets/img/images/product-6.png" width="189" height="189" loading="lazy" alt="Fresh Orangey">
          </figure>

          <div class="rating-wrapper">
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
          </div>

          <h3 class="h4 card-title">
            <a href="./product-details.html">Red Onion</a>
          </h3>

          <div class="price-wrapper">
            <del class="del">$65.00</del>
            <data class="price1">$195.00</data>
          </div>

          <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Red Onion">
          <input type="hidden" name="Price" value="195">
        </div>
      </form>
    </li>

    <li>
      <form action="manage_cart.php" method="POST">
        <div class="product-card">

          <figure class="card-banner">
            <img src="./assets/img/images/product-7.png" width="189" height="189" loading="lazy" alt="Fresh Orangey">
          </figure>

          <div class="rating-wrapper">
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
          </div>

          <h3 class="h4 card-title">
            <a href="./product-details.html">Brocolli</a>
          </h3>

          <div class="price-wrapper">
            <del class="del">$75.00</del>
            <data class="price1">585.00</data>
          </div>

          <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="Brocolli">
          <input type="hidden" name="Price" value="55">
        </div>
      </form>
    </li>

    <li>
      <form action="manage_cart.php" method="POST">
        <div class="product-card">

          <figure class="card-banner">
            <img src="./assets/img/images/product-2.png" width="189" height="189" loading="lazy" alt="Fresh Orangey">
          </figure>

          <div class="rating-wrapper">
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
          </div>

          <h3 class="h4 card-title">
            <a href="./product-details.html">Key Lime</a>
          </h3>

          <div class="price-wrapper">
            <del class="del">$65.00</del>
            <data class="price1">$75.00</data>
          </div>

          <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
          <input type="hidden" name="Item_Name" value="key Lime">
          <input type="hidden" name="Price" value="75">
        </div>
      </form>
    </li>
    </ul>
  </div>
<hr>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">

        <div class="row g-5">
          <div class="col-lg-4">
            <h3 class="footer-heading">About ZenBlog</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab, perspiciatis beatae autem deleniti voluptate nulla a dolores, exercitationem eveniet libero laudantium recusandae officiis qui aliquid blanditiis omnis quae. Explicabo?</p>
            <p><a href="about.html" class="footer-link-more">Learn More</a></p>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Navigation</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="index.html"><i class="bi bi-chevron-right"></i> Home</a></li>
              <li><a href="index.html"><i class="bi bi-chevron-right"></i> Blog</a></li>
              <li><a href="category.html"><i class="bi bi-chevron-right"></i> Categories</a></li>
              <li><a href="single-post.html"><i class="bi bi-chevron-right"></i> Single Post</a></li>
              <li><a href="about.html"><i class="bi bi-chevron-right"></i> About us</a></li>
              <li><a href="contact.html"><i class="bi bi-chevron-right"></i> Contact</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Categories</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="category.html"><i class="bi bi-chevron-right"></i> Business</a></li>
              <li><a href="category.html"><i class="bi bi-chevron-right"></i> Culture</a></li>
              <li><a href="category.html"><i class="bi bi-chevron-right"></i> Sport</a></li>
              <li><a href="category.html"><i class="bi bi-chevron-right"></i> Food</a></li>
              <li><a href="category.html"><i class="bi bi-chevron-right"></i> Politics</a></li>
              <li><a href="category.html"><i class="bi bi-chevron-right"></i> Celebrity</a></li>
              <li><a href="category.html"><i class="bi bi-chevron-right"></i> Startups</a></li>
              <li><a href="category.html"><i class="bi bi-chevron-right"></i> Travel</a></li>

            </ul>
          </div>

          <div class="col-lg-4">
            <h3 class="footer-heading">Recent Posts</h3>

            <ul class="footer-links footer-blog-entry list-unstyled">
              <li>
                <a href="single-post.html" class="d-flex align-items-center">
                  <img src="assets/img/post-sq-1.jpg" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <span>5 Great Startup Tips for Female Founders</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="single-post.html" class="d-flex align-items-center">
                  <img src="assets/img/post-sq-2.jpg" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <span>What is the son of Football Coach John Gruden, Deuce Gruden doing Now?</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="single-post.html" class="d-flex align-items-center">
                  <img src="assets/img/post-sq-3.jpg" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <span>Life Insurance And Pregnancy: A Working Mom’s Guide</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="single-post.html" class="d-flex align-items-center">
                  <img src="assets/img/post-sq-4.jpg" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <span>How to Avoid Distraction and Stay Focused During Video Calls?</span>
                  </div>
                </a>
              </li>

            </ul>

          </div>
        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <div class="copyright">
              © Copyright <strong><span>ZenBlog</span></strong>. All Rights Reserved
            </div>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>

          </div>

          <div class="col-md-6">
            <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

        </div>

      </div>
    </div>

  </footer>

  <!-- Template Main JS File -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

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