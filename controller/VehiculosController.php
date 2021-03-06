<?php
require_once "view/VehiculosView.php";
class VehiculosController{
    private $view;
    public function __construct(){
        $this->view = new VehiculosView();
    }

    public function home(){
        $this->view->mostrarHome();
    }

    public function autos(){
        $this->view->mostrarAutos();
    }

    public function luces(){
        $this->view->mostrarLuces();
    }

    public function videoJuegos(){
        $this->view->mostrarVideoJuegos();
    }

    public function motos(){
        $this->view->mostrarMotos();
    }

    public function barcos(){
        $this->view->mostrarBarcos();
    }

    public function aboutUs(){
        $this->view->mostrarAboutUs();
    }
    public function bicicletas(){
        $this->view->mostrarbicicletas();
    }
    public function aeronaves(){
        $this->view->mostrarAeronaves();
    }
}