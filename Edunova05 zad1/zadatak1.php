<doctype! html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Od1do100</title>

    <style>
        p{
            display: block;
         }
        .crveni{
            color:red; 
        } 
    </style>

    </head>
    
<body>
    <!--<p>1</p>
    <p class="crveni">2</p>
    -->

    <?php
    for($i=1;$i<=100;$i++):
    ?>    
        <?php    
        if($i % 2 == 0):
        ?>
            <p class="crveni"><?php echo $i ?></p>
        <?php
        else:
            echo $i;
        endif;       
    endfor;
    ?>
</body>

</html>



<!--ispišite sve brojeve od 1 do 100 jedno ispod drugog. Svaki drugi neka bude crvene boje-->
