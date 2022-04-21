<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Ticket</title>
</head>

<body>
    <form method="post" action="../controler/controler.php">
        <label for="nom_article">Saisir le nom de l'article</label>
        <input type="text" placeholder="Dentifrice" name="nom_article">
        <br>
        <label for="prix_article">Saisir le prix de l'article</label>
        <input type="text" placeholder="4€45" name="prix_article">
        <br>
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>