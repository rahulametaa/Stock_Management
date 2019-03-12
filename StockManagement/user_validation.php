<?php
session_start();
$UserName = $_POST['UserName'];
$UserId = $_POST['UserId'];
$UserPasswd = $_POST['UserPasswd'];
$con = mysqli_connect("127.0.0.1:3307","root","","stkmng");
$q = "SELECT * FROM user WHERE UserName='$UserName' && UserId='$UserId' && binary UserPasswd='$UserPasswd'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
echo $num;
if($num)
{
	$_SESSION['UserName']=$UserName;
	$_SESSION['UserId']=$UserId;
 header('location: http://localhost/StockManagement/welcome_user.php');
}
else
{
	 echo ("<script>
    	    window.alert('Your User id and password are wrong');
    	     window.location.href='http://localhost/StockManagement/user_login.php';</script>");
}
mysqli_close($con);
?>