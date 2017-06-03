<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    public function index() {
        $this->load->view('template/html-datatable-header');
        $this->load->view('template/html-navigation-header');
        $this->load->view('contato/home');
        $this->load->view('template/footer');
        $this->load->view('template/html-footer');
    }

    public function processaCadastrar() {
        //Carregamento do Model no inicio da Função
        $this->load->model('ContatoModel');
        //Capiturando as Variaveis com metodo Post
        $nome = $this->input->post('nome');
        $email = $this->input->post('email');
        $telefone = $this->input->post('telefone');
        $mensagem = $this->input->post('mensagem');
        $codigo = uniqid();
        //echo $nome, $email, $telefone, $mensagem;


        if ($this->ContatoModel->insertContato($nome, $email, $telefone, $mensagem, $codigo)) {
            echo "<script>                        
                        alert('Contato cadastrado com sucesso! \\n Contato registrado Sobº Codigo: $codigo') ;                        
                        location.href ='" . base_url() . "contato'                         
                </script>";
        } else {
            echo "<script>
                    alert('Contato não foi resgistrado!');
                    location.href = 'javascript:history.go(-1)'
                  </script>";
        }
    }

}
