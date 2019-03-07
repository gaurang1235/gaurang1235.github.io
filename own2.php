<?php


session_start();

$name=$_SESSION['uname'];

if($name!='admin')
{
    header('Location:adminsignin.php');
}
else
{





$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

$name=$_POST["name"];
$price=$_POST["price"];

$sql = "USE MENU";

$conn->query($sql);

$sql = "INSERT INTO ITEMS (name,price) VALUES ('$name','$price')";


if ($conn->query($sql) === TRUE) {
    echo "<h1>Entery Recorded Successfully.<br><a href='own1.html'>Cick Here To go Back.</a></h1>";
}


$conn->close();



}
?> 