<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 29.6.2018.
 * Time: 15:32
 */
include_once $direktorijAPP . "konfiguracija.php" ;
unset($_SESSION[$idAPP . "o"]);
header("location: index.php");; //vraca na index
