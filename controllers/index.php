<?php

use ClassFly\FlyController;

require_once __DIR__.'/../AutoLoad.php';

$flyController = new FlyController();

    if (isset($_GET['typeFunction'])){
        $stringTypeFunction = $_GET['typeFunction'];
        if ($stringTypeFunction == 'indexPage'){
            $flyController->indexFly();
            include '../view/index.html.php';
        }else if ($stringTypeFunction == 'addPage'){
            $flyController->addFly();
        }else if ($stringTypeFunction == 'showPage'){
            $flyController->showFly();
        }else if ($stringTypeFunction == 'editPage'){
                $flyController->editFly();

        }else if ($stringTypeFunction == 'deletePage'){
            if (isset($_GET['id'])){
                $idcontroller = $_GET['id'];
                $flyController->deleteFly($idcontroller);
                include '../view/index.html.php';
            }
        }
    }else{
        $flyController->indexFly();
        include '../view/index.html.php';
    }

?>


