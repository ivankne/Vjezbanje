<?php include_once "../../konfiguracija.php"; ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <?php include_once "../../predlozak/head.php" ?>
</head>
<body>
<div class="off-canvas-wrapper">
    <div  class="off-canvas-wrapper-inner" data-off-canvas-wrapper="">
        <div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas="" data-position="left" aria-hidden="true" data-offcanvas="18vv69-offcanvas">
            <div class="row column">
                <a href="<?php echo $putanjaAPP . "index.php"; ?>" class="simple-text logo-normal">
                    <img class="thumbnail" src="../../img/edunova.svg">
                </a>
                <?php include_once "../../predlozak/izbornik.php" ?>
            </div>
        </div>


        <div class="off-canvas-content" data-off-canvas-content="">
            <div class="callout primary">
                <div class="row column">
                    <?php include_once "../../predlozak/zaglavlje.php" ?>
                </div>
            </div>

            <a href="novi.php" class="success button expanded">Dodaj novi smjer</a>
            <?php

            $izraz = $veza->prepare("
                 
                 select a.sifra,a.username,a.email,
                a.lozinka, a.naziv_benda,a.logo, count(b.sifra) as dogadaja
                 from bend a left join dogadaj b
                on a.sifra=b.bend group by a.sifra,a.username,a.email,
                a.lozinka, a.naziv_benda,a.logo
                 
                 ");
            $izraz->execute();
            $rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
            ?>
            <div class="callout primary">
                <div class="row column">
                    <table>
                        <thead>
                        <tr>
                            <th>Šifra</th>
                            <th>username</th>
                            <th>email</th>
                            <th>lozinka</th>
                            <th>naziv benda</th>
                            <th>logo</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($rezultati as $red):?>
                            <tr>
                                <td><?php echo $red->sifra; ?></td>
                                <td><?php echo $red->username; ?></td>
                                <td><?php echo $red->email; ?></td>
                                <td><?php echo $red->lozinka; ?></td>
                                <td><?php echo $red->naziv_benda; ?></td>
                                <td><?php echo $red->logo; ?></td>
                                <td>
                                    <a href="promjena.php?sifra=<?php echo $red->sifra; ?>">
                                        <i class="fas fa-edit fa-2x"></i>
                                    </a>
                                    <?php if($red->dogadaja==0): ?>
                                        <a onclick="return confirm('Sigurno obrisati <?php echo $red->naziv_benda ?>')" href="obrisi.php?sifra=<?php echo $red->sifra; ?>">
                                            <i class="fas fa-trash fa-2x" style="color: red;"></i>
                                        </a>
                                    <?php endif;?>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>

            <?php include_once "../../predlozak/podnozje.php" ?>


            <?php include_once "../../predlozak/skripte.php" ?>

        </div>
    </div>
</div>
</body>
</html>
