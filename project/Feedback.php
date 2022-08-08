<!DOCTYPE html>
<?php
ob_start(); // to go to the index.php page without an error
?>

   <html lang="en">
   <head>
     <title>FeedBack</title>
     <meta name="description" content=" This is our book store if you are looking for any books just click the link and join us "/>
     <meta name="keyword" content="Store,Online, Book,Informations,Developers"/>
     <meta name="Book+" content="Online Book Store "/>
     <link rel="stylesheet" href="styles.css">

   </head>
     <style>
  p {
  color: red;
}
  </style>
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
<!--_______________________________________Feedback Form______________________________________-->

    <div class="FeedbackCommunication"><!--section or a division FeedbackCommunication-->
	<div class="FeedbackCommunicationBox"><!--section or a division FeedbackCommunicationBox-->
      <h2>Feedback Form</h2><!--heder-->
      <hr/><!--Line-->
      <form action="Feedback.php" method="post" ><!--if users click on the send button then display the FeedBackMessage page -->
	   <div id="error" style="display:none;"> </div>
	   <div class="FBCS"><!--section or a division FBCS-->
        <table><!--start table-->
          <tr><!--new row-->
            <td><label for="name">Name </label></td><!--new column,the column contains the label name-->
            <td><input type="text" id="name" name="name" placeholder="Enter name.." onfocus="this.style.backgroundColor = '#ECF0F1'; this.style.color = '#2c3e50'; "
                              onblur="change_back(this)"></td><!--new column,the column contains the input text -->
          </tr><!--End row-->
		  
          <tr><!--new row-->
            <td><label for="Email">Email</label></td><!--new column,the column contains the label Email-->
            <td><input type="text" id="Email" name="Email" placeholder="Enter Email.." onfocus="this.style.backgroundColor = '#ECF0F1'; this.style.color = '#2c3e50'; "
                              onblur="change_back(this)"></td><!--new column,the column contains the input text -->
          </tr><!--End row-->
		  
          <tr><!--new row-->
            <td><label for="subject">Subject</label></td><!--new column,the column contains the label Subject-->
            <td><input type="text" id="subject" name="subject" placeholder="Enter subject.." onfocus="this.style.backgroundColor = '#ECF0F1'; this.style.color = '#2c3e50'; "
                              onblur="change_back(this)"></td><!--new column,the column contains the input text -->
          </tr><!--End row-->
		  
          <tr><!--new row-->
            <td><label for="topics">Topics</label></td><!--new column,the column contains the label Topics-->
            <td><select id="topics" name="topics" onfocus="this.style.backgroundColor = '#ECF0F1'; this.style.color = '#2c3e50'; "
                              onblur="change_back(this)"><!--element define the available options in the drop-down list-->
	            <option value="0" class="OptionSelectTopic" >Select Topic..</option>
                <option value="1">Suggestion</option><!--option in a select list-->
                <option value="2">Complaint</option><!--option in a select list-->
                <option value="3">Idea</option><!--option in a select list-->
                <option value="4">Help</option><!--option in a select list-->
			    <option value="5">Other</option><!--option in a select list-->
            </select></td><!--End select-->
          </tr><!--End row-->
		  
          <tr><!--new row-->
            <td ><br><label for="message">Message</label><br><br></td><!--new column,the column contains the label Message-->
            <td ><textarea name="message" id="message" rows="7" cols="72" placeholder="Enter the message .." onfocus="this.style.backgroundColor = '#ECF0F1'; this.style.color = '#2c3e50'; "
                              onblur="change_back(this)"></textarea></td><!--new column,the column contains the textarea -->
          </tr><!--End row-->
		  

		  
          <tr class="FBCSSubmit"><!--new row-->
            <td colspan="2"><input type="submit" name="submit" value="Send" ></td><!--if users click on the send button then display the FeedBackMessage page -->

		  </tr><!--End row-->
        </table><!--End table-->
       </div><!--End section or a division FBCS-->
	        		  															<!--________________________________PHP__________________________________________-->
					
<?php


                      ini_set ('display_errors', 1);
                      error_reporting (E_ALL & ~ E_NOTICE); 
  
                      if ( isset ($_POST['submit'])) {

	
	                    if ( (!empty ($_POST['name'])) && (!empty ($_POST['Email'])) && (!empty ($_POST['message']))) {
	
	
							
							if (!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {
									print "Invalid email format!";
								} else { 
								
								
			                   session_start();
			                   $_SESSION['username'] = $_POST['login-name'];
			                   $_SESSION['loggedin'] = time();
			
			
			                   header ('Location: index.php');
							   ob_end_flush();// to go to the index.php page without an error
			                   exit();
		

							
							}
	                   } else { 
	
	                    	print '<p>Please make sure you entered Name, email and message!</p>';
		
                       }
					   }

?>
	  </form><!--End form-->
     </div><!--End section or a division FeedbackCommunicationBox-->
	</div><!--End section or a division FeedbackCommunication-->
	
		 
	     <!--this is the footer of the page that contin all needed information-->
 <div class="footer">
    
 <a href="index.php">Home</a> | <a href="About.php">About</a> |<a href="Books.php">Books</a> |<a href="Log.php">Log In</a> |<a href="FeedBack.php">FeedBack</a><br />
        Copyright  2021 |Sky Books| Designed/Coded by Team 1 
</div> 

   </body>
 </html>
