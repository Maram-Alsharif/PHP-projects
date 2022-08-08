<!DOCTYPE html>
   <html lang="en">
   <head>
     <title>About</title>
     <meta name="description" content=" if you are looking for any books just click the link and join us ">
     <link rel="stylesheet" href="styles.css">
	 <style>/*-------------------------------------About Style------------------------------------------*/

  .AboutColumn {
    float: left;/*can be used to wrap text around Column*/
    width: 30%;/*width elements(column)*/
	margin-left: 35px;
    margin-bottom: 70px;/*space(Bottom)between card and outside of any defined borders (footer)*/
	padding: 0 8px;/*space between elements and card*/
  }

  .AboutCard {
    background-color:#fff;/*set background-color*/
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);/*applies shadow to FeedbackCommunicationBox*/
    margin: 8px;/*space between card and outside of any defined borders*/
    padding: 10px;/*space between card and elements into card*/
  }

  .AboutOurTeam{
    padding: 70px;/*space between text and heder text*/
	text-align: center;/*set text to the center */
    color:#2c3e50;/*set text color */
  }
  
  .About p,h2{
    text-align: center;/*set text to the center */
    color:#2c3e50;/*set text color */
	
  }
  .About h1{
    margin-left:0px;
	margin-top:100px;
	
  }
  .About img{
    display: block;/*displays an element as a block element (like <p>). It starts on a new line, and takes up the whole width*/
    margin-left: auto;/*space(left)between img and outside of any defined borders(card)*/
    margin-right: auto;/*space(right)between img and outside of any defined borders(card)*/
    width:70%/*width elements(img)*/
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

<!--_______________________________________About______________________________________-->
    <div class="About"><!--section or a division About-->
    <div class="AboutOurTeam"><!--section or a division AboutOurTeam-->
      <h1>Our Team</h1><!-- text (heder) display in page -->
    </div><!--End section or a division AboutOurTeam-->
      <div class="AboutColumn"><!--section or a division AboutColumn-->
        <div class="AboutCard"><!--section or a division AboutCard-->
          <img src="https://icons-for-free.com/iconfiles/png/512/lady+user+woman+icon-1320166736788209986.png" alt="Atheer"><!--img icon-->
            <h2>Atheer Almazrui</h2><!-- text (heder) display into card -->
            <p>Student</p><!-- text (pargraph) display into card -->
            <p>Computer Science Department</p><!-- text (pargraph) display into card -->
            <p>s438000341@st.uqu.edu.sa</p><!-- text (pargraph) display into card -->
            
        </div><!--End section or a division AboutCard-->
      </div> <!--End section or a division AboutColumn-->


      <div class="AboutColumn"><!--section or a division AboutColumn-->
        <div class="AboutCard"><!--section or a division AboutCard-->
          <img src="https://icons-for-free.com/iconfiles/png/512/lady+user+woman+icon-1320166736788209986.png" alt="Roba"><!--img icon-->   
            <h2>Roba Alamoudi</h2><!-- text (heder) display into card -->
            <p>Student</p><!-- text (pargraph) display into card -->
            <p>Computer Science Department</p><!-- text (pargraph) display into card -->
            <p>s438004989@st.uqu.edu.sa</p><!-- text (pargraph) display into card -->
            
        </div><!--End section or a division AboutCard-->
      </div> <!--End section or a division AboutColumn-->

      <div class="AboutColumn"><!--section or a division AboutColumn-->
        <div class="AboutCard"><!--section or a division AboutCard-->
          <img src="https://icons-for-free.com/iconfiles/png/512/lady+user+woman+icon-1320166736788209986.png" alt="Lujain"><!--img icon-->
            <h2>Lujain Alharbi</h2><!-- text (heder) display into card -->
            <p>Student</p><!-- text (pargraph) display into card -->
            <p>Computer Science Department</p><!-- text (pargraph) display into card -->
            <p>s438005466@st.uqu.edu.sa</p><!-- text (pargraph) display into card -->
            
        </div><!--End section or a division AboutCard-->
      </div> <!--End section or a division AboutColumn-->  
	  
       <div class="AboutColumn"><!--section or a division AboutColumn-->
        <div class="AboutCard"><!--section or a division AboutCard-->
          <img src="https://icons-for-free.com/iconfiles/png/512/lady+user+woman+icon-1320166736788209986.png" alt="Raghad"><!--img icon-->   
            <h2>Raghad Almofarrji</h2><!-- text (heder) display into card -->
            <p>Student</p><!-- text (pargraph) display into card -->
            <p>Computer Science Department</p><!-- text (pargraph) display into card -->
            <p>s438002209@st.uqu.edu.sa</p><!-- text (pargraph) display into card -->
            
        </div><!--End section or a division AboutCard-->
      </div> <!--End section or a division AboutColumn-->

      <div class="AboutColumn"><!--section or a division AboutColumn-->
        <div class="AboutCard"><!--section or a division AboutCard-->
          <img src="https://icons-for-free.com/iconfiles/png/512/lady+user+woman+icon-1320166736788209986.png" alt="Rawan"><!--img icon-->
            <h2>Rawan Alrhiliy</h2><!-- text (heder) display into card -->
            <p>Student</p><!-- text (pargraph) display into card -->
            <p>Computer Science Department</p><!-- text (pargraph) display into card -->
            <p>s438008435@st.uqu.edu.sa</p><!-- text (pargraph) display into card -->
            
        </div><!--End section or a division AboutCard-->
      </div> <!--End section or a division AboutColumn-->  
	  
      <div class="AboutColumn"><!--section or a division AboutColumn-->
        <div class="AboutCard"><!--section or a division AboutCard-->
          <img src="https://icons-for-free.com/iconfiles/png/512/lady+user+woman+icon-1320166736788209986.png" alt="Maram"><!--img icon-->
            <h2>Maram Alshreef</h2><!-- text (heder) display into card -->
            <p>Student</p><!-- text (pargraph) display into card -->
            <p>Computer Science Department</p><!-- text (pargraph) display into card -->
            <p>s438007746@st.uqu.edu.sa</p><!-- text (pargraph) display into card -->
            
		    
        </div><!--End section or a division AboutCard-->
      </div> <!--End section or a division AboutColumn-->
	  
     </div> <!--End section or a division AboutOurTeam-->
	
    
	     <!--this is the footer of the page that contin all needed information-->
 <div class="footer">
    
 <a href="index.php">Home</a> | <a href="About.php">About</a> |<a href="Books.php">Books</a> |<a href="Log.php">Log In</a> |<a href="FeedBack.php">FeedBack</a><br />
        Copyright  2021 |Sky Books| Designed/Coded by Team 1 
</div> 
		
   </body>
 </html>