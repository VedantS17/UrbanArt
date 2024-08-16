<?php 
include 'layout/header.php'; ?>

<?php
include('bcode/conn1.php');


 $id=$_GET['id'];
 
 $querry="select * from user_orders where id='$id'";

 $result=mysqli_query($conn,$querry) or die('QUerry Failed..');
 $row=mysqli_fetch_assoc($result);
 // echo "<pre>";
 // print_r($row); 
 // die();
 
 $id=$row['id'];
  
?>


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Product Information</h5>

              <!-- Vertical Form -->
              <form class="row g-3" method="post" action="bcode/edit_prod.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Product Name</label>
                  <input type="text" name="Item_Name" class="form-control" id="inputNanme4" placeholder="Enter Product Name" value="<?php echo $row['Item_Name']; ?>">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Product Price</label>
                  <input type="number" name="Price" class="form-control" id="inputEmail4" placeholder="Enter Company Name" value="<?php echo $row['Price']; ?>">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Qunatity</label>
                  <input type="number"  name="Quantity" class="form-control" id="inputPassword4" placeholder="Enter Product Price" value="<?php echo $row['Quantity']; ?>">
                </div>
                
                <div class="text-center">
                  <button type="submit" name="update" class="btn btn-primary">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

         

        </div>
      </div>
    </section>

  </main><!-- End #main -->


<?php include 'layout/footer.php'; ?>