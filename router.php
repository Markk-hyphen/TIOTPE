<?php
require_once "libs/Router.php";
require_once "controller/VehiculosController.php";

$router = new Router();
$router->addRoute('home', "GET", "VehiculosController", "home");
$router->addRoute('autos', "GET", "VehiculosController", "autos");
$router->addRoute('motos', "GET", "VehiculosController", "motos");
$router->addRoute('videojuegos', "GET", "VehiculosController", "videoJuegos");
$router->addRoute('luces', "GET", "VehiculosController", "luces");
$router->addRoute('aboutus', "GET", "VehiculosController", "aboutUs");
$router->addRoute('barcos', "GET", "VehiculosController", "barcos");
$router->addRoute('bicicletas', "GET", "VehiculosController", "bicicletas");
$router->setDefaultRoute("VehiculosController", "home");
$router->route($_GET['action'], $_SERVER['REQUEST_METHOD']);

