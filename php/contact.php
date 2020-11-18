<?php 
if (isset($_GET['prenom'])) {
    $prenom = $_GET['prenom'];
}
else {
    $prenom = "";
}

if (isset($_GET['nom'])) {
    $nom = $_GET['nom'];
}
else {
    $nom = '';
}

if (isset($_GET['gender'])) {
    $gender = $_GET['gender'];
}
else {
    $gender ='';
}

if (isset($_GET['mediaSelect'])) {
    $mediaSelect = $_GET['mediaSelect'];
}
else {
    $mediaSelect = '';
}
?>

<!-- ================================================================================================================================ -->



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
            <header class="mainHeader--contact">
                <div class="mainHeader_logo">
                    <div class="mainheader_logo_title">
                        <h1>O'CLOCK</br>STUDENTS</br>NEWS</h1>
                    </div>
                </div>
                <aside class="mainHeader_aside">
                    <p>
                        <h1> Say a word <em>contact us</em> </h1>
                    </p>
                    <p>Siquis enim militarium vel honoratorum aut nobilis inter suos rumore tenus esset insimulatus fovisse partes hostiles, iniecto onere catenarum in modum beluae trahebatur et inimico urgente vel nullo, quasi sufficiente
                    </p>
                </aside>
                <nav class="mainHeader_nav">
                    <?php include 'inc/content/mainHeader-nav.php'; ?>
                </nav>
            </header> 


            <section class="sectionRight">
    
             <header class='sectionRight_header'>
                  <h1 class='sectionRight_header_title'> Contact </h1>
             </header>
             <!-- <div><?php   print_r($_POST);     ?></div> -->
             <div class='sectionRight_mainBlock'>
                  <form method="POST" action="#" class='sectionRight_contactForm'>
                    <fieldset class='fieldset1'>
                            <legend>Identité</legend>
                            <div class="formChamps">
                                <label class='formLabel'> Je suis </label>
                                <span class='inputChamps'>
                                    <?php 
                                    if ($gender === 'woman') {
                                        echo'<input type="radio" id="woman" name="gender" value="woman" checked>';
                                    }
                                    else {
                                          echo'<input type="radio" id="man" name="gender" value="man" checked>';
                                    }
                                    ?>
                                    <label for='woman' class='gender_choice'> une femme /</label>
                                    <?php 
                                    if ($gender === 'man') {
                                        echo'<input type="radio" id="man" name="gender" value="man" checked>';
                                    }
                                    else {
                                        echo '<input type="radio" id="man" name="gender" value="man">';
                                    }
                                    ?>
                                    <label for='man' class='gender_choice'> un homme </label>
                                </span>
                            </div>
                            <div class="formChamps">
                                <label class='formLabel2'for="prenom">Mon prénom est</label>
                                <input class='inputChamps2' type='text' name='prenom' id='prenom' placeholder="Prénom">
                            </div>
                            <div class="formChamps">
                                <label  class='formLabel' for="nom">Et mon nom,</label>
                                <input class='inputChamps2' type='text' name='nom' id='nom' placeholder="Nom"> 
                            </div>
                            <div class="formChamps">
                                <label class="formLabel" for="mediaSelect">J'ai connu le site grâce à</label>
                                <select class='inputChamps2' name="mediaSelect" id="mediaSelect">
                                <?php 
                                if ($mediaSelect !== '') {
                                    echo '<option value="" disabled hidden>Choisir</option>';
                                }
                                else {
                                    echo '<option value="" disabled selected hidden>Choisir</option>';
                                }
                                ?>
                                <?php 
                                    $decouvertes = [
                                        'facebook',
                                        'twitter',
                                        'google',
                                        'bouche à oreilles',
                                        'jt de 13h',
                                        'autre',
                                    ];
                                    foreach ($decouvertes as $media)
                                    if ( $mediaSelect === $media){
                                        echo '<option value="'.$media.'" selected>'.$media.'</option>';
                                    }
                                    else {
                                        echo '<option value="'.$media.'">'.$media.'</option>';
                                    }
                                ?>
                                </select>
                            </div>
                    </fieldset></br>
                    <fieldset class='fieldset1'>
                            <legend>Message</legend>
                            <div class="formChamps">
                                <label class="formLabel for="email">Répondez-moi via</label>
                                <input class='inputChamps2' type="email" name='email' id="mail" placeholder="Adresse e-mail" class='inputChamps'>
                            </div>
                            <div class="formChamps">
                                <label class="formLabel for="message">Je voulais vous dire que </label>
                                <textarea class='inputChamps2' name='message' id="message" rows="4">Votre message</textarea>
                            </div>
                            <div class="formChamps">
                                <label class="formLabel for="fichier">Et vous montrer ça aussi</label>
                                <input class='inputChamps' type='file' name='fichier' id="fichier">
                            </div>
                    </fieldset></br>
                    <fieldset class='fieldset1'>
                        <div class="formChamps">
                            <label class="formLabel" for="certification">Je certifie la véracité de ces informations.</label>
                            <span class='inputChamps'>
                             <input  type='checkbox' name='certification' id="certification">    
                            </span>
                        </div>
                    </fieldset></br>
                    <div class='submitBlock'>
                     <input class='form_submitBtn' type='submit' value="Envoyer"> 
                    </div>
                 </form>
             </div>
          </section>
        </div>
    </body>
</html>
