<?php
session_start();
if(is_null($_SESSION['UserId']))
 header('location: http://localhost/StockManagement/admin_login.php');
$UserName=$_SESSION['UserName'];
$UserId=$_SESSION['UserId'];
$booking_date=date('Y-m-d');
$pid=$_POST['pid'];
$item=$_POST['item'];
$con = mysqli_connect("127.0.0.1:3307","root","","stkmng");
$q1 = "SELECT * FROM stock WHERE ProductId='$pid'";
$result1 = mysqli_query($con,$q1);
$row=mysqli_fetch_assoc($result1);
$no=$row['No_of_Product'];
$ProductName=$row['ProductName'];
if($no<$item)
{
	 echo ("<script>
    	    window.alert('only '+{$no}+' items are present');
    	     window.location.href='http://localhost/StockManagement/welcome_user.php';</script>");
}
else
{ 
if($no>$item)
{
	$q3="UPDATE stock SET No_of_Product=$no-$item  WHERE ProductId='$pid'";
 	$result3 =mysqli_query($con,$q3);	
}
else
{
	$q4="DELETE FROM stock WHERE ProductId='$pid'";
 	$result4 =mysqli_query($con,$q4);
}
$q5 = "INSERT INTO booked (UserName,UserId,ProductName,ProductId,No_of_Item,booking_Date) VALUES ('$UserName','$UserId','$ProductName','$pid','$item','$booking_date')";
$result5 =mysqli_query($con,$q5);
}
mysqli_close($con);
header('location: http://localhost/StockManagement/welcome_user.php');
?>