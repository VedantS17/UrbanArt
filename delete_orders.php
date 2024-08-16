<?php
	include("bcode/conn1.php");

	$id=$_GET['id'];


	$querry="Delete from user_orders where id='$id'";
	$result=mysqli_query($conn,$querry);

header("Location: ./view_products.php");
?>