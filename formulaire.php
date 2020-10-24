<?php 
session_start();

if(isset($_SESSION['user'])){
    header('Location: recaputilatif.php');
    exit;
}

if(isset($_SESSION['user'])){
    header('Location: agence.php');
    exit;
}



?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>     

    <span class="containeur--form">
            <form class="form-horizontal" action="agence.php" method='POST'>
                <video autoplay muted loop id="myVideo">
                    <source src="Pexels_Videos.mp4" type="video/mp4">
                </video>
                <h1>Votre voyage</h1>
                <span class="form-group">
                        <label for="civil">Civilité:</label>
                    <span>
                        <select class="form-control"  name="civil" id="civil">
                            <option value="Mme">Mme</option>
                            <option value="M">M</option>
                        </select>
                    </span>
                </span>
            
                <span class="form-group">
                        <label for="nom">Nom:</label>
                    <span>
                        <input class="form-control" type="text" name="nom" id="nom" placeholder="Veillez saisir votre nom">
                    </span>
                    
                </span>

                <span class ="form-group">
                        <label  for="prenom">Prenom:</label>
                    <span>
                        <input class="form-control" type="text" name="prenom" id="prenom" placeholder="Veillez saisir votre prénom">
                    </span>
                </span>
                
                <span class ="form-group">
                        <label  for="Voyage">Voyage</label>
                    <span>
                        <input type="radio" name="type" value="voyage" id="voyage">
                    </span>
                </span>

                <span >
                        <label  for="Excursion">Excursion</label>
                    <span>
                        <input type="radio" name="type" value="excursion" id="excursion">
                    </span>
                </span>

                <span class="form-group">
                    <span>
                        <input class="continue" type="submit" value="Suite" id="Suite">
                    </span>
                </span>
            </form>
    </span>
        


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>