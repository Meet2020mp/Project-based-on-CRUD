<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "project";

$dbconn = mysqli_connect($servername, $username, $password, $database);

if (!$dbconn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
?>