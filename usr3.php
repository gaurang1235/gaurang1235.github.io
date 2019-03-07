<?php


$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password);

$sql = "USE MENU";

$conn->query($sql);


session_start();


$name=$_SESSION['uname'];

if(empty($name))
{
    header('Location:singinusr.php');
}
else
{


$sql = "SELECT name, Quantity, Price FROM " . $_SESSION['uname'];

if ($result = $conn->query($sql)) {

$_SESSION['PR']=0;


?>





<html>
    <head>
        <style>
            body{
                margin:20px;
                padding:20px 20px 20px 20px;
                padding-bottom:25%;
                background-color:rgb(230, 206, 175);
                height: 100%;
                background-repeat: no-repeat;
                background-size:cover;
                background-position: center;
                font-family: sans-serif;
            }
            
            .h {
                padding-left:120px;
            }

            select{
                background-color:rgb(230,206,175);
            }

            input{
                background-color:pink;
                border-radius:20px;
                color:red;
                font-size:16px;
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
        <CENTER>
        
        <div class="h"><h1>Your Order Details:</H1></div>
        <table style="border-style: dashed; border-radius: 12px; border-width: 1px">
            <tr>
            <th>NAME</th>
            <th>Quantity</th>
            <TH>Price</TH>
            </tr>

            <?php while($row = $result->fetch_assoc()):?>

            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['Quantity']; ?></td>
                <td><?php $_SESSION['PR']+=$row['Price']; echo $row['Price']; ?></td>
            </tr>
            <?php endwhile;?>
        </table>

        <h1>Total Order Cost:<?php echo "Rs" . $_SESSION['PR']; ?></h1>
</CENTER>
</body>
</html>
<?php

}
else
{
    echo "<html>
    <head>
    <style>
    body{
        margin:0px;
        padding:20px 20px 20px 20px;
        padding-bottom:25%;
        background:url(happy.jpg);
        height: 100%;
        background-repeat: no-repeat;
        background-size:cover;
        background-position: center;
        font-family: sans-serif;
    }
    
    .h {
        padding-left:120px;
    }

    select{
        background-color:rgb(230,206,175);
    }

    input{
        background-color:pink;
        border-radius:20px;
        color:red;
        font-size:16px;
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
</style></head><body><div class='top'><a href='logout.php'>Log Out</a></div><h1><center>Your Order Is Prepared Go and Pick It Up.<br>Make Payment By Cash at Counter.</center></h1>
</body></html>";
}

$page = $_SERVER['PHP_SELF'];
 $sec = "2";
 header("Refresh: $sec; url=$page");

} 
?>