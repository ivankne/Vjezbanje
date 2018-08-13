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
  $izraz = $veza->prepare("update clan set ime=:ime,prezime=:prezime,email=:email,koeficijent=:koeficijent where sifra=:sifra;");
  unset($_POST["edit"]);
  $izraz->execute($_POST);
  header("location: clanovi.php");
}else{
  $izraz = $veza->prepare("select * from clan where sifra=:sifra");
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
                <label for="ime">ime</label>
                <input value="<?php echo $o->ime ?>" autocomplete="off" type="text" id="ime" name="ime" placeholder="ime">
            </div>
            <div class="floated-label-wrapper">
                <label for="prezime">prezime</label>
                <input value="<?php echo $o->prezime ?>" autocomplete="off" type="text"  id="prezime" name="prezime" placeholder="prezime" >
            </div>
            <div class="floated-label-wrapper">
                <label for="email">Datum email</label>
                <input value="<?php echo $o->email ?>" autocomplete="off" type="email"  id="email" name="email" >
            </div>
            <div class="floated-label-wrapper">
                <label for="koeficijent">koeficijent</label>
                <input  value="<?php echo $o->koeficijent ?>" autocomplete="off" type="number" step="0.1" id="koeficijent" name="koeficijent" >
            </div>
            <div class="floated-label-wrapper">
                <label for="aktivan">aktivan</label>
                <input  value="<?php echo $o->aktivan ?>" autocomplete="off" type="text" id="aktivan" name="aktivan" >
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

