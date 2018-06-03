<?php
/* Program prima tri broja, vrijednosti crvene, zelene i plave boje
Primjeljnim bojama oboja pozadinu stranice. Ako ne primi parametar stranica će biti plave boje */

$red=isset($_POST["red"]) ? $_POST["red"] : 0;
$green=isset($_POST["green"]) ? $_POST["green"] : 0;
$blue=isset($_POST["blue"]) ? $_POST["blue"] : 255;

//ako unesemo negativan broj ili broj veci od 255, vrijednosti se postavljaju na default(plavu)
if( $red<0 || $red>255 || $green<0 || $green>255 || $blue<0 || $blue>255){
    $red=0;
    $green=0;
    $blue=255;
}
?>

<!doctype html>
<html> 
    <head> 
        <meta charset="utf-8">
        <title>Vjezbanje zadatak s bojama</title>
        <style>
                body
                {
                    background-color: rgb(<?php echo $red ?>,<?php echo $green ?>,<?php echo $blue ?>);
                }
                input
                {
                    display: block;
                    width: 100px;
                    margin: 5px;
                }
        </style>
    </head>
    <body>
        <form method="POST">
            <h2>Unesi RGB vrijednosti za pozadinsku boju!</h2>
                <label>Red<input type="text" name="red"></label>
                <label>Green<input type="text" name="green"></label>
                <label>Blue<input type="text" name="blue"></label> 
                <input type="submit" class="button" value="Odradi">          
        </form>
    </body>



</html>