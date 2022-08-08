 <!DOCTYPE html>
 <?php
ob_start();
?>
<html>
<head>
<title>My Order details</title>
<meta name="description" content=" This is our book store if you are looking for any books just click the link and join us "/>
<meta name="keyword" content="Store,Online, Book,Informations,Developers"/>
 <meta name="Book+" content="Online Book Store "/>
<link rel="stylesheet" href="styles.css">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>

.Space{



margin-top:15%;


}








.NoOrder{
font-family:sans-serif;
font-size: 30px;
text-align:center;
color:#2c3e50;
margin:10%;

}



.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    width:70%;
    background: #DEE2E8;
	margin: 0 auto;
    padding: 0px;
    box-shadow: 0 0 1px 0 rgba(0,0,0,.25);
}
.table-title {
    min-width: 20%;
    background-color: #2c3e50;
    margin: 0px;
    padding: 15px 30px;
    color: #fff;
}
.table-title h2 {
    margin: 2px 0 0;
    font-size: 20px;
	color : #C5D0D6;
	
}

.table-file h4 {
    margin: 2px 0 0;
    font-size: 20px;
	color : #2c3e50;
	padding: 10px 30px;
	
}

table.table {
    min-width: 100%;
	
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
}
table.table tr th:first-child {
    width: 40px;

}
table.table tr th:last-child {
	
    width: 350px;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #C5D0D6;
}
table.table td a {
    color: #2196f3;
}
table.table td .btn.manage {
    padding: 2px 10px;
    background: #37BC9B;
    color: #fff;
    border-radius: 2px;
}
table.table td .btn.manage:hover {
    background: #2c3e50;		
}



/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
 
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 30px;
  top: -10px;
  color: #000;
 
  font-size: 30px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {

  .cancelbtn {
     width: 100%;
  }
}
button.button4{
background-color:#eff2f6;
display:inline-block;
padding:0.3em 1.2em;
margin:0 0.1em 0.1em 0;
border:0.16em solid rgb(115, 115, 115);
border-radius:4px;
box-sizing: border-box;
text-decoration:none;
font-family:'Roboto',sans-serif;
font-weight:300;
color:#000;
text-shadow: 0 0.04em 0.04em rgba(0,0,0,0.35);
text-align:center;
transition: all 0.2s;
}
button.button4:hover{
border-color: rgba(255,255,255,1);
}
@media all and (max-width:30em){
button.button4{
display:block;
margin:0.2em auto;
}
}


.btn{
  display: inline-block;
  text-decoration: none;
  background: #87befd;
  color: #FFF;
  width: 50px;
  height: 50px;

}

.btn:hover{
    background: #668ad8;
}

   .order_code_input {
      text-align: center;
      background-color: #ECF0F1;
      border: 2px solid ;
	  border-radius: 3px;
      font-size: 16px;
      font-weight: 200;
      padding: 10px 0;
      width: 60px;
	  height: 30px;
	  transition: border .5s;
    }

</style>


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

   <div class="Space">
   
  
   
   
   
   
   
   
   
<?php


// Address error handling.
ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

require('DB_Bookstore.php');
$current_user = $_SESSION['user_id'];
$orderID = $_POST['orderCode'];

$query = "SELECT * FROM myorders WHERE user_id=$current_user AND order_id=$orderID";

// Get a response from the database by sending the connection
// and the query
if ($response = mysqli_query($dbc,$query)){

} else {	print "<p>Could not ret the entry because: <b>" . mysqli_error($dbc) . "</b>. The query was $query.</p>";}



// If the query executed properly proceed
if($_POST['orderCode']!="" && is_numeric($_POST['orderCode'])){

$check = mysqli_num_rows($response);
if ($check > 0){
	
echo '
	<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6"><h2>My Order details</h2></div>
                 
                </div>
            </div>';


while($row = $response-> fetch_assoc()) { 

$file=$row['more_details'];
$info = file ('order_files/'.$file);
 
}

echo ' <tbody> <tr align="center">';

			foreach($info as $i){
				echo ' <div class="table-file">';
				echo '<td align="center"><h4>'.$i.'</h4></td>';
				echo '</div>';
			}            
echo ' </tr>';	

                 echo '
                </tbody>
            </table>
        </div> 
    </div>   
</div> 
</table>
</div> 
</div>   
</div> ';

ob_end_flush();

}else{

echo'<h1 class="NoOrder"> There is no order with this number !</h1>';}

} else{

echo'<h1 class="NoOrder"> Please enter a valid order code!</h1>';		
	

}

?>



</div>


 

 <div class="footer">
    
 <a href="index.php">Home</a> | <a href="About.php">About</a> |<a href="Books.php">Books</a> |<a href="Log.php">Log In</a> |<a href="FeedBack.php">FeedBack</a><br />
        Copyright  2021 |Sky Books| Designed/Coded by Team 1 
</div> 


</body>
</html>