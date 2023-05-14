<?php
class Menus extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    }
    //Renderizacion de la Vista de muestra los desayunos
    //Muestra los desayunos
    public function desayunos(){
        $this->load->view('header');
        $this->load->view('menus/desayunos');
        $this->load->view('footer');
    }
    public function almuerzos(){
        $this->load->view('header');
        $this->load->view('menus/almuerzos');
        $this->load->view('footer');
    }
    public function meriendas(){
        $this->load->view('header');
        $this->load->view('menus/meriendas');
        $this->load->view('footer');
    }
    public function cartas(){
        $this->load->view('header');
        $this->load->view('menus/cartas');
        $this->load->view('footer');
    }
}//NO BORRAR EL CIERRE DE LA CLASE
?>
