<?php
session_start();
if(!session_is_registered(usrnm))
{
header("location:index.php");
}
else
{
header("location:homeScreen.php");
}
?>

    Status
    API
    Training
    Shop
    Blog
    About

    © 2014 GitHub, Inc.
    Terms
    Priva