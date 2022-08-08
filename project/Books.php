<!DOCTYPE html>
<html lang="en">
<head>
<title>Books</title>
<meta name="description" content=" This is our book store if you are looking for any books just click the link and join us ">
<meta name="keyword" content="Store,Online, Book,Informations,Developers">
<meta name="Book+" content="Online Book Store ">
<link rel="stylesheet" href="styles.css">

<body>

<div class="Bookscontainer">
    
   </div>

<!--this is the menue of header-->
<nav id="navigation">
<!--this is the logo of our web-->
<a href="index.php" class="logo">SkyBOOKS<span>+</span></a><!--if user click in logo it will transfer him to Home page-->
       <!--this is the list of menu optin-->
       <ul class="links">
          <li><a href="About.php"><sup style="font-size:20px">About</sup></a></li><!--if user click in About it will transfer him to About page-->
          <li><a href="Books.php"><sup style="font-size:20px">Books</sup></a></li><!--if user click in Books it will transfer him to Books page-->
         <!--this is the feedback option -->
         <li><a href="Feedback.php"><sup style="font-size:20px">FeedBack</sup></a></li><!--if user click in Feedback it will transfer him to Feedback page-->
<?php
	session_start();
		if(!empty($_SESSION['username'])){
			print "		<!--this is the drobed list for login/sing in option -->
           <li class=\"dropdown\"><a  class=\"trigger-drop\"><img src=\"images/userIcon.png\" height=\"30\" width=\"30\" alt=\"userIcon\"/><i class=\"arrow\"></i></a>
            <ul class=\"drop\">
            <li><a href=\"Order.php\">My orders</a></li><!--if user click in LogIn it will transfer him to LogIn page-->
		   <li><a href=\"Logout.php\">Log out</a></li><!--if user click in signUp it will transfer him to signUp page-->
		   </ul>
		    <li><a href=\"checkOut.php\"><img src=\"images/cart.png\" height=\"30\" width=\"30\" alt=\"cartIcon\"/></a></li><!--if user click in cart it will transfer him to cart page-->
		 </li>";
		} else {print "<li><a href=\"Log.php\"><sup style=\"font-size:20px\">Log in</sup></a></li>";}
?>		 

       </ul>
    </nav>
<div>
<!--this is the discrptin-->

<h3 class="Booksdes">Sky BOOKS</h3>
 <div class="Booksdes1"><pre>
      <strong>"Books let you travel without moving your feet."</strong>
   We have established this electronic library in order with these 
      circumstances of this year also to win your satisfaction.</pre>
</div>

<!--this is theimage header and search filed -->
<div class="BooksHederImage1"><img src="images/hed14.png" height="300" width="300" alt="hederImage1"></div>

 
</div>


<!--this is the list of All disciplines of books -->
 
   
	    <table>
	   <tr>
	   <td>
	   <form action="#ss">
         <div class="BooksdesHeder">
          <p><button type="submit" class="btnMenu">Medical Books</button></p></div>
       </form>
	   </td>
	   
	  <td>
	  <form action="#ee">
         <div class="BooksdesHeder">
          <p><button type="submit" class="btnMenu">Management Books</button></p></div>
       </form>
	   </td>
	   
	   <td>
	   <form action="#ra">
         <div class="BooksdesHeder">
          <p><button type="submit" class="btnMenu">Technical Books</button></p></div>
       </form>
	   </td>
	   
	   <td>
	   <form action="#rr">
         <div class="BooksdesHeder">
          <p><button type="submit" class="btnMenu">Scientific Books</button></p></div>
       </form>
	   </td>
	   
	   <td>
	   <form action="#mm">
         <div class="BooksdesHeder">
          <p><button type="submit" class="btnMenu">Social Sciences books</button></p></div>
       </form>
	   </td>
	   </tr>
	   </table>


 
<?php


// Address error handling.
ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

require('DB_Bookstore.php');
$current_user = $_SESSION['user_id'];
//----------------------------------------------to add the book to the cart table----------------------------------------------//

//book1

