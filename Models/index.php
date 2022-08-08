<?php
	session_unset();// هنا سوينا اوبجيكت من كلاس الكنترولر واستدعينا الميثود عشان يحدد نوع العملية 
	require_once  'StudentController.php';		
    $controller = new Controller();	
    $controller->mvcHandler();
?>