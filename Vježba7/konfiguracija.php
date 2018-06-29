<?php

session_start();
include_once "funkcije.php";

$nazivAPP="Moja stranica";

switch($_SERVER["HTTP_HOST"]){
    case "localhost":
    $putanjaAPP="/Vježba7/";
    $bojaIzbornika="style=\"background-color: blue;\"";
    break;
    case "edunovanastava.byethost33.com":
    $putanjaAPP="/PP17/";
    $bojaIzbornika="";
    break;
}