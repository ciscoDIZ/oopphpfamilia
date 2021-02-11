<?php


class Persona
{
    private $id;
    private $name;
    private $surname;
    private $mobiles;
    private $cabeza_familia;
    private $familia;

    /**
     * Persona constructor.
     * @param $id
     * @param $name
     * @param $surname
     */
    public function __construct(string $id, string $name, string $surname)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->mobiles = new ArrayObject();
        $this->cabeza_familia = null;
        $this->familia = new ArrayObject();
    }

    public function addMobile(Movil $movil): void{
        $this->mobiles->append($movil);
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