            <section class="sectionRight">
            <header class='sectionRight_header'>
    <h1 class='sectionRight_header_title'> <?php echo $articleInfos ['titre'] ?>  </h1>
    </header>
    
    <div class='sectionRight_articleS'>

    <article class="sectionRight_article">
    <a class="post_sticker_catLink" href=""><span class="post_sticker post_sticker--<?= $articleInfos['catégorie']; ?>"><?= $articleInfos['catégorie']; ?></span></a>
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
