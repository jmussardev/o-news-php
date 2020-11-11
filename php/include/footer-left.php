<?php
$MenuNav = [
   'Plan du site' => '#',
   'Mention légales' => '#',
   'Contact' =>  'contact.php',

]




?>

<footer class="section_part_left_footer">
    <nav class='navigation'>
        <ul class="navigation_btn">
            <?php
            foreach ($MenuNav as $element => $link) {
                echo '<li><a href="'.$link.'">'.$element.'</a></li>';
            }
            ?>
        </ul>
    </nav>
    </footer>