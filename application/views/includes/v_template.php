<?php

//carrega template
$this->load->view('includes/v_header');
$this->load->view('includes/v_nav_user');
//$this->load->view('includes/v_busca');
$this->load->view('includes/'. $conteudo);
$this->load->view('includes/v_footer');