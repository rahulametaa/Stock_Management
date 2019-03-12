<?php
session_start();
if(is_null($_SESSION['AdminId']))
 header('location: http://localhost/StockManagement/admin_login.php');
?>
<html>
<head>
  <title>Stoke Management</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
  <style type="text/css">
    #d1
   {
    position:fixed;
    top:0px;
    width:100%;
    height:50px;
    background-color:#9A9292;
    opacity:0.8;
    filter: alpha(opacity=50);
   }
   #a1
   {
    position:relative;
    bottom:25px;
   }
   #l1
   {
    position:relative;
    right:100px;
   }
   #l2
   {
    position:relative;
    right:130px;
   }
   #formdiv
  {
    border-style:groove;
    position:absolute;
    top:200px;
    left:500px;
    width:300px;
    height:400px;
    background-color:#484343;
    opacity:0.4;
    filter: alpha(opacity=50);

  }

  .input
  {
    height:30px;
    width:200px;
    margin-top:10px;
    opacity:1;
    background-color:#9A9292;
  }
  ::placeholder
  {
    color:black;
  }
  form
  {
    position:relative;
    text-align:center;
    padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 30px;
   
  }

  li
{
  list-style-type:none;
}
li a
{
  text-decoration: none;
  float:right;
  padding:20px;
  position:relative;
  bottom:30px;
 font-size: 30px;
 color:white;
}
#head
{
  text-align:center;
  height:0px;

}
  </style>

</head>
<body>
  <div id="d">
    <img src="img2.jpeg" height=100% width=100%>
  <div id="d1">
    <ul>
       <li><a href="logout.php">Logout</a></li>
    <li><a href="booking_display.php">Display Booked</a></li>
     <li><a href="welcome_admin.php">Add User</a></li>
     </ul>
  </div>
  <div id="formdiv">
     <div id="head"><h1 style="color:white;">Edit Stock</h1></div>
<form action="add_stk.php" method="post">
 <input id="ProductName" class="input" type="text" name="ProductName" placeholder="Product Name" required><br>
 <input id="ProductId"  class="input" type="text" name="ProductId" placeholder="Product id"  required><br>
 <input id="No_of_Product"  class="input" type="number" name="No_of_Product" placeholder="Number of product"  required><br>
 <input type="submit" class="input" value="Add product"/>
 <button type="submit" class="input" formaction="remove_stk.php">Remove product</button> 
</form> 
   </div>
</div>
</body>
</html>