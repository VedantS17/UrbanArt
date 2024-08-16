<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>UrbatArt - Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="assests1/css/cart css/cart css/bootstrap.min.css">
    <link rel="stylesheet" href="assests1/css/cart css/cart css/magnific-popup.css">
    <link rel="stylesheet" href="assests1/css/cart css/cart css/jquery-ui.css">
    <link rel="stylesheet" href="assests1/css/cart css/cart css/owl.carousel.min.css">
    <link rel="stylesheet" href="assests1/css/cart css/cart css/owl.theme.default.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="assets/css/account.css" rel="stylesheet" >
    <link href="assets/css/variables.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">

    <style> 
    .disabled-link {
  pointer-events: none;
  cursor: default;
  color: #999; /* Optionally change the color to indicate it's disabled */
}
    #header a {
  font-family: 'EB Garamond', serif;
}
      .cart-icon-container {
          position: relative;
          display: inline-block;
      }

      .cart-count {
          position: absolute;
          top: -5px;
          right: -5px;
          background-color: black;
          color: white;
          border-radius: 50%;
          width: 16px;
          height: 16px;
          display: flex;
          justify-content: center;
          align-items: center;
          font-size: 12px;
          font-weight: bold;
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

    <div class="container" >
      <div class="row" style="margin-top: 80px;">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
        <h1>Welcome to ArtCart!</h1>
        </div>

        <div class="col-lg-9">
          <table class="table">
            <thead class="text-center">
              <tr>
                <th scope="col">Sr.No</th>
                <th scope="col">Item Name</th>
                <th scope="col">Item Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="text-center">
            <?php
              if(isset($_SESSION['cart']))
              {
                foreach($_SESSION['cart'] as $key => $value)
                {
                  $sr = $key+1;
                  echo"
                    <tr>
                      <td>$sr</td>
                      <td>$value[Item_Name]</td>
                      <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                      <td>
                        <form action='manage_cart.php' method='POST'>
                          <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                          <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                        </form>
                      </td>
                      <td class='itotal'></td>
                      <td>
                        <form action='manage_cart.php' method='POST'>
                          <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove from Cart</button>
                          <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                        </form>
                      </td>
                      <td></td>
                  ";
                }
              }
            ?>
            </tbody>
          </table>
        </div>

        <div class="col-lg-3">
          <div class="border bg-light rounded p-4">
            <h4>Total: </h4>
            <h5 class="text-right" id="gtotal"></h5>
            <br>
            <?php 
            if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){ ?>
            <form action="purchase.php" method="POST">
              <div>
                <label>Name</label>
                <input type="text" class="form-control" name="uname" placeholder="Enter Name" required><br>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
              </div>
              
              <div class="form-group">
                <label>Phone Number</label>
                <input type="tel" class="form-control" name="phone_no" placeholder="Enter phone number" required>
              </div>
              <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control" placeholder="Enter address" required></input>
              </div>
                
                <p>Payment Method: </p>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pay_mode" value="COD" required>
                  <label class="form-check-label">
                    Cash On Delivery
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pay_mode" value="UPI" required>
                  <label class="form-check-label">
                    UPI
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pay_mode" value="PayTM" required>
                  <label class="form-check-label">
                    PayTM
                  </label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                  <label class="form-check-label" for="exampleCheck1">I agree to Terms and Conditions!!</label>
                </div>
              <br>
              <button class="btn btn-primary btn-block" name="purchase">Check Out</button>
            </form>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  
    
</div>
  </section>
  <?php include("./layout/footer1.php")  ?>

  <script src="assests1/js1/jquery-3.3.1.min.js"></script>
  <script src="assests1/js1/jquery-ui.js"></script>
  <script src="assests1/js1/popper.min.js"></script>
  <script src="assests1/js1/bootstrap.min.js"></script>
  <script src="assests1/js1/owl.carousel.min.js"></script>
  <script src="assests1/js1/jquery.magnific-popup.min.js"></script>
  <script src="assests1/js1/aos.js"></script>

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
    var gt=0;
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById("gtotal");

    function subTotal()
    {
      gt=0;
      for(i=0;i<iprice.length;i++)
      {
        itotal[i].innerText = (iprice[i].value)*(iquantity[i].value);
        gt = gt + (iprice[i].value)*(iquantity[i].value);
      }
      gtotal.innerText  = "Rs."+gt;
    }

    subTotal();
  </script>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main1.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
    
  </body>
</html>