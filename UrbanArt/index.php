<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UrbatArt - Home</title>
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
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  
  <link href="assets/css/account.css" rel="stylesheet" >
  <link href="assets/css/cart-icon.css" rel="stylesheet">
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

 
<style>
  
  .img1{
      width: 100%;
      height: auto;
    }
  

  .image-box {
    position: relative;
    width: 100%;
    height: 300px; /* Adjust as needed */
}

.image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.5s all ease-in-out;
}

.image-box:hover img {
    filter: blur(5px);
}

.overlay-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: black;
    text-align: center;
    font-size: medium;
    font-weight: 700;
}

.product-image{
  width: 300px; /* Set your desired width */
  height: 200px; /* Set your desired height */
  object-fit: cover;
}
.testimonial-img {
    max-width: 100%;
    height: auto;
    max-height: 316px; /* Adjust the max-height as per your requirement */
    object-fit: contain;
}
.testimonial-item{
  text-align:center;
}
.disabled-link {
  pointer-events: none;
  cursor: default;
  color: #999; /* Optionally change the color to indicate it's disabled */
}
</style>

</head>

<body>

  <!-- ======= Header ======= -->
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

  <main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end disabled-link" style="background-image: url('assets/img/car1.jpg');">
                    <div class="img-bg-inner">
                      <h2>“No great artist ever sees things as they really are. If he did, he would cease to be an artist.”</h2>
                      <p>- Oscar Wilde.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end disabled-link" style="background-image: url('assets/img/car2.jpg');">
                    <div class="img-bg-inner">
                      <h2>“Painting is poetry that is seen rather than felt, and poetry is painting that is felt rather than seen.”</h2>
                      <p>- Leonardo da Vinci</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end disabled-link" style="background-image: url('assets/img/car3.jpg');">
                    <div class="img-bg-inner">
                      <h2>“Imagination is the beginning of creation. You imagine what you desire, you will what you imagine, and at last, you create what you will.”</h2>
                      <p>- George Bernard Shaw</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end disabled-link" style="background-image: url('assets/img/car4.jpg');">
                    <div class="img-bg-inner">
                      <h2>“Art is never finished, only abandoned.”</h2>
                      <p>- Leonardo Da Vinci</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->
  </main>

    <div class="slider">
      <div class="slide-track">
        <div class="slide">
          <img class="img1" src="assests1/img/sketches2.jpg" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img class="img1" src="assests1/img/abstract2.jpg" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img class="img1" src="assests1/img/canvas2.jpg" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img class="img1" src="assests1/img/canvas3.jpg" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img class="img1" src="assests1/img/digital1.jpg" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img class="img1" src="assests1/img/digital2.jpg" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img class="img1" src="assests1/img/doodle1.jpg" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img class="img1" src="assests1/img/doodle4.jpg" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img class="img1" src="assests1/img/oilpainting2.jpg" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img class="img1" src="assests1/img/oilpainting4.jpg" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img class="img1" src="assests1/img/painting3.jpg" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img class="img1" src="assests1/img/sculpture1.jpg" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img class="img1" src="assests1/img/sculpture4.jpg" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img class="img1" src="assests1/img/download10.jpg" height="100" width="250" alt="" />
        </div>
      </div>
    </div>

<div class="slider1">
	<div class="slide1-track">
		<div class="slide1">
			<img class="img1" src="assests1/img/abstract2.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide1">
			<img class="img1" src="assests1/img/canvas4.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide1">
			<img class="img1" src="assests1/img/digital2.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide1">
			<img class="img1" src="assests1/img/doodle3.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide1">
			<img class="img1" src="assests1/img/oilpainting5.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide1">
			<img class="img1" src="assests1/img/sketches5.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide1">
			<img class="img1" src="assests1/img/download9.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide1">
			<img class="img1" src="assests1/img/download11.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide1">
			<img class="img1"  src="assests1/img/download5.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide1">
			<img class="img1" src="assests1/img/abstract4.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide1">
			<img class="img1" src="assests1/img/canvas4.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide1">
			<img class="img1" src="assests1/img/abstract3.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide1">
			<img class="img1" src="assests1/img/oilpainting1.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide1">
			<img class="img1" src="assests1/img/sketches5.jpg" height="100" width="250" alt="" />
		</div>
	</div>
