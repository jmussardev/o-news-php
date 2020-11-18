
   <section class="sectionRight">
    <header class='sectionRight_header'>
        <h1 class='sectionRight_header_title'> Lastest news </h1>
        </header>
        
        <div class='sectionRight_articleS'>

        <?php foreach ($articles as $postID => $currentPost) :   ?>
        <article class="sectionRight_articleS_post">
                <a class="post_sticker_catLink" href=""><span class="post_sticker post_sticker_<?= $currentPost['catégorieClass']; ?>"><?= $currentPost['catégorie']; ?></span></a>
                <h2><?= $currentPost['titre']; ?></h2>
                <div class='post_infos'>
                    <img src="<?= $currentPost['image_auteur']; ?>" /> 
                    <span> <strong> <?= $currentPost['auteur']; ?> </strong>
                    <span class="post_date"> <?= $currentPost['dateHtml']; ?></span></span>
                </div>
                <p class="post_content"> <?= $currentPost['texte']; ?></p>
                <p><a href='article.php?id=<?= $postID ?>' class='post_link'>Continue reading</a></p>
            </article>
        <?php  endforeach;  ?>   
    </section>
     
      