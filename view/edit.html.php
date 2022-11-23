<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<h1>Edition: </h1>

<h3>Date du vol :</h3>
<form method="post">
    <h3>
        <?php
        //$donnees;
            echo $liste->getDateFly();

        ?>
    </h3>
    <input type="date" id="dateFly" name="DateFly" required >
    <h3>Localisation du vol :</h3>
    <input type="text" id="locationFly" name="LocationFly" required value="
    <?php
    echo $liste->getLocationFly();
    ?>
">
    <h3>L'attitude du vol :</h3>
    <input type="text" id="fromFly" name="FromFly" required value="
    <?php
    echo $liste->getFrom();
    ?>
">
    <h3>L'attitude de l'atterissage :</h3>
    <input type="text" id="toFly" name="ToFly" required value="
    <?php
    echo $liste->getTo();
    ?>
">
    <h3>Temp du vol :</h3>
    <?php
    echo $liste->getTime();
    ?>
    <input type="number" id="timeFly" name="TimeFly" required>
    <h3>Commentaire :</h3>
    <input type="text" id="commentFly" name="CommentFly" value="
    <?php
    echo $liste->getComment();
    ?>
">

    <input type="submit" name="add" value="Ajouter">
    <button type="button" onclick="window.location.href = 'index.php'">Menu Principal</button>
</form>
</body>
</html>
