<?php include_once "../../config.php";
if(!isset($_SESSION[$idAPP."o"])){
    header("location: " . $putanjaAPP . "logout.php");
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

        <div class="grid-x mjesto">
            <div class="cell large-12 pad">
                <h2 class="text-center">Događaji</h2>
                    <?php
                    $veza = new PDO("mysql:host=localhost;dbname=svirka","edunova","edunova");
                    $izraz = $veza->prepare("select * from dogadaj");
                    $izraz->execute();
                    $rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
                    ?>

                <table>
                    <thead>
                    <tr>
                        <th>Naziv</th>
                        <th>Napomena</th>
                        <th>Datum pocetka</th>
                        <th>Datum zavrsetka</th>
                        <th>Cijena</th>
                        <th>Narucitelj</th>
                        <th>Adresa</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($rezultati as $red):?>
                        <tr>
                            <td><?php echo $red->naziv; ?></td>
                            <td><?php echo $red->napomena; ?></td>
                            <td><?php echo $red->datum_pocetka; ?></td>
                            <td><?php echo $red->datum_zavrsetka; ?></td>
                            <td><?php echo $red->cijena; ?></td>
                            <td><?php echo $red->narucitelj; ?></td>
                            <td><?php echo $red->adresa; ?></td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>

            </div>

        </div>

        <footer>
            <?php include_once "../../Template/footer.php" ?>
        </footer>
    </div>

<?php include_once "../../Template/script.php" ?>
  </body>
</html>
