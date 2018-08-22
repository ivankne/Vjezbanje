<?php include_once "../../config.php" ;


if(!isset($_SESSION[$idAPP."o"])){
  header("location: " . $putanjaAPP . "logout.php");
}

if(isset($_POST["add"])){
    $izraz = $veza->prepare("insert into bend(username,email,lozinka,naziv_benda,logo) values 
                          (:username,:email,:lozinka,:naziv_benda,:logo)");
    unset($_POST["add"]);
    $izraz->execute($_POST);
    header("location: bend.php");
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
                    <input autocomplete="off" type="text" id="username" name="username" placeholder="username">
                </div>
                <div class="floated-label-wrapper">
                    <label for="email">email</label>
                    <input autocomplete="off" type="email"  id="email" name="email" placeholder="email" >
                </div>
                <div class="floated-label-wrapper">
                    <label for="lozinka">lozinka</label>
                    <input autocomplete="off" type="password"  id="lozinka" name="lozinka" >
                </div>
                <div class="floated-label-wrapper">
                    <label for="naziv_benda">Naziv benda</label>
                    <input autocomplete="off" type="text" id="naziv_benda" name="naziv_benda" >
                </div>
                <div class="floated-label-wrapper">
                    <label for="logo">logo</label>
                    <input autocomplete="off" type="text" id="logo" name="logo" >
                </div>

            <input class="button expanded" type="submit" name="add" value="Dodaj">
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
