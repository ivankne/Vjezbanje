<?php include_once "../../config.php" ;


if(!isset($_SESSION[$idAPP."o"])){
  header("location: " . $putanjaAPP . "logout.php");
}

$greske=Array();

if(isset($_POST["add"])) {

    include_once "kontrola.php";

    if (count($greske) === 0) {

        $izraz = $veza->prepare("insert into clan (ime,prezime,email,bend,koeficijent,aktivan) values 
                          (:ime,:prezime,:email,:bend,:koeficijent,:aktivan)");

        $izraz->bindParam(":ime", $_POST["ime"]);
        $izraz->bindParam(":prezime", $_POST["prezime"]);


        if ($_POST["bend"] === "") {
            $izraz->bindValue(":bend", null, PDO::PARAM_INT);
        } else {
            $izraz->bindParam(":bend", $_POST["bend"]);
        }

        if ($_POST["email"] === "") {
            $izraz->bindValue(":email", null, PDO::PARAM_INT);
        } else {
            $izraz->bindParam(":email", $_POST["email"]);
        }

        if ($_POST["koeficijent"] === "") {
            $izraz->bindValue(":koeficijent", null, PDO::PARAM_INT);
        } else {
            $izraz->bindParam(":koeficijent", $_POST["koeficijent"]);
        }
        if ($_POST["aktivan"] === "") {
            $izraz->bindValue(":aktivan", null, PDO::PARAM_INT);
        } else {
            $izraz->bindParam(":aktivan", $_POST["aktivan"]);
        }
        unset($_POST["add"]);
        $izraz->execute();
        header("location: clanovi.php");
    }
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
                    <?php
                    if(!isset($greske["ime"])): ?>
                        <label for="ime">Ime</label>
                        <input  autocomplete="off" type="text" id="ime" name="ime" placeholder="Ime"
                                value="<?php echo isset($_POST["ime"]) ? $_POST["ime"] : "" ?>">

                    <?php else:?>
                        <label class="is-invalid-label">
                            Zahtjevani unos
                            <input type="text"
                                   value="<?php echo  $_POST["ime"]; ?>"
                                   class="is-invalid-input" aria-describedby="nazivGreska" data-invalid=""
                                   aria-invalid="true" autocomplete="off" type="text" id="ime" name="ime" placeholder="Ime">
                            <span class="form-error is-visible" id="nazivGreska">
                            <?php echo $greske["ime"]; ?>
                            </span>
                            </label>

                    <?php endif;?>
                </div>


                <div class="floated-label-wrapper">
                    <?php if(!isset($greske["prezime"])): ?>
                        <label for="prezime">Prezime</label>
                        <input  autocomplete="off" type="text" id="prezime" name="prezime" placeholder="Prezime"
                                value="<?php echo isset($_POST["prezime"]) ? $_POST["prezime"] : "" ?>">

                    <?php else:?>

                    <label class="is-invalid-label">
                        Zahtjevani unos
                        <input type="text"
                               value="<?php echo  $_POST["prezime"]; ?>"
                               class="is-invalid-input" aria-describedby="nazivGreska" data-invalid=""
                               aria-invalid="true" autocomplete="off" type="text" id="prezime" name="prezime" placeholder="Prezime">
                        <span class="form-error is-visible" id="nazivGreska">
                        <?php echo $greske["prezime"]; ?>
                        </span>
                    </label>

                    <?php endif;?>
                </div>



                <div class="floated-label-wrapper">
                    <label for="bend">bend</label>
                    <input value="<?php echo isset($_POST["bend"]) ?  $_POST["bend"]: ""; ?>" autocomplete="off" type="text"  id="bend" name="bend" placeholder="bend" >
                </div>
                <div class="floated-label-wrapper">
                    <label for="email">email</label>
                    <input value="<?php echo isset($_POST["email"]) ?  $_POST["email"]: ""; ?>" autocomplete="off" type="email"  id="email" name="email" >
                </div>
                <div class="floated-label-wrapper">
                    <label for="koeficijent">koeficijent</label>
                    <input  value="<?php echo isset($_POST["koeficijent"]) ?  $_POST["koeficijent"]: ""; ?>" autocomplete="off" type="number" step="0.1" id="koeficijent" name="koeficijent" >
                </div>
                <div class="floated-label-wrapper">
                    <label for="aktivan">aktivan</label>
                    <input  value="<?php echo isset($_POST["aktivan"]) ?  $_POST["aktivan"]: ""; ?>" autocomplete="off" type="checkbox" id="aktivan" name="aktivan" >
                </div>

                <input type="hidden" name="sifra" value="<?php echo $red->sifra ?>" />
                <input class="button expanded" type="submit" name="add" value="Dodaj">
            </form>


                <div class="cell large-4">
                    <a href="clanovi.php" class="alert button expanded rounded">Nazad</a>
                </div>


        </div>
    </div>

    <footer>
        <?php include_once "../../Template/footer.php" ?>
    </footer>
</div>

<?php include_once "../../Template/script.php" ?>
</body>
</html>
