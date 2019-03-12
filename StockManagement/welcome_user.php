<?php
session_start();
if(is_null($_SESSION['UserId']))
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
    height:30px;
   }
  
  #d2
  {
    position:fixed;
    height:20px;
    top:60px;
    left:500px;
  }
  #d3
  {
    position:absolute;
    left:500px;
    top:150px;
  }
   #livesearch
  {
    
    position:relative;
     background-color:#9A9292;
    opacity:0.8;
    filter: alpha(opacity=50);
 
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
td,th
{
  padding:10px;
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
    <ul>
    <li><a href="logout.php">Logout</a></li>
     </ul>
  </div>
  <div id="d2">
   <input type="text" id="in" style="position:relative;" placeholder="search item"/>
   <button style="position:relative;" id="b1" onclick=showResult('in')>search</button>
   <form action="issue.php" method="post">
    <input type="number" id="pid" style="position:relative;" name="pid" placeholder="Product id"/>
     <input type="number" id="item" style="position:relative;" name="item" placeholder="Number of item"/>
     <input type="submit"/>
   </form>
 </div>
   <div id="d3">
  <table id="livesearch">
   </table>
 </div>
</div>
</body>
</html>