if (isset($_GET['s1']) && !empty($current_user)){
$ret_query = "SELECT * FROM cart WHERE book_id=1 AND user_id=$current_user";	
if ($r = mysqli_query ($dbc, $ret_query)) {
	$check = mysqli_num_rows($r);
	if($check != 0){
while ($row = mysqli_fetch_array ($r)) {
		if($row['book_id'] == 1){
			$new_qyn=$row['qyn']+1;
			$update_query = "UPDATE cart SET qyn=$new_qyn WHERE book_id=1 AND user_id=$current_user";	
			@mysqli_query ($dbc, $update_query);
			}
}
} else {$query = "INSERT INTO cart VALUES (0, 1, $current_user, 1)"; @mysqli_query ($dbc, $query);}
}
} else if (isset($_GET['s1']) && empty($current_user)){header ('Location: Log.php');exit();}




//book2

if (isset($_GET['s2']) && !empty($current_user)){
$ret_query = "SELECT * FROM cart WHERE book_id=2 AND user_id=$current_user";	
if ($r = mysqli_query ($dbc, $ret_query)) {
	$check = mysqli_num_rows($r);
	if($check != 0){
while ($row = mysqli_fetch_array ($r)) {
		if($row['book_id'] == 2){
			$new_qyn=$row['qyn']+1;
			$update_query = "UPDATE cart SET qyn=$new_qyn WHERE book_id=2 AND user_id=$current_user";	
			@mysqli_query ($dbc, $update_query);
			}
}
} else {$query = "INSERT INTO cart VALUES (0, 2, $current_user, 1)"; @mysqli_query ($dbc, $query);}
}
} else if (isset($_GET['s2']) && empty($current_user)){header ('Location: Log.php');}





//book3


if (isset($_GET['s3']) && !empty($current_user)){
$ret_query = "SELECT * FROM cart WHERE book_id=3 AND user_id=$current_user";	
if ($r = mysqli_query ($dbc, $ret_query)) {
	$check = mysqli_num_rows($r);
	if($check != 0){
while ($row = mysqli_fetch_array ($r)) {
		if($row['book_id'] == 3){
			$new_qyn=$row['qyn']+1;
			$update_query = "UPDATE cart SET qyn=$new_qyn WHERE book_id=3 AND user_id=$current_user";	
			@mysqli_query ($dbc, $update_query);
			}
}
} else {$query = "INSERT INTO cart VALUES (0, 3, $current_user, 1)"; @mysqli_query ($dbc, $query);}
}
} else if (isset($_GET['s3']) && empty($current_user)){header ('Location: Log.php');}








//book4




if (isset($_GET['s4']) && !empty($current_user)){
$ret_query = "SELECT * FROM cart WHERE book_id=4 AND user_id=$current_user";	
if ($r = mysqli_query ($dbc, $ret_query)) {
	$check = mysqli_num_rows($r);
	if($check != 0){
while ($row = mysqli_fetch_array ($r)) {
		if($row['book_id'] == 4){
			$new_qyn=$row['qyn']+1;
			$update_query = "UPDATE cart SET qyn=$new_qyn WHERE book_id=4 AND user_id=$current_user";	
			@mysqli_query ($dbc, $update_query);
			}
}
} else {$query = "INSERT INTO cart VALUES (0, 4, $current_user, 1)"; @mysqli_query ($dbc, $query);}
}
} else if (isset($_GET['s4']) && empty($current_user)){header ('Location: Log.php');}






//book5



if (isset($_GET['s5']) && !empty($current_user)){
$ret_query = "SELECT * FROM cart WHERE book_id=5 AND user_id=$current_user";	
if ($r = mysqli_query ($dbc, $ret_query)) {
	$check = mysqli_num_rows($r);
	if($check != 0){
while ($row = mysqli_fetch_array ($r)) {
		if($row['book_id'] == 5){
			$new_qyn=$row['qyn']+1;
			$update_query = "UPDATE cart SET qyn=$new_qyn WHERE book_id=5 AND user_id=$current_user";	
			@mysqli_query ($dbc, $update_query);
			}
}
} else {$query = "INSERT INTO cart VALUES (0, 5, $current_user, 1)"; @mysqli_query ($dbc, $query);}
}
} else if (isset($_GET['s5']) && empty($current_user)){header ('Location: Log.php');}





//Book6
if (isset($_GET['s6']) && !empty($current_user)){
$ret_query = "SELECT * FROM cart WHERE book_id=6 AND user_id=$current_user";
if ($r = mysqli_query ($dbc, $ret_query)) {
$check = mysqli_num_rows($r);
if($check != 0){
while ($row = mysqli_fetch_array ($r)) {
if($row['book_id'] == 6){
$new_qyn=$row['qyn']+1;
$update_query = "UPDATE cart SET qyn=$new_qyn WHERE book_id=6 AND user_id=$current_user";
@mysqli_query ($dbc, $update_query);
}
}
} else {$query = "INSERT INTO cart VALUES (0, 6, $current_user, 1)"; @mysqli_query ($dbc, $query);}
}
} else if (isset($_GET['s6']) && empty($current_user)){header ('Location: Log.php');}



