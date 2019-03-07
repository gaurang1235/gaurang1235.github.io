<?php

session_start();

$name=$_SESSION['uname'];

if($name!='staff')
{
    header('Location:stafflogin.php');
}
else
{

$servername = "localhost";
$username = "root";
$password = "";





$conn = new mysqli($servername, $username, $password);





$sql = "USE MENU";

$conn->query($sql);


$sql = "SHOW TABLES";
$result = $conn->query($sql);
$i=1;
while($i!=0 && $row = $result->fetch_assoc())
{
    
    
    
    
    if($row['Tables_in_menu']!='items')
    {
        $_SESSION['tname']=$row['Tables_in_menu'];
        $i=0;

        $sql = "SELECT name, Quantity, Price FROM " . $row['Tables_in_menu'];
        $resulta = $conn->query($sql);
        

        ?>

        <html>
        <head>
         <style>
            body{
                margin:20px;
                padding:20px 20px 20px 20px;
                padding-bottom:25%;
                background:url(staff.jpg);
                height: 100%;
                background-repeat: no-repeat;
                background-size:cover;
                background-position: center;
                font-family: sans-serif;
            }
            

            
        </style>
    </head>
    <body>
        <CENTER>
        <h1>Order Details:</H1>
        <?php echo $row['Tables_in_menu']; ?>
        <table>
            <tr>
            <th>NAME</th>
            <th>Quantity</th>
            </tr>

            <?php while($row = $resulta->fetch_assoc()):?>

            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['Quantity']; ?></td>
            </tr>
            
            <?php endwhile;?>
        </table><br>
        <a href="staff2.php">Order Complete</a>
</CENTER>
</body>
</html>
    <?php

    }
    
    }

if($i!=0)
{
echo "<html>
<head>
    <style>
            body{
                margin:20px;
                padding:20px 20px 20px 20px;
                padding-bottom:25%;
                background:url(staff.jpg);
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
<body><div class='top'><a href='logout.php'>Log Out</a></div>
<center>    
<div class='head'>

    <h1><center>No More Orders</center></h1></div></body></html>";
}

$page = $_SERVER['PHP_SELF'];
 $sec = "2";
 header("Refresh: $sec; url=$page");

}
?>