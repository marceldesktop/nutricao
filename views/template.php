<!-- Esse template = design (estilo) da maioria das paginas -->
<!DOCTYPE html> <!-- para usufruir do html5 -->
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
        <meta property="og:url" content="http://devmg.pe.hu" />
        <meta property="og:type" content="product"/>
        <meta property="og:title" content="SisNutri"/>
        <meta property="og:description" content="sistema de nutrição,cadastros de clientes, usuarios, clinicas, alimentos,IMC"/>


         <!-- Bootstrap -->
        <link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <script src="<?php echo BASE_URL; ?>assets/js/jquery-3.1.1.min.js"> </script>
        <link href="<?php echo BASE_URL; ?>assets/css/leftmenu.css" rel="stylesheet">
        <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
        <link href="<?php echo BASE_URL; ?>assets/css/form_inicial.css" rel="stylesheet" type="text/css" />
        <!-- chamando biblioteca do js -->
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/css/style.css"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/calculo_net.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/calcula_dieta.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/calcular_reducao_peso.js"></script>
    </head>
  
        <title>CEUNSP - <?php echo $viewData['clinica_nome']; ?></title>
    
    
<!--<div class="leftmenu">
    <div class="menuarea">
        <ul>
            <li><a href="<?php BASE_URL; ?>menuprincipal">Home</a></li>
            <li><a href="calculo">Calculo</a></li>    
               
        </ul> 
    </div>
        
</div>-->
    <nav class="navbar navbar-inverse">
   
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class=" navbar-brand">Clinica - <?php echo $viewData['clinica_nome']; ?> </span>

        </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
                <li ><span class="sr-only">(current)</span></li>

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar<span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                              <li><a href="<?php echo BASE_URL; ?>funccadastrar">Funcionario(a)</a></li>
                                              <!--<li><a href="calculo_formulario.php">Calculo</a></li>-->
                                              <li><a href="<?php echo BASE_URL; ?>agendamentocadastro">Agendamento</a></li>
                                              <li><a href="<?php echo BASE_URL; ?>lista_alimentos">Alimentos</a></li>
                                              <li><a href="<?php echo BASE_URL; ?>pacientecadastrar">Paciente</a></li>
                                              <li role="separator" class="divider"></li>
                                              <!--<li><a href="consulta_formulario.php">Consulta</a></li>-->
                                              <li role="separator" class="divider"></li>
                                              <!--<?php if ($_SESSION['funcao']== 'Coordenador'){ ?>
                                              <li><a href="usuario_formulario.php">Usuario</a></li>
                                              <?php } else {?> <li></li> <?php } ?>-->
                                   </ul>
                 </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pesquisar <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                              <li><a href="<?php echo BASE_URL; ?>funcpesquisar">Funcionario(a)</a></li>
                                              <li><a href="<?php echo BASE_URL; ?>/calendar/calendar.php">Agendamento</a></li>
                                              <li><a href="lista_alimentos_lista.php">Alimentos</a></li>
                                              <li><a href="pacientepesquisar">Paciente</a></li>
                                              <!--<li><a href="consulta_formulario.php">Consulta</a></li>-->
                                              <li role="separator" class="divider"></li>
                                              <li><a href="#"></a></li>
                                              <!--<?php  if ($_SESSION['funcao']== 'Coordenador'){ ?>
                                              <li><a href="usuario_form_lista.php">Usuário</a></li>
                                              <?php } else {?> <li><a href="#"></a></li>  <?php } ?>
                                              -->
                              </ul>
                </li>
                <li ><a href="<?php echo BASE_URL; ?>menuprincipal">Home <span class="sr-only"></span></a></li>
        </ul>
      
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?php echo $viewData['usuario_nome']; ?>
                           <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
                                   <li><a href="<?php echo BASE_URL; ?>perfil">Editar Perfil </a></li>
                                   <li><a href="<?php echo BASE_URL; ?>login/sair">Sair </a></li>
                              </ul>
                </li>
            </ul>
    </div><!-- /.navbar-collapse -->
 
</nav>

  <body>

    <!--  aqui onde vai o corpo das paginas do sistema -->
    <?php  $this->loadViewInTemplate($viewName, $viewData); ?>

</body>
    <div class="footer panel-footer ">
        <center>  Portfólio 2016 - Desenvolvido por MARCEL HOYAMA </center>

    </div>
</html>