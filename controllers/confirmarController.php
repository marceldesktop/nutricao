<?php

class confirmarController extends controller{
   
    

    public function index() {
        $dados = array();


if (!empty($_GET['token']) ) {

$token = $_GET['token'];


		
   

			 $u = new Usuarios();
       $u->confirmarCadastro($token);



	
}
				
   
        //$this->loadTemplate('redefinir_senha', $dados);
    }
    
    
}
