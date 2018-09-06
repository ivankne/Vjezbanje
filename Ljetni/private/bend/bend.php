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

            <div class="cell large-12 pad">
                <h2 class="text-center">Bendovi</h2>
                <a href="new.php" class="success button expanded">Dodaj</a>
                <?php

                    $izraz = $veza->prepare("select a.sifra,a.username,a.email,
                        a.lozinka, a.naziv_benda, a.logo, count(b.sifra) as bendova
                         from bend a left join dogadaj b
                        on a.sifra=b.bend group by a.sifra,a.username,a.email,
                        a.lozinka, a.naziv_benda, a.logo");
                    $izraz->execute();
                    $rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
                    ?>
            </div>
            <div class="cell small-12 pad">
                <table class="responsive-card-table unstriped">
                    <thead>
                    <tr>
                        <th>username</th>
                        <th>email</th>
                        <th>lozinka</th>
                        <th>naziv_benda</th>
                        <th>logo</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($rezultati as $red):?>
                        <tr>
                            <td><?php echo $red->username; ?></td>
                            <td><?php echo $red->email; ?></td>
                            <td><?php echo $red->lozinka; ?></td>
                            <td><?php echo $red->naziv_benda; ?></td>
                            <td><?php echo $red->logo; ?></td>
                            <td>
                                <a href="edit.php?sifra=<?php echo $red->sifra; ?>">
                                    <i class="fi-page-edit"></i>
                                </a>
                                <?php if($red->bendova==0): ?>
                                    <a onclick="return confirm('Sigurno obrisati <?php echo $red->naziv_benda?>')" href="delete.php?sifra=<?php echo $red->sifra; ?>">
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
