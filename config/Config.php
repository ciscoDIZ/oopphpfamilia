<?php


class Config
{
    private $vars;
    private static $instance;

    /**
     * Config constructor.
     */
    private function __construct()
    {
        $this->vars = array();
    }

    public function get($name): bool
    {
        if(isset($this->vars[$name])){
            return $this->vars[$name];
        }else{
            return false;
        }
    }

    public function set($name, $value): bool
    {
        if(!isset($this->vars[$name])){
            $this->vars[$name] = $value;
            return true;
        }else{
            return false;
        }
    }

    /**
     * @return Config
     */
    public static function getInstance(): Config
    {
        if(!isset(self::$instance)) {
            $c = __CLASS__;
            /** @var Config $c */
            self::$instance = new $c;
        }
        return self::$instance;
    }
}