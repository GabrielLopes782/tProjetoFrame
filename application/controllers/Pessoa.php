<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('estou_logado')) {
            redirect('Login');
        }
        $this->load->model('Pessoa_model', 'pessoa');
    }

    public function index() {
        $lista['pessoas'] = $this->pessoa->listar();
        $this->load->view('template/header');
        $this->load->view('pessoaCadastro', $lista);
        $this->load->view('template/footer');
    }

    public function inserir() {
        $dados['nome'] = $this->input->post('nome');
        $dados['telefone'] = $this->input->post('telefone');
        $dados['email'] = $this->input->post('email');
        $dados['endereco'] = $this->input->post('endereco');
        if ($this->input->post('tpPessoa') == 'Física') {
            $dados['cpf'] = $this->input->post('cpf');
            $dados['sexo'] = $this->input->post('sexo');
        } else {
            $dados['cnpj'] = $this->input->post('cnpj');
            $dados['nomeFantasia'] = $this->input->post('nomeFantasia');
        }
        $result = $this->pessoa->inserir($dados);
        if ($result == true) {
            redirect('Pessoa');
        } else {
            redirect('Pessoa');
        }
    }

    public function excluir($id) {
        $result = $this->pessoa->deletar($id);
        if ($result == true) {
            redirect('pessoa');
        } else {
            redirect('pessoa');
        }
    }

    public function editar($id) {
        $dados['pessoa'] = $this->pessoa->editar($id);
        $this->load->view('pessoaEditar', $dados);
    }

    public function atualizar() {
        $dados['idPessoa'] = $this->input->post('idPessoa');
        $dados['nome'] = $this->input->post('nome');
        $dados['telefone'] = $this->input->post('telefone');
        $dados['email'] = $this->input->post('email');
        $dados['cpf'] = $this->input->post('cpf');
        $dados['sexo'] = $this->input->post('sexo');
        $dados['cnpj'] = $this->input->post('cnpj');
        $dados['nomeFantasia'] = $this->input->post('nomeFantasia');
        if ($this->pessoa->atualizar($dados) == true) {
            redirect('pessoa');
        } else {
            redirect('pessoa');
        }
    }

  

}
