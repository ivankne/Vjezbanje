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

        <div class="grid-x ">
            <div class="cell large-6 small-12 pad">
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


            <div class="cell large-6 small-12 pad">
                <!--Slanje emaila http://php.net/manual/en/function.mail.php
                    NE RADI!!?
                -->

                <?php/*
                if(isset($_POST['submit'])){
                    $to = "mrtamburaknez@gmail.com"; // this is your Email address
                    $from = $_POST['vasemail']; // this is the sender's Email address
                    $imeiprezime = $_POST['imeiprezime'];
                    $vasemail = $_POST['vasemail'];
                    $subject = "Form submission";
                    $message = $imeiprezime . " " . $vasemail . " wrote the following:" . "\n\n" . $_POST['vasaporuka'];


                    $headers = "From:" . $from;
                    mail($to,$subject,$message,$headers);

                    // You can also use header('Location: thank_you.php'); to redirect to another page.
                    header('Location: bend.php');
                }*/
                ?>


                <form method="post" class="contact" name="contactform" >
                    <label class="">Ime i prezime</label>
                    <input type="text" placeholder="Ime i prezime" name="imeiprezime" maxlength="50" size="30">
                    <label>Email</label>
                    <input type="email" placeholder="Vaš email" name="vasemail" maxlength="80" size="30">
                    <label>Poruka</label>
                    <textarea
                            id="message" placeholder="Vaša poruka..." name="vasaporuka" maxlength="80"
                            cols="25" rows="6">
                    </textarea>
                    <p class="help-text" id="passwordHelpText">Sva polja su obavezna!</p>
                        <input type="submit" class="button" data-open="contactpopup" name="submit" value="Pošalji"/>
                </form>
            </div>

            <div class="reveal" id="contactpopup" data-reveal>
                <h1>Hvala!</h1>
                <p class="lead">Vaša poruka je uspješno poslana.</p>
                <button class="close-button" data-close aria-label="Close modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        </div>

 <footer>
    <?php include_once "Template/footer.php" ?>
 </footer>
    </div>

<?php include_once "Template/script.php" ?>
  </body>
</html>
