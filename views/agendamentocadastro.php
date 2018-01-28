<h1>Cadastrar Agendamento</h1>
<div class="container-fluid">
    

<form  method="POST">
    <div class="form-group">
    <label>Escolher a Clinica</label>
    <select class="form-control">
       <?php foreach ($viewData['listaclinicas'] as $value): {
    ?>

        <option value="<?php echo $value['id']; ?>"><?php echo $value['nome']; ?></option>
       <?php  }
    endforeach;?>
    </select>
    </div>
    <div class="form-group">
        <label>Agendar para o dia:</label>
        <input type="date" name="data_inicio" class="form-control"/>
        <button class="btn btn-success">Verificar Disponibilidade</button>
    </div>
    <div class="form-group">
    <label>Marcar horario</label>
    <input type="time" name="hora_inicio" class="form-control">
    <button class="btn btn-success">Verificar Disponiblidade</button>
    </div>
</form>

</div>