<?php include_once "config.php"
/**
 * Created by PhpStorm.
 * User: John
 * Date: 17.7.2018.
 * Time: 20:10
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
                <h2>Kontaktirajte nas!</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged.
                </p>
                <ul class="social">
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
                <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d357774.5045411449!2d17.91058985928774!3d45.527925182681976!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475d1277db71d887%3A0xe6f4f53e4e8f668d!2sVelimirovac!5e0!3m2!1sen!2shr!4v1532078836117"
                        width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
            </div>

        </div>

 <footer>
    <?php include_once "Template/footer.php" ?>
 </footer>
    </div>

<?php include_once "Template/script.php" ?>
  </body>
</html>