//Book7



if (isset($_GET['s7']) && !empty($current_user)){
$ret_query = "SELECT * FROM cart WHERE book_id=7 AND user_id=$current_user";
if ($r = mysqli_query ($dbc, $ret_query)) {
$check = mysqli_num_rows($r);
if($check != 0){
while ($row = mysqli_fetch_array ($r)) {
if($row['book_id'] == 7){
$new_qyn=$row['qyn']+1;
$update_query = "UPDATE cart SET qyn=$new_qyn WHERE book_id=7 AND user_id=$current_user";
@mysqli_query ($dbc, $update_query);
}
}
} else {$query = "INSERT INTO cart VALUES (0, 7, $current_user, 1)"; @mysqli_query ($dbc, $query);}
}
} else if (isset($_GET['s7']) && empty($current_user)){header ('Location: Log.php');}



//Book8



if (isset($_GET['s8']) && !empty($current_user)){
$ret_query = "SELECT * FROM cart WHERE book_id=8 AND user_id=$current_user";
if ($r = mysqli_query ($dbc, $ret_query)) {
$check = mysqli_num_rows($r);
if($check != 0){
while ($row = mysqli_fetch_array ($r)) {
if($row['book_id'] == 8){
$new_qyn=$row['qyn']+1;
$update_query = "UPDATE cart SET qyn=$new_qyn WHERE book_id=8 AND user_id=$current_user";
@mysqli_query ($dbc, $update_query);
}
}
} else {$query = "INSERT INTO cart VALUES (0, 8, $current_user, 1)"; @mysqli_query ($dbc, $query);}
}
} else if (isset($_GET['s8']) && empty($current_user)){header ('Location: Log.php');}



//Book9



if (isset($_GET['s9']) && !empty($current_user)){
$ret_query = "SELECT * FROM cart WHERE book_id=9 AND user_id=$current_user";
if ($r = mysqli_query ($dbc, $ret_query)) {
$check = mysqli_num_rows($r);
if($check != 0){
while ($row = mysqli_fetch_array ($r)) {
if($row['book_id'] == 9){
$new_qyn=$row['qyn']+1;
$update_query = "UPDATE cart SET qyn=$new_qyn WHERE book_id=9 AND user_id=$current_user";
@mysqli_query ($dbc, $update_query);
}
}
} else {$query = "INSERT INTO cart VALUES (0, 9, $current_user, 1)"; @mysqli_query ($dbc, $query);}
}
} else if (isset($_GET['s9']) && empty($current_user)){header ('Location: Log.php');}



//Book10



if (isset($_GET['s10']) && !empty($current_user)){
$ret_query = "SELECT * FROM cart WHERE book_id=10 AND user_id=$current_user";
if ($r = mysqli_query ($dbc, $ret_query)) {
$check = mysqli_num_rows($r);
if($check != 0){
while ($row = mysqli_fetch_array ($r)) {
if($row['book_id'] == 10){
$new_qyn=$row['qyn']+1;
$update_query = "UPDATE cart SET qyn=$new_qyn WHERE book_id=10 AND user_id=$current_user";
@mysqli_query ($dbc, $update_query);
}
}
} else {$query = "INSERT INTO cart VALUES (0, 10, $current_user, 1)"; @mysqli_query ($dbc, $query);}
}
} else if (isset($_GET['s10']) && empty($current_user)){header ('Location: Log.php');}




//Book11
if (isset($_GET['s11']) && !empty($current_user)){
$ret_query = "SELECT * FROM cart WHERE book_id=11 AND user_id=$current_user";             
if ($r = mysqli_query ($dbc, $ret_query)) {
              $check = mysqli_num_rows($r);
              if($check != 0){
while ($row = mysqli_fetch_array ($r)) {
                             if($row['book_id'] == 11){
                                           $new_qyn=$row['qyn']+1;
                                           $update_query = "UPDATE cart SET qyn=$new_qyn WHERE book_id=11 AND user_id=$current_user";           
                                           @mysqli_query ($dbc, $update_query);
                                           }
}
} else {$query = "INSERT INTO cart VALUES (0, 11, $current_user, 1)"; @mysqli_query ($dbc, $query);}
}
} else if (isset($_GET['s11']) && empty($current_user)){header ('Location: Log.php');}

