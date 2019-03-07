<html>

<head>
    <style>
        body{
                background:url(login.jpg);
                height: 100%;
                background-repeat: no-repeat;
                padding:0%;
                margin: 0%;
                background-size:cover;
                background-position: center;
                font-family: sans-serif;
            }
            .login{
                width: 320px;
                height: 420px;
                background: white;
                top:50%;
                left:50%;
                position: absolute;
                transform: translate(-50%,-50%);
                padding: 20px;
                box-sizing: border-box;
            
            }

            h1{
                text-align: center;
                font-size: 22px;
                padding: 0 0 20px;
            }
            p{
                font-weight: bold;
                margin: 0%;
            }

            input{
                width:100%;
                margin-bottom: 20px;
            }

            input[type="text"], input[type="password"]
            {
                height: 60px;
                border: none;
                border-bottom: 1px solid black;
                background: transparent;
                font-size: 16px;
                color: black;
                outline: none;
            }
            
            input[type="submit"]
            {
                border: none;
                outline: none;
                height: 40px;
                background: red;
                color:black;
                font-size: 18px;
                border-radius: 20px;
            }

            a{
                text-decoration: none;
                font-size: 12px;
                line-height: 10px;
                color: black;
            }

        </style>
</head>

<body>
    <div class="login">
        <h1>
            LOG IN
        </h1>
        <form action="logvis.php" method="POST">
            <p>UserName:</p><input type="text" name="uname" required="required" placeholder="Enter Username">
            <p>Password:</p><input type="password" name="pswrd" required="required" placeholder="Enter Password">
            <input type="submit" value="Sign in">
        </form>

        
        <H6>IF NOT REGISTERD,<A HREF="phpvis.php">Click Here to Register</A>.</H6>
    </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password);

$sql = "USE VISITOR";

$conn->query($sql);

$temp=0;

$uname=$_POST["uname"];
$pass=md5($_POST["pswrd"]);
session_start();


$sql = "SELECT usrname, password FROM REGISTER";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        if(($uname==$row["usrname"])&&($pass==$row["password"]))
        {
            $temp++;
        }
    }
}

if($temp==1)
{
    $_SESSION['uname']=$uname;
    header('Location:usr1.php');
}
else
{
    echo "<script> alert('Wrong UserID/Password'); </script>";
}

$conn->close();
}
?> 