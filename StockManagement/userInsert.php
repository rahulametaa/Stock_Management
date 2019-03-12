<?php
session_start();
$UserName=$_POST['UserName'];
$UserId=$_POST['UserId'];
$UserPasswd=$_POST['UserPasswd'];
$con = mysqli_connect("127.0.0.1:3307","root","","stkmng");
$q = "INSERT INTO user (UserName,UserId,UserPasswd) VALUES ('$UserName','$UserId','$UserPasswd')";
$result = mysqli_query($con,$q);
mysqli_close($con);
if($result)
	{
	header('location: http://localhost/StockManagement/welcome_admin.php');
    }
 else
  {
    echo ("<script>
    	    window.alert('this person have already registered!');
    	    window.location.href='http://localhost/StockManagement/welcome_admin.php';</script>");
  }
?>