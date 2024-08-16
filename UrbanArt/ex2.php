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

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/account.css" rel="stylesheet" >
  <link href="assets/css/cart-icon.css" rel="stylesheet">
  <link href="assests1/css/variables.css" rel="stylesheet">
  <link href="assests1/css/main.css" rel="stylesheet">
 
 
  <style>
    /* Add this CSS to your existing stylesheet or create a new one */

/* Style for the circular images */
.img-fluid.rounded-circle {
  width: 200px; /* Set the desired width */
  height: 200px; /* Set the desired height */
  object-fit: cover; /* Ensure the image covers the entire container */
  border-radius: 50%; /* Make it a circle by setting border-radius to 50% */
}

/* Additional styling for the image containers */
.col-lg-4.text-center.mb-5 {
  overflow: hidden; /* Ensure the container clips the image to maintain the circle shape */
}
.text{
    text-align: justify;
}
.contact{
  margin-top: -120px;
}

#icon1 {
  color: black;
  transition: color 0.3s ease;
}

/* Change icon color on hover */
  #icon1:hover {
  color: green;
}
@media (max-width: 1279px) {
    .navbar a,
  .navbar a:focus {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
    font-family: var(--font-primary);
    font-size: 15px;
    font-weight: 600;
    color: black;
    white-space: nowrap;
    transition: 0.3s;
  }

  .navbar a:hover,
  .navbar .active,
  .navbar .active:focus,
  .navbar li:hover>a {
    color: var(--color-default);
  }
}
#header a {
  font-family: 'EB Garamond', serif;
}

#header a:hover {
  color:black;
}

#header{
  background:#eeeeee;
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

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center section-bg">
   <div class="container">
     <div class="row justify-content-between gy-5">
       <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
         <h4 data-aos="fade-up ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non nesciunt at dolor corrupti, officiis temporibus dolores, eligendi explicabo quam architecto magnam. Placeat commodi fugiat distinctio perspiciatis maiores totam dolorum voluptas. Corporis omnis minus natus autem aspernatur est quia expedita, sint harum esse mollitia commodi unde adipisci? Doloribus fugiat harum reiciendis repellendus id quod pariatur, error exercitationem animi? Laborum, ipsam provident.</h4>
         
         <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
           <a href="#contact" class="btn-book-a-table">Book your Tickets</a>
           <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
         </div>
       </div>
       <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
         <img src="assests1/img/download9.jpg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300" style="width: 100%; height: auto">
       </div>
     </div>
   </div>
 </section><!-- End Hero Section -->



  <main id="main">
   

    <section>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <h2 class="display-4">Ephemeral Impressions: Nature's Palette</h2>
                <p>.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assests1/img/download10.jpg" alt="" class="img-fluid rounded-circle w-100 mb-4">
            <h4>Harmony in Chaos</h4>
            <span class="d-block mb-3 text-uppercase text">
                A mesmerizing blend of vibrant colors and dynamic brushstrokes, this piece captures the essence of chaos and order intertwining. Explore the intricate dance of hues that weave together to create a harmonious yet chaotic visual symphony &amp; </span>
            <p></p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assests1/img/download9.jpg" alt="" class="img-fluid rounded-circle w-100 mb-4">
            <h4>Ephemeral Serenity</h4>
            <span class="d-block mb-3 text-uppercase text">
                Immerse yourself in the ethereal beauty of fleeting moments frozen in time. Each image whispers tales of serenity, inviting viewers to contemplate the transient nature of life and the delicate balance between stillness and motion.</span>
            <p></p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assests1/img/download8.jpg" alt="" class="img-fluid rounded-circle w-100 mb-4">
            <h4>Urban Rhythms</h4>
            <span class="d-block mb-3 text-uppercase text">
                Bold and energetic, these images celebrate the pulsating rhythms of city life. Through the artist's lens, the urban landscape transforms into a dynamic canvas, showcasing the vibrant energy, movement, and contrasts that define the heartbeat of the metropolis.</span>
            <p></p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assests1/img/download7.jpg" alt="" class="img-fluid rounded-circle w-100 mb-4">
            <h4>Whispers of Nature</h4>
            <span class="d-block mb-3 text-uppercase text">
                Nature's whispers come alive in this collection, where each image tells a story of the delicate dance between the elements. From the gentle rustle of leaves to the play of sunlight on water, immerse yourself in the poetry of the natural world.</span>
            <p></p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assests1/img/download6.jpg" alt="" class="img-fluid rounded-circle w-100 mb-4">
            <h4>Abstract Realms</h4>
            <span class="d-block mb-3 text-uppercase text">
                Journey into the abstract realms where shapes and forms transcend traditional boundaries. These images invite contemplation, challenging perceptions and beckoning viewers to explore the limitless possibilities of the mind's eye</span>
            <p></p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assests1/img/download5.jpg" alt="" class="img-fluid rounded-circle w-100 mb-4">
            <h4>Surreal Dreamscape</h4>
            <span class="d-block mb-3 text-uppercase text">
                Step into a surreal dreamscape where reality and imagination converge. These images blur the lines between the tangible and the fantastical, inviting you to embark on a visual odyssey through the artist's dreams and interpretations of the world.</span>
            <p></p>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->





    <section id="contact" class="contact mb-5">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="page-title">Book Your Tickets!</h1>
          </div>
        </div>

        <div class="row gy-4">

          <div class="col-md-4">
            <div class="info-item">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>123 Art Street, Colaba, Mumbai, Maharashtra, India</address>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-4">
            <div class="info-item info-item-borders">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-4">
            <div class="info-item">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">urbanart@example.com</a></p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="form mt-5">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <input type="number" name="members" class="form-control" id="name" placeholder="Members" required>
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="email" id="email" placeholder="Mobile no." required>
              </div>
            </div>



            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Address" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Any Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">BOOK NOW</button></div>
          </form>
        </div><!-- End Contact Form -->

      </div>
    </section>

  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
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
  <script src="assets/js/main.js"></script>

</body>

</html>

  </main><!-- End #main -->