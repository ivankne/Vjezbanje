<?php include_once "config.php"
/**
 * Created by PhpStorm.
 * User: John
 * Date: 10/18/2018
 * Time: 11:10 AM
 */


?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "Template/head.php" ?>
      <style>

      </style>
  </head>

  <body>
    <div class="grid-container">
        <div class="header">
            <?php include_once "Template/nav.php" ?>
        </div>

        <div class="grid-x">
            <div class="cell small-12 text-center">
                <h1 style="padding-top: 1rem">Dobro došli na Gazzer!  <i class="fi-calendar"></i></h1>
                    <h3 class="pad">Jednostavni organizator za praćenje i evidenciju vaših nastupa :)</h3>
            </div>

            <?php if(!isset( $_SESSION[$idAPP."o"])): ?>
                <div class="cell sjena small-12 text-center">
                    <h3>Prijavi se <a class="zuti" href="login.php">ovdje   <i class="fi-plus"> </i></a></h3>
                </div>
            <?php endif;?>



               <div class="cell pad small-12 text-center">

               </div>
        </div>
        <footer>
            <?php include_once "Template/footer.php" ?>
        </footer>

    </div> <!--container zatvoren-->


<?php include_once "Template/script.php" ?>
  </body>
</html>