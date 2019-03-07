<?php


$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password);

$sql = "USE MENU";

$conn->query($sql);


session_start();



$sql = 'CREATE TABLE '.$_SESSION['uname'].' (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30) NOT NULL,Quantity INT(1),Price INT(5))';
$conn->query($sql);

$sql = "SELECT id,name,price FROM ITEMS";
$result = $conn->query($sql);


while($row = $result->fetch_assoc())
{

$i=$_POST["Qty$row[id]"];

if($i!=0)
{

$p=($row['price']*$i);



$sql = "INSERT INTO ".$_SESSION['uname']."  (name,Quantity,Price) VALUES ('$row[name]','$i','$p')";

$conn->query($sql);


}
}
if($_SESSION['PR']==0)
$_SESSION['PR']=$p;

if($_SESSION['PR']!=0)
{


header('Location:usr3.php');
}
else{
    header('Location:usr1.php');
}
?>