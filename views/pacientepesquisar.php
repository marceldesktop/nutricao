
<div class="container-fluid">

    <a href="pacientecadastrar">Novo Cadastro</a>
    
    
    <form  method=GET class="form" >
        <div class="input-group">
              <label>Pesquisar</label>
            <input type="text" class="form-control" name="pesquisa" placeholder="Pesquisa">
    <div class="input-group-btn">
      <button class="btn btn-success" type="submit">
        <i class="glyphicon glyphicon-search "></i>
      </button>
    </div>
  </div>
  

 <table class="table" width="100%">
 
     <tr>
      <th>Codigo</th>
      <th>Nome</th>
      <th>Email</th>
      
     </tr>
	
   <tr>
      
	<?php 
         if($viewData['listapacientes'] == ''){ 
             
              ?>
      <td> </td>
      <td> </td>
      <td> </td>
      
     <td></td>
     
    </tr>
    
   
     <?php
             
             
         }else{
               foreach ($viewData['listapacientes'] as $value): {
        
   ?>
      <td> <?php echo $value['id']; ?></td>
      <td> <?php echo $value['nome']; ?></td>
      <td> <?php echo $value['email']; ?></td>
      
     <td><a href="pacienteeditar?id=<?php echo $value['id'];?> 
      
      ">Alterar</a></td>
     
    </tr>
    
   
         <?php } endforeach; }?>
        
      	
    
	     
    
    
  </table>


    
    </form>

</div>