<?php
if(!isset($_POST["email"])){
exit;
}

include_once "config.php";

if($_POST["email"]===""){
header("location: login.php?poruka=2");
exit;
}

$izraz=$veza->prepare("select * from operater where email=:email");
$izraz->execute(array("email"=>$_POST["email"]));

$o = $izraz->fetch(PDO::FETCH_OBJ);


if($o!=null && $o->lozinka==password_verify($_POST["lozinka"],$o->lozinka)){
    //pusti dalje
    $o->lozinka="";
    $_SESSION[$idAPP."o"]= $o;
    header("location: index.php");
}else{
    header("location: login.php?poruka=1");
}

