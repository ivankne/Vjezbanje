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
                <h2 class="text-center">Članovi</h2>
                <a href="new.php" class="success button expanded">Dodaj</a>
                <?php

                    $izraz = $veza->prepare("select a.sifra,a.ime,a.prezime,
                        a.email, a.bend, a.koeficijent, a.aktivan, count(b.clan) /*b nema sifru!?*/ as clanova
                         from clan a left join dog_clan b
                        on a.sifra=b.clan group by a.sifra,a.ime,a.prezime,
                        a.email, a.bend, a.koeficijent, a.aktivan");
                    $izraz->execute();
                    $rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
                    ?>

                <table class="responsive">
                    <thead>
                    <tr>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Email</th>
                        <th>Koeficijent</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($rezultati as $red):?>
                        <tr>
                            <td><?php echo $red->ime; ?></td>
                            <td><?php echo $red->prezime; ?></td>
                            <td><?php echo $red->email; ?></td>
                            <td><?php echo $red->koeficijent; ?></td>
                            <td>
                                <a href="edit.php?sifra=<?php echo $red->sifra; ?>">
                                    <i class="fi-page-edit"></i>
                                </a>
                                <?php if($red->clanova==0): ?>
                                    <a onclick="return confirm('Sigurno obrisati <?php echo $red->ime?>')" href="delete.php?sifra=<?php echo $red->sifra; ?>">
                                        <i class="fi-trash" style="color: red;"></i>
                                    </a>
                                <?php endif;?>
                            </td>
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