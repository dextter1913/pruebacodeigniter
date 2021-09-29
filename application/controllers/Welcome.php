<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();

	}

	
	public function index()
	{
		//pasando datos de el controlador a la variable por parametro, el indice del array se convierte en
		//Variable
		$variable['prueba'] = 'Hola desde la variable prueba';
		$this->load->view('Inicio', $variable);
	}

	public function PruebaAjax(){
		echo 'Hola desde Ajax usando jquery';
	}

	public function Datatable(){
		//$ReadAgente = crud::Read(query::ReadAgentes());
        //while ($Resultado = mysqli_fetch_assoc($ReadAgente)) {
        //    $rows["data"][] = $Resultado;
        //}
        //echo json_encode($rows);
	}
}