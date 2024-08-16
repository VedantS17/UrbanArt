<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UrbatArt - ArtistSingle</title>
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
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/cart-icon.css" rel="stylesheet">

  <style> 
  #terms{
    margin-top:15px;
  }
  h2{
    text-align:center;
  }
    .checkbox-container input[type="checkbox"],
    .checkbox-container label {
        display: inline-block;
        vertical-align: middle;
    }
    #btn-1{
      display:block;
      margin: 10px 0px;
    }
      .swiper-slide{
        margin-top: 50px;
      }
      .disabled-link {
        pointer-events: none;
        cursor: default;
        color: #999; /* Optionally change the color to indicate it's disabled */
      }

    /* Grid container */
    .form-container {
        display: grid;
        grid-template-columns: 2fr 2fr;
        grid-gap: 20px;
    }

    /* To ensure the form takes the full width of the popup */
    .form-container div {
        width: 100%;
    }

    /* To make the labels and inputs align properly */
    .form-container label {
        margin-bottom: 5px;
    }

    .form-container input[type="text"],
    .form-container input[type="email"],
    .form-container select,
    .form-container textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    /* Close button styles */
    .closeButton {
        float: right;

        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }
    #popupForm {
        display: none;
        position: fixed; /* Position the form relative to the viewport */
        top: 50%; /* Position the form vertically at the center of the viewport */
        left: 50%; /* Position the form horizontally at the center of the viewport */
        transform: translate(-50%, -50%); /* Center the form both horizontally and vertically */
        z-index: 9999; /* Ensure the form appears above other content */
        background-color: white; /* Set the background color of the form */
        padding: 20px; /* Add padding to the form */
        border: 1px solid #ccc; /* Add a border to the form */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a shadow effect to the form */
        height:90%;
        width:80%;
    }
    #blurBackground {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8); /* Semi-transparent background */
        backdrop-filter: blur(5px); /* Apply blur effect */
        z-index: 9998; /* Ensure the overlay is behind the form but above other content */
    }
    #openFormButton {
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 12px 27px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
      border-radius: 12px;
      outline: none; /* Remove outline */
    }

    /* Hover effect with gradient */
    #openFormButton:hover {
      background-image: linear-gradient(to right, #4CAF50, #1abc9c);
    }

    #btn-1 {
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 10px 22px;
      text-align: center;
      text-decoration: none;
      font-size: 16px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
      border-radius: 12px;
      outline: none; /* Remove outline */
    }

    /* Hover effect with gradient */
    #btn-1 {
      background-image: linear-gradient(to right, #4CAF50, #1abc9c);
    }
  </style>
 


  <!-- =======================================================
  * Template Name: ZenBlog
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
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


  <section id="gallery-single" class="gallery-single">
    <div class="container">

      <div class="position-relative h-25">
        <div class="slides-1 portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img src="assets/img/gallery/gallery-8.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="assets/img/gallery/gallery-9.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="assets/img/gallery/gallery-10.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="assets/img/gallery/gallery-11.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="assets/img/gallery/gallery-12.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="assets/img/gallery/gallery-13.jpg" alt="">
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

      </div>

      <div class="row justify-content-between gy-4 mt-4">

        <div class="col-lg-8">
          <div class="portfolio-description">
            <h2>This is an example of portfolio detail</h2>
            <p>
              Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
            </p>
            <p>
              Amet consequatur qui dolore veniam voluptatem voluptatem sit. Non aspernatur atque natus ut cum nam et. Praesentium error dolores rerum minus sequi quia veritatis eum. Eos et doloribus doloremque nesciunt molestiae laboriosam.
            </p>

            <div class="testimonial-item1" style="background-color: #1a1814;" >
              <p style="color: white;">
                <i class="bi bi-quote quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <div>
                <img src="assets/img/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3 style="color: white;">Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div>

            <p>
              Impedit ipsum quae et aliquid doloribus et voluptatem quasi. Perspiciatis occaecati earum et magnam animi. Quibusdam non qui ea vitae suscipit vitae sunt. Repudiandae incidunt cumque minus deserunt assumenda tempore. Delectus voluptas necessitatibus est.

            <p>
              Sunt voluptatum sapiente facilis quo odio aut ipsum repellat debitis. Molestiae et autem libero. Explicabo et quod necessitatibus similique quis dolor eum. Numquam eaque praesentium rem et qui nesciunt.
            </p>

          </div>
        </div>

        <div class="col-lg-3">
          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong> <span>Nature Photography</span></li>
              <li><strong>Client</strong> <span>ASU Company</span></li>
              <li><strong>Project date</strong> <span>01 March, 2022</span></li>
              <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
              <button id="openFormButton">Contact Me</button>
            </ul>
          </div>
        </div>
        
        <div class="popupForm" id="popupForm">
          <span class="closeButton" id="closeButton">&times;</span>
          
          <h2>Book Your Artwork Now</h2>
          <form action="bcode/view_contact_orders.php" method="post" class="form-container" enctype="multipart/form-data">
              <!-- First column -->
              <div>
                  <label for="name">Your Name:</label>
                  <input type="text" id="name" name="name">

                  <label for="email">Email Address:</label>
                  <input type="email" id="email" name="email">

                  <label for="address">Address:</label>
                  <input type="text" id="address" name="address">

                  <label for="style">Preferred Art Style:</label>
                  <select id="style" name="style">
                      <option value="Realistic">Realistic</option>
                      <option value="Abstract">Abstract</option>
                      <option value="Cartoonish">Cartoonish</option>
                  </select>

                  <label for="deadline">Deadline (if any):</label>
                  <input type="text" id="deadline" name="deadline">

                  <label for="references">Reference Images (if available):</label>
                  <input type="file" id="references" name="imgname">
              </div>

              <!-- Second column -->
              <div>
                  <label for="subject">Subject of Artwork:</label>
                  <input type="text" id="subject" name="subject">

                  <label for="size">Size of Artwork:</label>
                  <select id="size" name="size">
                      <option value="Small">Small</option>
                      <option value="Medium">Medium</option>
                      <option value="Large">Large</option>
                  </select>

                  <label for="comments">Additional Comments or Special Requests:</label>
                  <textarea id="comments" name="comments" rows="4" cols="50"></textarea>

                  <label for="budget">Budget Range:</label>
                  <input type="text" id="budget" name="budget">

                    <input type="checkbox" id="terms" name="terms">
                    <label for="terms">I agree to the terms and conditions.</label>
                  

                  <input id="btn-1" type="submit" name="submit" value="Submit">
              </div>
          </form>
        </div>

      </div>

    </div>
    
    <div id="blurBackground"></div>
  </section><!-- End Gallery Single Section -->

</main><!-- End #main -->
    
<?php include("./layout/footer1.php")  ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script>
    // Get the elements
    var openFormButton = document.getElementById('openFormButton');
    var popupForm = document.getElementById('popupForm');
    var closeButton = document.getElementById('closeButton');
    var blurBackground = document.getElementById('blurBackground');

    // Function to open the form
    openFormButton.addEventListener('click', function() {
        popupForm.style.display = 'block';
        blurBackground.style.display = 'block';
    });

    // Function to close the form
    closeButton.addEventListener('click', function() {
        popupForm.style.display = 'none';
        blurBackground.style.display = 'none';
    });
</script>

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
          if (document.querySelector('.mobile-nav-active')) {
            event.preventDefault();
            this.classList.toggle('active');
            this.nextElementSibling.classList.toggle('dropdown-active');

            let dropDownIndicator = this.querySelector('.dropdown-indicator');
            dropDownIndicator.classList.toggle('bi-chevron-up');
            dropDownIndicator.classList.toggle('bi-chevron-down');
          }
        })
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

    });
  </script>


  
<script src="assets/js/main1.js"></script>
  <!-- Template Main JS File -->

  
  

</body>

</html>