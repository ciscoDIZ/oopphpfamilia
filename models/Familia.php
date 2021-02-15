<?php


class Familia
{
    private $id;
    private $componentes;

    /**
     * Familia constructor.
     * @param $id
     * @param $componentes
     */
    public function __construct(string $id, ArrayObject $componentes)
    {
        $this->id = $id;
        $this->componentes = $componentes;
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