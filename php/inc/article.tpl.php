



<!DOCTYPE html
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
                    <?php include 'inc/mainHeader-nav.php'; ?>
                </nav>
            </header> 
            <section class="sectionRight">
            <header class='sectionRight_header'>
    <h1 class='sectionRight_header_title'> <?php echo $articleInfos ['titre'] ?>  </h1>
    </header>
    
    <div class='sectionRight_articleS'>

    <article class="sectionRight_article">
    <a class="post_sticker_catLink" href=""><span class="post_sticker post_sticker_<?= $articleInfos['catégorieClass']; ?>"><?= $articleInfos['catégorie']; ?></span></a>
            <h2><?php echo $articleInfos ['titre'] ?></h2>
            <div class='post_infos'>
                <img src='<?php echo $articleInfos ['image_auteur'] ?>' alt='icon de john' /> 
                <span> <strong> <?php echo $articleInfos ['auteur'] ?> </strong>
                <span class="post_date"><?php echo $articleInfos ['dateHtml'] ?></span></span>
            </div>
            <p class="post_content"><?php echo $articleInfos ['texte'] ?></p>
            <p><a href='index.php' class='back_link'>Back to home</a></p>
        </article>
            </section>
        </div>
    </body>
</html>
