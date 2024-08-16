<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UrbanArt - single-product</title>
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
  <link href="assets/css/main.css"  rel="stylesheet">
  <link href="assets/css/variables.css"  rel="stylesheet">
  <link rel="stylesheet" href="assets/css/product-details.css">

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

.search-form-wrap {
  position: absolute;
  right: 0;
  top: 0;
  z-index: 9;
  transition: 0.3s all ease;
  visibility: hidden;
  opacity: 0;
}

.search-form-wrap .search-form {
  position: relative;
}

.search-form-wrap .search-form .form-control {
  width: 300px;
  border: none;
  box-shadow: 0 15px 20px -10px rgba(var(--color-black-rgb), 0.1);
  padding-left: 40px;
  padding-right: 40px;
}

.search-form-wrap .search-form .form-control:active,
.search-form-wrap .search-form .form-control:focus {
  outline: none;
  box-shadow: none;
}

.search-form-wrap .search-form .icon {
  position: absolute;
  left: 0;
  top: 7px;
  opacity: 0.5;
  left: 10px;
}

.search-form-wrap .search-form .btn {
  position: absolute;
  top: 2px;
  right: 4px;
  padding: 0;
  margin: 0;
  line-height: 1;
  font-size: 30px;
}

.search-form-wrap .search-form .btn:active,
.search-form-wrap .search-form .btn:focus {
  outline: none;
  box-shadow: none;
}

.search-form-wrap.active {
  visibility: visible;
  opacity: 1;
}

.product-thumbnail-list {
    list-style-type: none;
    padding:0px;
    padding-block-end: 10px;
    margin-block-end: 0;
    gap: 10px;
}

.has-scrollbar {
    display: flex;
    overflow-x: auto;
    scroll-snap-type: inline mandatory;
}
dl, ol, ul {
    margin-top: 0;
    margin-bottom: 1rem;
}
ol, ul {
    padding-left: 2rem;
}

.small-img-row{

display: flex;
justify-content: space-between;
}

.small-img-col{
flex-basis: 24%;
cursor: pointer;
}

.product-qty-input{
  border:1px solid black;
}
.small-img{
  width:100px;
  height:100px;
}
#ProductImg{
  width: 430px;
    height: 384px;
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
                      <span class="bi bi-cart cart-icon"></span>
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
        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
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

  <section class="section product-details" style="margin-top: 80px;">
    <div class="container">

      <div class="wrapper">

        <div class="product-details-img">

          <figure class="product-display">
            <img src="./assets/img_canvas/1.jpg" loading="lazy"
              alt="Non-starchy vegetables." id="ProductImg" data-product-display>
          </figure>
          <div class="small-img-row">
          <ul class="product-thumbnail-list has-scrollbar">

          <div class="small-img-col">
          <li class="product-thumbnail-item">
              <img src="./assets/img_canvas/1.jpg" loading="lazy"
                alt="Non-starchy vegetables." class="small-img" data-product-thumbnail>
            </li>
          </div>

          <div class="small-img-col">
          <li class="product-thumbnail-item">
              <img src="./assets/img_canvas/2.jpg" loading="lazy"
                alt="Non-starchy vegetables." class="small-img" data-product-thumbnail>
            </li>
          </div>

          <div class="small-img-col">
          <li class="product-thumbnail-item">
              <img src="./assets/img_canvas/3.jpg" loading="lazy"
                alt="Non-starchy vegetables." class="small-img" data-product-thumbnail>
            </li>
          </div>

          <div class="small-img-col">
          <li class="product-thumbnail-item">
              <img src="./assets/img_canvas/4.jpg" loading="lazy"
                alt="Non-starchy vegetables." class="small-img" data-product-thumbnail>
            </li>
          </div>
            

            

          </ul>
        </div>

        </div>

        <div class="product-details-content">

          <h3 class="product-title">Non-starchy vegetables.</h3>

          <data class="product-price" value="350.00">350.00 USD</data>

          <div class="rating-wrapper">
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
          </div>

          <p class="product-text">
          Priya Sharma's canvas sketch, titled "Enchanted Oasis," transports viewers into a realm of serene mysticism where nature reigns supreme. The scene unfolds with an ethereal quality, drawing observers into its captivating allure. Lush vegetation blankets the canvas, adorned with vibrant hues of emerald greens and golden yellows, painting a vivid picture of abundant life.
          </p>

          <div class="product-weight-wrapper">

          </div>

          <div class="product-qty">
            <input type="number" name="quantity" value="1" min="1" max="50" class="product-qty-input">

            <button class="btn btn-primary product-qty-btn" style="border-radius: 4px; height: 60px;">Add To Cart</button>
          </div>

        </div>

      </div>

      <h4 class="description-title" style="margin-top: -50px;">Description :</h4>

      <p class="description-text">
      This canvas sketch, titled “Enchanted Oasis,” captures a mesmerizing scene of nature in its most serene and mystical form. The viewer is invited into a lush, green world through an archway of intertwined branches and leaves, revealing the breathtaking view of a tranquil waterfall cascading gracefully into a calm pool below. The surrounding landscape is adorned with verdant foliage, rocky formations, and misty air that adds an ethereal quality to the scene.

      Features:

      Vibrant Greenery: The image is dominated by rich green hues that paint a picture of vitality and life.
      Waterfall: The central focus is on the majestic waterfall that symbolizes purity and renewal.
      Mystical Ambiance: A play of light and shadow creates a magical atmosphere inviting wonder and exploration.
      Natural Archway: The framing through natural elements draws viewers into the scene, offering both enclosure and vista.
      </p>

      <h4 class="description-title">Additional Information :</h4>

      <table class="description-table">

        <tr class="table-row">
          <th class="table-heading" scope="row">Title</th>

          <td class="table-data">Enchanted Oasis</td>
        </tr>

        <tr class="table-row">
          <th class="table-heading" scope="row">Artist Name</th>

          <td class="table-data">Priya Sharma</td>
        </tr>

        <tr class="table-row">
          <th class="table-heading" scope="row">Category</th>

          <td class="table-data">Canvas</td>
        </tr>

        <tr class="table-row">
          <th class="table-heading" scope="row">Size</th>

          <td class="table-data">A3</td>
        </tr>

      </table>

    </div>
  </section>

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

  <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg =document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function(){
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function(){
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function(){
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function(){
            ProductImg.src = SmallImg[3].src;
        }
    </script>
</body>

</html>