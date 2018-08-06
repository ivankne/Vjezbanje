<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 17.7.2018.
 * Time: 12:12
 */

session_start();
$direktorijAPP=__DIR__ . "/";
$putanjaAPP="/Ljetni/";
$idAPP="GazzerV1";
$nazivAPP="Gazzer";

$veza = new PDO("mysql:host=sql109.byethost.com;dbname=b14_22307246_svirka","b14_22307246","edunova123");
$veza->exec("set names utf8;");
?>

