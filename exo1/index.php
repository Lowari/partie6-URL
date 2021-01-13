<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Partie 6 | Exercice 1</title>
</head>

<body>

    <div class="text-center">
        <a href="index.php?lastname=Tutor&amp;firstname=Janine&fruit=Banane" type="button" class="btn btn-primary text-white">Envoi des paramètres</a>
        <a href="index.php" type="button" class="btn btn-secondary">Retour index</a>

        <?php if (isset($_GET['lastname'], $_GET['firstname'])) { ?>
            <p>Nom : <?php echo $_GET['lastname']; ?></p>
            <p>Prénom : <?php echo $_GET['firstname']; ?></p>
        <?php } ?>

    </div>

</body>

</html>