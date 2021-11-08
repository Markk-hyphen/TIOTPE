<?php
require_once "libs/Router.php";
require_once "controller/VehiculosController.php";

$router = new Router();
$router->addRoute('home', "GET", "VehiculosController", "home");
$router->addRoute('autos', "GET", "VehiculosController", "autos");
$router->addRoute('motos', "GET", "VehiculosController", "motos");
$router->addRoute('videojuegos', "GET", "VehiculosController", "videoJuegos");
$router->addRoute('luces', "GET", "VehiculosController", "luces");
$router->addRoute('aeronaves', "GET", "VehiculosController", "aeronaves");
$router->setDefaultRoute("VehiculosController", "home");
$router->route($_GET['action'], $_SERVER['REQUEST_METHOD']);

