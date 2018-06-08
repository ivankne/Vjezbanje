<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Vjezba1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

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
            padding-top: 100px;
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
  <a class="nav-link" href="#">Nadzorna ploča</a>
  <a class="nav-link" href="login.php">Login</a>
</nav>

<div class="container">
    <h1>Ovo je Homepage koji svi vide!</h1>
</div>

</body>
</html>