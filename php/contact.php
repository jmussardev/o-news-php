<?php 
include 'inc/data.php';
//------- POST ---------
$gender = filter_input(INPUT_POST,'gender');
$prenom = filter_input(INPUT_POST,'prenom');
$nom = filter_input(INPUT_POST,'nom');
$email = filter_input(INPUT_POST,'email');
$fichier = filter_input(INPUT_POST,'fichier');
$message = filter_input(INPUT_POST,'message');
$certification =filter_input(INPUT_POST,'certification');

 





//===================================================================
include 'inc/contact.tpl.php';
include 'inc/footer.tpl.php';


