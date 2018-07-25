<!--<div class="title-bar" data-responsive-toggle="nav" data-hide-for="small">
    <button class="menu-icon" type="button" data-toggle="nav"></button>
</div>
<ul class="align-right vertical medium-horizontal menu">
    <li><a href="index.php">Početna</a></li>
    <li><a href="#">prvi</a></li>
    <li><a href="#">prvi</a></li>
    <li><a href="login.php">Prijavi se!</a></li>
</ul>
-->



<div class=" veliki show-for-large">
        <ul class="align-right vertical medium-horizontal menu">


            <li>
                <a href="<?php echo $putanjaAPP;?>index.php">
                    <i class="fi-home"> Početna</i>
                </a>
            </li>

            <?php if(isset( $_SESSION[$idAPP."o"])): ?>
                <li>
                    <a href="<?php echo $putanjaAPP; ?>private/db/clanovi.php">
                        <i class="fi-torsos-all"> Članovi</i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $putanjaAPP; ?>private/db/dogadaji.php">
                        <i class="fi-calendar"> Događaji</i>
                    </a>
                </li>
            <?php endif;?>

            <li>
                <a href="<?php echo $putanjaAPP;?>contact.php">
                    <i class="fi-telephone"> Kontakt</i>

                </a>
            </li>
            <li>
                <a href="<?php echo $putanjaAPP; ?>about.php">
                    <i class="fi-music"> O nama</i>
                </a>
            </li>
            <li>
                <?php if(!isset( $_SESSION[$idAPP."o"])): ?>
                    <a href="<?php echo $putanjaAPP;?>login.php">
                        <i class="fi-burst-new"> Prijava</i>
                    </a>
                <?php else: ?>
                    <a href="<?php echo $putanjaAPP;?>logout.php">
                        <i class="fi-burst-new"> Odjava</i>
                    </a>
                <?php endif; ?>
            </li>
        </ul>
</div>

<div class="show-for-small-only">
<ul class="dropdown menu icons" data-dropdown-menu>
    <li><a href="#"><i class="fi-list"></i></a>
        <ul class=" menu vertical">
            <?php if(isset( $_SESSION[$idAPP."o"])): ?>
                <li>
                    <a href="<?php echo $putanjaAPP; ?>private/db/clanovi.php">
                        <i class="fi-torsos-all"> Članovi</i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $putanjaAPP; ?>private/db/dogadaji.php">
                        <i class="fi-calendar"> Događaji</i>
                    </a>
                </li>
            <?php endif;?>

            <li>
                <a href="<?php echo $putanjaAPP;?>index.php">
                    <i class="fi-home"> Početna</i>
                </a>
            </li>

            <li>
                <a href="<?php echo $putanjaAPP;?>contact.php">
                    <i class="fi-telephone"> Kontakt</i>
                </a>
            </li>
            <li>
                <a href="<?php echo $putanjaAPP;?>about.php">
                    <i class="fi-music"> O nama</i>
                </a>
            </li>
            <li>
                <?php if(!isset( $_SESSION[$idAPP."o"])): ?>
                    <a href="<?php echo $putanjaAPP;?>login.php">
                        <i class="fi-burst-new"> Prijava</i>
                    </a>
                <?php else: ?>
                    <a href="<?php echo $putanjaAPP;?>logout.php">
                        <i class="fi-burst-new"> Odjava</i>
                    </a>
                <?php endif; ?>
            </li>
        </ul>
    </li>

</ul>
</div>


