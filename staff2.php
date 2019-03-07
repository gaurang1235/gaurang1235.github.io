<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password);

$sql = "USE MENU";

$conn->query($sql);





$sql = 'DROP TABLE '.$_SESSION['tname'];
$conn->query($sql);

echo "Order Completed Successfully";

header('Location:staff1.php');

?>