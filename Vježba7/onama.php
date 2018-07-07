<?php include_once "konfiguracija.php" ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once $direktorijAPP . "predlozak/head.php" ?>
  </head>
  <body>
  <div class="off-canvas-wrapper">
      <div  class="off-canvas-wrapper-inner" data-off-canvas-wrapper="">
          <div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas="" data-position="left" aria-hidden="true" data-offcanvas="18vv69-offcanvas">
              <div class="row column">
                  <a href="<?php echo $putanjaAPP . "index.php"; ?>" class="simple-text logo-normal">
                      <img class="thumbnail" src="img/edunova.svg">
                  </a>
                  <?php include_once $direktorijAPP . "predlozak/izbornik.php" ?>
              </div>
          </div>


          <div class="off-canvas-content" data-off-canvas-content="">
              <div class="callout primary">
                  <div class="row column">
                    <?php include_once $direktorijAPP . "predlozak/zaglavlje.php" ?>
                  </div>
              </div>

          <p>O NAMA</p>

          <?php include_once $direktorijAPP . "predlozak/podnozje.php" ?>


          <?php include_once $direktorijAPP . "predlozak/skripte.php" ?>

          </div>
      </div>
  </div>
  </body>
</html>
