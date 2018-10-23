<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 10/19/2018
 * Time: 12:11 PM
 */

include_once "../../config.php" ;
if(!isset($_SESSION[$idAPP."o"])){
    return;
}

if(!isset($_POST["sifra"])){
    return;
}

$izraz = $veza->prepare("
 
            select sifra, ime, prezime, email, bend 
            from clan
            where sifra=:sifra
            and email is not null and email<>''
 ");

 $izraz->execute(array("sifra"=>$_POST["sifra"]));
 $mailovi = $izraz->fetchAll(PDO::FETCH_OBJ);

 require '../../PHPmailer/PHPMailerAutoload.php';
 $mail = new PHPMailer;
 echo saljiEmail($mail,$mailovi,"Gazzer poruka",$_POST["poruka"]);

