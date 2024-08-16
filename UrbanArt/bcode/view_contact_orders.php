<?php 	
session_start();
include("conn.php");
	require dirname(__DIR__)."\bcode\conn.php";
	error_reporting(0);
	if(isset($_FILES['imgname']))
	{
				$errors = array();

				$file_name= $_FILES['imgname']['name'];
				$file_type= $_FILES['imgname']['type'];
				$file_size= $_FILES['imgname']['size']/1024;
				$file_tmp=  $_FILES['imgname']['tmp_name'];

				$file_ext=end(explode('.', $file_name));

				$extension=array("jpeg","jpg","png","JPG");

				// echo "<pre>";
				// echo $file_name."<br>".$file_type."<br>".$file_size."<br>".$file_tmp."<br>" .$file_ext; 
				// exit();

				//validation to the image

				if(in_array($file_ext, $extension) == false)
				{
					$errors[] ="this file extension not allow....";
				}

				if($file_size > 2097152){
					$errors[]="file size must be 2mb or lower";
				}

				if(empty($errors)==true){
					move_uploaded_file($file_tmp, dirname(__DIR__)."/assets/img_canvas/pics/".$file_name);
				}else{
					print_r($errors);
					die();
				}

	}

	if(isset($_POST['submit']))
	{
	$name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $style=$_POST['style'];
    $deadline=$_POST['deadline'];
    $imgname=$file_name;
    $subject=$_POST['subject'];
    $size=$_POST['size'];
    $comments=$_POST['comments'];
    $budget=$_POST['budget'];
	
    $query= "INSERT INTO `contact`( `name`, `email`, `address`, `style`, `deadline`, `imgname`, `subject`, `size`, `comments`, `budget`) VALUES ('$name','$email','$address','$style','$deadline','$imgname','$subject','$size','$comments','$budget')";

	$result=mysqli_query($conn,$query);

	mysqli_close($conn);
    header("Location: ../dashboard.php");
	}

?>