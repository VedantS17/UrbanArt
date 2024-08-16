<?php include('layout/header.php'); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>View Contact Records</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">View</li>
          <li class="breadcrumb-item active">Contact</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">View Contact records</h5>
              

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Order Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Style</th>
                    <th scope="col">Size</th>
                    <th scope="col">Budget</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    include("bcode/conn.php");
                    $querry="Select * from contact";

                    $result=mysqli_query($conn,$querry);
                    while($row=mysqli_fetch_assoc($result))
                    {
                    $id=$row['id'];
                  ?>
    
                  <tr>
                  <td><img src="./assets/img_canvas/pics/<?php echo $row['imgname'];?>" height="70" width="70"></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['style']; ?></td>
                    <td><?php echo $row['size']; ?></td>
                    <td><?php echo $row['budget']; ?></td>
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