<?php


class SPDO extends PDO
{
    private static $instance;

    protected function __construct(){
        $config = Config::getInstance();
        parent::__construct('mysql:host=' . $config->get('host') . ';dbname=' . $config->get('db')
            ,$config->get('user'), $config->get('pass'));
    }

    /**
     * @return mixed
     */
    public static function getInstance(): SPDO
    {
        if(!isset(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }
}