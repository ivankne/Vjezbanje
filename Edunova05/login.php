<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Vjezba1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        form{
            border: 1px solid #ccc;
            padding: 10px;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .container {
            padding: 16px;
            width: 500px;
            margin: 0 auto;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        nav{
            background-color: #383;
            padding: 15px;
        }
        nav a{
            color: white;
            text-decoration: none;
            padding-right: 10px;
        }

</style>
</head>

<body>

<nav class="nav">
  <a class="nav-link active" href="index.php">Home</a>
  <a class="nav-link" href="nadzornaPloca.php">Nadzorna ploča</a>
  
</nav>

<div class="container">
        
    <h2>Login</h2>

    <form method="post" action="autoriziraj.php">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="korisnik">

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="lozinka">
            
        <input type="submit" value="Autoriziraj">
    </form>
</div>

<?php
    if(isset($_GET["poruka"]))
    {
        switch($_GET["poruka"])
        {
            case "1":
                echo "Neispravan unos imena i lozinke!";
                break;
            case "2":
                echo "Niste unijeli korisnika!";
                break;
            default:
                echo "";
                break;        
        }
    }
?>

</body>
</html>