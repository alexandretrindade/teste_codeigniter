<?php

class Usuarios_Model extends CI_Model{
    public function novo($usuario){
        $this->load->database(); //Carrega e inicializa o BD definido config/database.php
        $this->db->insert("usuario", $usuario);  
    }
}