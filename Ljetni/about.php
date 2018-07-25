<?php include_once "config.php"
/**
 * Created by PhpStorm.
 * User: John
 * Date: 17.7.2018.
 * Time: 20:14
 */


?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "Template/head.php" ?>
  </head>
  <body>
    <div class="grid-container">
        <div class="header">
            <?php include_once "Template/nav.php" ?>
        </div>

        <div class="grid-x mjesto">
            <div class="cell small-6 pad">
                <h2>O nama...</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged.
                </p>
                <ul class="social">
                    <li>
                    <a href="https://github.com/ivankne/Vjezbanje/tree/master/LjetniZadatak" target="_blank">
                        <i class="fi-social-github size-60"></i>
                    </a>
                    </li>
                    <li>
                        <a href="https://github.com/ivankne/Vjezbanje/tree/master/LjetniZadatak" target="_blank">
                            <i class="fi-social-github size-60"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/bechar69" target="_blank">
                            <i class="fi-social-facebook"></i></li>
                    </a>
                    <li>
                        <a href="https://plus.google.com/117404874896351852490" target="_blank">
                            <i class="fi-social-google-plus"></i>
                        </a>
                    </li>
                </ul>
            </div>


            <div class="cell small-6 pad" id="map">

            </div>

        </div>
        <footer>
            <?php include_once "Template/footer.php" ?>
        </footer>
    </div>

<?php include_once "Template/script.php" ?>
  </body>
</html>
