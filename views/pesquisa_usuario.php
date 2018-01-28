
<form method=POST >
 <table class="table">
    <tr>
     
    </tr>
     <tr>
      <th width="84">Codigo</th>
      <th width="365">Nome</th>
      
      <td colspan="2">&nbsp;</td>
    </tr>
	
	
	<?php foreach ($array as $key => $value) {
        
    }?>	
   <tr>
      <td width="84"> <?php echo $rows['id']; ?></td>
      <td width="365"> <?php echo $rows['nome']; ?></td>
      <td width="365"> <?php echo $rows['grupo']; ?></td>
      
     <td width="47"><a href="lista_alimentos_form_alterar.php
     ?id_alimentos=<?php echo $rows['id_substitutiva'];?> 
      &alimentos_nome=<?php echo $rows['nome'];?>
       &alimentos_grupo=<?php echo $rows['grupo'];?>
      ">Alterar</a></td>
     <td></td>
    </tr>
    
   
    
    
	     
    <tr>
      <td colspan="4">total de registro: <?php echo $enumregistro; ?></td>
    </tr>
    
  </table>
</div>
</div>
    <?phpendforeach;?>
    </form>

