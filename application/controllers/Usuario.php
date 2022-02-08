<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Menin
 */
class Usuario extends CI_Controller {
    //put your code here
    
    function __construct() {
        parent::__construct();
        $this->load->model('Usuario_Model', 'Usuario');
         if (!$this->session->userdata('estou_logado')) {
           redirect('Login');
      }
    }

    public function index() {
        $lista['users'] = $this->Usuario->listar();
        $this->load->view('usuarioCadastro', $lista);
    }

    public function inserir() {
        $dados['nomeUsuario'] = $this->input->post('nomeUsuario');
        $dados['user'] = $this->input->post('User');
        $dados['senha'] = md5(mb_convert_case($this->input->post('senha'),MB_CASE_LOWER));
        $dados['perfilAcesso'] = $this->input->post('perfilAcesso');
        $result = $this->Usuario->inserir($dados);
        if ($result == true) {
            redirect('Usuario');
        } else {
            redirect('Usuario');
        }
    }

    public function excluir($idusuario) {
        $result = $this->Usuario->deletar($idusuario);
        if ($result == true) {
            redirect('Usuario');
        } else {
            redirect('Usuario');
        }
    }

    public function editar($idusuario) {
        $dados['Usuario'] = $this->Usuario->editar($idusuario);
        $this->load->view('usuarioEditar', $dados);
    }

    public function atualizar() {
        
       $dados['idusuario'] = $this->input->post('idusuario');
       $dados['nomeUsuario'] = $this->input->post('nomeUsuario');
        $dados['user'] = $this->input->post('user');
        $dados['perfilAcesso'] = $this->input->post('perfilAcesso');
        if ($this->Usuario->atualizar($dados) == true) {
            redirect('Usuario');
        } else {
            redirect('Usuario');
        }
    }

}
