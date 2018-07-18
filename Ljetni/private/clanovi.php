<?php include_once "../config.php" ;
if(!isset($_SESSION[$idAPP."o"])){
    header("location: " . $putanjaAPP . "logout.php");
}
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "../Template/head.php" ?>
  </head>
  <body>
    <div class="grid-container">
        <div class="header">
            <?php include_once "../Template/nav.php" ?>
        </div>

        <div class="mjesto">
        <h3>Ovo je ČLANOVI stranica</h3>
        </div>

        <footer>
            <?php include_once "../Template/footer.php" ?>
        </footer>
    </div>

<?php include_once "../Template/script.php" ?>
  </body>
</html>