//Book12
if (isset($_GET['s12']) && !empty($current_user)){
$ret_query = "SELECT * FROM cart WHERE book_id=12 AND user_id=$current_user";             
if ($r = mysqli_query ($dbc, $ret_query)) {
              $check = mysqli_num_rows($r);
              if($check != 0){
while ($row = mysqli_fetch_array ($r)) {
                             if($row['book_id'] == 12){
                                           $new_qyn=$row['qyn']+1;
                                           $update_query = "UPDATE cart SET qyn=$new_qyn WHERE book_id=12 AND user_id=$current_user";           
                                           @mysqli_query ($dbc, $update_query);
                                           }
}
} else {$query = "INSERT INTO cart VALUES (0, 12, $current_user, 1)"; @mysqli_query ($dbc, $query);}
}
} else if (isset($_GET['s12']) && empty($current_user)){header ('Location: Log.php');}

//Book13
if (isset($_GET['s13']) && !empty($current_user)){
$ret_query = "SELECT * FROM cart WHERE book_id=13 AND user_id=$current_user";             
if ($r = mysqli_query ($dbc, $ret_query)) {
              $check = mysqli_num_rows($r);
              if($check != 0){
while ($row = mysqli_fetch_array ($r)) {
                             if($row['book_id'] == 13){
                                           $new_qyn=$row['qyn']+1;
                                           $update_query = "UPDATE cart SET qyn=$new_qyn WHERE book_id=13 AND user_id=$current_user";           
                                           @mysqli_query ($dbc, $update_query);
                                           }
}
} else {$query = "INSERT INTO cart VALUES (0, 13, $current_user, 1)"; @mysqli_query ($dbc, $query);}
}
} else if (isset($_GET['s13']) && empty($current_user)){header ('Location: Log.php');}


//Book14
if (isset($_GET['s14']) && !empty($current_user)){
$ret_query = "SELECT * FROM cart WHERE book_id=14 AND user_id=$current_user";             
if ($r = mysqli_query ($dbc, $ret_query)) {
              $check = mysqli_num_rows($r);
              if($check != 0){
while ($row = mysqli_fetch_array ($r)) {
                             if($row['book_id'] == 14){
                                           $new_qyn=$row['qyn']+1;
                                           $update_query = "UPDATE cart SET qyn=$new_qyn WHERE book_id=14 AND user_id=$current_user";           
                                           @mysqli_query ($dbc, $update_query);
                                           }
}
} else {$query = "INSERT INTO cart VALUES (0, 14, $current_user, 1)"; @mysqli_query ($dbc, $query);}
}
} else if (isset($_GET['s14']) && empty($current_user)){header ('Location: Log.php');}



//Book15
if (isset($_GET['s15']) && !empty($current_user)){
$ret_query = "SELECT * FROM cart WHERE book_id=15 AND user_id=$current_user";             
if ($r = mysqli_query ($dbc, $ret_query)) {
              $check = mysqli_num_rows($r);
              if($check != 0){
while ($row = mysqli_fetch_array ($r)) {
                             if($row['book_id'] == 15){
                                           $new_qyn=$row['qyn']+1;
                                           $update_query = "UPDATE cart SET qyn=$new_qyn WHERE book_id=15 AND user_id=$current_user";         
                                           @mysqli_query ($dbc, $update_query);
                                           }
}
} else {$query = "INSERT INTO cart VALUES (0, 15, $current_user, 1)"; @mysqli_query ($dbc, $query);}
}
} else if (isset($_GET['s15']) && empty($current_user)){header ('Location: Log.php');}

//Book16
if (isset($_GET['s16']) && !empty($current_user)){
$ret_query = "SELECT * FROM cart WHERE book_id=16 AND user_id=$current_user";             
if ($r = mysqli_query ($dbc, $ret_query)) {
              $check = mysqli_num_rows($r);
              if($check != 0){
while ($row = mysqli_fetch_array ($r)) {
                             if($row['book_id'] == 16){
                                           $new_qyn=$row['qyn']+1;
                                           $update_query = "UPDATE cart SET qyn=$new_qyn WHERE book_id=16 AND user_id=$current_user";         
                                           @mysqli_query ($dbc, $update_query);
                                           }
}
} else {$query = "INSERT INTO cart VALUES (0, 16, $current_user, 1)"; @mysqli_query ($dbc, $query);}
}
} else if (isset($_GET['s16']) && empty($current_user)){header ('Location: Log.php');}

