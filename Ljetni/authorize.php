<?php
if(!isset($_POST["korisnik"])){
exit;
}

include_once "config.php";

if($_POST["korisnik"]===""){
header("location: login.php?poruka=2");
exit;
}

if(($_POST["korisnik"]==="ivan" && $_POST["lozinka"]==="i")
||
($_POST["korisnik"]==="edunova" && $_POST["lozinka"]==="e")
){

//pusti dalje

$_SESSION[$idAPP."o"]= $_POST["korisnik"];
header("location: private/db/dogadaji.php");
}else{
header("location: login.php?poruka=1");
}

