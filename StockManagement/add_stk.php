<?php
session_start();
$ProductName=$_POST['ProductName'];
$ProductId=$_POST['ProductId'];
$No=$_POST['No_of_Product'];
$con = mysqli_connect("127.0.0.1:3307","root","","stkmng");
$q1 = "SELECT * FROM stock WHERE ProductName='$ProductName' && ProductId='$ProductId'";
$result1 = mysqli_query($con,$q1);
$num=mysqli_num_rows($result1);
if($num==1)
{
$q2 = "SELECT No_of_Product FROM stock WHERE ProductName='$ProductName' && ProductId='$ProductId'";	
$result2 =mysqli_query($con,$q1);
$no=mysqli_fetch_assoc($result2);
$No=$No+$no['No_of_Product'];
$q3="UPDATE stock SET No_of_Product='$No' WHERE ProductName='$ProductName' && ProductId='$ProductId'";
$result3=mysqli_query($con,$q3);
}
else
{
	echo "dsfghj";
	$q3="INSERT INTO stock (ProductName,ProductId,No_of_Product) VALUES ('$ProductName','$ProductId','$No')";
	$result3 = mysqli_query($con,$q3);
}
header('location: http://localhost/StockManagement/editStock.php');
?>