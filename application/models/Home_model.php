<?php
class Home_model extends CI_Model {
    function __construct() {
        parent::__construct();
       
    }
    /**
    * Formata os contatos para exibição dos dados na home
    *
    * @param array $contatos Lista dos contatos a serem formatados
    *
    * @return array
    */
    

    function GetAll($id = NULL) {
    
      $this->db->where('macro_regiao', 'GURUPI');    
      $query = $this->db->get('rotas');
      
      if ($query->num_rows() > 0) {
        return $query->result_array();
      } else {
        return null;
      }              
    }

    

    function recupera ($id = NULL){

        $this->db->where('id', $id);    
        $query = $this->db->get('rotas');

            if ($query->num_rows() > 0) {
            
                return $query->result_array();
               
            } else {
                return null;
            }  
    }

    function grava ($id = NULL, $data = NULL){


        $this->db->where('id', $id);
        $this->db->update('rotas', $data);
             //if ($query->num_rows() > 0) {
            //return $query->result_array();
                
            //}else {
              //  return null;
        //}  
    }

    // Método getAll para retornar os registros, valore padrão 0 para $qtde e $inicio
    function get_all_rotas($qtde=0, $inicio=0){

        //se passamos uma quantidade de registros maior que zero que é a quantidade de registros daquela página, então daremos um limite no banco de dados informando qual a quantidade e qual a posição inicial
        if ($qtde > 0) $this->db->limit($qtde, $inicio);

        // faz a consulta na tabela
        return $this->db->get('rotas');

    }

    function get_busca_rotas($qtde=0, $inicio=0){

        //se passamos uma quantidade de registros maior que zero que é a quantidade de registros daquela página, então daremos um limite no banco de dados informando qual a quantidade e qual a posição inicial
        if ($qtde > 0) $this->db->limit($qtde, $inicio);

        // faz a consulta na tabela
        return $this->db->get('rotas');

    }

    

  }
    
