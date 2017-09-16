<?php
include("includes/db.php");
include("functions/functions.php");

session_start();


if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
if(isset($_POST['btn-login']))
{
 $email = mysql_real_escape_string($_POST['email']);
 $upass = mysql_real_escape_string($_POST['pass']);
 $res = "SELECT * FROM users WHERE email='$email'";
 $row=mysqli_query($con,$res);
 $bow = mysqli_fetch_array($row);
  
 if($bow['password']==$upass)
 {
  $_SESSION['user'] = $bow['user_id'];
  header("Location: home.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Book A Book</title>
<link rel="stylesheet" type="text/css" href="styles/style1.css" media="all"/>

<style type="text/css">
body{
	background-image: url('images/2.jpg');
    background-size: cover;
}
</style>


</head>
<body>



<!--MAIN CONTAINER Starts-->
<div class="main_wrapper">



<!--header starts here-->
        <div class="header_wrapper"> 
	    <a href="index.php"><img id="img1" src="book1.png"></a>
		<img id="img2" src="book2.jpg">
		</div>
<!--header ends here-->	
       


	   <div id="slim">
	  <marquee behavior="alternate" style="color:white;"> <a href="post.php" style="color:#FDEE00;">SELL</a> or <a href="all_books.php" style="color:#FDEE00;">BUY</a> OPTION IS YOURS!!!!</marquee>
	   </div>	
		
		<!--navigation bar starts-->
		<div id="navbar">
		<ul id="menu">
		<li><a href="index.php"> HOME</a></li>
		<li><a href="all_books.php">ALL BOOKS</a></li>
		<li><a href="post.php">SELL YOUR BOOK</a></li>
		<li><a href="contact.php">CONTACT US</a></li>
		<li><a href="feed.php">FEEDBACK</a></li>
		</ul>
		<div id="form">
		<form action="results.php" method="get" enctype="multipart/form-data">
		<input type="text" name="user_query" placeholder="Search here"/>
		<input type="submit" name="search" value="search"/>
		</form>
		</div>
		
		</div>
		<!--navigation bar ends-->
		
		
		
        <div class="content_wrapper"> 
		    <div id="left_sidebar">
			   <div id="sidebar_title" align="center">Categories</div>
			   <ul id="cats">
			   <?php getCats(); ?>
			   </ul>
			</div>
		    
			
			
			
			<div id="right_content">
			
		
			
			 
		
			
			  <div id="products_box">
			   <center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Sign In</button></td>
</tr>
<tr>
<td><a href="register.php">Sign Up Here</a></td>
</tr>
</table>
</form>
</div>
</center>
			  
			  </div>
			
			
			
			
			
			</div>
		
		
		
		
		</div>
		
		
		
		
		
		
		<div class="footer">
          <h1 style="color:white; padding-top:20px; text-decoration:none; text-align:center; ">&copy; 2016 - all rights reserved</h1> 
 </div>




</div>
<!--MAIN CONTAINER ends-->

</body>


</html>