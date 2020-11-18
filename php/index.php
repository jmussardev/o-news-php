<?php
// fichier contenant les données du site 
include 'inc/data.php';
// on inclut le fichier de fonction 
include 'inc/functions.php';
// J'ai besoin de la liste de tous les articles
$articles = getArticles();




 include 'inc/header.tpl.php' ;          
 include 'inc/home.tpl.php'; 
 include 'inc/footer.tpl.php';
            