//Book17
if (isset($_GET['s17']) && !empty($current_user)){
$ret_query = "SELECT * FROM cart WHERE book_id=17 AND user_id=$current_user";             
if ($r = mysqli_query ($dbc, $ret_query)) {
              $check = mysqli_num_rows($r);
              if($check != 0){
while ($row = mysqli_fetch_array ($r)) {
                             if($row['book_id'] == 17){
                                           $new_qyn=$row['qyn']+1;
                                           $update_query = "UPDATE cart SET qyn=$new_qyn WHERE book_id=17 AND user_id=$current_user";         
                                           @mysqli_query ($dbc, $update_query);
                                           }
}
} else {$query = "INSERT INTO cart VALUES (0, 17, $current_user, 1)"; @mysqli_query ($dbc, $query);}
}
} else if (isset($_GET['s17']) && empty($current_user)){header ('Location: Log.php');}

//Book18
if (isset($_GET['s18']) && !empty($current_user)){
$ret_query = "SELECT * FROM cart WHERE book_id=18 AND user_id=$current_user";             
if ($r = mysqli_query ($dbc, $ret_query)) {
              $check = mysqli_num_rows($r);
              if($check != 0){
while ($row = mysqli_fetch_array ($r)) {
                             if($row['book_id'] == 18){
                                           $new_qyn=$row['qyn']+1;
                                           $update_query = "UPDATE cart SET qyn=$new_qyn WHERE book_id=18 AND user_id=$current_user";         
                                           @mysqli_query ($dbc, $update_query);
                                           }
}
} else {$query = "INSERT INTO cart VALUES (0, 18, $current_user, 1)"; @mysqli_query ($dbc, $query);}
}
} else if (isset($_GET['s18']) && empty($current_user)){header ('Location: Log.php');}

//Book19
if (isset($_GET['s19']) && !empty($current_user)){
$ret_query = "SELECT * FROM cart WHERE book_id=19 AND user_id=$current_user";             
if ($r = mysqli_query ($dbc, $ret_query)) {
              $check = mysqli_num_rows($r);
              if($check != 0){
while ($row = mysqli_fetch_array ($r)) {
                             if($row['book_id'] == 19){
                                           $new_qyn=$row['qyn']+1;
                                           $update_query = "UPDATE cart SET qyn=$new_qyn WHERE book_id=19 AND user_id=$current_user";         
                                           @mysqli_query ($dbc, $update_query);
                                           }
}
} else {$query = "INSERT INTO cart VALUES (0, 19, $current_user, 1)"; @mysqli_query ($dbc, $query);}
}
} else if (isset($_GET['s19']) && empty($current_user)){header ('Location: Log.php');}

//Book20
if (isset($_GET['s20']) && !empty($current_user)){
$ret_query = "SELECT * FROM cart WHERE book_id=20 AND user_id=$current_user";             
if ($r = mysqli_query ($dbc, $ret_query)) {
              $check = mysqli_num_rows($r);
              if($check != 0){
while ($row = mysqli_fetch_array ($r)) {
                             if($row['book_id'] == 20){
                                           $new_qyn=$row['qyn']+1;
                                           $update_query = "UPDATE cart SET qyn=$new_qyn WHERE book_id=20 AND user_id=$current_user";         
                                           @mysqli_query ($dbc, $update_query);
                                           }
}
} else {$query = "INSERT INTO cart VALUES (0, 20, $current_user, 1)"; @mysqli_query ($dbc, $query);}
}
} else if (isset($_GET['s20']) && empty($current_user)){header ('Location: Log.php');}





?>



<!--this is the book  -->
<section>
<div class="row33" id="ss"> <!--each row has 4 books -->
<br/>
<div class="columnBook">
<div class="BookCard">
<img class="imegeBook" src="images/b4.png" alt="book"  >
<div class="container33">
<h3 class="bookH3">Srb’s Manual of Surgery </h3>
<p class="title">(by Sriram Bhat Author)</p>
<p class="bookp">is a comprehensive guide to the complete field of surgery</p>
<h3 class="bookH3">$55</h3>
<form action="Books.php" method="GET">
<div class="BooksdesHeder">
<p><button type="submit" name="s1" class="btnBook">buy now</button></p></div>
</form>
</div>
</div>
</div>




