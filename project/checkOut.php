 <!DOCTYPE html>
 <?php
ob_start();
?>
<html lang="en">
<head>

<style>
  
  p {
  color: red;
  text-align:center;
  font-weight:bold;
}

.h1_title{
	 margin-top:170px;
	 margin-left: 70px;
	 font-size: 50px;
	 color : #2c3e50 ;
}

.checkOut_table {
  width: 100%;
  border-collapse: collapse;
 margin-left: 20px;
  margin-right: 20px;
   margin-top: 20px;
   text-align: left;

}

   td {
  font-size: 18px;
  padding: 10px;
   }
   
   th {
	   color :  #2c3e50;
  font-size: 18px;
  padding: 10px;
   }
   
   .QTY_input {
      text-align: center;
      background-color: #ECF0F1;
      border: 2px solid transparent
	  border-radius: 3px;
      font-size: 16px;
      font-weight: 200;
      padding: 10px 0;
      width: 60px;
	  height: 30px;
	  transition: border .5s;
    }
	
	.card_input{
      text-align: center;
      background-color: #ECF0F1;
      border: 2px solid transparent
	  border-radius: 3px;
      font-size: 16px;
      font-weight: 200;
      padding: 5px 0;
      width: 240px;
	  transition: border .5s;
	}
			
.rectangle_cart {
  background-color : #ffffff;
  width: 800px;
  margin-left: 60px;
  margin-top: -450px;
  padding: 30px;
  box-shadow: 2px 5px 10px #888888;
  position : scroll;
}

.rectangle_summary {
  background-color : #ffffff;
  width: 800px;
  margin-left: 60px;
  margin-top: 10px;
  padding: 30px;
  box-shadow: 2px 5px 10px #888888;
  position : scroll;
}

.two_rectangle{	
  margin-left: 200px;
  margin-top: 490px;
}

.h3 {
	text-align: center;

}

</style>

<title>Shopping Cart</title>
<meta name="description" content=" This is our book store if you are looking for any books just click the link and join us "/>
<meta name="keyword" content="Store,Online, Book,Informations,Developers"/>
 <meta name="Book+" content="Online Book Store "/>
    <link rel="stylesheet" href="styles.css">
</head>

 


<body>
<!--this is the carve of header-->
<div class="container">
    <div class="wave"></div>
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
<h3 class="des">Sky BOOKS</h3><!--here put description about our website-->

 

<pre class="des1">
      <strong>"Books let you travel without moving your feet."</strong><!--here put description about our website-->
   We have established this electronic library in order with these 
      circumstances of this year also to win your satisfaction.</pre><!--here put description about our website-->

 

<!--this is theimage header and search filed -->
<div class="hederImage1"><img src="images/hed14.png" height="300" width="300" alt="hederIcon"/></div><!--here put images-->
</div>

<h1 class="h1_title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Shopping Cart</h1>
<div class="two_rectangle">
<div class="rectangle_cart">

<hr>
<table class="checkOut_table">

<tr>
<th>BOOK</th>
<th>TITILE</th>
<th>QUANTITY</th>
<th>TOTAL PRICE</th>
</tr>

<tr>
<td><hr></td>
<td><hr></td>
<td><hr></td>
<td><hr></td>
</tr>


<?php

require('DB_Bookstore.php');
$current_user = $_SESSION['user_id'];

$order_total=0;
$all_books;

