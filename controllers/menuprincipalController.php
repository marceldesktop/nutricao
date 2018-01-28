<?php
class menuprincipalController extends controller{
   
    // construct paRA CHAMAR banco de dados 
    public function __construct (){

    	parent::__construct();

// essa pagina precisa estar logado para acessar 
$u = new Usuarios();
    	$u->verificarLogin();
    
    	 
    }

    public function index() {
        $dados = array();

       $u = new Usuarios();
       $u->setLogado();
       $f =new funcionarios();
       
    		
       $dados['usuario_nome']=$u->getNome($_SESSION['nutricaolg']);
       $dados['func_nome']=$f->getNome($_SESSION['nutricaolg']);
         $clinica = new clinicas($f->getClinica());
           
         
      
        $dados['clinica_nome'] = $clinica->getNome();
      
$c = new calendario();
$dados['agendamento'] = $c->getAgendamento();


$u->log('acessou menu principal', $dados['usuario_nome']=$u->getNome($_SESSION['nutricaolg']));

$this->loadTemplate('menuprincipal', $dados);
    }
    
    
}
