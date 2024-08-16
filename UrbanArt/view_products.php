<?php include('layout/header.php'); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>View Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">View</li>
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">View Products</h5>
              

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Order Id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    include("bcode/conn1.php");
                    $querry="Select * from user_orders";
                    $querry1="Select * from order_manager";

                    $result=mysqli_query($conn,$querry);
                    while($row=mysqli_fetch_assoc($result))
                    {
                    $id=$row['Order_Id'];
                  ?>
    
                  <tr>
                    <th scope="row"><?php echo $id; ?></th>
                    <td><?php echo $row['Item_Name']; ?></td>
                    <td><?php echo $row['Price']; ?></td>
                    <td><?php echo $row['Quantity']; ?></td>
                    <td>
                      <a href="edit_products.php?id=<?php echo $row['id'];?>"><i class="bi bi-pencil-square"></i></a>
                      <a href="delete_orders.php?id=<?php echo $row['id'];?>"  onclick="return confirm('Are you sure you want to delete this Product?')"><i class="bi bi-trash"></i></a>

                    </td>

                  </tr>



                  <?php } ?>
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
    <?php mysqli_close($conn); ?>

  </main><!-- End #main -->

 <?php include('layout/footer.php'); ?>