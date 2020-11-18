
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>oNews</title>
        <!-- Reboot.css est un reset amélioré (avec des valeurs par défaut standardisées) https://getbootstrap.com/docs/4.1/content/reboot/ -->
        <link rel="stylesheet" href="../css/reboot.css">
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="bodyWrap">
            <header class="mainHeader">
                <div class="mainHeader_logo">
                    <div class="mainheader_logo_title">
                        <h1>O'CLOCK</br>STUDENTS</br>NEWS</h1>
                    </div>
                </div>
                <aside class="mainHeader_aside">
                    <p>
                        <h1> Latest news <em>from our students</em> </h1>
                    </p>
                    <p>Siquis enim militarium vel honoratorum aut nobilis inter suos rumore tenus esset insimulatus fovisse partes hostiles, iniecto onere catenarum in modum beluae trahebatur et inimico urgente vel nullo, quasi sufficiente
                    </p>
                </aside>
                <nav class="mainHeader_nav">
                    <ul class="nav_btn">
                        <?php
                            foreach ($MenuNav as $element => $link) {
                                echo '<li class="nav_btn_item"><a href="'.$link.'">'.$element.'</a></li>';
                            }
                        ?>
                    </ul>
                </nav>
            </header> 