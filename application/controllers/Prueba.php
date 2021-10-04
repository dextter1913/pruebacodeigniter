<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prueba extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('negocioModel');
        $this->load->helper('form');
    }

    //controlador por defecto
    public function index()
    {
        $this->load->view('HeaderAndFooter/header');
        $this->load->view('Prueba');
        $this->load->view('HeaderAndFooter/footer');
    }

    //Funcion para insertar datos recibidos por post
    public function insertardatos(){
        $Nombre =  $this->input->post('nombre');
        $Apellido = $this->input->post('apellido');
        $Email = $this->input->post('email');
        $identificacion = $this->input->post('identificacion');

        $this->negocioModel->registro($Nombre, $Apellido, $Email, $identificacion);
    }

    //Funcion para mostrar datos en datatable
    public function datatable(){
        $consulta = $this->negocioModel->mostrar();


        $json = json_encode($consulta->result()->row, JSON_PRETTY_PRINT);
        //var_dump($json, JSON_PRETTY_PRINT);
        print $json;
    }
}
