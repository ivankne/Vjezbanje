<div class="show-for-large grid-x">
    <div class="cell small-1 logo">
        <img src="<?php echo $putanjaAPP; ?>img/logo.svg">
    </div>
    <div class="cell small-5">
       <h1>Gazzer</h1>
    </div>
    <div class="cell small-6">
        <ul class="align-right vertical medium-horizontal menu">
            <li>
                <a href="<?php echo $putanjaAPP;?>index.php">
                    <i class="fi-home"> </i>
                </a>
            </li>

            <?php if(isset( $_SESSION[$idAPP."o"])): ?>
                <li>
                    <a href="<?php echo $putanjaAPP; ?>private/bend/bend.php">
                        <i class="fi-music"> </i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $putanjaAPP; ?>private/clanovi/clanovi.php">
                        <i class="fi-torsos-all"> </i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $putanjaAPP; ?>private/dogadaji/dogadaji.php">
                        <i class="fi-calendar"> </i>
                    </a>
                </li>
            <?php endif;?>

            <li>
                <a href="<?php echo $putanjaAPP;?>contact.php">
                    <i class="fi-telephone"> </i>

                </a>
            </li>
            <li>
                <a href="<?php echo $putanjaAPP; ?>about.php">
                    <i class="fi-marker"> </i>
                </a>
            </li>
            <li>
                <?php if(!isset( $_SESSION[$idAPP."o"])): ?>
                    <a href="<?php echo $putanjaAPP;?>login.php">
                        <i class="fi-plus"> </i>
                    </a>
                <?php else: ?>
                    <a href="<?php echo $putanjaAPP;?>logout.php">
                        <i class="fi-power"> </i>
                    </a>
                <?php endif; ?>
            </li>
        </ul>
    </div>

</div>

<div class="show-for-small-only">
    <div class="cell small-6 text-center">
        <h1>Gazzer</h1>
    </div>
<ul class="vertical menu" data-responsive-menu="drilldown medium-accordion"  data-dropdown-menu>
    <li><a href="#"><i class="fi-list"></i></a>
        <ul class="menu vertical">
            <li>
                <a href="<?php echo $putanjaAPP;?>index.php">
                    <i class="fi-home"> </i>
                </a>
            </li>
            <?php if(isset( $_SESSION[$idAPP."o"])): ?>
                <li>
                    <a href="<?php echo $putanjaAPP; ?>private/bend/bend.php">
                        <i class="fi-music"> </i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $putanjaAPP; ?>private/clanovi/clanovi.php">
                        <i class="fi-torsos-all"> </i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $putanjaAPP; ?>private/dogadaji/dogadaji.php">
                        <i class="fi-calendar"> </i>
                    </a>
                </li>
            <?php endif;?>

            <li>
                <a href="<?php echo $putanjaAPP;?>contact.php">
                    <i class="fi-telephone"> </i>

                </a>
            </li>
            <li>
                <a href="<?php echo $putanjaAPP; ?>about.php">
                    <i class="fi-marker"> </i>
                </a>
            </li>
            <li>
                <?php if(!isset( $_SESSION[$idAPP."o"])): ?>
                    <a href="<?php echo $putanjaAPP;?>login.php">
                        <i class="fi-plus"> </i>
                    </a>
                <?php else: ?>
                    <a href="<?php echo $putanjaAPP;?>logout.php">
                        <i class="fi-power"> </i>
                    </a>
                <?php endif; ?>
            </li>
        </ul>
    </li>
</ul>
</div>


