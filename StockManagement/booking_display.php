<?php
session_start();
if(is_null($_SESSION['AdminId']))
 header('location: http://localhost/StockManagement/admin_login.php');
$con = mysqli_connect("127.0.0.1:3307","root","","stkmng");
$q = "SELECT * FROM booked";
$result = mysqli_query($con,$q);
$i=0;
while($row=mysqli_fetch_assoc($result))
{
$arr[$i++]=$row;	
}
mysqli_close($con);
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
   
   #tablediv
  {
    border-style:groove;
    position:absolute;
    top:200px;
    left:500px;
    background-color:#484343;
  

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
  bottom:40px;
 font-size: 30px;
 color:white;
}

#head
{
  text-align:center;
  height:0px;

}
table
{
	text-decoration-color:black; 
	position:relative;
	padding:5px;
}
td,th
{
	padding:5px;
}

#d3
  {
    position:absolute;
    left:0px;
    top:100px;
  }
  #livesearch
  {
    
    position:relative;
     background-color:#9A9292;
    opacity:0.8;
    filter: alpha(opacity=50);
 
  }

  </style>
<script type="text/javascript">
  function showResult(i) {
   var str=document.getElementById(i).value;
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","search.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>
  <div id="d">
    <img src="img2.jpeg" height=100% width=100%>
  <div id="d1">
  	 <input type="text" id="in" style="position:relative;" placeholder="search item"/>
   <button style="position:relative;" id="b1" onclick=showResult('in')>search</button>
    <ul>
       <li><a href="logout.php">Logout</a></li>
     <li><a href="editStock.php">Edit Stock</a></li>
     <li><a href="welcome_admin.php">Add User</a></li>
     </ul>
  </div>
 
  
  
  <div id="tablediv">
    <table border="2px">
    <tr>
    <th>User Name</th>
    <th>User Id</th>
    <th>Product Name</th>
    <th>Product Id</th>
    <th>No. of item</th>
    <th>Date</th>
    </tr>
    <?php
    for($j=0;$j<$i;$j++)
    {
     echo "<tr>";
    echo "<td>{$arr[$j]['UserName']}</td>
    <td>{$arr[$j]['UserId']}</td>
    <td>{$arr[$j]['ProductName']}</td>
    <td>{$arr[$j]['ProductId']}</td>
    <td>{$arr[$j]['No_of_Item']}</td>
    <td>{$arr[$j]['booking_Date']}</td>
    </tr>";
     }
    ?>	
    </table>
  </div>
   <div id="d3">
  <table id="livesearch">
   </table>
 </div>
</div>
</body>
</html>