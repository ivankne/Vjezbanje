<?php
/* Program prima tri broja, vrijednosti crvene, zelene i plave boje
Primjeljnim bojama oboja pozadinu stranice. Ako ne primi parametar stranica će biti plave boje */


?>

<!doctype html>
<html> 
    <head> 
        <meta charset="utf-8">
        <title>Vjezbanje zadatak s bojama</title>
        <style>
                body
                {
                    background-color: blue;
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