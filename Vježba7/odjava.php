<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 29.6.2018.
 * Time: 15:32
 */
session_start();
session_destroy();
header("location: index.php"); //vraca na index