<div class="columnBook">
<div class="BookCard">
<img class="imegeBook" src="images/b3.png" alt="book" >
<div class="container33">
<h3 class="bookH3">Current Surgical Therapy </h3>
<p class="title">(by Andrew M. Cameron Author)</p>
<p class="bookp"> excellent reference for everyday clinical practice</p>
<h3 class="bookH3">$50</h3>
<form action="Books.php" method="GET">
<div class="BooksdesHeder">
<p><button type="submit" name="s2" class="btnBook">buy now</button></p></div>
</form>
</div>
</div>
</div>



<div class="columnBook">
<div class="BookCard">
<img class="imegeBook" src="images/b2.png" alt="book" >
<div class="container33">
<h3 class="bookH3">Medical Terminology</h3>
<p class="title">(by Beverley Henderson  Author)</p>
<p class="bookp">gets you up to speed quickly on medical terminology</p>
<h3 class="bookH3">$75</h3>
<form action="Books.php" method="GET">
<div class="BooksdesHeder">
<p><button type="submit" name="s3" class="btnBook">buy now</button></p></div>
</form>
</div>
</div>
</div>



<div class="columnBook">
<div class="BookCard">
<img class="imegeBook" src="images/b1.png" alt="book" >
<div class="container33">
<h3 class="bookH3">The Anatomy Coloring </h3>
<p class="title">(by Sriram Bhat Author)</p>
<p class="bookp">useful for anyone with an interest in learning anatomical structures</p>
<h3 class="bookH3">$60</h3>
<form action="Books.php" method="GET">
<div class="BooksdesHeder">
<p><button type="submit" name="s4" class="btnBook">buy now</button></p></div>
</form>
</div>
</div>
</div>


</div>





<!--Interval for a specific major -->
<div id="ee">
<section class="sectionBook">
 <h3 class="textSectionBook">Management Books</h3>
 <div class="sectionImage">
 <img src="http://www.evarus.com/wp-content/themes/Evarus/images/cms_images/business_analysis.png" height="300" width="300" alt="book">
 </div>
</section>
</div>




<div class="row33"><!--each row has 4 books -->
<br/>
<div class="columnBook">
<div class="BookCard">
<img class="imegeBook" src="images/b5.png" alt="book">
<div class="container33">
<h3 class="bookH3">Improving Your Leadership</h3>
<p class="title">W S.M G&Ed Leonard (Author)</p>
<p class="bookp"> Based on Leadership Intelligence: Navigating to Your True North</p>
<h3 class="bookH3">$55</h3>
<form action="Books.php" method="GET">
<div class="BooksdesHeder">
<p><button type="submit" name="s5" class="btnBook">buy now</button></p></div>
</form>
</div>
</div>
</div>




<div class="columnBook">
<div class="BookCard">
<img class="imegeBook" src="images/b6.png" alt="book">
<div class="container33">
<h3 class="bookH3">Traction</h3>
<p class="title">(by Gino Wickman (Author))</p>
<p class="bookp"> help maximize your efficiency lead your parameters of a business </p>
<h3 class="bookH3">$50</h3>
<form action="Books.php" method="GET">
<div class="BooksdesHeder">
<p><button type="submit" name="s6" class="btnBook">buy now</button></p></div>
</form>
</div>
</div>
</div>



<div class="columnBook">
<div class="BookCard">
<img class="imegeBook" src="images/b7.png" alt="book" >
<div class="container33">
<h3 class="bookH3">Thinking, Fast and Slow</h3>
<p class="title">by Elizabeth Gilbert (Author)</p>
<p class="bookp"> Love has the power to change your life beyond your career</p>
<h3 class="bookH3">$35</h3>
<form action="Books.php" method="GET">
<div class="BooksdesHeder">
<p><button type="submit" name="s7" class="btnBook">buy now</button></p></div>
</form>
</div>
</div>
</div>



<div class="columnBook">
<div class="BookCard">
<img class="imegeBook" src="images/b8.png" alt="book" >
<div class="container33">
<h3 class="bookH3">The Innovative Admin </h3>
<p class="title">(by Julie Perrine (Author) )</p>
<p class="bookp">useful If you want to be the Innovative admin</p>
<h3 class="bookH3">$60</h3>
<form action="Books.php" method="GET">
<div class="BooksdesHeder">
<p><button type="submit" name="s8" class="btnBook">buy now</button></p></div>
</form>
</div>
</div>
</div>


