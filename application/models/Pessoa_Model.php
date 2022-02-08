<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function inserir($P) {
        return $this->db->insert('pessoa', $P);
    }

    function deletar($idPessoa) {
        $this->db->where('idPessoa', $idPessoa);
        return $this->db->delete('pessoa');
    }

    function editar($idPessoa) {
        $this->db->where('idPessoa', $idPessoa);
        $result = $this->db->get('pessoa');
        return $result->result();
    }

    function atualizar($data) {
        $this->db->where('idPessoa', $data['idPessoa']);
        $this->db->set($data);
        return $this->db->update('Pessoa');
    }
function listar(){
    $this->db->select('*');
    $this->db->from('pessoa');
    $query=$this->db->get();
    return $query->result();
}
}
