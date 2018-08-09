<?php include_once "../../config.php" ;
/**
 * Created by PhpStorm.
 * User: John
 * Date: 25.7.2018.
 * Time: 14:11
 */

if(!isset($_SESSION[$idAPP."o"])){
  header("location: " . $putanjaAPP . "logout.php");
}

if(!isset($_GET["sifra"]) && !isset($_POST["sifra"])){
  header("location: " . $putanjaAPP . "logout.php");
}



if(isset($_POST["edit"])){
  $izraz = $veza->prepare("update dogadaj set naziv=:naziv,napomena=:napomena,datum_pocetka=:datum_pocetka,datum_zavrsetka=:datum_zavrsetka,narucitelj=:narucitelj,adresa=:adresa where sifra=:sifra;");
  unset($_POST["edit"]);
  $izraz->execute($_POST);
  header("location: dogadaji.php");
}else{
  $izraz = $veza->prepare("select * from dogadaj where sifra=:sifra");
  $izraz->execute($_GET);
  $o=$izraz->fetch(PDO::FETCH_OBJ);
}
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <?php include_once "../../Template/head.php" ?>
</head>
<body>
<div class="grid-container">
    <div class="header">
        <?php include_once "../../Template/nav.php" ?>
    </div>

    <div class="grid-x grid-padding-x mjesto">
        <div class="large-12 cell text-center">
        <form class="callout text-center" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">

            <div class="floated-label-wrapper">
                <label for="naziv">Naziv</label>
                <input value="<?php echo $o->naziv ?>" autocomplete="off" type="text" id="naziv" name="naziv" placeholder="naziv">
            </div>
            <div class="floated-label-wrapper">
                <label for="napomena">Napomena</label>
                <input value="<?php echo $o->napomena ?>" autocomplete="off" type="text"  id="napomena" name="napomena" placeholder="napomena" >
            </div>
            <div class="floated-label-wrapper">
                <label for="datum_pocetka">Datum pocetka</label>
                <input value="<?php echo $o->datum_pocetka ?>" autocomplete="off" type="datetime-local"  id="datum_pocetka" name="datum_pocetka" >
            </div>
            <div class="floated-label-wrapper">
                <label for="datum_zavrsetka">datum_zavrsetka</label>
                <input  value="<?php echo $o->datum_zavrsetka ?>" autocomplete="off" type="datetime-local" id="datum_zavrsetka" name="datum_zavrsetka" >
            </div>
            <div class="floated-label-wrapper">
                <label for="narucitelj">narucitelj</label>
                <input  value="<?php echo $o->narucitelj ?>" autocomplete="off" type="text" id="narucitelj" name="narucitelj" >
            </div>
            <div class="floated-label-wrapper">
                <label for="adresa">adresa</label>
                <input  value="<?php echo $o->adresa ?>" autocomplete="off" type="text" id="adresa" name="adresa" >
            </div>
            <input type="hidden" name="sifra" value="<?php echo $o->sifra ?>" />
            <input type="hidden" name="bend" value="<?php echo $o->bend ?>" />
            <input class="button expanded" type="submit" name="edit" value="Promijeni">
        </form>
        </div>
    </div>

    <footer>
        <?php include_once "../../Template/footer.php" ?>
    </footer>
</div>

<?php include_once "../../Template/script.php" ?>
</body>
</html>

