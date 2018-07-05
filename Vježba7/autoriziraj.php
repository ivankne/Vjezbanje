<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 29.6.2018.
 * Time: 15:31
 */

if(!isset($_POST["korisnik"])){
    exit;
}

include_once "konfiguracija.php";

    if($_POST["korisnik"]===""){
        header("location: prijava.php?poruka=2");
        exit;
    }

    if(($_POST["korisnik"]==="ivan" && $_POST["lozinka"]==="i")
        ||
        ($_POST["korisnik"]==="edunova" && $_POST["lozinka"]==="e")
    ){
        //pusti dalje
        session_start();
        $_SESSION[$idAPP."o"]= $_POST["korisnik"];
        header("location: privatno/nadzornaPloca.php");
    }else{
        header("location: prijava.php?poruka=1");
    }
