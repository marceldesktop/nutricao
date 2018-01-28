<!DOCTYPE html> <!-- para usufruir do html5 -->
<html lang="pt-br">
    <head>
<link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <script src="<?php echo BASE_URL; ?>assets/js/jquery-3.1.1.min.js"> </script>
        <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
    </head>  
    <title>Cadastrar</title>
    <body>
    <center> <h1>Cadastro de acesso </h1></center>
    
    <div class="container-fluid">

 <form  method="POST" class="form">
  
    
     <div class="form-group">
         
         <label>Nome*</label>
         
         <input name="nome" type="text" id="nome"  placeholder="Digite o nome completo" class="form-control"/></td>
          
     </div> 
           <div class="form-group col-md-6">
         
         <label>Sexo*</label>
         
         <select name="usuario_sexo" id="usuario_sexo" class="form-control">
               <option selected="selected" value="1" >Masculino</option>
               <option value="0">Feminino</option>
          </select>
           </div>
       <div class="form-group col-md-6">
         
         <label >Celular*</label>
         
         <input name="usuario_celular" type="text" id="usuario_celular"  placeholder="DDD + numeros" size="11" class="form-control" /></td>
       </div>
       <div class="form-group">
         
         <label >Email*</label>
         
         <input name="email" type="email" id="email"  placeholder="exemplo@email.com" class="form-control"/></td>
       </div>
       <div class="form-group">
         
         <label>Senha*</label>
         
         <input name="senha" type="password" id="senha" value="" class="form-control" />
       </div>
       
    
     <div class="form-group"> 
    <button type="submit" class="btn btn-success right"  >Cadastrar</button>
       
       <button type="reset" name="button_limpar"  class="btn btn-success"/>Limpar</button>
    
     </div>

   <?php if (isset($erro) && !empty($erro)): ?>
     <div class="alert alert-danger"><?php echo $erro; ?></div> 
       <?php endif; ?>
    
     
 </form>

    </div>
    </body>
    </html>