<?php

session_start();

// ici le traitement des données du form

$username = $_POST['username']   ?? null;
$password = $_POST['password']   ?? null;
$captcha  = $_SESSION['captcha'] ?? null; // captcha généré par l'image
$key      = $_POST['key']        ?? null; // captcha saisi par l'utilisateur

$users = [
    'toto' => '1234',
    'john' => '117',
    'aria' => 'wolf',
];

if ($key === $captcha && isset($users[$username]) && $password === $users[$username]) {
    unset($_SESSION['captcha']);
    $_SESSION['username'] = $username;      // on enregistre les infos utiles
    header('Location: index.php');    // redirection vers page d'accueil
}

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.php">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>

<div class="container">
<form action="login.php" method="post">
    <div class="form-group">
        <label for="username">Identifiant</label>
        <input class="form-control" type="text" name="username" id="username">
    </div>
    <div class="form-group">
        <label for="password">Mot de Passe</label>
        <input class="form-control" type="password" name="password" id="password">
    </div>
    <div class="form-group row">
        <div class="col-3">
            <img id="captcha" src="/aston/captcha.php" width="120"/>
            <button id="refresh" class="btn btn-default"><i class="fas fa-sync-alt"></i></button>
        </div>
        <div class="col-3">
            <input type="text" class="form-control" name="key"/>
        </div>
    </div>
    <button class="btn btn-success" type="submit">Connexion</button>
</form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
</script>
<script>
    $('#refresh').on('click', function (e) {
        e.preventDefault();
        $('#captcha').attr('src', '/aston/captcha.php?' + Math.random());
    });
</script>
</body>
</html>