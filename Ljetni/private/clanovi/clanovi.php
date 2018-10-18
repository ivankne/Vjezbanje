<?php include_once "../../config.php";
if(!isset($_SESSION[$idAPP."o"])){
    header("location: " . $putanjaAPP . "logout.php");
}

$stranica=1;
if(isset($_GET["stranica"])){
    $stranica=$_GET["stranica"];
}

$requirement="";
if(isset($_GET["requirement"])) {
    $requirement = $_GET["requirement"];
}


$izraz = $veza->prepare("
    select count(a.sifra) from clan a inner join bend b
    on a.bend=b.sifra where concat(a.ime, ' ',a.prezime) 
    like :requirement                         
                        ");
$izraz->execute(array("requirement"=>"%" . $requirement . "%"));
$ukupnoClanova = $izraz->fetchColumn();
$ukupnoStranica=ceil($ukupnoClanova/10);

if($stranica>$ukupnoStranica){
    $stranica=$ukupnoStranica;
}
if($stranica==0){
    $stranica=1;
}

?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "../../Template/head.php" ?>
  </head>
  <body>
    <div class="grid-container">
        <div class="header">
            <?php include_once "../../Template/nav.php" ?>
        </div>

        <div class="grid-x">
            <div class="cell small-12 pad">
                <h2 class="text-center">Članovi</h2>


                <h4>Pretraži članove</h4>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
                    <div class="input-group input-group-rounded">
                        <input class="input-group-field" type="text" name="requirement" value="<?php echo $requirement ?>">
                        <div class="input-group-button">
                            <input type="submit" value="Traži" class="button small-only-expanded">
                        </div>
                    </div>
                </form>

                    <a href="new.php" class="success button expanded">Dodaj</a>


                   <?php
                   $izraz =  $veza->prepare("
                            select a.sifra, a.ime, a.prezime, a.koeficijent, b.naziv_benda as bend, a.email
                            from clan a left join bend b
                            on a.bend=b.sifra 
                            where concat(a.ime, ' ' ,a.prezime, ' ', b.naziv_benda)                      
                            like :requirement 
                            limit :stranica, 10                      
                            ");
                       $izraz->bindValue("stranica",($stranica*10) - 10,PDO::PARAM_INT);
                       $izraz->bindValue("requirement","%" . $requirement . "%");
                       $izraz->execute();
                       $rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
                   ?>


                <table class="responsive">
                    <thead>
                    <tr>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Bend</th>
                        <th>Koeficijent</th>
                        <th>Email</th>
                        <th>
                            <a href="#">
                                <i class="fi-mail" title="Pošalji email svima"></i>

                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach($rezultati as $red):?>
                            <tr>
                                <td data-label="ime"><?php echo $red->ime; ?></td>
                                <td data-label="prezime"><?php echo $red->prezime; ?></td>
                                <td data-label="bend"><?php echo $red->bend; ?></td>
                                <td data-label="koeficijent"><?php echo $red->koeficijent; ?></td>
                                <td data-label="email"><?php echo $red->email; ?></td>
                                <td>
                                    <a href="edit.php?sifra=<?php echo $red->sifra; ?>">
                                        <i class="fi-page-edit"></i>
                                    </a>
                                    <?php if($red->bend==0): ?>
                                        <a onclick="return confirm('Sigurno obrisati <?php echo $red->ime?>')" href="delete.php?sifra=<?php echo $red->sifra; ?>">
                                            <i class="fi-trash" style="color: red;"></i>
                                        </a>
                                    <?php endif;?>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>

                <?php
                    if($ukupnoStranica==0){
                        $ukupnoStranica=1;
                    }
                ?>
                <nav aria-label="Pagination" class="text-center">
                    <ul class="pagination">
                        <li class="pagination-previous">
                            <a href="clanovi.php?stranica=<?php echo $stranica-1; ?>&requirement=<?php echo $requirement ?>" aria-label="Next page">Prethodno <span class="show-for-sr">page</span></a></li>
                        <li class="current"><span class="show-for-sr">Trenutno na</span> <?php echo $stranica; ?>/<?php echo $ukupnoStranica; ?></li>

                        <li class="pagination-next"><a href="clanovi.php?stranica=<?php echo $stranica+1; ?>&requirement=<?php echo $requirement ?>" aria-label="Next page">Sljedeće <span class="show-for-sr">page</span></a></li>

                    </ul>
                </nav>

            </div>

        </div>

        <footer>
            <?php include_once "../../Template/footer.php" ?>
        </footer>
    </div>

<?php include_once "../../Template/script.php" ?>
  </body>
</html>