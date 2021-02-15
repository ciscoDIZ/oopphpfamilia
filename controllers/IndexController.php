<?php


class IndexController extends ControladorBase
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        require 'views/view_index.php';

    }
}