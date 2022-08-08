<?php

ini_set ('display_errors', 1);
error_reporting (E_ALL & ~ E_NOTICE);


// Need the session.
session_start();
// Delete the session variable.
unset($_SESSION);

// Destroy the session data.
session_destroy();
//print '<h1>you have been looged out ,your session has expired </h1>';

header ('Location: index.php');
exit();
				  
?>