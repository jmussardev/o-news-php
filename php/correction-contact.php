<pre><?php

// Mon formulaire de contact va envoyer les données vers l'URL
// php/post-contact.php
// => donc ce script sera alors exécuté

// ----- POST ------
echo '<h3>POST</h3>';

// Je veux récupérer la saisie du prénom
// https://www.php.net/manual/fr/function.filter-input.php
$firstname = filter_input(INPUT_POST, 'firstname');
var_dump($firstname);

// Je veux récupérer la saisie du nom
$lastname = filter_input(INPUT_POST, 'lastname');
var_dump($lastname);

// Pour récupérer une donnée envoyée en POST
// $var = filter_input(INPUT_POST, 'name-de-l-input-du-form');

// ----- GET ------
echo '<h3>GET</h3>';

// Je veux récupérer la saisie du prénom
// https://www.php.net/manual/fr/function.filter-input.php
$firstname = filter_input(INPUT_GET, 'firstname');
var_dump($firstname);

// Je veux récupérer la saisie du nom
$lastname = filter_input(INPUT_GET, 'lastname');
var_dump($lastname);

// Pour récupérer une donnée envoyée en GET
// $var = filter_input(INPUT_GET, 'name-de-l-input-ou-select-ou-textarea-du-form');

// ------ Tableaux des données en input -------
echo '<h3>tableaux des données en input</h3>';

// Apache reçoit les données du navigateur
// ensuite, il transmet ces données à PHP avant toute exécution de code
// puis, PHP génère ces 2 variables $_GET & $_POST
// $_GET contient toutes les données envoyées en GET
// $_POST contient toutes les données envoyées en POST
print_r($_GET);
print_r($_POST);
// => les données transmises en GET ou en POST, sont TOUJOURS des STRINGs

// Je veux récupérer la saisie du nom en POST
// Attention à bien vérifier que la clé existe avant d'y accéder (le name est modifiable dans le navigateur)
// if (array_key_exists('lastname', $_POST)) {
if ( isset( $_POST['lastname'] ) ) {
    $lastname = $_POST['lastname'];
}
else {
    echo 'Lastname non fourni, petit malin<br>';
}

// ----------- Super Globales -----------
// et quand c'est pas super globales ? => on verra la différence + tard
// $_GET, $_POST, $_ENV, $_SERVER
// Elles sont toutes générées par PHP au début de chaque script
// print_r($_SERVER);


// ------ récupérer les données du form et VALIDER -----
// récupération des données
$gender = filter_input(INPUT_POST, 'gender');
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');
$source = filter_input(INPUT_POST, 'source');
$message = filter_input(INPUT_POST, 'message');
$infosOk = filter_input(INPUT_POST, 'infos-ok');

// Validation des données
// => vérifier que les données sont correctes
if ($gender == 'madame' || $gender == 'monsieur') {
    echo 'gender ok<br>';
    // TODO quelque chose à faire ?
}
else {
    echo 'Veuillez renseigner correctement le genre<br>';
}

if (strlen($firstname) >= 2) {
    echo 'prénom ok<br>';
}
else {
    echo 'Le prénom est vide ou invalide (au moins 2 caractères)<br>';
}

if (strlen($lastname) >= 2) {
    echo 'nom ok<br>';
}
else {
    echo 'Le nom est vide ou invalide (au moins 2 caractères)<br>';
}

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'email ok<br>';
}
else {
    echo 'L\'adresse email saisie est vide ou incorrecte<br>';
}

// Message, on valide si la variable n'est pas vide
if ( !empty($message) ) {
    echo 'message ok<br>';
}
else {
    echo 'Veuillez saisir un message, svp<br>';
}

// Digresion isset
if (isset($varQuiNexistePAs)) {
    echo 'ha bon ?<br>';
}
else {
    echo 'non, elle n\'existe pas, et je n\'ai pas eu d\'erreur';
}

// isset vs empty -------
// isset teste l'existence de la variable
// empty teste l'existence d'une valeur

// si infos-ok est coché => il n'est pas vide
// Rappel : "!" signifie "not" (contraire) => il inverse la valeur booléenne
//             true => false
//             false => true
// rappel : "!=" (opérateur de comparaison) signifie différente de => "NOT" EGAL
if (!empty($infosOk)) {
    echo 'Merci d\'avoir confirmer ces données<br>';
}
else {
    echo 'Veuillez valider l\'exactitude de ces données, svp<br>';
}

// -- VALIDATION DES DONNEES v2 --
// nos conditions ne servent pas à savoir si le contenu est correct
// => non, on cherche le cas d'un contenu incorrect

// Initialiser la variable stipulant si les données sont toutes correctes à vrai
$formOk = true;
// Si on trouve une erreur, on passe ce booléen à faux

// Genre => inverse de la condition v1
// if ($gender == 'madame' || $gender == 'monsieur')
if ($gender != 'madame' && $gender != 'monsieur') {
    // => j'affiche un message d'erreur que si nécessaire
    echo 'Veuillez renseigner correctement le genre<br>';
    $formOk = false;
}

// Prénom => inverse de la condition v1
// if (strlen($firstname) >= 2)
if (strlen($firstname) < 2) {
    echo 'Le prénom est vide ou invalide (au moins 2 caractères)<br>';
    $formOk = false;
}

// etc.

// A la fin, on va faire un traitement (envoyer un email, stocker les infos)
// mais UNIQUEMENT si toutes les données sont correctes
if ($formOk) {
    // TODO traitement
}
else {
    // TODO Réafficher le formulaire avec les messages d'erreurs
    // => inclusion des 3 templates
}