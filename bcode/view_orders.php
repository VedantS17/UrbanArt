<?php

session_start();
 
if(!isset($_SESSION['login_id']))
{
  header("Location: login.php");
}
error_reporting(0);
include('layout/header.php');


 ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>View Orders</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">View</li>
          <li class="breadcrumb-item active">Orders</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">View Orders</h5>
              

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Sr.no</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $login_id= $_SESSION['login_id'];
                    include("process\conn.php");
                    $count=1;
                    if($_SESSION['role_id']==0){
                      $querry="Select * from order_info";
                    }
                    else
                    {
                      $querry="Select * from order_info where order_by='$login_id'";
                    }
                    
                    $result=mysqli_query($conn,$querry);
                    while($row=mysqli_fetch_assoc($result))
                    {
                    $id=$row['id'];
                  ?>
    
                  <tr>
                    <th scope="row"><?php echo $count; ?></th>
                    <td><?php echo $row['product_name']; ?></td>
                    <td><?php echo $row['company_name']; ?></td>
                    <td><?php echo $row['product_price']; ?></td>
                    <td><?php echo $row['cust_name']; ?></td>
                    <td><?php echo $row['cust_mobile']; ?></td>
                    <td><?php echo $row['cust_address']; ?></td>

                    <td>
                      <a href="edit_orders.php?id=<?php echo $row['id'];?>"><i class="bi bi-pencil-square"></i></a>


                      <?php if($_SESSION['role_id']==0){ ?>
                      <a href=""  data-bs-toggle="modal"  data-bs-target="#order_form"><i class="bi bi-send" title="Order Status"></i></a>
                    <?php } ?>
                      <a href="delete_orders.php?id=<?php echo $row['id'];?>"  onclick="return confirm('Are you sure you want to delete this Order?')"><i class="bi bi-trash"></i></a>
                      <input type="hidden" value="<?php echo $row['id']; ?>" id="cid">

                    </td>

                   

                  </tr>

                  <?php $count++; } ?>
                  
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

  <div class="modal fade" id="order_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Give Order Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Order Status</label>
                        <select class="form-control" id="order_status" onchange="if(this.value=='Rejected'){$('#r_div').show();}else{$('#r_div').hide();}">
                            <option>Select Status</option>
                            <option value="Approved">Approve</option>
                            <option value="Rejected">Reject</option>
                            
                        </select>
                    </div>
                    <div class="form-group" id="r_div" style="display: none;">
                        <label for="message-text" class="col-form-label">Reason:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn  btn-primary" onclick="getOrder()">Send</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
function getOrder() {
       
        let order_status =$("#order_status option:selected").val();
        let reason = $('#message-text').val();
        let cid=$('#cid').val();
            $.ajax({
               type: "POST",
               url: "ajax_call.php",
               data: {
                  'order_status': order_status,
                  'reason' : reason,
                  'cid' : cid
               },
               dataType: "json",
               success: function(data) {
                $("#order_form").modal('hide'); 
               
               if(data==true)
               {
                alert("Order Status Added Successfully...");
               }
              }
              });
    }


</script>

 <?php include('footer.php'); ?>