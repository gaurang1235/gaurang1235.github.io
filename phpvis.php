<html>
    <head>
    <style>
        body{
                background:url(login.jpg);
                padding-bottom:25%;
                margin: 25%;
                background-size:cover;
                background-position: center;
                font-family: sans-serif;
            }
            .login{
                width: 40%;
                height: auto;
                background: white;
                position: absolute;
                top:25%;
                left:30%;
                
                padding: 20px 20px 0px 20px;
                box-sizing: border-box;
            
            }

            h1{
                text-align: center;
                font-size: 22px;
                padding: 0 0 10px;
            }
            p{
                font-weight: bold;
                margin: 0%;
            }

            input{
                width:100%;
                margin-bottom: 25px;
            }

            input[type="text"], input[type="password"],input[type="email"]
            {
                height: 30px;
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


        </style>
</head>
    <body>
            <div class="login">
            <h1>
               WELCOME REGISTER WITH US TO GET YUMMY FOOD.
            </h1>
            <form action="phpvis.php" method="POST">
                    <P>First Name:</P><input type="text" name="fname" required="required" placeholder="First Name">
                    <p>Last Name:</p><input type="text" name="lname" required="required" placeholder="Last Name">
                    <p>Mob. No.:</p><input type="text" name="num" required="required" placeholder="Mob. No.">
                    <p>Email ID:</p><input type="email" name="email" required="required" placeholder="Email ID">
                    <p>UserName:</p><input type="text" name="uname" required="required" placeholder="UserName">
                    <p>Password:</p><input type="password" name="pswrd" required="required" placeholder="Password">
                    <input type="submit" value="Register">
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

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$numb=$_POST["num"];
$email=$_POST["email"];
$uname=$_POST["uname"];
$pass=md5($_POST["pswrd"]);






$sql = "INSERT INTO REGISTER (firstname,lastname,mob_no,email,usrname,password) 
VALUES ('$fname','$lname','$numb','$email','$uname','$pass')";

if ($conn->query($sql) === TRUE) {
    session_start();
    $_SESSION['uname']=$uname;
header('Location:singinusr.php');
}
else {
    echo "<script>alert('UserName already Exist');</script>";
}
$conn->close();
}
?> 