</div>

<div class="slider">
	<div class="slide-track">
		<div class="slide">
			<img class="img1" src="assests1/img/potraits1.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img class="img1" src="assests1/img/canvas3.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img class="img1" src="assests1/img/sketches8.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img class="img1" src="assests1/img/digital2.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img class="img1" src="assests1/img/doodle3.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img class="img1" src="assests1/img/digital4.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img class="img1" src="assests1/img/oilpainting3.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img class="img1" src="assests1/img/download15.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img class="img1" src="assests1/img/canvas1.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img class="img1" src="assests1/img/digital3.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img class="img1" src="assests1/img/digital4.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img class="img1" src="assests1/img/sculpture3.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img class="img1" src="assests1/img/sketches7.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img class="img1" src="assests1/img/sketches1.jpg" height="100" width="250" alt="" />
		</div>
	</div>
</div>

    <main id="main">
      <!-- ======= Agents Section ======= -->
         <section class="section-agents section-t8">
           <div class="container">
             <div class="row">
               <div class="col-md-12" style="padding-top: 30px;">
                 <div class="title-wrap d-flex justify-content-between">
                   <div class="title-box">
                     <h2 class="title-a">Top Artists Of Week</h2>
                   </div>
                   <div class="title-link">
                     <a href="agents-grid.html">More Artists
                       <span class="bi bi-chevron-right"></span>
                     </a>
                   </div>
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col-md-4">
                 <div class="card-box-d">
                   <div class="card-img-d">
                     <img src="assets/img/agent-4.jpg" alt="" class="img-d img-fluid">
                   </div>
                   <div class="card-overlay card-overlay-hover">
                     <div class="card-header-d">
                       <div class="card-title-d align-self-center">
                         <h3 class="title-d">
                           <a href="agent-single.php" class="link-two">Margaret Sotillo
                             <br> Escala</a>
                         </h3>
                       </div>
                     </div>
                     <div class="card-body-d">
                       <p class="content-d color-text-a">
                         Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                       </p>
                       <div class="info-agents color-a">
                         <p>
                           <strong>Phone: </strong> +54 356 945234
                         </p>
                         <p>
                           <strong>Email: </strong> agents@example.com
                         </p>
                       </div>
                     </div>
                     <div class="card-footer-d">
                       <div class="socials-footer d-flex justify-content-center">
                         <ul class="list-inline">
                           <li class="list-inline-item">
                             <a href="#" class="link-one">
                               <i class="bi bi-facebook" aria-hidden="true"></i>
                             </a>
                           </li>
                           <li class="list-inline-item">
                             <a href="#" class="link-one">
                               <i class="bi bi-twitter" aria-hidden="true"></i>
                             </a>
                           </li>
                           <li class="list-inline-item">
                             <a href="#" class="link-one">
                               <i class="bi bi-instagram" aria-hidden="true"></i>
                             </a>
                           </li>
                           <li class="list-inline-item">
                             <a href="#" class="link-one">
                               <i class="bi bi-linkedin" aria-hidden="true"></i>
                             </a>
                           </li>
                         </ul>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-md-4">
                 <div class="card-box-d">
                   <div class="card-img-d">
                     <img src="assets/img/agent-1.jpg" alt="" class="img-d img-fluid">
                   </div>
                   <div class="card-overlay card-overlay-hover">
                     <div class="card-header-d">
                       <div class="card-title-d align-self-center">
                         <h3 class="title-d">
                           <a href="agent-single.php" class="link-two">Stiven Spilver
                             <br> Darw</a>
                         </h3>
                       </div>
                     </div>
                     <div class="card-body-d">
                       <p class="content-d color-text-a">
                         Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                       </p>
                       <div class="info-agents color-a">
                         <p>
                           <strong>Phone: </strong> +54 356 945234
                         </p>
                         <p>
                           <strong>Email: </strong> agents@example.com
                         </p>
                       </div>
                     </div>
                     <div class="card-footer-d">
                       <div class="socials-footer d-flex justify-content-center">
                         <ul class="list-inline">
                           <li class="list-inline-item">
                             <a href="#" class="link-one">
                               <i class="bi bi-facebook" aria-hidden="true"></i>
                             </a>
                           </li>
                           <li class="list-inline-item">
                             <a href="#" class="link-one">
                               <i class="bi bi-twitter" aria-hidden="true"></i>
                             </a>
                           </li>
                           <li class="list-inline-item">
                             <a href="#" class="link-one">
                               <i class="bi bi-instagram" aria-hidden="true"></i>
                             </a>
                           </li>
                           <li class="list-inline-item">
                             <a href="#" class="link-one">
                               <i class="bi bi-linkedin" aria-hidden="true"></i>
                             </a>
                           </li>
                         </ul>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-md-4">
                 <div class="card-box-d">
                   <div class="card-img-d">
                     <img src="assets/img/agent-5.jpg" alt="" class="img-d img-fluid">
                   </div>
                   <div class="card-overlay card-overlay-hover">
                     <div class="card-header-d">
                       <div class="card-title-d align-self-center">
                         <h3 class="title-d">
                           <a href="agent-single.php" class="link-two">Emma Toledo
                             <br> Cascada</a>
                         </h3>
                       </div>
                     </div>
                     <div class="card-body-d">
                       <p class="content-d color-text-a">
                         Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                       </p>
                       <div class="info-agents color-a">
                         <p>
                           <strong>Phone: </strong> +54 356 945234
                         </p>
                         <p>
                           <strong>Email: </strong> agents@example.com
                         </p>
                       </div>
                     </div>
                     <div class="card-footer-d">
                       <div class="socials-footer d-flex justify-content-center">
                         <ul class="list-inline">
                           <li class="list-inline-item">
                             <a href="#" class="link-one">
                               <i class="bi bi-facebook" aria-hidden="true"></i>
                             </a>
                           </li>
                           <li class="list-inline-item">
                             <a href="#" class="link-one">
                               <i class="bi bi-twitter" aria-hidden="true"></i>
                             </a>
                           </li>
                           <li class="list-inline-item">
                             <a href="#" class="link-one">
                               <i class="bi bi-instagram" aria-hidden="true"></i>
                             </a>
                           </li>
                           <li class="list-inline-item">
                             <a href="#" class="link-one">
                               <i class="bi bi-linkedin" aria-hidden="true"></i>
                             </a>
                           </li>
                         </ul>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </section><!-- End Agents Section -->
         <div id="preloader"></div>
    </main>

    <section style="background-color: black;">
  
      <div class="container">
        <div class="row">
          <div class="section-title">
            <p>Top Deals Of The Day</p>
          </div>
      
            <!-- Product 1 -->
            <div class="col-md-3 product-container">
                <img src="assests1/img/sketches4.jpg" alt="Product 1" class="product-image">
                <div class="product-description">
                    <p>The Adventures of Quirkington</p>
                    <div class="price-tags">
                        <span class="non-cut-price">$19.99</span>
                        <span class="cut-price">$29.99</span>
                        <button class="btn btn-primary product-qty-btn" style="padding:0px 20px; background-color:white; color:black;font-size: 12px;">Add To Cart</button>
                    </div>
                </div>
            </div>
      
            <!-- Product 2 -->
            <div class="col-md-3 product-container">
                <img src="assests1/img/digital3.jpg" alt="Product 2" class="product-image">
                <div class="product-description">
                    <p>The Harmony of Chaos</p>
                    <div class="price-tags">
                        <span class="non-cut-price">$24.99</span>
                        <span class="cut-price">$34.99</span>
                        <button class="btn btn-primary product-qty-btn" style="padding:0px 20px; background-color:white; color:black; font-size: 12px;">Add To Cart</button>
                    </div>
                </div>
            </div>
      
            <div class="col-md-3 product-container">
              <img src="assests1/img/canvas2.jpg" alt="Product 2" class="product-image">
              <div class="product-description">
                  <p>Pixel Dreamscape: A Tapestry</p>
                  <div class="price-tags">
                      <span class="non-cut-price">$24.99</span>
                      <span class="cut-price">$34.99</span>
                      <button class="btn btn-primary product-qty-btn" style="padding:0px 20px; background-color:white; color:black;font-size: 12px;">Add To Cart</button>
                  </div>
              </div>
          </div>
      
          <div class="col-md-3 product-container">
            <img src="assests1/img/sketches1.jpg" alt="Product 2" class="product-image">
            <div class="product-description">
                <p>DigiVerse: Binary Echoes</p>
                <div class="price-tags">
                    <span class="non-cut-price">$24.99</span>
                    <span class="cut-price">$34.99</span>
                    <button class="btn btn-primary product-qty-btn" style="padding:0px 20px; background-color:white; color:black;font-size: 12px;">Add To Cart</button>
                </div>
            </div>
        </div>
        </div>
      </div>
      </section>
 
    <!-- ======= Services Section ======= -->
    <section id="services" class="services" style="background-color: #000000e0;">
      <div class="container">

        <div class="section-title">
          <p>Shop By Categories</p>
        </div>

        <div class="row">
          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            
            <div class="icon-box" style="background-image: url('assests1/img/sketches1.jpg'); background-size: cover">
              
              <h4><a style="color: black" href="">Sketches</a></h4>
              <p style="color: black;font-size: medium; font-weight: 700">Hand-drawn moments captured in pencil, charcoal.</p>
            </div>
          </div> -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="image-box mb-3">
              <img src="assets/img_sketches/3.jpeg" alt="Background Image">
              <div class="overlay-text">
                  <h4><a href="category1_sketches.php" style="color:white">Sketches</a></h4>
                  <p style="color:white">Hand-drawn moments captured in pencil, charcoal.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="image-box">
              <img src="assets/img_portraits/1.jpg" alt="Background Image">
              <div class="overlay-text">
                  <h4><a href="category1_portraits.php" style="color:white">Portraits</a></h4>
                  <p style="color:white">Captivating depictions revealing the essence of individuals.</p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="image-box">
              <img src="assets/img_sculpture/1.jpg" alt="Background Image">
              <div class="overlay-text">
                  <h4><a href="category1_sculpture.php" style="color:white">Sculptures</a></h4>
                  <p style="color:white"> Tactile artistry crafted from clay, metal, wood, and stone.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="image-box">
              <img src="assets/img_canvas/2.jpg" alt="Background Image">
              <div class="overlay-text">
                  <h4><a href="category1_canvas.php" style="color:white">Canvas Painting</a></h4>
                  <p style="color:white">  Diverse styles and subjects on canvas.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="image-box">
              <img src="assets/img_watercolor/2.jpg" alt="Background Image">
              <div class="overlay-text">
                  <h4><a href="category1_watercolor.php" style="color:white">Watercolor</a></h4>
                  <p style="color:white">Rich textures and vibrant colors in Watercolor medium.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="image-box">
              <img src="assets/img_portraits/vk/2.jpg" alt="Background Image">
              <div class="overlay-text">
                  <h4><a href="category1_digital.php" style="color:white">Digital Art</a></h4>
                  <p style="color:white">Innovative creations blending technology and creativity.</p>
              </div>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Services Section -->

    <section id="testimonials" class="testimonials section-bg" style="    background-color: #1a1814;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>See What's Special Today</h2>
          <p>It's The Birthday Of Virat Kohli</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div id="imgdrop" class="testimonial-item">
                <img src="assets/img_portraits/vk/1.jpg" class="testimonial-img" alt="">
                <h3>Priya Sharma</h3>
                <h4>Medium: Color Pencils</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div id="imgdrop" class="testimonial-item">
                <img src="assets/img_portraits/vk/2.jpg" class="testimonial-img" alt="">
                <h3>Rahul Patel</h3>
                <h4>Medium: Digital Art</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div id="imgdrop" class="testimonial-item">
                <img src="assets/img_portraits/vk/3.jpg" class="testimonial-img" alt="">
                <h3>Anjali Gupta</h3>
                <h4>Medium: Watercolor</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div id="imgdrop" class="testimonial-item">
                <img src="assets/img_portraits/vk/4.jpg" class="testimonial-img" alt="">
                <h3>Vikram Singh</h3>
                <h4>Medium: Watercolor</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div id="imgdrop" class="testimonial-item">
                <img src="assets/img_portraits/vk/5.jpg" class="testimonial-img" alt="">
                <h3>Nisha Khanna</h3>
                <h4>Medium: Sketching</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <section id="services" class="services">
      <div class="container">
    
        <div class="section-title">
          <p>Shop By Layout</p>
        </div>
    
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="image-box mb-3">
              <img src="assests1/img/layoutA3.jpg" alt="Background Image">
              <div class="overlay-text">
                  <h4><a href="" style="color: white;">A3</a></h4>
                  <p style="color: white;">Hand-drawn moments captured in pencil, charcoal.</p>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="image-box mb-3">
              <img src="assests1/img/layoutA4.jpg" alt="Background Image">
              <div class="overlay-text">
                  <h4><a href="" style="color: white;">A4</a></h4>
                  <p style="color: white;">Hand-drawn moments captured in pencil, charcoal.</p>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="image-box mb-3">
              <img src="assests1/img/layoutA5.jpg" alt="Background Image">
              <div class="overlay-text">
                  <h4><a href="" style="color: white;">A5</a></h4>
                  <p style="color: white;">Hand-drawn moments captured in pencil, charcoal.</p>
              </div>
            </div>
          </div>
        </div>
    
      </div>
    </section><!-- End Services Section -->
    
