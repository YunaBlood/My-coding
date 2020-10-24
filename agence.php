<?php 
session_start();


if(isset($_SESSION['user'])){
    header('Location: formulaire.php');
    exit;
}


var_dump($_POST);

$_SESSION['nom'] = $_POST['nom'];
$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['civil'] = $_POST['civil'];
$_SESSION['type'] = $_POST['type'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agence</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <span class="containeur--form">
        <form class="form-horizontal" action="recaputilatif.php" method="POST">
        <video autoplay muted loop id="myVideo">
            <source src="Pexels_Videos.mp4" type="video/mp4">
        </video>
        <?php if($_POST['type'] === 'voyage'):    ?>
            <span class="Voyage">
            <h1>Votre voyage</h1>
                <label for="Voya">Choix du voyage</label>
                <select class=form-control  name="type" id="voyage">
                    <option value="voyage1">Les caraïbes - Le pied ! - 4500€ par personnes</option>
                    <option value="voyage2">Italie - C'est intéressant ! - 1500€ par personnes</option>
                </select>
            </span>
        <?php else:  ?>
            <span class="Excursion">
                <label for="Exc">Choix de l'excursion</label>
                <select class=form-control name="type" id="excursion">
                    <option value="excursion1">Visite de pandemonium - 100€ par personnes</option>
                    <option value="excursion2">Visite de la foret - 25€ par personnes</option>
                </select>
            </span>
        <?php endif; ?>
            <span>
                <label for="nombre">Nombre de personnes</label>
                <span>
                    <input class="Numbers" class="form-control" type="text" name="nombre" id="nombre" Placeholder="Saissisez le nombre de personnes">
                </span>
            </span>
            <span class="form-group">
                    <span>
                        <input class="continue" type="submit" value="Estimation" id="Estimation">
                    </span>
                </span>

        </form>
    </span>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>