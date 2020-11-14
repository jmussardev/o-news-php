<?php
    $MenuNav = [
    'Plan du site' => 'index.php',
    'Mention légales' => '#',
    'Contact' =>  'contact.php',
    ]
?>
    <ul class="nav_btn">
        <?php
            foreach ($MenuNav as $element => $link) {
                echo '<li class="nav_btn_item"><a href="'.$link.'">'.$element.'</a></li>';
            }
        ?>
    </ul>