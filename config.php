<?php
require "config/Config.php";
$config = Config::getInstance();

$config->set("controllers_folder", "controllers/");
$config->set("model_folder", "models/");
$config->set("views_folder", "views/");

$config->set("host", "localhost");
$config->set("db", "familia");
$config->set("user", "root");
$config->set("pass", "1q2w3e4r");
?>