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

$sql = "USE MENU";

$conn->query($sql);


$sql = "SELECT id, name, price, reg_date FROM ITEMS";
$result = $conn->query($sql);

?>

<html>
<head>
    <style>
            body{
                margin:20px;
                padding:20px 20px 20px 20px;
                padding-bottom:25%;
                background:url(admin.jpg);
                height: 100%;
                background-repeat: no-repeat;
                background-size:cover;
                background-position: center;
                font-family: sans-serif;
            }
            

            .head h1{
                padding-left:130px;
            }
            

            
            .top a{
                background-color: rgb(230, 206, 175);
                overflow: hidden;
                width:100px;
                float:right;
                height:auto;
                color: red;
                text-align: center;
                padding: 14px 2.5%;
                text-decoration: none;
                font-size: 17px;
                font-weight:bolder;
                width: auto;
            }


            .top a:hover {
                background-color: #ddd;
                color: red;
            }
        </style>
    </head>
    <body>
    <div class='top'><a href='logout.php'>Log Out</a></div>
    <center>    
    <div class="head">
        
        <h1>COMPLETE Menu for Canteen.</H1>
        </div>
        <table>
            <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PRICE</th>
            <th>reg_date</th>
            </tr>

            <?php while($row = $result->fetch_assoc()):?>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['reg_date'];?></td>
            </tr>
            <?php endwhile;?>
        </table>

        <br>
        <br>
        <br>
        <br>
        <a href="own1.php">Go Back</a>
</CENTER>
</body>
</html>

<?php

}
?>

  
