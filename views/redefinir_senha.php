<title>CEUNSP - Redefinir a Senha</title>
<link href="<?php echo BASE_URL; ?>assets/css/login.css" rel="stylesheet">
   
    

<center>
<h2>Redefinir senha</h2>
</center>
<div class="loginarea">

<form  method="POST" >
 
  
 
    
  <input name="senha" type="password" size="24"  id="senha" placeholder="Nova senha?"/>

  
 
   
    <input  src=" " name="redefinir_senha" type="submit" value="Redefinir Senha " /></br>
     
     <?php if (!empty($erro)): ?>
     <div class="warning"><?php echo $erro; ?></div> 
       <?php endif; ?>
 


  </div>
  <div class="atencao">
  <h3> Em manutenção, sem hospedagem de servidor de email, caso precise envio o link para  esse email: marecrisbr@gmail.com com Assunto redefinir senha o prazo de retorno 24 horas </h3>
  </div>
</form>