<html>
    <head>
    <style>
        body{
                background:url(login.jpg);
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
                line-height: 20px;
                color: black;
            }

        </style>
</head>
    <body>
        
            <div class="login">
            <h1>
                Login
            </h1>
            <form action="adminsignin.php" method="POST">
                    <p>UserName:</p><input type="text" name="uname" required="required" placeholder="Username"><br><br>
                    <p>Password:</p><input type="password" name="pswrd" required="required" placeholder="Password"><br><br>
                    <input type="submit" value="Sign in">
            </form>
            </div>
        
    </body>
</html>


<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$uname=$_POST["uname"];
$pass=md5($_POST["pswrd"]);

if(($uname=='admin')&&($pass=='21232f297a57a5a743894a0e4a801fc3'))
{
    session_start();
    $_SESSION['uname']=$uname;
    
    header('Location:own1.php');
}

else
{
   echo "<script> alert('Wrong UserID/Password'); </script>";
}
}
?>