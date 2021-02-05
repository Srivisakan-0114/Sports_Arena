<?php
session_start();
require('db.php');

?>

<!Doctype html>
<html>
<head>
<title>login</title>
<body>
<div class="loginbox">
<h1>Login Here</h1>


<?php
	 if(isset($_POST["submit"]))
	 {
		 $sql ="select * from users where uname='{$_POST["uname"]}' and upass='{$_POST["upass"]}' ";
		$res= $con->query($sql);
		if($res->num_rows>0)

		{
			$row=$res->fetch_assoc();
			$_SESSION["id"]=$row["id"];
			$_SESSION["name"]=$row["uname"];
			$_SESSION["pass"]=$row["upass"];
			
			header("location:index.php");
		}
		else{
		 echo "<p>Invalid User Details...</p>";}
		 
	 }

?>


<form action="login.php" method="post">
   <p>Username:<input type="text" name="uname" placeholder="Enetr username"></p>
   <br>
     <p>Password:
	   <input type="password" name="upass" placeholder="Enter password"></p>
	   
	   <br>
	     <button type="submit" name="submit">Login</button> 
		 <br>
		 <br>
		  <center> <a href="forget password.php">Forget your password?</a></center>
		   <br>
		   <center><a href="signup.php">New User?</a></center>
		   
		   
	 
</form>
</div>
<style>
*{
margin:0;
padding:0;
}
body{
background-image:url('login.jpg');
background-size:cover;
background-attachment:fixed;
background-position:center;
}
.loginbox{
width:275px;
height:420px;
background:#000;
color:white;
top:50%;
left:50%;
position:absolute;
transform:translate(-50%,-50%);
box-sizing:border-box;
padding:50px 20px;
}
h1{
margin 0;
padding:0 0 20px;
text-align:center;
font-size:30px;
}
.loginbox p{
margin:0;
padding:0;
font-weight:bold;
}
.loginbox input[type="text"], input[type="password"]
{
border:none;
border-bottom:1px solid #fff;
background:transparent;
outline:none;
height:40px;
color:white;
font-size:16px;
}
.loginbox input[type="login"]
{
border:none;
outline:none;
height:40px;
background:red;
color:white;
font-size:16px;
}
button{
background-color:green;
display :block;
margin:5px 0px 0px 10px;
text-align:center;
border-radius:8px;
border:1px solid #366473;
padding:10px 90px;
outline:none;
color:white;
cursor:pointer;
transistion:0.25px;
}
button:hover
{
background-color:yellow;
}

</style>
</body>
</head>
</html>