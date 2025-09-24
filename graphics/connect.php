<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "login";

//create a connection
$conn = new mysqli($server,$username, $password, $dbname);
if ($conn->connect_error) { 
    echo "connection failed";
}
?>