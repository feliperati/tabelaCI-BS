<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_controller {
    
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('estou_logado')){
            redirect('Login');
        }elseif ($this->session->userdata('logado')->perfilAcesso != "ADM") {
            redirect('Home');
        }
        $this->load->model('Usuario_model', 'usuario'); // 'usuario' é um alias para 'Alunos_model'
    }
    
    public function index() {
        $this->load->view('template/header');
        $lista['usuario'] = $this->usuario->listar();
        $this->load->view('usuarioCadastro', $lista);
        $this->load->view('template/footer');
    }
    
    public function inserir() {
        $dados['nomeUsuario'] = mb_convert_case($this->input->post('nomeUsuario'), MB_CASE_UPPER);
        $dados['user'] =  mb_convert_case($this->input->post('user') , MB_CASE_UPPER);
        $dados['senha'] = md5(mb_convert_case($this->input->post('senha') , MB_CASE_LOWER));
        $dados['perfilAcesso'] = mb_convert_case($this->input->post('perfilAcesso'),MB_CASE_UPPER);
        $result = $this->usuario->inserir($dados);
        
        if($result==true) {
            $this->session->set_flashdata('true', 'msg');
            redirect('usuario');
        }else {
            $this->session->set_flashdata('err', 'msg'); 
            redirect('usuario');
        }      
    }
    
    public function excluir($id) {
        $result = $this->usuario->deletar($id);
        
         if($result==true) {
            $this->session->set_flashdata('excluirSucesso', 'msg');
            redirect('usuario');
        }else {
            $this->session->set_flashdata('err', 'msg'); 
            redirect('usuario');
        }      
        
    }
    
    public function editar($id) {
        $data['usuarioEditar'] = $this->usuario->editar($id);
        $this->load->view('template/header');
        $this->load->view('usuarioEditar', $data);
        $this->load->view('template/footer');
    }
    
    public function atualizar () {
        $dados['idusuario'] = $this->input->post('idusuario');
        $dados['nomeUsuario'] = mb_convert_case($this->input->post('nomeUsuario'), MB_CASE_UPPER);
        $dados['user'] = mb_convert_case($this->input->post('user'),  MB_CASE_UPPER);
        $dados['senha'] = md5(mb_convert_case ($this->input->post('senha'), MB_CASE_LOWER));
        $dados['perfilAcesso'] = mb_convert_case($this->input->post('perfilAcesso'),MB_CASE_UPPER);
        
        $result = $this->usuario->atualizar($dados);
        
        if($result==true) {
            $this->session->set_flashdata('trueUpdate', 'msg');
            redirect('usuario');
        }else {
            $this->session->set_flashdata('err', 'msg'); 
            redirect('usuario');
        }      
        
        
        
    }
}