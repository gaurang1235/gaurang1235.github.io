<?php

session_start();

$name=$_SESSION['uname'];

if(empty($name))
{
    header('Location:singinusr.php');
}
else
{

$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password);

$sql = "USE MENU";

$conn->query($sql);


$sql = "SELECT id,name,price FROM ITEMS";
$result = $conn->query($sql);

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
            

            h1{
                padding-left:90px;
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
        <h1>
            Welcome <?php echo $_SESSION['uname'];
                    ?><br>Order Your Stuff From Our Menu:</H1>
        <table style="border-style: dashed; border-radius: 12px; border-width: 1px">
            <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PRICE</th>
            <TH>Quantity</TH>
            </tr>

            <?php while($row = $result->fetch_assoc()):?>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><form action="usr2.php" method="POST">
                <select name="Qty<?php echo $row['id']; ?>">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select></td>
            </tr>
            <?php endwhile;?>
        </table>
        <br>
        <br>
        <input type="submit" value="Submit Order">
        </form>
</CENTER>
</body>
</html>
<?php
}
?>