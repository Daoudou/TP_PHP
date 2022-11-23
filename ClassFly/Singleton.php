<?php

namespace ClassFly;

use PDO;
use PDOException;

class Singleton
{

    const m_serveur = 'localhost';
    const m_db = 'tp1';
    const m_port = '3306';
    const m_user = 'root';
    const m_password = '';
    private static $instance = null;

    private function __construct()
    {

    }

    public static function getInstance(){
        try {
            self::$instance = new PDO('mysql:host='.self::m_serveur.';dbname='.self::m_db.';port='.self::m_port.'', self::m_user, self::m_password);
        } catch (PDOException $event) {
            die('Erreur : ' . $event->getMessage());
        }
        return self::$instance;
    }

    public static function disconnectBDD(){
        self::$instance->query('KILL CONNECTION_ID()');
        self::$instance = NULL;
    }

}