<?php

class pacientepesquisarController extends controller{
// construct paRA CHAMAR banco de dados 
    public function __construct (){

    	parent::__construct();

// essa pagina precisa estar logado para acessar 
$u = new Usuarios();
    	$u->verificarLogin();
    
    	 
    }
    
    
    public function index(){
        
        $dados = array();
        
        if(!empty($_GET['pesquisa']) && isset ($_GET['pesquisa'])){
            $pesquisa = addslashes($_GET['pesquisa']);
            
                
          $p = new Pacientes();
        $dados['listapacientes']=$p->getListTodosPacientes($pesquisa);  
      
        
        }else{
              $p = new Pacientes();
              $pesquisa='';
        $dados['listapacientes']=$p->getListTodosPacientes($pesquisa);  
      
        }
        
        $u = new Usuarios();
 
$dados['usuario_nome'] =$u->getNome($_SESSION['nutricaolg']);
$dados['clinica_nome']='';
       $this->loadTemplate('pacientepesquisar', $dados);
    }
}
?>