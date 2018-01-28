

    <link href="<?php echo BASE_URL; ?>assets/css/login.css" rel="stylesheet">
   <link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <script src="<?php echo BASE_URL; ?>assets/js/jquery-3.1.1.min.js"> </script>
       
        <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
    
<title>CEUNSP-Login</title>
<center>
<h2> Modelo de Sistema de Atendimento Clínico</h2>
</center>
<div class="loginarea">
    <div class="lo"
<form  method="POST" >
 
  
 
    
  <input class="campos" name="email" type="email" size="24"  id="email" placeholder="Digite seu email"/>

  
 
  
  
  <input class="campos" name="senha" type="password" size="6"  placeholder="Digite sua senha"/>

 


   
    <input class="campos" src=" " name="entrar" type="submit" value="Logar " /></br>
    <a class="loginesqueceu" href="login_esqueci">Esqueceu Senha!</a>
     <a class="loginesqueceu" href="login_cadastrar">Cadastre-se! </a>
     <?php if (!empty($erro)): ?>
     <div class="warning"><?php echo $erro; ?></div> 
       <?php endif; ?>
 
     
    

  </div>
<center>Duvidas?</center>
     <center>marecrisbr@gmail.com</center>
</form>

 

    

