<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {font-family: sans-serif;}
        .table {border-collapse: collapse;}
        .table, .table td {
            border: 1px solid #333333;
            min-width: 14px;
            padding: 4px;
            text-align: center;
        }
        .table tr:first-child {
            background-color: royalblue;
            color: #ffffff;
        }
        .table tr td:first-child {
            background-color: deeppink;
            color: #ffffff;
        }
        .table tr:first-child td:first-child {
            background-color: #333333;
        }
        .grey {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>

<?php $size = $_GET['taille'] ?? 10; ?>

<nav>
    <?php for ($n = 1; $n <= 11; $n++) : ?>
    <a href="?taille=<?= $n?>"><?= $n-1?></a>
    <?php endfor; ?>
</nav>

<table class="table">
    <tr>
        <td>X</td>
        <?php for ($l = 0; $l < $size; $l++) : ?>
            <td><?= $l; ?></td>
        <?php endfor; ?>
    </tr>

    <?php for ($y = 0; $y < $size; $y++) : ?>
        <tr>
            <td><?= $y; ?></td>
            <?php for ($x = 0; $x < $size; $x++) : ?>
            <?php $class = ($x + $y) % 2 === 0 ? 'grey' : ''; ?>
            <td class="<?= $class; ?>"><?= $x * $y; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

</body>
</html>