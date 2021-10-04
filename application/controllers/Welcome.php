<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		//pasando datos de el controlador a la variable por parametro, el indice del array se convierte en
		//Variable
		$this->load->view('HeaderAndFooter/header');
		$this->load->view('welcome');
		$this->load->view('HeaderAndFooter/footer');
	}

}
