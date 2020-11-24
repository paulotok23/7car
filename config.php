<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'sitesp28_7caradm');
define('DB_PASSWORD', 'tokinha23');
define('DB_NAME', 'sitesp28_7car');
 
// Attempt to connect to MySQL database 
$link = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>