<?php

class cadastrofuncController extends controller {

    public function index() {


        $dados = array('erro'=> '');
        
        if (isset($_POST['nome'])  && !empty($_POST['nome'])){
               $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = md5(addslashes($_POST['senha']));
            // $usuario_funcao = $_POST['usuario_funcao'];
            $sexo = addslashes($_POST['usuario_sexo']);
         //   $telefone = addslashes($_POST ['usuario_telefone']);
            $celular = addslashes($_POST['usuario_celular']);
           // $cpf = addslashes($_POST['usuario_cpf']);
           // $status = addslashes($_POST['usuario_status']);
           // $setor = addslashes($_POST['usuario_setor']);
         //   $identificacao = addslashes($_POST['usuario_identificacao']);

        
// se foi enviado formulario
// ver se os dados foram preenchidos
        if (!empty($nome) && !empty($email) && !empty($senha)) {
         
         

            //verifica se existe no banco
            $u = new Usuarios();

            if (!$u->usuarioExiste($email)) {

                $_SESSION['nutricaolg'] = $u->cadastrar($nome, $email, $senha, $sexo, $celular);

                $dados['erro']="Cadastrado com sucesso! Aguardar Liberação da Coordenação por e-mail!";
                //header("Location:" . BASE_URL . "menuprincipal");
            } else {

                $dados['erro'] = " Este E-mail já existe!";
            }
        } else {

            $dados['erro'] = "Preencha todos os campos!";
        }

        }


        $this->loadTemplate('cadastrofunc', $dados);
    }

}
