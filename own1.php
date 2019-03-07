<?php

session_start();

$name=$_SESSION['uname'];

if($name!='admin')
{
    header('Location:adminsignin.php');
}
else
{



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
        <center>
        <div class='top'><a href='logout.php'>Log Out</a></div>
        <div class="head">
            <H1>
                Welcome Sir.<br><br><br>
        </h1>
        </div>
        <h1>
                <a href="own4.php">See User Details</a><br><br>
                <a href="own3.php">Click Here to See the Menu</a><br><br>
                <a href="own21.php">Click Here To add Items To the Menu</a>.<br><br>
                <a href="own5.php">Click Here To Delete an Item From Menu</a>.
            </H1>
        </center>
    </body>
</html>

<?php

}
?>