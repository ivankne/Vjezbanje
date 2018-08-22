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
  $izraz = $veza->prepare("update bend set sifra=:sifra,username=:username,email=:email,lozinka=:lozinka,naziv_benda=:naziv_benda,logo=:logo where sifra=:sifra;");
  unset($_POST["edit"]);
  $izraz->execute($_POST);
  header("location: bend.php");
}else{
  $izraz = $veza->prepare("select * from bend where sifra=:sifra");
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
                <label for="username">Korisničko ime</label>
                <input value="<?php echo $o->username ?>" autocomplete="off" type="text" id="username" name="username" placeholder="username">
            </div>
            <div class="floated-label-wrapper">
                <label for="email">email</label>
                <input value="<?php echo $o->email ?>" autocomplete="off" type="email"  id="email" name="email" placeholder="email" >
            </div>
            <div class="floated-label-wrapper">
                <label for="lozinka">lozinka</label>
                <input value="<?php echo $o->lozinka ?>" autocomplete="off" type="password"  id="lozinka" name="lozinka" >
            </div>
            <div class="floated-label-wrapper">
                <label for="naziv_benda">Naziv benda</label>
                <input  value="<?php echo $o->naziv_benda ?>" autocomplete="off" type="text" id="naziv_benda" name="naziv_benda" >
            </div>
            <div class="floated-label-wrapper">
                <label for="logo">logo</label>
                <input  value="<?php echo $o->logo ?>" autocomplete="off" type="text" id="logo" name="logo" >
            </div>
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

