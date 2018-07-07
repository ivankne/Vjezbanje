<?php include_once "../konfiguracija.php"; ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "../predlozak/head.php" ?>
  </head>
  <body>
  <div class="off-canvas-wrapper">
      <div  class="off-canvas-wrapper-inner" data-off-canvas-wrapper="">
          <div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas="" data-position="left" aria-hidden="true" data-offcanvas="18vv69-offcanvas">
              <div class="row column">
                  <a href="<?php echo $putanjaAPP . "index.php"; ?>" class="simple-text logo-normal">
                      <img class="thumbnail" src="../img/edunova.svg">
                  </a>
                  <?php include_once "../predlozak/izbornik.php" ?>
              </div>
          </div>


          <div class="off-canvas-content" data-off-canvas-content="">
              <div class="callout primary">
                  <div class="row column">
                      <?php include_once "../predlozak/zaglavlje.php" ?>
                  </div>
              </div>

              <p>NADZORNA PLOČA</p>
              <p>PDO</p>
              <?php
              $veza = new PDO("mysql:host=localhost;dbname=svirka","edunova","edunova");
              $izraz = $veza->prepare("select * from bend");
              $izraz->execute();
              $rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
              //l($rezultati);
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
                              </tr>
                          <?php endforeach;?>
                          </tbody>
                      </table>
                  </div>
              </div>

              <?php include_once "../predlozak/podnozje.php" ?>


              <?php include_once "../predlozak/skripte.php" ?>

          </div>
      </div>
  </div>
  </body>
</html>
