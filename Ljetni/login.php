<?php include_once "config.php"?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <?php include_once "Template/head.php" ?>
    <style>
        .floated-label-wrapper {
            position: relative;
        }

        .floated-label-wrapper label {
            background: #fefefe;
            color: #1779ba;
            font-size: 0.75rem;
            font-weight: 600;
            left: 0.75rem;
            opacity: 0;
            padding: 0 0.25rem;
            position: absolute;
            top: 2rem;
            transition: all 0.15s ease-in;
            z-index: -1;
        }

        .floated-label-wrapper label input[type=text],
        .floated-label-wrapper label input[type=email],
        .floated-label-wrapper label input[type=password] {
            border-radius: 4px;
            font-size: 1.75em;
            padding: 0.5em;
        }

        .floated-label-wrapper label.show {
            opacity: 1;
            top: -0.85rem;
            z-index: 1;
            transition: all 0.15s ease-in;
        }
    </style>
</head>
<body>
<div class="grid-container">
    <div class="header">
        <?php include_once "Template/nav.php" ?>
    </div>

    <div class="grid-x grid-padding-x">
        <div class="large-12 cell text-center">
            <form class="callout text-center" action="<?php echo $putanjaAPP . "authorize.php" ?>" method="post">
                <h2>Prijavi se</h2>
                <label for="email">Email</label>
                <div class="floated-label-wrapper">
                    <input type="email" id="email" name="email" placeholder="edunova@edunova.hr">
                </div>
                <label for="lozinka">Lozinka</label>
                <div class="floated-label-wrapper">
                    <input autocomplete="off" type="password" id="lozinka" name="lozinka" placeholder="e">
                </div>
                <input class="button expanded" type="submit" value="Prijava">
            </form>
        </div>
    </div>



    <footer>
        <?php include_once "Template/footer.php" ?>
    </footer>
</div>

<?php include_once "Template/script.php" ?>
</body>
</html>
