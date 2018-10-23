<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 10/22/2018
 * Time: 1:38 PM
 */


//TEST FILE !!
if(strlen($naziv)>0){
    $naziv = strtoupper(substr($naziv,0,1)) . strtolower(substr($naziv,1));

}

if(strlen($narucitelj)>0){
    $narucitelj = strtoupper(substr($narucitelj,0,1)) . strtolower(substr($narucitelj,1));
}

$veza->beginTransaction();
  $izraz = $veza->prepare("
    insert into dogadaj (naziv, napomena, datum_pocetka, datum_zavrsetka, cijena, narucitelj, adresa, bend) values 
    (:naziv, :napomena, :datum_pocetka, :datum_zavrsetka, :cijena, :narucitelj, :adresa, :bend)");
  $izraz->execute(array(
      "naziv"=>$naziv,
      "narucitelj"=>$narucitelj,
      "napomena"=>"",
      "datum_pocetka"=>"",
      "datum_zavrsetka"=>"",
      "cijena"=>"",
      "adresa"=>"",
      "bend"=>""
  ));

  $sifraDog = $veza->lastInsertId();
//
//  $izraz = $veza->prepare("insert into polaznik (osoba,brojugovora) values
//                          (:osoba,:brojugovora)");
//  $izraz->execute(array(
//      "osoba"=>$sifraDog,
//      "brojugovora"=>""
//  ));
//
//  $sifraPolaznika = $veza->lastInsertId();

  $veza->commit();