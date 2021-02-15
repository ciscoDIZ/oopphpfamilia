<?php


class Persona extends EntidadBase
{

    private $id;
    private $nombre;
    private $edad;
    private $moviles;
    private $tipo;

    /**
     * Persona constructor.
     */
    public function __construct($adapter)
    {
        $table = 'personas';
        parent::__construct($table, $adapter);
    }

    public function save(){
        $query="INSERT INTO personas (id,nombre,edad) VALUES($this->id, $this->nombre , $this->edad);";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }


}