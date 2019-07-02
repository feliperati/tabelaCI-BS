<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alunos extends CI_controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Alunos_model', 'alunos'); // 'alunos' é um alias para 'Alunos_model'
    }
    
    public function index() {
        $this->load->view('template/header');
        $listar['alunos'] = $this->alunos->listar();
        $this->load->view('alunosCadastro', $listar);
        $this->load->view('template/footer');
    }
    
      public function inserir() {
        $dados['nome'] = mb_convert_case($this->input->post('nome'), MB_CASE_UPPER);
        $dados['rg'] = $this->input->post('rg');
        $dados['cpf'] = $this->input->post('cpf');
        $this->alunos->inserir($dados);
        
        redirect('alunos');
    }
}
