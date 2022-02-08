<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Carro_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function inserir($C) {
        return $this->db->insert('carro', $C);
    }

    function deletar($idCarro) {
        $this->db->where('idCarro', $idCarro);
        return $this->db->delete('carro');
    }

    function editar($idCarro) {
        $this->db->where('idCarro', $idCarro);
        $result = $this->db->get('carro');
        return $result->result();
    }

    function atualizar($data) {
        $this->db->where('idCarro', $data['idCarro']);
        $this->db->set($data);
        return $this->db->update('Carro');
    }
function listar(){
    $this->db->select('*');
    $this->db->from('carro');
    $query=$this->db->get();
    return $query->result();
}
}
