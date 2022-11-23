<?php

namespace ClassFly;

use ClassFly\Fly;
use ClassFly\Singleton;

require_once __DIR__.'/../AutoLoad.php';

class FlyRepository
{
    //private static $idRepo = null;
    private $instanceFly;
    public function __construct()
    {
        $this->instanceFly = Singleton::getInstance();
    }

    public function findAll(){
        $donneFly = null;
        $sql = "SELECT * FROM fly";
        return $this->instanceFly->query($sql);
    }

    public function find($idRepository) : Fly {
        $donneFlyById = null;
        $fly = new Fly();
        $sql = "SELECT * FROM fly WHERE id='".$idRepository."'";

        $donneFlyById = $this->instanceFly->query($sql);

        $listeById = $donneFlyById->fetch();

        $fly->setIdFly($listeById['id']);
        $fly->setDateFly($listeById['date']);
        $fly->setLocationFly($listeById['location']);
        $fly->setFrom($listeById['from']);
        $fly->setTo($listeById['to']);
        $fly->setTime($listeById['time']);
        $fly->setComment($listeById['comment']);

        return $fly;
    }

    public function save($typeCommandSql,$id){
        $res = null;
        if ($typeCommandSql){
            $sql = "INSERT INTO fly (`date`,`location`,`from`,`to`,`time`,`comment`) VALUES (:dateFly,:locationFly,:fromFly,:toFly,:timeFly,:commentFly)";
            $res = $this->instanceFly->prepare($sql);
        }else{
            $sql = "UPDATE fly SET `date`=:dateFly,`location`=:locationFly,`from`=:fromFly,`to`=:toFly,`time`=:timeFly,`comment`=:commentFly WHERE id='".$id."'";
            $res = $this->instanceFly->prepare($sql);
        }
        return $res;
    }

    public function delete($id){
        $sql = "DELETE FROM fly WHERE id='".$id."'";
        return $this->instanceFly->query($sql);
    }

}