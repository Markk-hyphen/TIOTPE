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
    public function aeronaves(){
        $this->view->mostrarAeronaves();
    }
}