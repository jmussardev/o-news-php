<?php
$MenuNav = [
   'Plan du site' => '#',
   'Mention légales' => '#',
   'Contact' =>  '#',

]




?>







<section class="section_part section_part_left">
    <header class="section_part_left_header">
        <div class="section_part_left_logo">

        <div class="section_part_left_logo_title">
        <h1>O'CLOCK</br>STUDENTS</br>NEWS</h1>
        </div>
   
        </div>
    </header>

    <div class='section_part_left_middle'>
    <aside class="section_part_left_middle_aside">
        <p><h1>Latest news <em>from our students</em> </h1>
        </p>
        <p>Siquis enim militarium vel honoratorum aut nobilis inter suos rumore tenus esset insimulatus fovisse partes hostiles, iniecto onere catenarum in modum beluae trahebatur et inimico urgente vel nullo, quasi sufficiente
        </p>
    </aside>
    </div>
    <footer class="section_part_left_footer">
    <nav class='navigation'>
        <ul class="navigation_btn">
            <?php
            foreach ($MenuNav as $element => $link) {
                echo '<li><a href='.$link.'>'.$element.'</a></li>';
            }
            ?>
        </ul>
    </nav>
    </footer>
</section>