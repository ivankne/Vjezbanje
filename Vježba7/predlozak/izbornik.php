<div class="title-bar" data-responsive-toggle="izbornik" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle="izbornik"></button>
    <div class="title-bar-title"><?php echo $nazivAPP; ?></div>
</div>
<br>

<div class="hide-for-small">
        <nav>
            <ul class="side-nav">
                <?php if(isset( $_SESSION[$idAPP."o"])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $putanjaAPP; ?>privatno/nadzornaPloca.php">
                        <i class="fi-burst-new">Nadzorna ploča</i>
                    </a>
                </li>
                <?php endif;?>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo $putanjaAPP;?>kontakt.php">
                        <i class="fi-burst-new">Kontakt</i>

                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo $putanjaAPP; ?>onama.php">
                        <i class="fi-burst-new">O nama</i>
                    </a>
                </li>
                <li class="nav-item ">
                    <?php if(!isset( $_SESSION[$idAPP."o"])): ?>
                        <a class="nav-link" href="<?php echo $putanjaAPP;?>prijava.php">
                            <i class="fi-burst-new">Prijava</i>
                        </a>
                    <?php else: ?>
                        <a class="nav-link" href="<?php echo $putanjaAPP;?>odjava.php">
                            <i class="fi-burst-new">Odjava</i>
                        </a>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
</div>