$ret_query = "SELECT * FROM cart WHERE user_id=$current_user";	
if ($r = mysqli_query ($dbc, $ret_query)){
	if(mysqli_num_rows($r)== 0){
print "<tr>
<td><h1>No items in the cart!</h1></td>
</tr>";
} else {
	while ($row = mysqli_fetch_array ($r)) {
		$bookID = $row['book_id'];
			$ret_query2 = "SELECT * FROM books WHERE book_id=$bookID ";
					$r2 = @mysqli_query ($dbc, $ret_query2);
					while ($row2 = mysqli_fetch_array ($r2)){
						$total_price_currentBook = 0;
						$total_price_currentBook = $row2['price']*$row['qyn'];
							$img=$row2['book_img']; 
						print "<tr>
							<td><img src=$img width=\"100\"/></td>
							<td><h5>{$row2['book_name']}</h5></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input readonly type=\"text\" name=\"QTY\" class=\"QTY_input\" value=\"{$row['qyn']}\"></td>
							<td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$total_price_currentBook$</h4></td>
							</tr>";
						$order_total+=$total_price_currentBook;
						$all_books.= "\nBook Name : {$row2['book_name']} - Quantity : {$row['qyn']} - Total Price : $total_price_currentBook$.";
					}
					
			}
		

}
	
	
	
}
	

?>

</table>

</div>
<form action="checkOut.php" method="POST">
<div class="rectangle_summary">
<hr>
<h2 >Summary</h2>
<hr>
<h3 class="h3">Order total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
print "<label >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$order_total$</label></h3>";
?>
<h4 class="h3">Shipping cost&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;30$</label></h4>
<hr>
<h2>Payment method</h2>
<hr>
<table style="text-align:right;">
  <tr>
    <td>Credite card Number :</td>
    <td><input type="text" name="card_num" class="card_input" placeholder="111-222-333-444">
</td>
    <td>Expiration Date :</td>
    <td><input type="text" name="exp_date" class="QTY_input" placeholder="07/24">
</td>
  </tr>
  
  <tr>
    <td>Name on card :</td>
    <td><input type="text" name="card_name" class="card_input" placeholder="NAME">
</td>
    <td>CVV :</td>
    <td><input type="text" name="CVV" class="QTY_input" placeholder="999">
</td>
  </tr>

</table>

	        			<!--________________________________PHP__________________________________________-->
<?php


                      ini_set ('display_errors', 1);
                      error_reporting (E_ALL & ~ E_NOTICE); 
  
                      if ( isset ($_POST['submit'])) {

						if(mysqli_num_rows($r)!= 0){
						
	                    if ( (!empty ($_POST['card_num'])) && (!empty ($_POST['card_name'])) && (!empty ($_POST['exp_date']))&& (!empty ($_POST['CVV']))) {
							if(is_numeric($_POST['card_num']) && strlen($_POST['card_num'])==12){
								if(is_numeric($_POST['CVV']) && strlen($_POST['CVV'])==3){
								
								session_start();
											
								$file_name = time().rand(0,100).".txt";
								$fp = fopen('order_files/'.$file_name,'w');
								fwrite($fp,$all_books);
								fclose($fp);
			
								$query_del = "DELETE FROM cart WHERE user_id=$current_user";
								@mysqli_query ($dbc, $query_del);
									
			
								$query = "INSERT INTO myorders VALUES (0,$current_user ,$order_total, NOW(), '$file_name')";		
								@mysqli_query ($dbc, $query);
								
								
			                  header ('Location: Order.php');
							  ob_end_flush();
			                  exit();
								
								} else {print '<p>Please enter valid CVV number!</p>';}
							} else { print '<p>Please enter valid card number!</p>';}	
						
						} else { print '<p>Please make sure you enter All card information!</p>';}						
					  } else {print '<p>Add at least one item to the cart first!</p>';}
					  }
	
?>

</br>
<hr>
</br>
<input type="submit" name="submit" class="btnCheck btn-primary btn-large btn-block" value="Finish the Order" />
<label for=""></br></label><!--error msg-->
</form>
</div>
</div>
		     <!--this is the footer of the page that contin all needed information-->
 <div class="footer">
    
 <a href="index.php">Home</a> | <a href="About.php">About</a> |<a href="Books.php">Books</a> |<a href="Log.php">Log In</a> |<a href="FeedBack.php">FeedBack</a><br />
        Copyright  2021 |Sky Books| Designed/Coded by Team 1 
</div> 

</body>
</html>