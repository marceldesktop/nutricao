<?php

class agendamentocadastroController extends controller{
    
      // construct paRA CHAMAR banco de dados 
    public function __construct (){

    	parent::__construct();

// essa pagina precisa estar logado para acessar 
$u = new Usuarios();
    	$u->verificarLogin();
    
    	 
    }

    public function index(){
        $dados = array();
         $u = new Usuarios();
        
        if(isset($_POST['clinica']) && !empty($_POST['clinica'])){
            $clinica = addslashes($_POST['clinica']);
            $data_inicio = addslashes($_POST['data_inicio']);
            $hora_inicio = addslashes($_POST['hota_inicio']);
            $paciente = addslashes($_POST['paciente']);
            
            
           
            
           
            
        }
        
       $c = new calendario();
        $dados['listaclinicas']=$c->getClinica();

$dados['usuario_nome'] =$u->getNome($_SESSION['nutricaolg']);
$dados['clinica_nome']='';
        $this->loadTemplate('agendamentocadastro', $dados);
    }
}

