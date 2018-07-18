<?php include_once "config.php" ;
/**
 * Created by PhpStorm.
 * User: John
 * Date: 17.7.2018.
 * Time: 19:23
 */

unset($_SESSION[$idAPP . "o"]);
header("location: index.php");
