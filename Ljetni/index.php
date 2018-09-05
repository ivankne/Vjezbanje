<?php include_once "config.php"
/*
  ZADATAK
1.Aplikacija mora imati javni i privatni dio
2.Aplikacija mora imati metapodatke prema http://ogp.me/
3.Aplikacija mora imati favicon-e kreirane pomoću http://www.favicon-generator.org/
4.Aplikacija mora biti prilagodljiva minimalno dvijema različitim širinama zalona (RWD)
  - sadržaj mora biti čitljiv, vidljiv,dobro organiziran on obje ili više različitih širina zaslona
5.Javni dio mora imati početnu stranicu te kontakt stranicu s google maps kartom
6.Autorizacija se izvršava koda
7.Na stranici autorizacije postaviti minimalno 2 korisnika i lozinke za spajanje
8.Privatni dio mora imati onoliko programa (vidljivi u izborniku samo autoriziranim korisnicima) koliko imate tablica
  u bazi koje u sebi nemaju vanjske ključeve
9.Svaki program mora omogućiti CRUD - unos, čitanje, promjenu i brisanje svih podataka koji nisu vezani u nekim drugim
   tablicama vanjskim ključem.
10.Postaviti na byethost aplikaciju
11.Postaviti na github kod
12.U readme.md napisati koje su točke realizirane
13.U izborniku aplikacije postaviti stavku link na github kod
14.U izborniku aplikacije postaviti stavku link na ERA dijagram
15.Za razvoj aplikacije se koristi Foundation RWD framework
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

        <div class="grid-x pad">
            <div class="cell small-12 text-center">
                <h1>Dobro došli na Gazzer!  <i class="fi-calendar"></i></h1>
                    <h3>Jednostavni organizator za praćenje i evidenciju vaših nastupa :)</h3>
            </div>

            <?php if(!isset( $_SESSION[$idAPP."o"])): ?>
                <div class="cell sjena small-12 text-center">
                    <h3>Prijavi se <a class="zuti" href="login.php">ovdje   <i class="fi-plus"> </i></a></h3>
                </div>
            <?php endif;?>


        </div>
        <footer>
            <?php include_once "Template/footer.php" ?>
        </footer>
    </div>

<?php include_once "Template/script.php" ?>
  </body>
</html>
