<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>oNews</title>

    <!-- Reboot.css est un reset amélioré (avec des valeurs par défaut standardisées) https://getbootstrap.com/docs/4.1/content/reboot/ -->
    <link rel="stylesheet" href="../css/reboot.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
</head>
<body>

<section class="section_part section_part_left">


<?php   include 'include/header-left.php';
        include 'include/aside-contact.php';
        include 'include/footer-left.php'; ?>




</section>
<section class="section_part section_part_right">
    
<header class='section_part_right_header'>
    <h1 class='section_part_right_header_title'> Contact </h1>
    </header>
    <div class='sectionRight_mainBlock'>
        <form method="POST" action="#" class='sectionRight_formulaire'>
        <fieldset class='fieldset1'>
            <legend>Identité</legend>
           
            <p class='formLabels'> Je suis </br>
                Mon prénom est </br>  
                Et mon nom,</br> 
                J'ai connu le site grâce à </p>
           
            <div class='formInputs'>
                <p>
                <input type='radio' id='woman' name='sexe' value='woman'>
                 <label for='woman'> une femme /</label>
                <input type='radio' id='man' name='sexe' value='man'>
                 <label for='man'> un homme </label>
          
                <input class='inputChamps' type='text' name='prenom' id='prenom' placeholder="Prénom">
                 <input class='inputChamps' type='text' name='nom' id='nom' placeholder="Nom">
                  
                 <select name="médias" class='inputChamps'>
                      <option value="">choisir</option>
                      <option value="Facebook">Facebook</option>
                      <option value="Twitter">Twitter</option>
                      <option value="Google">Google</option>
                      <option value="Bouche à oreilles" >Bouche à oreilles</option>
                      <option value="JT de 13h de Jean-Pierre Pernault">JT de 13h de Jean-Pierre Pernault</option>
                      <option value="Autre">Autre</option>
                 </select></p>
              
            </div>
            
        </fieldset></br>

        <fieldset class='fieldset1'>
            <legend>Message</legend>
            <p class='formLabels'>Répondez-moi via</br>
             Je voulais vous dire que</br></br></br></br></br> Et vous montrer ça aussi<p> 
                <div class='formInputs2'>
                <p> <input type="mail" name='mail' placeholder="Adresse e-mail" class='inputChamps'>
             <textarea name='message' class='inputChamps' rows="4">Votre message</textarea>
             
           <input type='file' name='fichier'></div></p>
        </fieldset></br>


        <fieldset class='fieldset1'>
            <p class='formLabels'>Je certifie la véracité de ces informations. </p>
            <p class='formInputs2'><input type='checkbox' name='certification'> </p>
            
        </fieldset></br>

        <p> <input class='form_submitBtn' type='submit' value="Envoyer"> </p>

        </form>
    </div>

</section>









</body>
</html>
