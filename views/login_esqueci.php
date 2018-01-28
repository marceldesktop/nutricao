<title>CEUNSP - Esqueci Senha</title>
<link href="<?php echo BASE_URL; ?>assets/css/login.css" rel="stylesheet">
   
    

<center>
<h2>Redefinir senha</h2>
</center>
<div class="loginarea">

<form  method="POST" >
 
  
 
    
  <input name="email" type="email" size="24"  id="email" placeholder="Qual seu email cadastrado?"/>

  
 
   
    <input  src=" " name="redefinir_senha" type="submit" value="Redefinir Senha " /></br>
     
     <?php if (!empty($erro)): ?>
     <div class="warning"><?php echo $erro; ?></div> 
       <?php endif; ?>
 


  </div>
</form>