<?php

use ClassFly\FlyController;

require_once __DIR__.'/../AutoLoad.php';

$flyControler = new FlyController();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>Menu principal : </h1>

<table border=1>
    <tr>
        <th>Numero du vol</th>
        <th>Date du vol</th>
        <th>Localisation</th>
        <th>Alltitude du decollage</th>
        <th>Alltitude de l/atterissage</th>
        <th>Temps du vol</th>
        <th>Commentaire</th>
    </tr>
    ';

<?php

   $liste = $flyControler->indexFly();
    while ($donnees = $liste->fetch()) {
        $id = $donnees['id'];
        $table .='
        <tr>
            <td>'.$donnees['id'].'</td>
            <td>'.$donnees['date'].'</td>
            <td>'.$donnees['location'].'</td>
            <td>'.$donnees['from'].'</td>
            <td>'.$donnees['to'].'</td>
            <td>'.$donnees['time'].'minutes'.'</td>
            <td>'.$donnees['comment'].'</td>
            <td>
            
            
            <td>
            <a href="../controllers/index.php?typeFunction=showPage&id='.$id.'"><button>
                    Afficher
                </button>
            </a>

        </td>
            
        </form>
</td>
    </tr>
    ';
}

$table .='</table>';
echo $table;
?>
<a href="../controllers/index.php?typeFunction=addPage"><button>
        Ajouter
    </button>
</a>
</body>
</html>
