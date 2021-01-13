<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Partie 6 | Exercice 3</title>
</head>

<body>

    <div class="text-center">
        <a href="index.php?startDate=01/09/2019&endDate=17/03/2020" type="button" class="btn btn-primary text-white">Envoi des paramètres</a>
        <a href="index.php" type="button" class="btn btn-secondary">Retour index</a>

        <?php if (isset($_GET['startDate'], $_GET['endDate'])) { ?>
            <p>Date de début : <?= $_GET['startDate']; ?></p>
            <p>Date de fin : <?= $_GET['endDate']; ?></p>
        <?php } else {
        } ?>



    </div>



</body>

</html>