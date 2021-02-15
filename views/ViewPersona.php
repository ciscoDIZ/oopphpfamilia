<?php


class ViewPersona
{
    private static PersonaController $controller;

    /**
     * ViewPersona constructor.
     */
    public function __construct()
    {
        self::$controller = new PersonaController();
    }


}