</div>








<div id="ra"> <!--Interval for a specific major -->
<section class="sectionBook">
 <h3 class="textSectionBook">Technical Books</h3>
 <div class="sectionImage">
 <img src="http://www.hzfanwen.com/wp-content/uploads/2019/03/%E5%85%A8%E7%90%83%E7%83%AD%E7%82%B9-1.png" height="300" width="300" alt="book">
 </div>
</section>
</div>





<div class="row33"><!--each row has 4 books -->
<br/>
<div class="columnBook">
<div class="BookCard">
<img class="imegeBook" src="images/b9.png" alt="book"  >
<div class="container33">
<h3 class="bookH3">Wire Technology </h3>
<p class="title">(by Roger Wright (Author))</p>
<p class="bookp">metalworking process used to reduce the diameter of a wire </p>
<h3 class="bookH3">$80</h3>
<form action="Books.php" method="GET">
<div class="BooksdesHeder">
<p><button type="submit" name="s9" class="btnBook">buy now</button></p></div>
</form>
</div>
</div>
</div>




<div class="columnBook">
<div class="BookCard">
<img class="imegeBook" src="images/b10.png" alt="book" >
<div class="container33">
<h3 class="bookH3">Information Technology  </h3>
<p class="title">(by Roger Carter (Author))</p>
<p class="bookp">Made Simple covers the full range of information technology topics</p>
<h3 class="bookH3">$50</h3>
<form action="Books.php" method="GET">
<div class="BooksdesHeder">
<p><button type="submit" name="s10" class="btnBook">buy now</button></p></div>
</form>
</div>
</div>
</div>



<div class="columnBook">
<div class="BookCard">
<img class="imegeBook" src="images/b11.png" alt="book" >
<div class="container33">
<h3 class="bookH3">Surgical Technology  </h3>
<p class="title">(by Joanna Kotcher Author)</p>
<p class="bookp">Prepare to deliver the best patient care</p>
<h3 class="bookH3">$35</h3>
<form action="Books.php" method="GET">
<div class="BooksdesHeder">
<p><button type="submit" name="s11" class="btnBook">buy now</button></p></div>
</form>
</div>
</div>
</div>



<div class="columnBook">
<div class="BookCard">
<img class="imegeBook" src="images/b12.png" alt="book" >
<div class="container33">
<h3 class="bookH3">Mechanical Technology </h3>
<p class="title">(by D H Bacon R. C. Stephens (Author))</p>
<p class="bookp">provides fundamental  of mechanical </p>
<h3 class="bookH3">$60</h3>
<form action="Books.php" method="GET">
<div class="BooksdesHeder">
<p><button type="submit" name="s12" class="btnBook">buy now</button></p></div>
</form>
</div>
</div>
</div>


</div>







<div id="rr"><!--Interval for a specific major -->
<section class="sectionBook">
 <h3 class="textSectionBook">Scientific Books</h3>
 <div class="sectionImage">
 <img src="https://clipartion.com/wp-content/uploads/2016/04/science-experiment-clipart-830x593.png" height="300" width="300" alt="book">
 </div>
</section>
</div>







<div class="row33"><!--each row has 4 books -->
<br/>
<div class="columnBook">
<div class="BookCard">
<img class="imegeBook" src="images/b13.png" alt="book" >
<div class="container33">
<h3 class="bookH3">Chemistry </h3>
<p class="title">(by Therald Moeller(Author))</p>
<p class="bookp">This book reviews the chemistry of inorganic substances as the science of matter</p>
<h3 class="bookH3">$80</h3>
<form action="Books.php" method="GET">
<div class="BooksdesHeder">
<p><button type="submit" name="s13" class="btnBook">buy now</button></p></div>
</form>
</div>
</div>
</div>




<div class="columnBook">
<div class="BookCard">
<img class="imegeBook" src="images/b14.png" alt="book" >
<div class="container33">
<h3 class="bookH3">Basic Electronics Math  </h3>
<p class="title">(by Clyde Herrick (Author))</p>
<p class="bookp">provides is a practical application of these basics to electronic theory and circuits.</p>
<h3 class="bookH3">$90</h3>
<form action="Books.php" method="GET">
<div class="BooksdesHeder">
<p><button type="submit" name="s14" class="btnBook">buy now</button></p></div>
</form>
</div>
</div>
</div>



