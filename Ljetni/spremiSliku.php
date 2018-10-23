<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 10/23/2018
 * Time: 10:34 AM
 */

include_once "../../konfiguracija.php" ;
if(!isset($_SESSION[$idAPP."o"])){
    return;
}

if(!isset($_POST["sifra"])){
    return;
}

$img = $_POST['slika']; // Your data 'data:image/png;base64,AAAFBfj42Pj4';
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);


file_put_contents("img/bendovi/" . $_POST["sifra"] . ".jpg",
    $data);


echo "OK";