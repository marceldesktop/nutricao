
  <center> <h1>Cadastro de Usuário </h1>
    


 <form  method="POST" class="form-horizontal">
  <fieldset>
    <table width="624" border="0">
       <tr>
         
     <p>
      <div class="form-group">
          <div class="col-sm-10"> 
        <!-- <td><label for="inputIdentificacao" class="col-sm-2 control-label">Identificação*</label></td>
        
        <td><input type="text" name="usuario_identificacao" id="usuario_identificacao"  placeholder="numero de registro " class="form-control" /></td>
         -->
         
        </p>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
      </tr>
       <tr>
       <p>
       <!--
         <td><label for="inputCpf" class="col-sm-2 control-label">CPF*</label></td>
         
        <td><input type="text" name="usuario_cpf" id="usuario_cpf"  placeholder="somente numeros" class="form-control" /></td>
        -->
       
         </p>
         <td>&nbsp;</td>
       </tr>
       <tr>
       <p>
       
         <td><label for="inputNome" class="col-sm-2 control-label" >Nome*</label></td>
         <td><input name="nome" type="text" id="nome"  placeholder="Digite o nome completo" class="form-control"/></td>
                  
       
       
    </p>
       <td>&nbsp;</td>
    </tr>
        <tr>
        <p>
             
                 <td><label for="inputSexo" class="col-sm-2 control-label">Sexo*</label></td>
         <td><label for="select">
           <select name="usuario_sexo" id="usuario_sexo" class="form-control">
               <option selected="selected" >M</option>
             <option>F</option>
           </select>
         </label></td>
         
      
    </p>
         <td>&nbsp;</td>
    </tr>
    <p>
       <tr>
        <!--   <td><label class="col-sm2 control-label">Telefone:</label></td>
         <td><input name="usuario_telefone" type="text" id="usuario_telefone"  placeholder="Fixo somente numeros" size="11" class="form-control"/></td>
         --><td>&nbsp;</td>
       </tr>
          </p>
       <tr>
         <td align="right">Celular*</td>
         <td><input name="usuario_celular" type="text" id="usuario_celular"  placeholder="DDD + numeros" size="11" class="form-control" /></td>
         <td>&nbsp;</td>
       </tr>
       <tr>
         <td align="right">E-mail*:</td>
         <td><input name="email" type="email" id="email"  placeholder="exemplo@email.com" class="form-control"/></td>
         <td>&nbsp;</td>
       </tr>
       
      
      <tr>
         <td align="right">
       Senha*</td>
         <td>
             <input name="senha" type="password" id="senha" value="" class="form-control" />
         </td>
       </tr>
          
          </div>
      </div>
    </table>
      </br>
    <button type="submit" class="btn btn-success"  >Salvar</button>
       
       <button type="reset" name="button_limpar"  class="btn btn-success"/>Limpar</button>
    
  </fieldset>

   <?php if (isset($erro) && !empty($erro)): ?>
     <div class="alert alert-danger"><?php echo $erro; ?></div> 
       <?php endif; ?>
</form>
</center>




