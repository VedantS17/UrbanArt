<?php

require dirname(__DIR__)."\bcode\conn1.php";
 $id=$_GET['id'];



if(isset($_POST['update']))
{
	$Item_Name=$_POST['Item_Name'];
	$Price=$_POST['Price'];
	$Quantity=$_POST['Quantity'];

	$querry="UPDATE user_orders SET Item_Name = '$Item_Name',Price= '$Price',Quantity= '$Quantity' where id='$id'";

		$result=mysqli_query($conn,$querry);
		// print_r($querry);exit;

	 	mysqli_close($conn);
	 	
	 	header("Location: ../view_products.php");
	 
 }

?>