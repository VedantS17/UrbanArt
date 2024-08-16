<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UrbanArt - Exhibition</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  
  <!-- Template Main CSS Files -->
  <link href="assets/css/account.css" rel="stylesheet" >
  <link href="assets/css/cart-icon.css" rel="stylesheet">
  <link href="assests1/css/main.css" rel="stylesheet">
  <link href="assests1/css/variables.css" rel="stylesheet">
  

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
  @media (min-width: 1350px) {
  /* Styles for screens larger than 1379px */
  #btn1 {
    width: 80px;
    margin-top: 20px;
    position: absolute;
    right: 135px;
  }
}
  @media (min-width: 779px) and (max-width: 1300px) {
  /* Styles for screens larger than 1379px */
  #btn1 {
    width: 80px;
    margin-top: 20px;
    position: absolute;
    right: 90px;
  }
}
  @media (min-width: 425px) and (max-width: 779px) {
  /* Styles for screens larger than 1379px */
  #btn1 {
    width: 80px;
    margin-top: 20px;
    position: absolute;
    right: 15px;
  }
}
  @media (min-width: 0px) and (max-width: 425px) {
  /* Styles for screens larger than 1379px */
  #btn1 {
    width: 80px;
    margin-top: 20px;
    position: absolute;
    right: 15px;
  }
}


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
.header .navbar ul li a:hover {
  text-decoration: none;
}
#urban-art{
  font-size:26px;
  font-weight:700;
  color:black;
  font-family:"Nunito",sans-serif;
  
}
#urban-art:hover {
  text-decoration: none;
}
#header{
  background:#eeeeee;
}
#line1{
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

      <a href="index.php" id="urban-art" class="logo d-flex align-items-center">
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
            <li><a href="category1.php">Sketches</a></li>
            <li><a href="category1.php">Portraits</a></li>
            <li class="dropdown"><a href="category1.php"><span>Home Decor</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="category1.php">Sculpture</a></li>
                <li><a href="category1.php">Flower Pot</a></li>
                <li><a href="category1.php">Wallpaper</a></li>
              </ul>
            </li>
            <li><a href="category1.php">Canvas</a></li>
            <li><a href="category1.php">Oil Paintings</a></li>

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
                          <span id="icon1" class="bi bi-person-circle" onclick="toggleDropdown()"></span>
                          <div class="dropdown-content" id="dropdownContent">
                              <span id="name1"><?php echo $_SESSION['uname']; ?></span>
                              <a id="logout1" href="logout.php">Logout</a>
                          </div>
                      </div>
                  </div>

          <?php } else { ?>
              <div class="dropdown1">
                  <a href="login.php" class="mx-2">
                      <span id="icon1" class="bi bi-person-circle"></span>
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

     <!-- ======= Hero Section ======= -->
     <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
          <div class="row justify-content-between gy-5">
            <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
              <h2 data-aos="fade-up" style="font-size: 35px;">Immerse Yourself in the Infinite Canvas of Creativity.</h2>
              
              <!-- <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
              </div> -->
            </div>
            <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
              <img src="assests1/img/download12.jpg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300" style="width: 100%; height: auto">
            </div>
          </div>
        </div>
      </section><!-- End Hero Section -->

    


<h1 class="text-center" style="margin-top: 30px;">Exhibitions</h1>

  <!-- ======= Hero Slider Section ======= -->
  <h2 class="h2" style="margin-left: 150px; margin-bottom: -30px; margin-top:2vh;">Ephemeral Impressions: Nature's Palette:</h2>
  <section id="hero-slider" style="padding: 80px 0px;" class="hero-slider">
    <div class="container-md" data-aos="fade-in">
      <div class="row">
        <div class="col-12">
          <div class="swiper sliderFeaturedPosts">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a href="#" class="img-bg d-flex align-items-end disabled-link" style="background-image: url('assests1/img/download1.jpg'); text-decoration:none;">
                  <div class="img-bg-inner">
                    <h2>Aurora Borealis Symphony</h2>
                    <p>.</p>
                  </div>
                </a>
              </div>

              <div class="swiper-slide">
                <a href="#" class="img-bg d-flex align-items-end disabled-link" style="background-image: url('assests1/img/download2.jpg'); text-decoration:none;">
                  <div class="img-bg-inner">
                    <h2>Garden of Tranquility</h2>
                    <p></p>
                  </div>
                </a>
              </div>

              <div class="swiper-slide">
                <a href="#" class="img-bg d-flex align-items-end disabled-link" style="background-image: url('assests1/img/download3.jpg'); text-decoration:none;">
                  <div class="img-bg-inner">
                    <h2>Infinite Horizons</h2>
                    <p></p>
                  </div>
                </a>
              </div>

              <div class="swiper-slide">
                <a href="#" class="img-bg d-flex align-items-end disabled-link" style="background-image: url('assests1/img/download4.jpg'); text-decoration:none;">
                  <div class="img-bg-inner">
                    <h2>Abstract Elegance</h2>
                    <p></p>
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
      <button id="btn1" type="button" class="btn btn-success"><a id="line1" href="ex1.php" style="color: white;">Visit</a></button>
    </div>
  </section><!-- End Hero Slider Section -->
  


<!-- ======= Hero Slider Section ======= -->
<h2 class="h2" style="margin-left: 150px; margin-bottom: -30px; margin-top:2vh;">Urban Dreams: Cityscapes Reimagined</h2>
<section id="hero-slider" class="hero-slider">
  <div class="container-md" data-aos="fade-in">
    <div class="row">
      <div class="col-12">
        <div class="swiper sliderFeaturedPosts">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="#" class="img-bg d-flex align-items-end disabled-link" style="background-image: url('assests1/img/download9.jpg'); text-decoration:none;">
                <div class="img-bg-inner">
                  <h2>Abstract Elegance</h2>
                  <p></p>
                </div>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="img-bg d-flex align-items-end disabled-link" style="background-image: url('assests1/img/download10.jpg'); text-decoration:none;">
                <div class="img-bg-inner">
                  <h2>Aurora Borealis Symphony</h2>
                  <p></p>
                </div>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="img-bg d-flex align-items-end disabled-link" style="background-image: url('assests1/img/download11.jpg'); text-decoration:none;">
                <div class="img-bg-inner">
                  <h2>Garden of Tranquility</h2>
                  <p></p>
                </div>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="img-bg d-flex align-items-end disabled-link" style="background-image: url('assests1/img/download12.jpg'); text-decoration:none;">
                <div class="img-bg-inner">
                  <h2>Infinite Horizons</h2>
                  <p></p>
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
    <button type="button" id="btn1" class="btn btn-success"><a id="line1" href="ex2.php" style="color: white;">Visit</a></button>
  </div>
</section><!-- End Hero Slider Section -->



<!-- ======= Hero Slider Section ======= -->
<h2 class="h2" style="margin-left: 150px; margin-bottom: -30px; margin-top:2vh;">Surreal Realities: Exploring the Imaginary</h2>
<section id="hero-slider" class="hero-slider">
  <div class="container-md" data-aos="fade-in">
    <div class="row">
      <div class="col-12">
        <div class="swiper sliderFeaturedPosts">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="#" class="img-bg d-flex align-items-end disabled-link" style="background-image: url('assests1/img/download5.jpg'); text-decoration:none;">
                <div class="img-bg-inner">
                  <h2>Crimson Cascade</h2>
                  <p></p>
                </div>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="img-bg d-flex align-items-end disabled-link" style="background-image: url('assests1/img/download6.jpg'); text-decoration:none;">
                <div class="img-bg-inner">
                  <h2>Infinite Horizons</h2>
                  <p></p>
                </div>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="img-bg d-flex align-items-end disabled-link" style="background-image: url('assests1/img/download8.jpg'); text-decoration:none;">
                <div class="img-bg-inner">
                  <h2>Mystical Melodies</h2>
                  <p></p>
                </div>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="img-bg d-flex align-items-end disabled-link" style="background-image: url('assests1/img/download7.jpg'); text-decoration:none;">
                <div class="img-bg-inner">
                  <h2>Serenade in Blue</h2>
                  <p></p>
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
    <button type="button" id="btn1" class="btn btn-success"><a id="line1" href="ex3.php" style="color: white;">Visit</a></button>
  </div>
</section><!-- End Hero Slider Section -->




    
        
    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">
          <div class="row g-5">
            <div class="col-lg-4">
              <div class="post-entry-1 lg">
                <a href="#"><img src="assets/img/download5.jpg" alt="" class="img-fluid"></a>
                <div class="post-meta"><span class="date"></span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                <h2><a href="#">Revolutionizing Traditional Techniques: Contemporary Artists Pushing Boundaries</a></h2>
                <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi atque eveniet, quo, praesentium dignissimos</p>
  
                <div class="d-flex align-items-center author">
                  <div class="photo"><img src="assests1/img/download1.jpg" alt="" class="img-fluid"></div>
                  <div class="name">
                    <h3 class="m-0 p-0">Cameron Williamson</h3>
                  </div>
                </div>
              </div>
  
            </div>
  
            <div class="col-lg-8">
              <div class="row g-5">
                <div class="col-lg-4 border-start custom-border">
                  <div class="post-entry-1">
                    <a href="#"><img src="assets/img/download7.jpg" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date"></span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2><a href="#">Emerging Talent Spotlight: Artists Redefining the Future of Visual Expression</a></h2>
                  </div>
                  <div class="post-entry-1">
                    <a href="#"><img src="assets/img/download8.jpg" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date"></span> <span class="mx-1">&bullet;</span> <span>Jul 17th '22</span></div>
                    <h2><a href="#">Art and Activism Collide: How Creativity Fuels Social Changells?</a></h2>
                  </div>
                  <div class="post-entry-1">
                    <a href="#"><img src="assets/img/download9.jpg" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date"></span> <span class="mx-1">&bullet;</span> <span>Mar 15th '22</span></div>
                    <h2><a href="#">Art in the Digital Age: NFTs and the Evolution of Ownership</a></h2>
                  </div>
                </div>
                <div class="col-lg-4 border-start custom-border">
                  <div class="post-entry-1">
                    <a href="#"><img src="assets/img/download10.jpg" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date"></span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2><a href="#">Eco-Art: The Intersection of Creativity and Sustainability</a></h2>
                  </div>
                  <div class="post-entry-1">
                    <a href="#"><img src="assets/img/download12.jpg" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date"></span> <span class="mx-1">&bullet;</span> <span>Mar 1st '22</span></div>
                    <h2><a href="#">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                  </div>
                  <div class="post-entry-1">
                    <a href="#"><img src="assets/img/download3.jpg" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date"></span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2><a href="#">Surrealism 2.0: Exploring the Resurgence of Dreamlike Aesthetics</a></h2>
                  </div>
                </div>
  
                <!-- Trending Section -->
                <div class="col-lg-4">
  
                  <div class="trending">
                    <h3>Trending</h3>
                    <ul class="trending-post">
                      <li>
                        <a href="#">
                          <span class="number">1</span>
                          <h3>"Exploring Art Therapy: The Healing Power of Creative Expression</h3>
                          <span class="author">Jane Cooper</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="number">2</span>
                          <h3>The Renaissance of Street Art: Urban Canvases Transforming Cities</h3>
                          <span class="author">Wade Warren</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="number">3</span>
                          <h3>From Canvas to Catwalk: Fashion Meets Fine Art in Bold Collaborations</h3>
                          <span class="author">Esther Howard</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="number">4</span>
                          <h3>Art Beyond Borders: International Exhibitions Bridging Cultures</h3>
                          <span class="author">Cameron Williamson</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="number">5</span>
                          <h3>Artificial Intelligence as Muse: Machines Inspiring Creative Minds</h3>
                          <span class="author">Jenny Wilson</span>
                        </a>
                      </li>
                    </ul>
                  </div>
  
                </div> <!-- End Trending Section -->
              </div>
            </div>
  
          </div> <!-- End .row -->
        </div>
     </section>
    
     










   
<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
  <div class="container position-relative">

    <div id="testimonialCarousel" class="carousel slide" data-ride="carousel" data-aos="fade-up" data-aos-delay="100" data-interval="5000">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <div class="testimonial-item">
            <img src="assets/img/person-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Buisnessman</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

    
        <div class="carousel-item">
          <div class="testimonial-item">
            <img src="assets/img/person-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="carousel-item">
          <div class="testimonial-item">
            <img src="assets/img/person-4.jpg" class="testimonial-img" alt="">
            <h3>John Willamsons</h3>
            <h4>Teacher</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div>

        <!-- Repeat the structure for each additional testimonial -->

      </div>
      <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
   
    

  </div>
</section><!-- End Testimonials Section -->

<?php include("./layout/footer1.php")  ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
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
  <script src="assests1/js/main.js"></script>

</body>

</html>
