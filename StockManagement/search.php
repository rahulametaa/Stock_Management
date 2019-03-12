<?php
session_start();
$q=$_GET["q"];
$con = mysqli_connect("127.0.0.1:3307","root","","stkmng");
$q = "SELECT * FROM stock WHERE ProductName='$q'";
$result = mysqli_query($con,$q);
if(mysqli_num_rows($result))
{
	echo "<tr>";
	echo "<th>Product Name </th>";
	echo "<th>Product Id </th>";
	echo "<th>No of item </th>";
	echo "</tr>";
}
while($row=mysqli_fetch_assoc($result))
{  echo "<tr>";
	echo "<td>";echo $row['ProductName'];echo "</td>";
    echo "<td>";echo $row['ProductId'];echo "</td>";
    echo "<td>";echo $row['No_of_Product'];echo "</td>";
   echo "</tr>";
	
}

?>