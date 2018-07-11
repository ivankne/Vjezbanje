<?php include_once "../../konfiguracija.php" ;
/**
 * Created by PhpStorm.
 * User: John
 * Date: 11.7.2018.
 * Time: 11:29
 */

if(!isset($_SESSION[$idAPP."o"])){
  header("location: " . $putanjaAPP . "odjava.php");
}

if(isset($_POST["dodaj"])){
  $izraz = $veza->prepare("insert into bend (username,email,lozinka,naziv_benda,logo) values 
                          (:username,:email,:lozinka,:naziv_benda,:logo)");
  unset($_POST["dodaj"]);
  $izraz->execute($_POST);
  header("location: index.php");
}


?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "../../predlozak/head.php" ?>
  </head>
  <body>
    <div class="grid-container">

    <?php include_once "../../predlozak/zaglavlje.php" ?>


    <form class="callout text-center" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">

          <div class="floated-label-wrapper">
            <label for="username">Username</label>
            <input autocomplete="off" type="text" id="username" name="username" placeholder="username">
          </div>
          <div class="floated-label-wrapper">
            <label for="email">email</label>
            <input autocomplete="off" type="email" id="email" name="email" >
          </div>
          <div class="floated-label-wrapper">
            <label for="lozinka">lozinka</label>
            <input autocomplete="off" type="password" step="0.01" min="1" max="10000" id="lozinka" name="lozinka" >
          </div>
          <div class="floated-label-wrapper">
            <label for="naziv_benda">Naziv</label>
            <input autocomplete="off" type="text" id="naziv_benda" name="naziv_benda" >
          </div>
          <div class="floated-label-wrapper">
            <label for="logo">logo</label>
            <input autocomplete="off" type="text" id="logo" name="logo" >
          </div>
          <input class="button expanded" type="submit" name="dodaj" value="Dodaj novi">
        </form>

    <?php include_once "../../predlozak/podnozje.php" ?>

    <?php include_once "../../predlozak/skripte.php" ?>
  </body>
</html>
