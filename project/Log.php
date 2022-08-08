<!DOCTYPE html>
<?php
require('DB_Bookstore.php');
?>
 <html lang="en">

  <head>
    <title>Log In</title>
    <meta name="description" content=" This is our book store if you are looking for any books just click the link and join us "/>
    <meta name="keyword" content="Store,Online, Book,Informations,Developers"/>
    <meta name="Book+" content="Online Book Store "/>
    <link rel="stylesheet" href="styles.css">
	
 <style>
  p {
  color: red;
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

	
        <div class="Login">
            <div class="Login-screen">
                <div class="app-titleLog">
                    <h1>Log In</h1>
                </div>
				
                 <!--ask the user for username and password then click submit button -->
                    <div class="Login-form">
                    <div class="control-groupLog">
					<form action="Log.php" method="post">
                    <input type="text" value="<?php if(isset($_COOKIE["login-email"])) { echo $_COOKIE["login-email"]; } ?>" placeholder="email" name="login-email" ><br/><br/>
                    
                    <div class="control-groupLog">
                    <input type="password"  value="<?php if(isset($_COOKIE["login-pass"])) { echo $_COOKIE["login-pass"]; } ?>" placeholder="Password" name="login-pass" >
                    </div>
					<div >
                     <label>
                     <input class="remember" type="checkbox" name="remember" > Remember me
                     </label></div><br/>
                    
					
                    <input type="submit" name="submit" class="btnSignUp btn-primary btn-large btn-block" value="Login" />
                    </form>
					
					<!--________________________________PHP__________________________________________-->
					
					<?php
                      ini_set ('display_errors', 1);
                      error_reporting (E_ALL & ~ E_NOTICE); 
  
                      if ( isset ($_POST['submit'])) {

	
	                    if ( (!empty ($_POST['login-email'])) && (!empty ($_POST['login-pass'])) ) {
							
							
							$ret_query = 'SELECT user_id, email, password FROM users';	
									if ($r = mysqli_query ($dbc, $ret_query)) {
										
								// Run the query.	
								// Retrieve and print every record.	
									
						while ($row = mysqli_fetch_array ($r)) {		
									
							if($row['email']== $_POST['login-email'] && $row['password']== $_POST['login-pass']){
			                   session_start();
			                   $_SESSION['username'] = $_POST['login-email'];
							   $_SESSION['user_id'] = $row['user_id'];
			                   $_SESSION['loggedin'] = time();
							   
							   if(!empty($_POST["remember"])) {
								setcookie ("login-email",$_POST["login-email"],time()+ 3600);
								setcookie ("login-pass",$_POST["login-pass"],time()+ 3600);
							    } else {
								setcookie("login-email","");
								setcookie("login-pass","");
								}
							   
							   
			                   header ('Location: index.php');
							   ob_end_flush();
			                   exit();									
									
							}
						} 

									print '<p>Oops, wrong email or password !</p>';									
									
									
								} else { // Query didn't run.	
									die ('<p>Could not retrieve the data because: <b>' . mysqli_error($dbc) . "</b>. The query was $ret_query.</p>");
									} 
			
	
	                   } else { 
	
	                    	print '<p>Please make sure you enter both a username and a password!</p>';
		
                       }
					   
				}

                    ?>
					
                    <span>Don't have one? <a href="SignUp.php" >Sign Up</a></span>
                   
                </div>
            </div>
        </div>
	</div>
	
		     <!--this is the footer of the page that contin all needed information-->
 <div class="footer">
    
 <a href="index.php">Home</a> | <a href="About.php">About</a> |<a href="Books.php">Books</a> |<a href="Log.php">Log In</a> |<a href="FeedBack.php">FeedBack</a><br />
        Copyright  2021 |Sky Books| Designed/Coded by Team 1 
</div> 

	
		
</body>
</html>