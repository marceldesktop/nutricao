<?php

// CONTROLLER ONDE VAI TODOS OS METODOS E VALIDAÇÃO
class perfilController extends controller{
   
             //construct é executado logo que é acessado 
            public function __construct (){
             //parent pegas os outros construct da classe pai
                parent::__construct();

              // estanciando objeto usuarios(classe)
               $u = new Usuarios();
              //chamando um dos metodo do objeto usuarios(classe) 
                $u->verificarLogin();
            }
        // PAGINA INDEX SEMPRE É O PRIMEIRO A SER LIDO E ENVIADO OS DADOS PELA BARRA DE ENDEREÇO
            public function index() {
                $dados = array('usuario_nome'=>'');
                $u = new Usuarios();

        //SEMPRE VERIFCAR SE FOI SETADO,  SE EXISTE O DADO INFORMADO, ANTES DE CONTINUAR
        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
            //SEMPRE PROTEGER O SISTEMA DAS INFORMAÇÕES QUE O USUARIO INFORMA (COM ADDSLASHES)
             $nome = addslashes($_POST['nome']);
             $senha = MD5(addslashes($_POST['senha']));
             $celular = addslashes($_POST['celular']);
             $telefone = addslashes($_POST['telefone']);

             //GUARDAR DADOS DO USUARIO LOGADO NO ARRAY ,CASO ALTERE ALGO NO PERFIL 
              $array=array(
                'nome'=> $nome,
                'telefone'=> $telefone,
                'celular'=> $celular );
          //CHAMANDO METODO DE UPDATE DO PERFIL DO OBJETO USUARIO(CLASSE) e informando as propriedades(dados)
             $u->updatePerfil($array);

          // aqui caso mude a senha verifica as existencia da informação e criptografa e salva 
             if (isset($_POST['senha']) && !empty($_POST['senha'])) {
                 $senha=md5(addslashes($_POST['senha']));
                  // como metodo recebe propriedade como array ,informa o dado como array
                 $this->updatePerfil(array('senha'=>$senha));

             }
        }
                $u = new Usuarios();
                $dados['usuario_nome']=$u->getNome($_SESSION['nutricaolg']);
                $dados['info'] = $u->getDados($_SESSION['nutricaolg']);
               //carregar os dados desse controller na view (formulario)

                 $clinica = new clinicas($_SESSION['nutricaolg']);
                 $dados['clinica_nome'] = $clinica->getNome();

                $this->loadTemplate('perfil', $dados);
            }


}
