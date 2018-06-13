<?php
     $broj1 = isset($_GET["broj1"])? $_GET["broj1"]:0;
     $broj2 = isset($_GET["broj2"])? $_GET["broj2"]:0;
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <style>
        table {
          width: 100%; 
        }
        td {
          text-align: right;
          font-size: 2rem;  
        }
        h2{padding: 20px;}
    </style>
  </head>

  <body>
        <h2>Unesi željeni broj redaka i supaca</h2>
        
        <form>
          <div class="grid-x grid-padding-x">
            <div class="large-6 medium-3 small-1 cell">
              <label>Unesi X<input type="text" name="broj1" placeholder="redak"/></label>
            </div>
            <div class="large-6 medium-3 small-1 cell">
              <label>Unesi Y<input type="text" name="broj2" placeholder="stupac"/></label>
            </div>
            <input class="success button small expanded" type="submit" value="Kreiraj!"/>
          </div>
        </form>

        <table>
          <tbody> 
          <?php
          for($i=0;$i<$broj1;$i++)
          {
            echo "<tr>";
            for($j=0;$j<$broj2;$j++)
            {
              echo"<td>" . ($i*$j) . "</td>";
            }
          echo"</tr>";  
          }
          ?>
          </tbody>
        </table>

  </body>

</html>  