<?php
use ClassFly\FlyController;

require_once __DIR__.'/../AutoLoad.php';

$id = null;

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
<h1>Affichage : </h1>
<table border=1>
    <tr>
        <th>Numero du vol</th>
        <th>Date du vol</th>
        <th>Localisation</th>
        <th>Altitude du decollage</th>
        <th>Altitude de l/atterissage</th>
        <th>Temps du vol</th>
        <th>Commentaire</th>
    </tr>
    <tr>
        <td><?php $liste->getIdFly();
            $id = $liste->getIdFly();
        ?></td>
        <td><?php
            echo $liste->getDateFly();?></td>
        <td><?php
            echo $liste->getLocationFly();?></td>
        <td><?php
            echo $liste->getFrom()?></td>
        <td><?php
            echo $liste->getTo(); ?></td>
        <td><?php
            echo $liste->getTime(); ?> minutes</td>
        <td><?php
            echo $liste->getComment(); ?></td>

        <td>
            <a href="../controllers/index.php?typeFunction=editPage&id=<?php echo $id ?>"><button>
                    Editer
                </button>
            </a>

        </td>

        <td>
            <a href="../controllers/index.php?typeFunction=deletePage&id=<?php echo $id ?>"><button>
                    Supprimer
                </button>
            </a>
        </td>

        <td>
            <a href="../controllers/index.php?typeFunction=indexPage"><button>
                    Menu Principal
                </button>
            </a>
        </td>

    </tr>
</table>
</body>
</html>