
   
   <header class='sectionRight_header'>
    <h1 class='sectionRight_header_title'> Lastest news </h1>
    </header>
    
    <div class='sectionRight_articleS'>

    <?php foreach ($postLists as $postID => $currentPost) :   ?>
    <article class="sectionRight_articleS_post">
            <span class="post_sticker post_sticker_<?= $currentPost['catégorieClass']; ?>"><?= $currentPost['catégorie']; ?></span>
            <h2><?= $currentPost['titre']; ?></h2>
            <div class='post_infos'>
                <img src="<?= $currentPost['image_auteur']; ?>" /> 
                <span> <strong> <?= $currentPost['auteur']; ?> </strong>
                <span class="post_date"> <?= $currentPost['dateHtml']; ?></span></span>
            </div>
            <p class="post_content"> <?= $currentPost['texte']; ?></p>
            <p><a href='article<?= $postID ?>.php' class='post_link'>Continue reading</a></p>
           </article>
    <?php  endforeach;  ?>   
    
    
      