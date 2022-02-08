<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario_Model
 *
 * @author Menin
 */
class Usuario_Model extends CI_Model {

    //put your code here
    function __construct() {
        parent::__construct();
    }

    function inserir($P) {
        return $this->db->insert('user', $P);
    }

    function deletar($idusuario) {
        $this->db->where('idusuario', $idusuario);
        return $this->db->delete('user');
    }

    function editar($idusuario) {
        $this->db->where('idusuario', $idusuario);
        $result = $this->db->get('user');
        return $result->result();
    }

    function atualizar($data) {
        $this->db->where('idusuario', $data['idusuario']);
        $this->db->set($data);
        return $this->db->update('user');
    }

    function listar() {
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();
        return $query->result();
    }

}
