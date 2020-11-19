<?php
include 'inc/data.php';
include 'inc/functions.php';
// je veux récupérer la donné "id" envoyé en GET
$articleId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

// ensuite je récupère les données de l'article en question dans le tableau de tous les articles 
$articleInfos = getSingleArticle($articleId);
// debug
// print_r($post); exit;
include 'inc/header.tpl.php';
include 'inc/article.tpl.php';
include 'inc/footer.tpl.php';

    





 