<?php
if(isset($_POST["korisnik"]))
{
    if($_POST["korisnik"]==="")
    {
        header("location: login.php?poruka=2"); //case "2"; echo "Niste unijeli korisnika!";       
        exit;
    }

    if(($_POST["korisnik"]==="edunova" && $_POST["lozinka"]==="e")
    ||
    ($_POST["korisnik"]==="ivan" && $_POST["lozinka"]==="i"))
        //ako je uneseno ipsravno, pusti dalje    
        {
            session_start();
            $_SESSION["autoriziran"]="Edunova - " . $_POST["korisnik"];
            header("location: nadzornaPloca.php"); 
        }else
            {
                header("location: login.php?poruka=1"); // echo "Niste unijeli korisnika!";
            }  
}