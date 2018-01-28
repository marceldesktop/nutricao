<?php

class funccadastrarController extends controller {

    public function index() {


        $dados = array('erro'=> '');
        
        if (isset($_POST['nome'])  && !empty($_POST['nome'])){
               $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = md5(addslashes($_POST['senha']));
            // $usuario_funcao = $_POST['usuario_funcao'];
            $sexo = addslashes($_POST['sexo']);
         //   $telefone = addslashes($_POST ['usuario_telefone']);
            $celular = addslashes($_POST['celular']);
           // $cpf = addslashes($_POST['usuario_cpf']);
           // $status = addslashes($_POST['usuario_status']);
           // $setor = addslashes($_POST['usuario_setor']);
         //   $identificacao = addslashes($_POST['usuario_identificacao']);

        
// se foi enviado formulario
// ver se os dados foram preenchidos
        if (!empty($nome) && !empty($email) && !empty($senha)) {
         
         

            //verifica se existe no banco
            $f = new funcionarios();

            if (!$f->usuarioExisteFunc($email)) {

                $_SESSION['nutricaolg'] = $f->cadastrarFunc($nome, $email, $senha, $sexo, $celular);

                $dados['erro']="Cadastrado com sucesso! Aguardar Liberação da Coordenação por e-mail!";
                //header("Location:" . BASE_URL . "menuprincipal");
            } else {

                $dados['erro'] = " Este E-mail já existe!";
            }
        } else {

            $dados['erro'] = "Preencha todos os campos!";
        }

        }
$u = new Usuarios();

$dados['usuario_nome'] =$u->getNome($_SESSION['nutricaolg']);
$dados['clinica_nome']='';
        $this->loadTemplate('funccadastrar', $dados);
    }

}