<div class="columnBook">
<div class="BookCard">
<img class="imegeBook" src="images/b15.png" alt="book" >
<div class="container33">
<h3 class="bookH3">Thermal Physics  </h3>
<p class="title">(by Robert Floyd Sekerka(Author))</p>
<p class="bookp">Thermodynamics and Statistical Mechanics for Scientists and Engineers</p>
<h3 class="bookH3">$35</h3>
<form action="Books.php" method="GET">
<div class="BooksdesHeder">
<p><button type="submit" name="s15" class="btnBook">buy now</button></p></div>
</form>
</div>
</div>
</div>



<div class="columnBook">
<div class="BookCard">
<img class="imegeBook" src="images/b16.png" alt="book">
<div class="container33">
<h3 class="bookH3">Diffraction Physics </h3>
<p class="title">(by J.M. Cowley(Author))</p>
<p class="bookp">deals with electron diffraction and diffraction from disordered or imperfect crystals</p>
<h3 class="bookH3">$100</h3>
<form action="Books.php" method="GET">
<div class="BooksdesHeder">
<p><button type="submit" name="s16" class="btnBook">buy now</button></p></div>
</form>
</div>
</div>
</div>


</div>







<!--Interval for a specific major -->
<div id="mm">
<section class="sectionBook">
 <h3 class="textSectionBook">Social Sciences books </h3>
 <div class="sectionImage">
 <img src="http://clipground.com/images/science-world-clipart-3.png" height="300" width="300" alt="book">
 </div>
</section>
</div>






<div class="row33"> <!--each row has 4 books -->
<br/>
<div class="columnBook">
<div class="BookCard">
<img class="imegeBook" src="images/b17.png" alt="book">
<div class="container33">
<h3 class="bookH3">Active Learning Techniques for Librarians </h3>
<p class="title">(by Andrew Walsh and P.Inala(Author))</p>
<p class="bookp">A volume in Chandos Information Professional Series</p>
<h3 class="bookH3">$80</h3>
<form action="Books.php" method="GET">
<div class="BooksdesHeder">
<p><button type="submit" name="s17" class="btnBook">buy now</button></p></div>
</form>
</div>
</div>
</div>




<div class="columnBook">
<div class="BookCard">
<img class="imegeBook" src="images/b18.png" alt="book" >
<div class="container33">
<h3 class="bookH3">Accidental Information Discovery  </h3>
<p class="title">(by Tammera M. Race and Stephann Makri(Author))</p>
<p class="bookp">Cultivating Serendipity in the Digital Age.</p>
<h3 class="bookH3">$77</h3>
<form action="Books.php" method="GET">
<div class="BooksdesHeder">
<p><button type="submit" name="s18" class="btnBook">buy now</button></p></div>
</form>
</div>
</div>
</div>



<div class="columnBook">
<div class="BookCard">
<img class="imegeBook" src="images/b19.png" alt="book" >
<div class="container33">
<h3 class="bookH3">Attitudes,Conflict,and Social Change  </h3>
<p class="title">(by BERT T.KING and ELLIOTT McGINNIES(Author))</p>
<p class="bookp">Attitudes and Social Change:is based on symposium on attitudes</p>
<h3 class="bookH3">$35</h3>
<form action="Books.php" method="GET">
<div class="BooksdesHeder">
<p><button type="submit" name="s19" class="btnBook">buy now</button></p></div>
</form>
</div>
</div>
</div>



<div class="columnBook">
<div class="BookCard">
<img class="imegeBook" src="images/b20.png" alt="book"  >
<div class="container33">
<h3 class="bookH3">Being the Best You Can Be : Personal Development </h3>
<p class="title">(by Ian Hunt(Author))</p>
<p class="bookp">This management book is published in association with the Institute of Management and Leadership (ILM).</p>
<h3 class="bookH3">$100</h3>
<form action="Books.php" method="GET">
<div class="BooksdesHeder">
<p><button type="submit" name="s20" class="btnBook">buy now</button></p></div>
</form>
</div>
</div>
</div>


</div>


</section>

 


     <!--this is the footer of the page that contin all needed information-->
 <div class="footer">
    
 <a href="index.php">Home</a> | <a href="About.php">About</a> |<a href="Books.php">Books</a> |<a href="Log.php">Log In</a> |<a href="FeedBack.php">FeedBack</a><br />
        Copyright  2021 |Sky Books| Designed/Coded by Team 1 
</div> 

</body>
</html>
 