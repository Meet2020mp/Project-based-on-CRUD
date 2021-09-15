<?php
$servername = "localhost";
// $username = "id17065267_root";
$username = "root";
// $password = "+n-(*u|Cb<}gS)5";
$password = "";
// $database = "id17065267_project";
$database = "project";

$dbconn = mysqli_connect($servername, $username, $password, $database);

if (!$dbconn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
?>