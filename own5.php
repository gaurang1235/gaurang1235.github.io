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
        <div class='top'><a href='logout.php'>Log Out</a></div>
        <center>    
        <div class="head">
        
            <h1>Delete Items in Menu</H1>
        </div>
        <form action="own6.php" method="POST">
                Id Of the Dish:<input type="text" name="name" required="required"><br><br>
                <input type="submit" value="Delete">
        </form>
        <A HREF="own1.php">Go Back.</A>
        </center>
    </body>
</html>


<?php

}

?>