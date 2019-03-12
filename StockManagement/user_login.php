<html>
<head>
	<title>Stoke Management</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css"/>
	<style type="text/css">
	form
	{
		position:relative;
		text-align:center;
		padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 30px;
   
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
</style>
</head>
<body>
	<div id="d">
		<img src="img2.jpeg" height=100% width=100%>
		<div id="formdiv">
		<form action="user_validation.php" method="post">
 
     <input id="UserName" class="input" type="text" name="UserName" placeholder="User Name" required><br>
     <input id="UserId"  class="input" type="text" name="UserId" placeholder="User id"  required><br>
     <input id="UserPasswd"  class="input" type="password" name="UserPasswd" placeholder="Password"  required><br>
     <input type="submit" class="input" value="login"/>
     <input type="reset"  class="input"/>
       </form> 
	    </div>

</div>
</body>
</html>