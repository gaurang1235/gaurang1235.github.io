<?php

session_start();

$name=$_SESSION['uname'];

if(empty($name))
{
    header('Location:logvis.php');
}
else
{
    header('Location:usr1.php');
}