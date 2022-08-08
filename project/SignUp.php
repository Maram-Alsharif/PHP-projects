<!DOCTYPE html>
<?php
ob_start();
require('DB_Bookstore.php');
?>
 <html lang="en">
  
  <head>
    <title>Sign Up</title>
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


       <!--Sign Up form-->
	   
        <div class="SignUp">
            <div class="SignUp-screen">
                <div class="app-titleSign">
                    <h1>Sign Up</h1>
                </div>
                 <!--let user enter the user name and email and password than click to submit button-->
                <div class="SignUp-form">
                  <form action="SignUp.php" method="post" >
                    <div class="control-groupSign">
                    <input type="text" value="" placeholder="Username" name="SignUp-name" onfocus="this.style.backgroundColor = '#ECF0F1'; this.style.color = '#2c3e50'; "
                              onblur="change_back(this)">
                    </div>

                    <div class="control-groupSign">
                    <input type="text" placeholder="Email" name="SignUp-email" onfocus="this.style.backgroundColor = '#ECF0F1'; this.style.color = '#2c3e50'; "
                              onblur="change_back(this)">
                    </div>

                    <div class="control-groupSign">
                    <input type="password" value="" placeholder="Password" name="SignUp-pass" onfocus="this.style.backgroundColor = '#ECF0F1'; this.style.color = '#2c3e50'; "
                              onblur="change_back(this)">
                    </div>

                    <div class="control-groupSign">
                    <input type="password" value="" placeholder="Re-password" name="SignUp-pass2" onfocus="this.style.backgroundColor = '#ECF0F1'; this.style.color = '#2c3e50'; "
                              onblur="change_back(this)">
                    </div>
					

                    <div id="error" style="display:none;"> </div>
                    <input type="submit" name="submit" class="btnSignUp btn-primary btn-large btn-block" value="Sing Up" />
                    </form>
					
															<!--________________________________PHP__________________________________________-->
					
<?php
                      ini_set ('display_errors', 1);
                      error_reporting (E_ALL & ~ E_NOTICE); 
  
                      if ( isset ($_POST['submit'])) {

	
	                    if ( (!empty ($_POST['SignUp-name'])) && (!empty ($_POST['SignUp-email'])) && (!empty ($_POST['SignUp-pass']))&& (!empty ($_POST['SignUp-pass2']))) {
	
	
							
							if (!filter_var($_POST["SignUp-email"], FILTER_VALIDATE_EMAIL)) {
									print "<p>Invalid email format!</p>";
								} else { 
								
								
								if ( $_POST['SignUp-pass'] != $_POST['SignUp-pass2'] ){
									print '<p>Please make sure you enter matched password!</p>';
									
								} else {
	
									
									
									$ret_query = 'SELECT email FROM users';	
									if ($r = mysqli_query ($dbc, $ret_query)) {
										
								// Run the query.	
								// Retrieve and print every record.	
									$check=1;
									while ($row = mysqli_fetch_array ($r)) {		
									
									if($row['email']== $_POST['SignUp-email']){
									print '<p>This email already registered, try to Log in!</p>';
									$check=0;
									break;}
									} 
									
									
									
								} else { // Query didn't run.	
									die ('<p>Could not retrieve the data because: <b>' . mysqli_error($dbc) . "</b>. The query was $ret_query.</p>");
									} 
									
			
								if($check==1){
									
								$query_1 = "INSERT INTO users VALUES (0, '{$_POST['SignUp-name']}', '{$_POST['SignUp-email']}','{$_POST['SignUp-pass']}')";		
									@mysqli_query ($dbc, $query_1);
									
								$query_2 = "SELECT user_id FROM users WHERE email='{$_POST['SignUp-email']}'";		
									$r = @mysqli_query ($dbc, $query_2);
									while ($row = mysqli_fetch_array ($r)) {		
											$userID= $row['user_id'];
									}


			                   session_start();
			                   $_SESSION['username'] = $_POST['SignUp-name'];
							   $_SESSION['user_id'] = $userID;
			                   $_SESSION['loggedin'] = time();
			
			                   header ('Location: index.php');
							   ob_end_flush();
			                   exit();
								}
		                
							}
							}
	                   } else { 
	
	                    	print '<p>Please make sure you enter both a username, email and password!</p>';
                       }
					   }
                    ?>   
				<span>Already have account? <a href="Log.php" >Login</a></span>

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