<?php
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Book A Book</title>
<link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>

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
	   <marquee behavior="alternate" style="color:white;"><a href="post.php" style="color:#FDEE00;">SELL</a> or <a href="all_books.php" style="color:#FDEE00;">BUY</a> OPTION IS YOURS!!!!</marquee>
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
			
			
			
			 
		
			
			  <div id="products_box"></br>
			   <table align="center" border="1px sloid black" height="600px" width="720px" >
			   <tr>
			   <td align="center"><img  src="images/f1.jpg" height="400px" width="330px" ></td>
			   <td align="center"><img  src="images/m2.jpg" height="400px" width="300px" ></td>
			   </tr>
			   
			   <tr>
			   <td>Mohammad Farooq</br>
			       9897585221</td>
			   <td>Mohammad Mudassir</br>
			       9859568487</td>
			   </tr>
			   <tr>
			   <td colspan="2">Abdul Malik Cloth House is registered cloth house in Raiwala Market in Saharanpur, leading in all types of ladies attire from simple suits and kurtis to heavy bridal lehengas and sarees. We sell all the branded materials and to satisty our customer we have a replacement and return policy within 1 month of the purchase. If you have any suggestion you can directly mail us at : mohdfarooq@gmal.com  or  mohdmudassir@gmail.com. Your feedback is valueable for us.</td>
			   </tr>
			   </table>
			  
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