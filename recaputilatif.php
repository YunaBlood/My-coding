<?php 
session_start();

var_dump($_POST);

$data = [

    'voyage1' =>  [
        'prix' => '4500',
        'name' => 'Les caraïbes'
    ],
    'voyage2' => [
        'prix' => '1500',
        'name' => 'Italie'
    ],
    'excursion1' => [
        'prix' => '100',
        'name' => 'Visite de pandemonium'
    ],
    'excursion2' => [
        'prix' => '25',
        'name' => 'Visite de  la foret'
    ],
];

$trip = $data[$_POST['type']];

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="containeur--form">
    <video autoplay muted loop id="myVideo">
        <source src="Pexels_Videos.mp4" type="video/mp4">
    </video>
    <h1>Votre voyage</h1>
    <h2>Resumé de votre demande</h2>
    <span>Bonjour,<?php echo $_SESSION['civil'] ?>  <?php echo $_SESSION['nom'] ?> <?php echo $_SESSION['prenom']?></span>
    <p>Votre Voyage sera <?php echo $trip['name'] ?></p>
    <p>Le nombre de personnes pour ce voyage est <?php echo '<strong style="color: #FFF;">'. $_POST['nombre'].'</strong>'?></p>
    <p>Le prix sera de <?php echo $trip['prix'] ?>€</p>
</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>