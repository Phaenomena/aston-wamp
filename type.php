<?php

// LES TYPES

/**
 * int
 * boolean
 * string
 * null
 * float
 * array
 * resource
 * object
 */


// Les ressources

// r == read
$fp = fopen('contacts.csv', 'r');

echo gettype($fp);
var_dump($fp);
echo fread($fp, 30);
echo fread($fp, filesize('contacts.csv'));

fclose($fp);

echo '<br>';
echo substr('Lorem ipsum dolor sit amet, consectetur cras amet.', 0, 30) . '...';

echo '<br>';
print('Hello, world');
echo '<br>';

function debug($value) {
    echo'<pre>';
    print_r($value);
    echo'</pre>';
}

debug(range('a', 'k'));

echo '<br>';
// Les tableaux

$numbers = array (
    1,
    11=> 2,
    3,
);
$numbers[] = 18;

unset($numbers[45]);

$num[] = 50;
$num[] = 26;
echo $num[1];

$num = [];
debug($num);

// Création d'un tableau de nom

$names = ['smith', 'morgan', 'snow', 'koch', 'doe'];

?>

<table>
    <tr>
        <th>Nom</th>
    </tr>
    <?php for ($index = 0; $index < count($names); $index++) : ?>
    <tr>
        <td><?= $names[$index]; ?></td>
    </tr>
    <?php endfor; ?>
</table>


<?php
echo '<br>';

// LES TABLEAUX ASSOCIATIFS
// tableau multi dimensionnel (tableau dans un tableau)

$user = array(
    'prenom' => 'John',
    'nom' => 'Doe',
    'age' => 100,
    'addresses' => [
        '221B Baker Street',
        '21 Jump Street',
    ],
);
$user['pays'] = 'USA';
echo $user['prenom'] . ' ' . $user['nom'];
echo '<br>';
echo $user['addresses'][1] . ' ' . $user['addresses'][0];

echo '<br>';
$store = [
    ['fruits' => array('kiwi', 'orange', 'banane', ['fraise' => 'guariguette'])],
    array(['Machine à laver'], 'legumes' => ['carotte', 58 => 'courgette', 63, 'pomme de terre']),
    'boissons' => [
        'alcool' => ['whisky', 'bière', 12 => 'vodka'],
        'jus de pomme',
        1.6 => "Jus d'Orange",
        'eau',
        array (
            8 => ['H2O', array(array([[89]]))]
        )
    ]
];

// debug($store);


// Les boucles
echo '<br>';

$etages = array(0, 1, 2, 3, 4, 5);

next($etages); //1
next($etages); //2
prev($etages); //1
end($etages); //5
// reset($etages); //0

echo '<br>';
echo current($etages) . ' ' . key($etages);

echo '<br>';
while (key($etages) !== null) {
    echo 'Etage: ' . current($etages) . '<br>';
    next($etages);
};

// Version 1
$a = 5;
$b = $a;
$b = 12;

echo $a; // a = 5 car a et b ont une adresse mémoire différente, b a copié la VALEUR de a
echo '<br>';

// Version 2
$a = 5;
$b = &$a;
$b = 12;

echo $a; // a = 12 car b possède l'adresse memoire de a. Ils partagent la même adresse mémoire


echo '<br>';

$condition = false;
$counter = 0;

do {
    echo 'Voulez-vous commencer la partie<br>';
    if ($counter === 2) {
        $condition = false;
    }
    $counter++;
} while ($condition);

echo '<br>';
$countries = ['France', 'Italie', 'Espagne', 'Pologne','Allemagne'];
?>

<?php
function selectHTML($data, $selected = null) {
    $str = '<select>';
    foreach ($data as $key => $value) :
        $attr = $selected == $key ? ' selected' : '';
        $str .= sprintf('<option value="%s"%s>%s</option>', $key, $attr, $value);
                // echo '<option value="'. $key . '" selected="' . $value[4] . '">' . $value . '</option>';
    endforeach;
    $str .= '</select>';

    return $str;
}
echo selectHTML($countries, 4);
?>
