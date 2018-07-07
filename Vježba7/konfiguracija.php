<?php

session_start();
$direktorijAPP=__DIR__ . "/";
$putanjaAPP="/Vježba7/";
$idAPP="MojaStranicaV1";
$nazivAPP="Moja stranica";

include_once $direktorijAPP . "funkcije.php";


switch($_SERVER["HTTP_HOST"]){
    case "localhost":
    $putanjaAPP="/Vježba7/";
    $bojaIzbornika="style=\"background-color: blue;\"";
    break;
    case "http://www.ivankne.byethost14.com":
    $putanjaAPP="/Vježba7/";
    $bojaIzbornika="";
    break;
}
