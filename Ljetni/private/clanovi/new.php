<?php include_once "../../config.php" ;


if(!isset($_SESSION[$idAPP."o"])){
  header("location: " . $putanjaAPP . "logout.php");
}

if(isset($_POST["add"])){
    $izraz = $veza->prepare("insert into clan (sifra,ime,prezime,email,bend,koeficijent,aktivan) values 
                          (:sifra,:ime,:prezime,:email,:bend,:koeficijent,:aktivan)");
    unset($_POST["add"]);
    $izraz->execute($_POST);
    header("location: clanovi.php");
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
                <input autocomplete="off" type="text" id="naziv" name="naziv" placeholder="naziv">
            </div>
            <div class="floated-label-wrapper">
                <label for="napomena">Napomena</label>
                <input autocomplete="off" type="text" id="napomena" name="napomena" placeholder="napomena">
            </div>
            <div class="floated-label-wrapper">
                <label for="datum_pocetka">datum_pocetka</label>
                <input autocomplete="off" type="date" id="datum_pocetka" name="datum_pocetka" placeholder="datum pocetka">
            </div>
            <div class="floated-label-wrapper">
                <label for="datum_zavrsetka">datum_zavrsetka</label>
                <input autocomplete="off" type="date" id="datum_zavrsetka" name="datum_zavrsetka" placeholder="datum zavrsetka">
            </div>
            <div class="floated-label-wrapper">
                <label for="cijena">cijena</label>
                <input autocomplete="off" type="number" id="cijena" step="100" name="cijena" placeholder="cijena">
            </div>
            <div class="floated-label-wrapper">
                <label for="narucitelj">narucitelj</label>
                <input autocomplete="off" type="text"  id="narucitelj" name="narucitelj" placeholder="narucitelj" >
            </div>
            <div class="floated-label-wrapper">
                <label for="adresa">adresa</label>
                <input autocomplete="off" type="text"  id="adresa" name="adresa" >
            </div>
            <input type="hidden" name="sifra" />
            <input type="hidden" name="bend" />

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
