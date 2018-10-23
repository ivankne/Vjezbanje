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
      <link rel="stylesheet" href="<?php echo $putanjaAPP; ?>css/cropper.css">
      <style>
          .slika{
              max-width: 2rem;
              cursor: pointer;
          }

          .cropper-container, .cropper-bg{
              width: 300px !important;
              height: 300px !important;
          }
      </style>
  </head>

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

                <?php
                //Ne radi ispis logiranog korisnika
                    if(isset($_SESSION[$idAPP."o"])):

                        print "Pozdrav, ovdje možeš imaš pregled svojih nastupa od ovog mjeseca...";
                                //Kako? nemam pojma -.-'

                         $izraz = $veza->prepare("
                        select a.naziv, a.datum_pocetka, a.cijena,a.bend, b.naziv_benda as bend, b.sifra as sifra_benda
                        from dogadaj a left join bend b
                        on a.bend=b.sifra limit 5
                            ");
                        $izraz->execute();
                        $rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
                        ?>
                       <br>
                       <br>
                   <?php foreach($rezultati as $red):?>


                       <table class="responsive">
                           <tr>
                               <th>Naziv</th>
                               <th>Datum</th>
                               <th>Cijena</th>
                               <th>Bend</th>
                               <th></th>
                           </tr>
                           <tbody>

                           <tr>
                               <td><?php echo $red->naziv; ?></td>
                               <td><?php echo $red->datum_pocetka; ?></td>
                               <td><?php echo $red->cijena; ?></td>
                               <td><?php echo $red->bend; ?></td>
                               <td>
                                   <img title="Klik na sliku za promjenu" class="slika" id="s_<?php echo $red->sifra_benda;?>"
                                        src="<?php
                                        if(file_exists("img/bendovi/" . $red->sifra_benda . ".jpg")){
                                            echo $putanjaAPP . "img/bendovi/" . $red->sifra_benda . ".jpg";
                                        }else{
                                            echo $putanjaAPP . "img/nepoznato.jpg";
                                        }

                                        ?>" alt="<?php echo $red->bend ?>" />
                               </td>
                           </tr>

                           <?php endforeach; ?>
                           </tbody>
                           </table>
                   <a href="<?php echo $putanjaAPP; ?>private/dogadaji/dogadaji.php">
                       <i class="fi-calendar size-60" style="color: #0d1932"> Idi na sve događaje ></i>
                   </a>
               </div>



            <div class="cell pad  large-3 text-center">
                   <?php
                   $query = $veza->prepare("
                   select sum(a.cijena) as ukupno, b.naziv_benda as bend
                   from dogadaj a left join bend b
                   on a.bend=b.sifra where b.sifra=1
                   ");

                   $query->execute();
                   $rez = $query->fetchAll(PDO::FETCH_OBJ);
                   ?>
                    <table class="">
                        <?php foreach($rez as $res):?>
                        <tr>
                            <th>Ukupna zarada od <?php echo $res->bend  ?></th>
                        </tr>
                        <tbody>
                                <tr>
                                    <td><?php echo $res->ukupno; /*Kasnije ce tu biti zarada samo od dogadaja od logiranog korisnika*/?></td>
                                </tr>

                        </tbody>
                    </table>
            <?php endforeach; ?>

                <?php
                $novi = $veza->prepare("
                        select sifra, naziv_benda from bend
                   ");
                $novi->bindParam(":sifra",$_POST["sifra"]);
                $novi->execute();
                $result = $novi->fetchAll(PDO::FETCH_OBJ);
                ?>
                <p><button class="button success" data-open="exampleModal1">Graf zarade po mjesecima</button></p>

                <div class="reveal" id="exampleModal1" data-reveal>
                    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    <button class="close-button" data-close aria-label="Close modal" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <label>Odaberi bend

                        <select>
                            <?php foreach($result as $row):?>
                                <option id="odabrani" value="<?php echo $row->sifra;?>"><?php echo $row->naziv_benda;?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>
                </div>



                   <?php
                    else:
                        print " ";
                    endif;
                    ?>
            </div>




        </div>

        <div class="reveal small" id="odaberiSliku" data-reveal>

            <img id="image" src="<?php echo $putanjaAPP; ?>img/bendovi/nepoznato.jpg" alt="Picture">
            <input type="file" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
            <a href="#" id="spremi">Spremi</a>
            <button class="close-button" data-close aria-label="Zatvori" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <footer>
            <?php include_once "Template/footer.php" ?>
        </footer>
        </div>


<?php include_once "Template/script.php" ?>

  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://fengyuanchen.github.io/js/common.js"></script>
  <script src="<?php echo $putanjaAPP; ?>js/cropper.js"></script>
  <script>
        // S ovime izvucem sifru odabranog benda iz selecta?
      $("#odabrani").change(function() {
          var sifra = $(this).children(":selected").attr("sifra");
      });

      //SLIKA

        $(function () {
            'use strict';

            var slika;
            $(".slika").click(function(){
                slika=$(this);
                $('#odaberiSliku').foundation("open");

                return false;
            });


            $("#spremi").click(function(){

                var opcije = { "width": 200, "height": 200 };
                var result = $image.cropper("getCroppedCanvas", opcije, opcije);

                $.ajax({
                    type: "POST",
                    url: "spremiSliku.php",
                    data: "sifra_benda=" + slika.attr("id").split("_")[1] + "&slika="+result.toDataURL(),
                    success: function(vratioServer){
                        //console.log(vratioServer);
                        if (vratioServer==="OK"){
                            slika.attr("src",result.toDataURL());
                            $('#odaberiSliku').foundation("close");
                        }

                    }
                });


                return false;
            });

            var console = window.console || { log: function () {} };
            var URL = window.URL || window.webkitURL;
            var $image = $('#image');
            var options = {
                aspectRatio: 1 / 1
            };

            var originalImageURL = $image.attr('src');
            var uploadedImageName = 'cropped.jpg';
            var uploadedImageType = 'image/jpeg';
            var uploadedImageURL;


            // Cropper
            $image.on({

            }).cropper(options);


            // Import image
            var $inputImage = $('#inputImage');

            if (URL) {
                $inputImage.change(function () {
                    var files = this.files;
                    var file;

                    if (!$image.data('cropper')) {
                        return;
                    }

                    if (files && files.length) {
                        file = files[0];

                        if (/^image\/\w+$/.test(file.type)) {
                            uploadedImageName = file.name;
                            uploadedImageType = file.type;

                            if (uploadedImageURL) {
                                URL.revokeObjectURL(uploadedImageURL);
                            }

                            uploadedImageURL = URL.createObjectURL(file);
                            $image.cropper('destroy').attr('src', uploadedImageURL).cropper(options);
                            $inputImage.val('');
                        } else {
                            window.alert('Please choose an image file.');
                        }
                    }
                });
            } else {
                $inputImage.prop('disabled', true).parent().addClass('disabled');
            }

        });

      //End slika

      Highcharts.chart('container', {
          chart: {
              plotBackgroundColor: null,
              plotBorderWidth: null,
              plotShadow: false,
              type: 'pie'
          },
          title: {
              text: 'Zarada po mjesecima'
          },
          tooltip: {
              pointFormat: '{series.name}: <b>{point.y}</b>'
          },
          plotOptions: {
              pie: {
                  allowPointSelect: true,
                  cursor: 'pointer',
                  dataLabels: {
                      enabled: true,
                      format: '<b>{point.name}</b>: {point.y}',
                      style: {
                          color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                      }
                  }
              }
          },
          series: [{
              name: 'Zarada',
              colorByPoint: true,
              data:
              <?php

              $query = $veza->prepare("
               select b.naziv_benda as name, 
                a.cijena as y
                from dogadaj a
               inner join bend b
               on b.sifra=a.bend
               ");
              $query->execute();
              $rez = $query->fetchAll(PDO::FETCH_OBJ);
              echo json_encode($rez, JSON_NUMERIC_CHECK);
              ?>

          }]
      });
  </script>

  </body>

</html>