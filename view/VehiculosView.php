<?php
require_once 'libs/smarty-3.1.39/libs/Smarty.class.php';
class VehiculosView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function mostrarHome(){
        $this->smarty->display('templates/home.tpl');
    }

    public function mostrarAutos(){
        
        $this->smarty->display('templates/autos.tpl');
    }

    public function mostrarMotos(){
        $this->smarty->display('templates/motos.tpl');
    }

    public function mostrarLuces(){
        $this->smarty->display('templates/luces.tpl');
    }

    public function mostrarVideoJuegos(){
        $this->smarty->display('templates/videojuegos.tpl');
    }

    public function mostrarBarcos(){
        $this->smarty->display('templates/barcos.tpl');
    }
    public function mostrarBicicletas(){
        $this->smarty->display('templates/bicicletas.tpl');
    }
    public function mostrarAboutUs(){
        $this->smarty->display('templates/aboutUs.tpl');
    }
}