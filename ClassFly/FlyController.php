<?php

namespace ClassFly;

use ClassFly\FlyRepository;

require_once __DIR__ . '/../AutoLoad.php';

class FlyController
{

    private $flyRepository;

    public function __construct()
    {
        $this->flyRepository =  new FlyRepository();
    }

    public function indexFly(){
        $liste = $this->flyRepository->findAll();

        return $liste;
    }

    public function addFly(){
        $this->flyRepository = new FlyRepository();

        $dateFly = $_POST['DateFly'];
        $locationFly = $_POST['LocationFly'];
        $fromFly = $_POST['FromFly'];
        $toFly = $_POST['ToFly'];
        $timeFly = $_POST['TimeFly'];
        $commentFly = $_POST['CommentFly'];

        if ((isset($dateFly))&&(isset($locationFly))&&(isset($fromFly))&&(isset($toFly))&&(isset($timeFly))&&(isset($commentFly))){
            $event = $this->flyRepository->save(true,0)->execute(array(":dateFly"=>$dateFly,":locationFly"=>$locationFly, ":fromFly"=>$fromFly,":toFly"=>$toFly,":timeFly"=>$toFly,":commentFly"=>$commentFly));
            if ($event){
                echo 'Insertion effectuer';
                header('location: index.php?typeFunction=indexPage');
            }else{
                echo 'Echec de l insertion';
            }
        }
        include '../view/add.html.php';
    }

    public function showFly(){
        $this->flyRepository = new FlyRepository();
        $id = $_GET['id'];
        $liste = $this->flyRepository->find($id);
        include '../view/show.html.php';
    }

    public function editFly(){
        $this->flyRepository = new FlyRepository();
        $id = $_GET['id'];

        if (false === isset($_POST['DateFly'])){
            $liste = $this->flyRepository->find($id);
        }else{
            $dateFly = $_POST['DateFly'];
            $locationFly = $_POST['LocationFly'];
            $fromFly = $_POST['FromFly'];
            $toFly = $_POST['ToFly'];
            $timeFly = $_POST['TimeFly'];
            $commentFly = $_POST['CommentFly'];

            $event = $this->flyRepository->save(false,$id)->execute(array(":dateFly" => $dateFly, ":locationFly" => $locationFly, ":fromFly" => $fromFly, ":toFly" => $toFly, ":timeFly" => $timeFly, ":commentFly" => $commentFly));
            if ($event) {
                echo 'Mise a jour effectuer';
                header('location: index.php?typeFunction=showPage&id='.$_GET['id']);
            } else {
                echo 'Echec de l insertion';
            }
        }
        include '../view/edit.html.php';
    }

    public function deleteFly($id){
        $this->flyRepository->delete($id);
    }

}