<section style="background-color: black;">
    <div class="container" data-aos="fade-up" >
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery" style="margin-top:0px">
      <div class="container-fluid">
        <div class="section-title">
          <h2>Some featured Artworks</h2>
          <p>Recommended By Premium Artists</p>
        </div>

        <div class="row gy-4 justify-content-center">
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img_canvas/1.jpg" style="height:340px" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img_canvas/1.jpg" title="Waterfall" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="single_product.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img_sketches/1.jpeg" style="height:340px" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img_sketches/1.jpeg" title="M S Dhoni" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="single_product.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img_watercolor/2.jpg" style="height:340px" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img_watercolor/2.jpg" title="Parrot" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="single_product.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img_sketches/5.jpeg" style="height:340px" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img_sketches/5.jpeg" title="Paul Walker" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="single_product.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img_sketches/2.jpeg" style="height:340px" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img_sketches/2.jpeg" title="Emma Watson" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="single_product.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img_watercolor/3.jpg" style="height:340px" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img_watercolor/3.jpg" title="White Lotus" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="single_product.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img_canvas/2.jpg" style="height:340px" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img_canvas/2.jpg" title="Boat" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="single_product.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img_watercolor/6.jpg" style="height:340px" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img_watercolor/6.jpg" title="Swam" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="single_product.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img_sketches/3.jpeg" style="height:340px" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img_sketches/3.jpeg" title="Lionel Messi" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="single_product.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img_canvas/5.jpg" style="height:340px" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img_canvas/5.jpg" title="Boat2" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="single_product.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img_canvas/8.jpg" style="height:340px" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img_canvas/8.jpg" title="Venice" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="single_product.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img_canvas/6.jpg" style="height:340px" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img_canvas/6.jpg" title="Town" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="single_product.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img_watercolor/8.jpg" style="height:340px" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img_watrecolor/8.jpg" title="Peacock" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="single_product.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img_canvas/4.jpg" style="height:340px" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img_canvas/4.jpg" title="Deer" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="single_product.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img_sketches/4.jpeg" style="height:340px" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img_sketches/4.jpeg" title="Eyes" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="single_product.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img_canvas/7.jpg" style="height:340px" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img_canvas/7.jpg" title="Forest" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="single_product.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->

        </div>

      </div>
    </section><!-- End Gallery Section -->
    </div>
  </section>
 <!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("./layout/footer1.php")  ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
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
  <script>
