<?php // Script 12.3 - create_db.php (This script connects to the MySQL server. It also creates and selects the database.
// Address error handling.
ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);
// Attempt to connect to MySQL and print out messages.
if ($dbc = @mysqli_connect ('localhost', 'root', '7722')) 
{		
//print '<p>Successfully connected to MySQL.</p>';
/*
if (@mysqli_query ($dbc,'CREATE DATABASE bookstore')) {
print '<p>The database has been created.</p>';	
} 

else {		
die ('<p>Could not create the database because: <b>' . mysqli_error($dbc) . '</b></p>');	
}
*/	
if (@mysqli_select_db ($dbc,'bookstore')) {
//print '<p>The database has been selected.</p>';
} 
//else {		
//die ('<p>Could not select the database because: <b>' . mysqli_error($dbc) . '</b></p>');
//}		


}// else {	
//die ('<p>Could not connect to MySQL because: <b>' . mysqli_error($dbc) . '</b></p>');
//}


/*
$query = 'CREATE TABLE users ( 
user_id INT UNSIGNED NOT NULL AUTO_INCREMENT,	
username VARCHAR(100) NOT NULL,	
email VARCHAR(100) NOT NULL,
password VARCHAR(100) NOT NULL,
PRIMARY KEY(user_id, email))';
// Run the query.
if (@mysqli_query ($dbc, $query)) {	
print '<p>The table has been created.</p>';
mysqli_close($dbc); // Close the connection.

} 
else {	
die ('<p>Could not create the table because: <b>' . mysqli_error($dbc) . '</b>.</p><p>The query being run was: ' . $query . '</p>');
}



$query = 'CREATE TABLE books ( 
book_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,	
book_name VARCHAR(100) NOT NULL,	
price DOUBLE NOT NULL,
book_img VARCHAR(100) NOT NULL)';
// Run the query.
if (@mysqli_query ($dbc, $query)) {	
print '<p>The table has been created.</p>';
mysqli_close($dbc); // Close the connection.

} 
else {	
die ('<p>Could not create the table because: <b>' . mysqli_error($dbc) . '</b>.</p><p>The query being run was: ' . $query . '</p>');
}


$query_1 = "INSERT INTO books VALUES 
(0, 'Srb’s Manual of Surgery', '55','images/b4.png'),
(0, 'Current Surgical Therapy', '50','images/b3.png'),
(0, 'Medical Terminology', '75','images/b2.png'),
(0, 'The Anatomy Coloring', '60','images/b1.png'),
(0, 'Improving Your Leadership', '55','images/b5.png'),
(0, 'Traction', '50','images/b6.png'),
(0, 'Thinking,Fast ans Slow', '35','images/b7.png'),
(0, 'The Innovative Admin', '60','images/b8.png'),
(0,'Wire Technology','80','images/b9.png'),
(0,'Information Technology','50','images/b10.png'),
(0,'Surgical Technology','35','images/b11.png'),
(0,'Mechanical Technology','60','images/b12.png'),
(0, 'Chemistry', '80','images/b13.png'),
(0, 'Basic Electronics Math', '90','images/b14.png'),
(0, 'Thermal Physics', '35','images/b15.png'),
(0, 'Diffraction Physics', '100','images/b16.png'),
(0, 'Active learning techniques for librarians ', '80','images/b17.png'),
(0, 'Accidental Information discovery ', '77','images/b18.png'),
(0, 'Attitudes , Conflict and social change', '36','images/b19.png'),
(0, 'Being the best you can be: personal development ', '100','images/b20.png')";		
@mysqli_query ($dbc, $query_1);





$query = 'CREATE TABLE cart ( 
check_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
book_id INT UNSIGNED NOT NULL,	
user_id INT UNSIGNED NOT NULL,
qyn INT UNSIGNED NOT NULL)';
// Run the query.
if (@mysqli_query ($dbc, $query)) {	
print '<p>The table has been created.</p>';
mysqli_close($dbc); // Close the connection.

} 
else {	
die ('<p>Could not create the table because: <b>' . mysqli_error($dbc) . '</b>.</p><p>The query being run was: ' . $query . '</p>');
}


$query = 'CREATE TABLE myorders ( 
order_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
user_id INT UNSIGNED NOT NULL,
total_price DOUBLE UNSIGNED NOT NULL,	
order_date DATE NOT NULL,
more_details varchar(512) NOT NULL)';
// Run the query.
if (@mysqli_query ($dbc, $query)) {	
print '<p>The table has been created.</p>';
mysqli_close($dbc); // Close the connection.

} 
else {	
die ('<p>Could not create the table because: <b>' . mysqli_error($dbc) . '</b>.</p><p>The query being run was: ' . $query . '</p>');
}
*/

?>