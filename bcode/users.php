<?php 
session_start();
include("conn.php");
//This code is for registraion
if(isset($_POST["register"])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role_id=1; //0 admin 1- user

    $query= "INSERT INTO `registration`( `name`, `email`, `username`, `password`, `role_id`) VALUES ('$name','$email','$username','$password','$role_id')";

    // $query="INSERT INTO `registration`( `name`, `email`, `username`, `password`, `role_id`) VALUES ('$name','$email','$username','$password','$role_id')";

    $result=mysqli_query($conn,$query);
    header("location:../login.php");


}



//This code for login

if(isset($_POST["login"])){
    $username=$_POST["username"];
    $password=$_POST['password'];

    $query="SELECT * FROM `registration` WHERE `username`='$username' AND `password`='$password'";
    // print_r($query);exit();
    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)== 1){
         $user = mysqli_fetch_array($result);

			$userid = ($user['id']);
			$role_id = ($user['role_id']);
            $uname = ($user['username']);

			$_SESSION["login_id"] = $userid;
			$_SESSION["role_id"] = $role_id;
            $_SESSION["uname"] = $uname;
            if($_SESSION["role_id"] == 1){
                header("Location: ../index.php");
            }
            else{
                header( "Location: ../dashboard.php" );
            }
			
			
    }
    else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.alert('Invalid Username or Password')
		    window.location.href='javascript:history.go(-1)';
		    </SCRIPT>");
    }
    
}
?>