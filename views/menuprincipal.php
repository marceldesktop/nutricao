
<link rel='stylesheet' href='<?php echo BASE_URL; ?>assets/fullcalendar/fullcalendar.css' />
     <link rel='stylesheet' href='<?php echo BASE_URL; ?>assets/css/agenda.css' />
    
    <script src='<?php echo BASE_URL; ?>assets/fullcalendar/lib/moment.min.js'></script>
    <script src='<?php echo BASE_URL; ?>assets/fullcalendar/fullcalendar.js'></script>
    <script src='<?php echo BASE_URL; ?>assets/js/agenda.js'></script>
    
    <!-- script de tradução -->
    <script src='<?php echo BASE_URL; ?>assets/fullcalendar/lang/pt-br.js'></script>
 
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-8" >
                    <div id='calendario'>
                    
                            
                     </div>
                </div>
        
        <div class="col-sm-4">
                        <div class="row"> 
                                <!--Data atual Javascript --> 
                                <script src="js/hoje.js"></script>

                                <h2> Consultas de hoje</h2>
                                <div class="col-sm-8"> 
                                  <?php  foreach ($viewData['agendamento'] as $value): {?>

                            <a href="consulta_formulario.php?<?php echo $value['id_paciente'];?>">
                                        <div class="exemplo_widget">
                                            <?php echo $value['data_agendamento'].'-'; ?>
                                            <?php echo $value['hora_agendamento'].'-'; ?>
                                  <?php echo $value['status'];?>
                                  </div>
                    <?php } endforeach; ?>
                       </a>   </div>
            
                       
                            <a href="<?php echo BASE_URL; ?>agendamentocadastro"><button class="btn btn-sucess"> Cadastrar Agendamento </button></a>
                             </div>
        </div>
                <!--
                <?php // Icones de acordo com o acesso do usuário //
                //coordenador
                if ($_SESSION['funcao']== 'Coordenador'){ ?>



                <div class="icone_div"><a href="relatorio/relatorio1.php"><img src="img/ico_relatorios.png" width="100" height="100" /></a></div>
                <div class="icone_div"><a href="usuario_formulario.php"><img src="img/ico_cadastrar_usuario.png" width="100" height="100" /></a></div>
                <div class="icone_div"><a href="agendamento_form_lista.php"><img src="img/ico_agenda.png" width="100" height="100" /></a></div>
                <div class="icone_div"><a href="agendamento_formulario.php"><img src="img/ico_agendar_consulta.png" width="100" height="100" /></a></div>
                <div class="icone_div"><a href="paciente_formulario.php"><img src="img/ico_cadastrar_paciente.png" width="100" height="100" /></a></div>

                <div class="icone_div"><a href="manutencao.html"><img src="img/ico_lista_de_espera.png" width="100" height="100" /></a></div>
                <!--estagiaria-->
                <?php  } 
                else{false;} 
                 if ($_SESSION['funcao']== 'Estagiaria'){ ?>
                <!--<div class="icone_div"><a href="calculo_formulario.php"><img src="img/calculadora_icone.png" width="100" height="100" /></a></div>
                <div class="icone_div"><a href="alimentos_formulario.php"><img src="img/cadastro_alimento.png" width="100" height="100" /></a></div>
                <div class="icone_div"><a href="consulta_form_lista.php"><img src="img/ico_lista_de_espera.png" width="100" height="100" /></a></div>
                <div class="icone_div"><a href="consulta_formulario.php"><img src="img/ico_consultas.png" width="100" height="100" /></a></div>
                <div class="icone_div"><a href="agendamento_formulario.php"><img src="img/ico_agendar_consulta.png" width="100" height="100" /></a></div>
                <!--professor-->
                <?php  }
                else{}
                 if ($_SESSION['funcao']== 'Professora'){ ?>
                <!--<div class="icone_div"><a href="calculo_formulario.php"><img src="img/calculadora_icone.png" width="100" height="100" /></a></div>
                <div class="icone_div"><a href="lista_alimentos_lista.php"><img src="img/cadastro_alimento.png" width="100" height="100" /></a></div>
                <div class="icone_div"><a href="agendamento_form_lista.php"><img src="img/ico_confirmar_consulta.png" width="100" height="100" /></a></div>
                <div class="icone_div"><a href="consulta_formulario.php"><img src="img/ico_consultas.png" width="100" height="100" /></a></div>
                <div class="icone_div"><a href="agendamento_formulario.php"><img src="img/ico_agendar_consulta.png" width="100" height="100" /></a></div>

                <!--recepçao-->
                <?php   }
                else{} if ($_SESSION['funcao']=='Funcionaria'){ ?>
                <!--<div class="icone_div"><a href="consulta_espera.php"><img src="img/ico_lista_de_espera.png" width="100" height="100" /></a></div>

                <div class="icone_div"><a href="agenda.php"><img src="img/ico_agenda.png" width="100" height="100" /></a></div>

                <?php } //if($_SESSION['funcao']==5){ ?>
                <!--<div class="icone_div"><a href="agenda.php"><img src="img/ico_agenda.png" width="100" height="100" /></a></div>
                <div class="icone_div"><a href="presenca.php"><img src="img/ico_presenca.png" width="100" height="100" /></a></div>
                <div class="icone_div"><a href="paciente_menu.php"><img src="img/ico_pacientes.png" width="100" height="100" /></a></div>
                <div class="icone_div"><a href="templates.php"><img src="img/ico_templates.png" width="100" height="100" /></a></div>

                -->



        
    </div>

    </div>
 
 