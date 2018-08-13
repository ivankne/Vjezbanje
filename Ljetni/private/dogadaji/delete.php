<?php include_once "../../config.php" ;
/**
 * Created by PhpStorm.
 * User: John
 * Date: 25.7.2018.
 * Time: 14:20
 */

if(!isset($_SESSION[$idAPP."o"])){
    header("location: " . $putanjaAPP . "logout.php");
}

if(!isset($_GET["sifra"])){
    header("location: " . $putanjaAPP . "logout.php");
}




  $izraz = $veza->prepare("delete from dogadaj
                          where sifra=:sifra;");
  $izraz->execute($_GET);
  header("location: dogadaji.php");
