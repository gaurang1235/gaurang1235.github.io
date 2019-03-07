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

$sql = "USE VISITOR";

$conn->query($sql);


$sql = "SELECT id, firstname, lastname, mob_no, email, reg_date FROM REGISTER";
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
        
        <h1>COMPLETE LIST OF CUSTOMERS.</H1>
        </div>
        <table>
            <tr>
            <th>ID</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <TH>MOBILE NUMBER</TH>
            <TH>EMAIL</TH>
            <th>reg_date</th>
            </tr>

            <?php while($row = $result->fetch_assoc()):?>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['mob_no']; ?></td>
                <td><?php echo $row['email']; ?></td>
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