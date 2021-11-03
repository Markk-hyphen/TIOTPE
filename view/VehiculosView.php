<?php
require_once 'libs/smarty-3.1.39/libs/Smarty.class.php';
class VehiculosView{

    public function __construct(){

    }

    public function mostrarHome(){
        $smarty = new Smarty();
        $smarty->display('templates/home.tpl');
    }

    public function mostrarAutos(){
        $smarty = new Smarty();
        $smarty->display('templates/autos.tpl');
    }

    public function mostrarMotos(){
        $smarty = new Smarty();
        $smarty->display('templates/motos.tpl');
    }

    public function mostrarLuces(){
        $smarty = new Smarty();
        $smarty->display('templates/luces.tpl');
    }

    public function mostrarVideoJuegos(){
        $smarty = new Smarty();
        $smarty->display('templates/videojuegos.tpl');
    }
}