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

        <div class="grid-x">
            <div class="cell small-12 pad">
                <h2 class="text-center">Događaji</h2>
               <!-- <a href="new.php" class="success button expanded">Dodaj</a> -->
                    <?php

                    $izraz = $veza->prepare(" select a.sifra,a.naziv,a.napomena,
                        a.datum_pocetka, a.datum_zavrsetka,a.cijena, a.narucitelj,a.adresa, a.bend, count(b.dogadaj) /*b nema sifru!?*/ as dogadaja
                         from dogadaj a left join dog_clan b
                        on a.sifra=b.dogadaj group by a.sifra,a.naziv,a.napomena,
                        a.datum_pocetka, a.datum_zavrsetka,a.cijena, a.narucitelj,a.adresa, a.bend");
                    $izraz->execute();
                    $rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
                    ?>

                <table class="responsive">
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
                            <!--<td>
                                <a href="edit.php?sifra=<?php echo $red->sifra; ?>">
                                    <i class="fi-page-edit"></i>
                                </a>
                                <?php if($red->dogadaja==0): ?>
                                    <a onclick="return confirm('Sigurno obrisati <?php echo $red->naziv?>')" href="delete.php?sifra=<?php echo $red->sifra; ?>">
                                        <i class="fi-trash" style="color: red;"></i>
                                    </a>
                                <?php endif;?>
                            </td>-->
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
