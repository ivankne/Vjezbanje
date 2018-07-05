<?php include_once "konfiguracija.php" ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once $direktorijAPP . "predlozak/head.php" ?>
        <style>
          .floated-label-wrapper {
            position: relative;
          }

          .floated-label-wrapper label {
            background: #fefefe;
            color: #1779ba;
            font-size: 0.75rem;
            font-weight: 600;
            left: 0.75rem;
            opacity: 0;
            padding: 0 0.25rem;
            position: absolute;
            top: 2rem;
            transition: all 0.15s ease-in;
            z-index: -1;
          }

          .floated-label-wrapper label input[type=text],
          .floated-label-wrapper label input[type=email],
          .floated-label-wrapper label input[type=password] {
            border-radius: 4px;
            font-size: 1.75em;
            padding: 0.5em;
          }

          .floated-label-wrapper label.show {
            opacity: 1;
            top: -0.85rem;
            z-index: 1;
            transition: all 0.15s ease-in;
          }
        </style>
  </head>
  <body>

  <div class="off-canvas-wrapper">
      <div  class="off-canvas-wrapper-inner" data-off-canvas-wrapper="">
          <div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas="" data-position="left" aria-hidden="true" data-offcanvas="18vv69-offcanvas">
              <div class="row column">
                  <br>
                  <?php include_once $direktorijAPP . "predlozak/izbornik.php" ?>
              </div>
          </div>


          <div class="off-canvas-content" data-off-canvas-content="">
              <div class="callout primary">
                  <div class="row column">
                      <?php include_once $direktorijAPP . "predlozak/zaglavlje.php" ?>
                  </div>
              </div>

              <div class="grid-x grid-padding-x">
                  <div class="large-4 cell text-center">
                      <form class="callout text-center" action="<?php echo $putanjaAPP . "autoriziraj.php"; ?>" method="post">
                          <h1>Prijava</h1>
                          <div class="floated-label-wrapper">
                              <label for="korisnik">Korisnik</label>
                              <input autocomplete="off" type="text" id="korisnik" name="korisnik" placeholder="ivan">
                          </div>
                          <div class="floated-label-wrapper">
                              <label for="lozinka">Lozinka</label>
                              <input autocomplete="off" type="password" id="lozinka" name="lozinka" placeholder="i">
                          </div>
                          <input class="button expanded" type="submit" value="Potvrdi">
                      </form>
                  </div>
              </div>

              <?php include_once $direktorijAPP . "predlozak/podnozje.php" ?>


              <?php include_once $direktorijAPP . "predlozak/skripte.php" ?>

          </div>
      </div>
  </div>
  </body>
</html>
