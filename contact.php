<?php
/**
 * $prenom = null;
 *
 * if (isset($_POST['prenom'])) {
 * $prenom = $_POST['prenom'];
 * }
 */

// Méthode simplifiée
// $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : null;


// Utilisation de fonction

function getPost($name, $default = null) {
    if (isset($_POST[$name])) {
        return $_POST[$name];
    }
    return $default;
}



var_dump(getPost('email')); // retourne null
var_dump(getPost('email', 'toto@gmail.com')); // retourne le mail par défaut

$prenom = getPost('prenom');
$nom = getPost('nom');
$phone = getPost('phone');

function isValid($name) {
    return !empty(trim($name));
}

    //Méthode factorisée
if (isValid($prenom) && isValid($nom) && isValid($phone)) {
    $row = "$prenom;$nom;$phone\r\n";
    // CSV = COMMA SEPARATED VALUE
    file_put_contents('contacts.csv', $row, FILE_APPEND);
}
// Méthode répétée
// if (!empty(trim($prenom)) && !empty(trim($nom)) && !empty(trim($phone))) {
 //   $row = "$prenom;$nom;$phone\r\n";
  //  file_put_contents('contacts.csv', $row, FILE_APPEND);
// }


// Méthode php 7
// $prenom = $_POST['prenom'] ?? null;

?><!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>

<?php  if ($prenom) : ?>
    <div>
        Vous êtes <?php echo "$prenom $nom"; ?> et votre numéro est le <?php echo $phone; ?>
    </div>
<?php  endif; ?>

<form action="contact.php" method="post">
    <div>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" value="<?php echo $prenom; ?>">
    </div>
    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="<?php echo $nom; ?>">
    </div>
    <div>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" value="<?php echo $phone; ?>">
    </div>
    <button type="submit">Ajouter</button>
</form>

<div>

    <h2>Liste des contacts</h2>

    <?php

    $rows = file('contacts.csv');
//    var_dump(explode(';', $rows[0]));

    ?>

    <table>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Phone</th>
        </tr>
        <?php for ($i = 0; $i < count($rows); $i++) : ?>
            <?php $contact = explode(';', $rows[$i]); ?>
            <tr>
                <td><?php echo $contact[0]; ?></td>
                <td><?php echo $contact[1]; ?></td>
                <td><?php echo $contact[2]; ?></td>
            </tr>
        <?php endfor; ?>

    </table>
</div>

</body>
</html>