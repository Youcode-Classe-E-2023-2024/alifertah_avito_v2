<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "avito2";

$con = new mysqli($servername, $username, $password, $db);

if($con->connect_error){
    die("Connection failed!" . $conn->connect_error);
}
?>