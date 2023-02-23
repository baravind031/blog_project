<?php
$DB_SERVER = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = " ";
$DB_NAME = "blog";

$base_url = 'http://localhost/blog/';
/* Attempt to connect to MySQL database */
$link = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>