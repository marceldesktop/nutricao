<?php

class funcpesquisarController extends controller{
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
            
                
          $u = new Usuarios();
        $dados['listausuarios']=$u->getListTodosUsuarios($pesquisa);  
      
        
        }else{
              $u = new Usuarios();
              $pesquisa='';
        $dados['listausuarios']=$u->getListTodosUsuarios($pesquisa);  
      
        }
        
        $u = new Usuarios();
 
$dados['usuario_nome'] =$u->getNome($_SESSION['nutricaolg']);
$dados['clinica_nome']='';
       $this->loadTemplate('funcpesquisar', $dados);
    }
}
?>