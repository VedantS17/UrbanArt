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
  .disabled-link {
  pointer-events: none;
  cursor: default;
  color: #999; /* Optionally change the color to indicate it's disabled */
}
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
.card-banner {
  width: 189px; /* Set the width of the figure */
  height: 260px; /* Set the height of the figure */
  overflow: hidden; /* Hide any overflow */
}

.card-banner img {
  width: 100%; /* Make sure the image fills its container */
  height: 100%; /* Make sure the image fills its container */
  object-fit: cover; /* Cover the entire container with the image */
}
.search-form-wrap .search-form .form-control {
  height:40px;
}
.search-form-wrap .search-form .btn {
  color:black;
  background:none;
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
  <div class="container-fluid drop11">
  <ul class="grid-list">

  <li>
  <form action="manage_cart.php" method="POST">
    <div class="product-card">

      <figure class="card-banner">
      <img src="./assets/img_watercolor/1.jpg" width="189" height="189" loading="lazy" alt="1">
      </figure>

      <div class="rating-wrapper">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
      </div>

      <h3 class="h4 card-title">
        <a href="single_product.php">Hummingbird</a>
      </h3>

      <div class="price-wrapper">
        <del class="del">Rs.1200</del>
        <data class="price1">Rs.1100</data>
      </div>

      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
      <input type="hidden" name="Item_Name" value="Hummingbird">
      <input type="hidden" name="Price" value="1100">
    </div>
  </form>
</li>

<li>
  <form action="manage_cart.php" method="POST">
    <div class="product-card">

      <figure class="card-banner">
      <img src="./assets/img_watercolor/2.jpg" width="189" height="189" loading="lazy" alt="Portrait">
      </figure>

      <div class="rating-wrapper">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
      </div>

      <h3 class="h4 card-title">
        <a href="single_product.php">Portrait</a>
      </h3>

      <div class="price-wrapper">
        <del class="del">Rs.2500</del>
        <data class="price1">Rs.2300</data>
      </div>

      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
      <input type="hidden" name="Item_Name" value="Portrait">
      <input type="hidden" name="Price" value="2500">
    </div>
  </form>
</li>

<li>
  <form action="manage_cart.php" method="POST">
    <div  class="product-card">
      <figure class="card-banner">
      <img src="./assets/img_watercolor/3.jpg" width="189" height="189" loading="lazy" alt="White Lotus">
      </figure>

      <div class="rating-wrapper">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
      </div>

      <h3 class="h4 card-title">
        <a href="single_product.php">White Lotus</a>
      </h3>

      <div class="price-wrapper">
        <del class="del">Rs.3500</del>
        <data class="price1">Rs.3250</data>
      </div>

      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
      <input type="hidden" name="Item_Name" value="White Lotus">
      <input type="hidden" name="Price" value="3250">
    </div>
  </form>
</li>

<li>
  <form action="manage_cart.php" method="POST">
    <div  class="product-card">

      <figure class="card-banner">
      <img src="./assets/img_watercolor/4.jpg" width="189" height="189" loading="lazy" alt="Eagle">
      </figure>

      <div class="rating-wrapper">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
      </div>

      <h3 class="h4 card-title">
        <a href="single_product.php">Eagle</a>
      </h3>

      <div class="price-wrapper">
        <del class="del">Rs.1700</del>
        <data class="price1">Rs.1650</data>
      </div>

      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
      <input type="hidden" name="Item_Name" value="Eagle">
      <input type="hidden" name="Price" value="1650">
    </div>
  </form>
</li>

<li>
  <form action="manage_cart.php" method="POST">
    <div class="product-card">

      <figure class="card-banner">
      <img src="./assets/img_watercolor/5.jpg" width="189" height="189" loading="lazy" alt="Boat">
      </figure>

      <div class="rating-wrapper">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
      </div>

      <h3 class="h4 card-title">
        <a href="single_product.php">Boat at sunset</a>
      </h3>

      <div class="price-wrapper">
        <del class="del">Rs.2700</del>
        <data class="price1">Rs.2530</data>
      </div>

      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
      <input type="hidden" name="Item_Name" value="Boat at sunset">
      <input type="hidden" name="Price" value="2530">
    </div>
  </form>
</li>

<li> 
  <form action="manage_cart.php" method="POST">
    <div class="product-card">

      <figure class="card-banner">
      <img src="./assets/img_watercolor/6.jpg" width="189" height="189" loading="lazy" alt="Swam">
      </figure>

      <div class="rating-wrapper">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
      </div>

      <h3 class="h4 card-title">
        <a href="single_product.php">Swam</a>
      </h3>

      <div class="price-wrapper">
        <del class="del">Rs.1600</del>
        <data class="price1">Rs.1450</data>
      </div>

      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
      <input type="hidden" name="Item_Name" value="Swam">
      <input type="hidden" name="Price" value="1600">
    </div>
  </form>
</li>

<li>
  <form action="manage_cart.php" method="POST">
    <div class="product-card">

      <figure class="card-banner">
      <img src="./assets/img_watercolor/7.jpg" width="189" height="189" loading="lazy" alt="Trees and Sky">
      </figure>

      <div class="rating-wrapper">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
      </div>

      <h3 class="h4 card-title">
        <a href="single_product.php">Trees and Sky</a>
      </h3>

      <div class="price-wrapper">
        <del class="del">Rs.1650</del>
        <data class="price1">Rs.1400</data>
      </div>

      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
      <input type="hidden" name="Item_Name" value="Trees and Sky">
      <input type="hidden" name="Price" value="1400">
    </div>
  </form>
</li>

<li>
  <form action="manage_cart.php" method="POST">
    <div class="product-card">

      <figure class="card-banner">
      <img src="./assets/img_watercolor/8.jpg" width="189" height="189" loading="lazy" alt="Peacock">
      </figure>

      <div class="rating-wrapper">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
      </div>

      <h3 class="h4 card-title">
        <a href="single_product.php">Peacock</a>
      </h3>

      <div class="price-wrapper">
        <del class="del">Rs.2500</del>
        <data class="price1">Rs.2300</data>
      </div>

      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add to Cart</button>
      <input type="hidden" name="Item_Name" value="Peacock">
      <input type="hidden" name="Price" value="2300">
    </div>
  </form>
</li>
</ul>
  </div>
<hr>
  <!-- ======= Footer ======= -->
  <?php include("./layout/footer1.php")  ?>

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