document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  /**
   * Sticky header on scroll
   */
  const selectHeader = document.querySelector('#header');
  if (selectHeader) {
    document.addEventListener('scroll', () => {
      window.scrollY > 100 ? selectHeader.classList.add('sticked') : selectHeader.classList.remove('sticked');
    });
  }

  /**
   * Mobile nav toggle
   */

  const mobileNavToogleButton = document.querySelector('.mobile-nav-toggle');

  if (mobileNavToogleButton) {
    mobileNavToogleButton.addEventListener('click', function(event) {
      event.preventDefault();
      mobileNavToogle();
    });
  }

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToogleButton.classList.toggle('bi-list');
    mobileNavToogleButton.classList.toggle('bi-x');
  }

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navbar a').forEach(navbarlink => {

    if (!navbarlink.hash) return;

    let section = document.querySelector(navbarlink.hash);
    if (!section) return;

    navbarlink.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });
  });

  /**
   * Toggle mobile nav dropdowns
   */
  const navDropdowns = document.querySelectorAll('.navbar .dropdown > a');

navDropdowns.forEach(el => {
    el.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior
        const dropdownMenu = this.nextElementSibling; // Get the dropdown menu
        const dropDownIndicator = this.querySelector('.dropdown-indicator'); // Get the dropdown indicator

        if (dropdownMenu && dropdownMenu.classList.contains('show')) {
            // If the dropdown menu is already shown
            dropdownMenu.classList.remove('show'); // Hide the dropdown menu
            dropDownIndicator.classList.remove('bi-chevron-up'); // Change chevron to down
            dropDownIndicator.classList.add('bi-chevron-down');
        } else {
            // If the dropdown menu is hidden
            dropdownMenu.classList.add('show'); // Show the dropdown menu
            dropDownIndicator.classList.remove('bi-chevron-down'); // Change chevron to up
            dropDownIndicator.classList.add('bi-chevron-up');
        }
    });
});

    

  /**
   * Scroll top button
   */
  const scrollTop = document.querySelector('.scroll-top');
  if (scrollTop) {
    const togglescrollTop = function() {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
    window.addEventListener('load', togglescrollTop);
    document.addEventListener('scroll', togglescrollTop);
    scrollTop.addEventListener('click', window.scrollTo({
      top: 0,
      behavior: 'smooth'
    }));
  }

  /**
   * Hero Slider
   */
  var swiper = new Swiper(".sliderFeaturedPosts", {
    spaceBetween: 0,
    speed: 500,
    centeredSlides: true,
    loop: true,
    slideToClickedSlide: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".custom-swiper-button-next",
      prevEl: ".custom-swiper-button-prev",
    },
  });

  /**
   * Open and close the search form.
   */
  const searchOpen = document.querySelector('.js-search-open');
  const searchClose = document.querySelector('.js-search-close');
  const searchWrap = document.querySelector(".js-search-form-wrap");

  searchOpen.addEventListener("click", (e) => {
    e.preventDefault();
    searchWrap.classList.add("active");
  });

  searchClose.addEventListener("click", (e) => {
    e.preventDefault();
    searchWrap.classList.remove("active");
  });

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Animation on scroll function and init
   */
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', () => {
    aos_init();
  });

});</script>
  <script src="assets/js/main2.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
  const ulElement = document.querySelector('ul'); // Select the <ul> element

  if (ulElement) {
    ulElement.addEventListener('click', function(event) {
      event.preventDefault();
      this.classList.toggle('dropdown-active');
    });
  }
});

  <script>



</body>

</html>