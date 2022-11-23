<?php

namespace ClassFly;

class Fly
{
    private $idFly = null;

    private $dateFly = null;
    private $locationFly = null;
    private $from = null;
    private $to = null;
    private $time = null;
    private $comment = null;

    public function __construct()
    {

    }

    /**
     * @return null
     */
    public function getIdFly()
    {
        return $this->idFly;
    }

    /**
     * @param null $idFly
     */
    public function setIdFly($idFly): void
    {
        $this->idFly = $idFly;
    }

    /**
     * @return null
     */
    public function getDateFly()
    {
        return $this->dateFly;
    }

    /**
     * @param null $dateFly
     */
    public function setDateFly($dateFly): void
    {
        $this->dateFly = $dateFly;
    }

    /**
     * @return null
     */
    public function getLocationFly()
    {
        return $this->locationFly;
    }

    /**
     * @param null $locationFly
     */
    public function setLocationFly($locationFly): void
    {
        $this->locationFly = $locationFly;
    }

    /**
     * @return null
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param null $from
     */
    public function setFrom($from): void
    {
        $this->from = $from;
    }

    /**
     * @return null
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param null $to
     */
    public function setTo($to): void
    {
        $this->to = $to;
    }

    /**
     * @return null
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param null $time
     */
    public function setTime($time): void
    {
        $this->time = $time;
    }

    /**
     * @return null
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param null $comment
     */
    public function setComment($comment): void
    {
        $this->comment = $comment;
    }


}