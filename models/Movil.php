<?php


class Movil
{
    private $phone_number;
    private $marca;
    private $modelo;
    private $fecha_compra;
    private $propietario;

    /**
     * Movil constructor.
     * @param string $phone_number
     * @param string $marca
     * @param string $modelo
     * @param DateTime $fecha_compra
     * @param Persona $propietario
     */
    public function __construct(string $phone_number, string $marca, string $modelo, DateTime $fecha_compra,
                                Persona $propietario)
    {
        $this->phone_number = $phone_number;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->fecha_compra = $fecha_compra;
        $this->propietario = $propietario;
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