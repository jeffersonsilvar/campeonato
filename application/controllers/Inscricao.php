<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inscricao extends CI_Controller {

    public function index() {
        $this->load->view('template/html-datatable-header');
        $this->load->view('template/html-navigation-header');
        $this->load->view('inscricao/home');
        $this->load->view('template/footer');
        $this->load->view('template/html-footer');
    }

    public function escolhaParticipantes() {

        if ($this->input->post('participantes') == 3) {
            $textoParticipantes = '3 Participantes';
        } elseif ($this->input->post('participantes') == 4) {
            $textoParticipantes = '4 Participantes';
        }
        $qtdParticipantes = $this->input->post('participantes');
        $data['nomeEquipe'] = $this->input->post('nomeEquipe');
        $data['participantes'] = $this->input->post('participantes');
        $data['textoParticipantes'] = $textoParticipantes;
        //$recaptcha = $this->input->post('g-recaptcha-response');



        if ($qtdParticipantes == 3) {
            $this->load->view('template/html-datatable-header');
            $this->load->view('template/html-navigation-header');
            $this->load->view('inscricao/tresParticipantes', $data);
            $this->load->view('template/footer');
            $this->load->view('template/html-footer');
        } else {
            $this->load->view('template/html-datatable-header');
            $this->load->view('template/html-navigation-header');
            $this->load->view('inscricao/quatroParticipantes', $data);
            $this->load->view('template/footer');
            $this->load->view('template/html-footer');
        }
    }

    public function cadastrarTresParticipantes() {
        $cpf1 = $this->input->post('cpf1');
        $cpf2 = $this->input->post('cpf2');
        $cpf3 = $this->input->post('cpf3');

        if ($this->verificar_CPF($cpf1)) {
            echo "<script>
                    alert('CPF do primeiro participante invalido!');
                    location.href = 'javascript:history.go(-1)'
                  </script>";
        } elseif ($this->verificar_CPF($cpf2)) {
            echo "<script>
                    alert('CPF do segundo participante invalido!');
                    location.href = 'javascript:history.go(-1)'
                  </script>";
        } elseif ($this->verificar_CPF($cpf3)) {
            echo "<script>
                    alert('CPF do terceiro participante invalido!');
                    location.href = 'javascript:history.go(-1)'
                  </script>";
        } else {
            echo "<script>                        
                        alert('CPF cadastrado com sucesso! \\n Contato registrado Sobº Codigo: ') ;                        
                        location.href ='" . base_url() . "'                         
                </script>";
        }
    }

    public function cadastrarQuatroParticipantes() {
        
    }

    public function verificar_CPF($valor){ // Cria a funÃ§Ã£o com o parÃ¢metro da variÃ¡vel.
	
		$n[1]=substr($valor,0,1); // Armazena no vetor os valores na posiÃ§Ã£o da variÃ¡vel por intermÃ©dio da funÃ§Ã£o.
		$n[2]=substr($valor,1,1);
		$n[3]=substr($valor,2,1);
		$n[4]=substr($valor,3,1);
		$n[5]=substr($valor,4,1);
		$n[6]=substr($valor,5,1);
		$n[7]=substr($valor,6,1);
		$n[8]=substr($valor,7,1);
		$n[9]=substr($valor,8,1);
		$n[10]=substr($valor,9,1);
		$n[11]=substr($valor,10,1);
		
	$soma1=($n[1]*10)+($n[2]*9)+($n[3]*8)+($n[4]*7)+($n[5]*6)+($n[6]*5)+($n[7]*4)+($n[8]*3)+($n[9]*2); // VariÃ¡vel de + e * com os nÂº do CPF.
	
	$dgt1=11-($soma1%11); // Calcula o primeiro digito de controle e o armaneza na variÃ¡vel.
	
	if ($dgt1==10 or $dgt1==11) { // Verifica se o valor da variÃ¡vel Ã© 10 ou 11. Em caso afirmativo esta variÃ¡vel recebe o valor de zero(0).
		$dgt1=0;
		}	
	
	$soma2=($n[1]*11)+($n[2]*10)+($n[3]*9)+($n[4]*8)+($n[5]*7)+($n[6]*6)+($n[7]*5)+($n[8]*4)+($n[9]*3)+($dgt1*2); 
	// VariÃ¡vel que soma e multiplica todos os nÃºmeros do CPF com a soma do valor do primeiro dÃ­gito multiplicado por dois(2).

	$dgt2=11-($soma2%11); // Calcula o segundo digito de controle e o armaneza na variÃ¡vel.
	
	if ($dgt2==10 or $dgt2==11) { // Verifica se o valor da variÃ¡vel Ã© 10 ou 11. Em caso afirmativo esta variÃ¡vel recebe o valor de zero(0). 
		$dgt2=0;
		}	
		
	if ($dgt1<>$n[10] OR $dgt2<>$n[11]) { // Verifica os valores dos dÃ­gitos de controle com os valores inseridos no formulÃ¡rio.
											// Em caso afirmativo, armazena o valor "true" na variÃ¡vel. Caso contrÃ¡rio, o valor "false".
		$erro=true;                
		}
		else{
			$erro=false;
			}
			return $erro; // Encerra a funÃ§Ã£o.
			}
    

}
