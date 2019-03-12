<?php
session_start();
$AdminName = $_POST['AdminName'];
$AdminId = $_POST['AdminId'];
$AdminPasswd = $_POST['AdminPasswd'];
$con = mysqli_connect("127.0.0.1:3307","root","","stkmng");
$q = "SELECT * FROM admin WHERE AdminName='$AdminName' && binary AdminPasswd='$AdminPasswd' && AdminId='$AdminId'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
mysqli_close($con);
if($num)
{
	$_SESSION['AdminName']=$AdminName;
	$_SESSION['AdminId']=$AdminId;
 header('location: http://localhost/StockManagement/welcome_admin.php');
}
else
{
	 echo ("<script>
    	    window.alert('Your Admin id and password are wrong');
    	     window.location.href='http://localhost/StockManagement/index1.html';</script>");
}
?>