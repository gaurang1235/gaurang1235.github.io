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

$sql = "USE MENU";

$conn->query($sql);

$sql = "DELETE FROM items WHERE id=" . $name;


if ($conn->query($sql) === TRUE) {
    echo "<h1>Entery Deleted Successfully.<br><a href='own1.php'>Cick Here To go Back.</a></h1>";
}
else{
    echo "<h1>Order Id Not Present</h1>";
}

$conn->close();



}
?> 