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
     <li><a href="editStock.php">Edit Stock</a></li>
    <li><a href="booking_display.php">Display Booked</a></li>
     </ul>
  </div>
  <div id="formdiv">
    <div id="head"><h1 style="color:white;">Add User</h1></div>
<form action="userInsert.php" method="post">
 <input id="UserName" class="input" type="text" name="UserName" placeholder="Name" required><br>
 <input id="AserId"  class="input" type="text" name="UserId" placeholder="User id"  required><br>
 <input id="UserPasswd"  class="input" type="password" name="UserPasswd" placeholder="User Password"  required><br>
 <input type="submit" class="input" value="Add user"/>
 <input type="reset"  class="input"/>
</form> 
   </div>
</div>
</body>
</html>