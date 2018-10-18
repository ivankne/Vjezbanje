<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 10/18/2018
 * Time: 1:42 PM
 */

if(trim($_POST["ime"])===""){
    $greske["ime"]="*Obavezan unos imena ";
}
if(strlen($_POST["ime"])>50){
    $greske["ime"]="*Ime smije imati maksimalno 50 znakovam vi, ste stavili " . strlen($_POST["ime"]) . " znakova";
}
if(trim($_POST["prezime"])===""){
    $greske["prezime"]="*Obavezan unos prezimena";
}
if(strlen($_POST["prezime"])>50){
    $greske["prezime"]="*Prezime smije imati maksimalno 50 znakovam vi, ste stavili " . strlen($_POST["prezime"]) . " znakova";
}
