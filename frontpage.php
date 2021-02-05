<?php
session_start();
require('db.php');

?>



<!Doctype html>
<html>
<head>
<title>Sports arena</title>

</head>
<body text="yellow">
<center><h1>ATTRACT SPORTS ARENA</h1></center>

<nav>

<ul>
<li><a href="about us.html"> To Know About us?</a></li>
<li><a href="login.html">Want to play?</a>
</li>
<li><a href="member.html">Want to be a member?</a></li>

<li><a href="findus.html">Find a way?</a></li>
<li><a href="Image.html">Want to see some images?</a></li>
<li><a href="feesdetails.html">Know about Fees?</a></li>
<li><a href="rateus.html">Your valuable ratings.</a></li>
</nav>
</ul>
<style> 
*{
padding:0;
margin;0;
}
body{
background-image:url('front.jpg');
background-size:cover;
background-attachment:fixed;
}

nav{
background-color:white;
height:50px;

}

nav ul li{
list-style-type:none;
width:175px;
float:left;
border-right:10px solid #ccc;
text-align:center;

}
nav ul li a{
text-decoration:none;
color:black;
line-height:50px;
display:block;
}
li a:hover{
background-color:green;
color-white;
}

</style>
</body>

</html>