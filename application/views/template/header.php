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
           }
           ?>