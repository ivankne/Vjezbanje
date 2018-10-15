<?php include_once "../../config.php";
if(!isset($_SESSION[$idAPP."o"])){
    header("location: " . $putanjaAPP . "logout.php");
}

require '../../PHPmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
echo saljiEmail($mail,$mailovi,"Edunova poruka",$_POST["poruka"]);
