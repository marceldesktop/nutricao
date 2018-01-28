<?php

class calendarioController extends controller{
// construct paRA CHAMAR banco de dados 
    public function __construct (){

    	parent::__construct();

// essa pagina precisa estar logado para acessar 
$u = new Usuarios();
    	$u->verificarLogin();
    
    	 
    }//construct
    
    
    public function index() {
       
        
        
        
        
        
        $this->loadTemplate('agendamentocadastro', $dados);
    }
}//class