<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Partie 6 | Exercice 2</title>
</head>

<body>

    <div class="text-center">
        <a href="index.php?lastname=Shima&firstname=Brian&age=45" type="button" class="btn btn-primary text-white">Avec Age</a>
        <a href="index.php?lastname=Shima&firstname=Brian" type="button" class="btn btn-primary text-white">Sans Age</a>
        <a href="index.php" type="button" class="btn btn-secondary">Retour index</a>

       <p><?= isset($_GET['age']) ? $_GET['age'] : "Il manque le paramètre Age !"; ?></p>

    </div>

</body>

</html>