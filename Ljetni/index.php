<?php include_once "config.php";

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


<!--graf koji ce prikazivati prihode nastupa od prijavljenog korisnika-->
               <div class="cell pad small-12 text-center">

                <?php
                //Ne radi ispis logiranog korisnika
                    if(isset($_SESSION[$idAPP."o"])):

                        print "Pozdrav, ovdje možeš imaš pregled svojih nastupa od ovog mjeseca...";
                                //Kako? nemam pojma -.-'

                         $izraz = $veza->prepare("
                            select a.naziv, a.datum_pocetka, a.cijena,a.bend, b.naziv_benda as bend
                            from dogadaj a left join bend b
                            on a.bend=b.sifra where b.sifra = 1
                            ");
                        $izraz->execute();
                        $rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
                        ?>
                       <br>
                       <br>

                       <table class="responsive">
                           <tr>
                               <th>Naziv</th>
                               <th>Datum</th>
                               <th>Cijena</th>
                               <th>Bend</th>
                           </tr>
                           <tbody>
                           <?php foreach($rezultati as $red):?>
                           <tr>
                               <td><?php echo $red->naziv; ?></td>
                               <td><?php echo $red->datum_pocetka; ?></td>
                               <td><?php echo $red->cijena; ?></td>
                               <td><?php echo $red->bend; ?></td>
                           </tr>

                           <?php endforeach; ?>
                           </tbody>
                           </table>
                   <a href="<?php echo $putanjaAPP; ?>private/dogadaji/dogadaji.php">
                       <i class="fi-calendar size-60" style="color: #0d1932"> Idi na sve događaje ></i>
                   </a>
               </div>



            <div class="cell pad small-6 large-3 text-center">
                   <?php
                   $izraz = $veza->prepare("
                   select sum(a.cijena) as ukupno, b.naziv_benda as bend
                   from dogadaj a left join bend b
                   on a.bend=b.sifra
                   ");
                   $izraz->execute();
                   $rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
                   ?>
                    <table class="responsive">
                        <tr>
                            <th>Ukupna zarada</th>
                        </tr>

                        <tbody>
                            <?php foreach($rezultati as $red):?>
                                <tr>
                                    <td><?php echo $red->ukupno; /*Kasnije ce tu biti zarada samo od dogadaja od logiranog korisnika*/?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>



                   <?php
                    else:
                        print " ";
                    endif;
                    ?>
            </div>


        </div>

        <footer>
            <?php include_once "Template/footer.php" ?>
        </footer>
        </div>


<?php include_once "Template/script.php" ?>
  </body>
</html>