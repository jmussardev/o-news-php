
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>oNews</title>

    <!-- Reboot.css est un reset amélioré (avec des valeurs par défaut standardisées) https://getbootstrap.com/docs/4.1/content/reboot/ -->
    <link rel="stylesheet" href="../css/reboot.css">
    <link rel="stylesheet" href="../css/article.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<?php include 'include/section-left.php'?>

<section class="section_part section_part_right">
    <header class='section_part_right_header'>
    <h1 class='section_part_right_header_title'> <?php echo $articleInfos ['titre'] ?> </h1>
    </header>
    
    <div class='section_part_right_group_article'>
      <article class="posted_article">
    
        <p><span class="sticker_article sticker_article_<?php echo $articleInfos ['catégorieClass'] ?>"><?php echo $articleInfos ['catégorie'] ?></span>
        <p class='posted_article_infos'><img src='<?php echo $articleInfos ['image_auteur'] ?>' alt='icon de john' /> 
            <strong> <?php echo $articleInfos ['auteur'] ?> </strong><span class="article_date"> <?php echo $articleInfos ['dateHtml'] ?></span>
            </p>
        <p class="posted_article_content"><?php echo $articleInfos ['texte'] ?> </p>

        <p><a href='../php/index.php' class='article_back_link'>Back to home</a></p>

       

       </article>
    </div>
</section>

</body>
</html>
