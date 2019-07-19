<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <title> Projetinho bonitinho </title>   
        
       
        
        <meta http-equiv="Content-Language" content="pt-br">
        
        <!-- Bootstrap Core CSS -->        
        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" 
            rel="stylesheet">
        
        <!-- JS -->
	<link href="<?php echo base_url('assets/js/bootstrap.min.js') ?>"
            rel="stylesheet">
        
        <!-- off line / local -->
        <link href="<?php echo base_url('DataTables/datatables.min.css') ?>"
              rel="stylesheet" >
        
        <!-- on line -->
        <script src="<?php echo base_url('DataTables/jquery.min.js') ?>"></script>
        
<!--	<link href="<?php // echo base_url('assets/js/jquery.min.js') ?>"
              rel="stylesheet">
        <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"
              rel="stylesheet">
        <link href="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"
              rel="stylesheet">-->
    </head>
    <body>
        <div class="container">
           <?php
           //put your code gere
           if ($this->session->userdata('estou_logado')) {
            echo $this->session->userdata('logado')->nomeUsuario;
           
           ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" href="#"> Formularios testes TinN5</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url(); ?>home">Home</a> <span class="sr-only">(página atual)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>login/sair">Sair</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Funções
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php echo base_url(); ?>alunos">Alunos</a>
                  <a class="dropdown-item" href="<?php echo base_url(); ?>professor">Professor</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo base_url(); ?>usuario">Usuario</a>
                </div>
            </li>

            <li class="nav-item">
              <a class="nav-link disabled" href="#">Desativado</a>
            </li>
        </ul>
        
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
    </div>
</nav>
           <?php  }