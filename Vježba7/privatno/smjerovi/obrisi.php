<?php include_once "../../konfiguracija.php" ;
/**
 * Created by PhpStorm.
 * User: John
 * Date: 11.7.2018.
 * Time: 11:37
 */

if(!isset($_SESSION[$idAPP."o"])){
    header("location: " . $putanjaAPP . "odjava.php");
}

if(!isset($_GET["sifra"])){
    header("location: " . $putanjaAPP . "odjava.php");
}




  $izraz = $veza->prepare("delete from bend
                          where sifra=:sifra;");
  $izraz->execute($_GET);
  header("location: index.php");
