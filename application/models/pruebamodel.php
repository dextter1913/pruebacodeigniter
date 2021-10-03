<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Pruebamodel extends CI_model
{
    public function __construct() {
        parent::__construct();
    }

    public function prueba($prueba, $prueba1){
        return $prueba.' '.$prueba1;
    }
}
?>