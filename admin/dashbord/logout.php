<?php

session_start();
if(!isset($_SESSION["uid"]))
{
    header("Location:../login");
    exit();
}
session_destroy();
header("Location:../login");
exit();
?>