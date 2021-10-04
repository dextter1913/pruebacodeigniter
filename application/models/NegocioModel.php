<?php
defined('BASEPATH') or exit('No direct script access allowed');

class negocioModel extends CI_model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function registro($nombre, $apellido, $email, $identificacion)
    {
        return $this->db->insert(
            "clientes",
            [
                "Nombre" => $nombre,
                "Apellido" => $apellido,
                "Email" => $email,
                "Identificacion" => $identificacion
            ]
        );
    }

    public function mostrar(){

        $query = $this->db->get("clientes");

        if ($query->num_rows() > 0) {
            return $query;
        }else {
            return false;
        }
    }

    //get_where
}
