<?php

class ContatoModel extends CI_Model {

    private $tableContato = "contato";

    //Cadastrar um Novo Contato
    public function insertContato($nome, $email, $telefone, $mensagem, $codigo) {
        $data = array(
            'nome_contato' => "$nome",
            'email_contato' => "$email",
            'telefone_contato' => "$telefone",
            'mensagem_contato' => "$mensagem",
            'codigo_contato' => $codigo
        );
        //$this->db->insert($this->tableContato, $data);
        //print_r($this->db->insert($this->tableContato, $data));
        if ($this->db->insert($this->tableContato, $data)) {           
            return TRUE;            
        } else {
            return FALSE;
        }
    }

}
