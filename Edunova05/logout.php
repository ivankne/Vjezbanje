<?php

session_start();

if(!isset($_SESSION["autoriziran"]))
{
    header("location: login.php");
    exit;
}

session_destroy();
header("location: index.php");