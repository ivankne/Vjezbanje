<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 17.7.2018.
 * Time: 12:12
 */

session_start();
$putanjaAPP="/Ljetni/";
$idAPP="GazzerV1";
$nazivAPP="Gazzer";


switch($_SERVER["HTTP_HOST"]){
    case "localhost":
        $veza = new PDO("mysql:host=localhost;dbname=svirka","edunova","edunova");
        $veza->exec("set names utf8;");
        break;

    case "www.ivankne.byethost14.com":
        $veza = new PDO("mysql:host=sql109.byethost.com;dbname=b14_22307246_svirka","b14_22307246","edunova123");
        $veza->exec("set names utf8;");
        break;

    case "ivankne.byethost14.com":
        $veza = new PDO("mysql:host=sql109.byethost.com;dbname=b14_22307246_svirka","b14_22307246","edunova123");
        $veza->exec("set names utf8;");
        break;
}

?>

