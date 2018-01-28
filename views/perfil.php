   <h1>Alterar Perfil</h1>
    

   <div class="container-fluid">
 
   <form  method="POST" >
  
      <div class="form-group">
          
       
            <label for="inputNome" class="control-label" >Nome*</label></td>
            <input name="nome" type="text" id="nome" class="form-control" value="<?php echo $info['nome'];?>" /> 
      </div>
       <div class="form-group">
             <label class="col-sm2 control-label">Telefone:</label>
             <input name="telefone" type="text" id="usuario_telefone" class="form-control" value="<?php echo 'nao tem no banco';?> " size="11" />
       </div>
       <div class="form-group">
             <label>Celular*</label>
             <input name="celular" type="text" id="usuario_celular" class="form-control" value="<?php echo $info['celular'];?> " size="11"  />
        </div>
       <div class="form-group">
              <label> Senha*</label>
              <input name="senha" type="password" id="senha" value="<?php echo $info['senha'];?> " class="form-control"   />
       </div>
       <div class="form-group">
               <label for="inputSexo" class="control-label">Sexo*</label></td>
               <?php  if($info['sexo']== '1'){ echo 'Masculino';}else{echo 'Feminino';} ?>   
       </div>
       <div class="form-group">
            <label>E-mail*:</label>
             <?php echo $info['email'];?> 
        </div>
          
      
    </div>
      
    <button type="submit" class="btn btn-success"  >Editar</button>
       
       <button type="reset" name="button_limpar"  class="btn btn-success"/>Limpar</button>
    
 

   <?php if (isset($erro) && !empty($erro)): ?>
     <div class="alert alert-danger"><?php echo $erro; ?></div> 
       <?php endif; ?>
 
   </form>
