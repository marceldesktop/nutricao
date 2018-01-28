




<title>Calculos - Nutrição</title>


 


<div class="container-fluid">

  <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#menu1">1.Calculo de Necessidade Energetica Total</a></li>
    <li><a data-toggle="tab" href="#menu2">2.Calculo de Dieta</a></li>
    <li><a data-toggle="tab" href="#menu3"> 3.Calculo de Peso</a></li>
  </ul>
  
  <div class="tab-content">
  
      <div id="menu1" class="tab-pane active in fade">
      <h3>1. Caculo de Necessidade Energetica Total</h3>
      
 <form name="form3" method="post" id="form3" >
        <table class="table table-striped" width="1078" height="421" border="0">
        
        <tr>
          <td align="right">Sexo:</td>
          <td><label for="sexo"></label>
            <select name="sexo" id="sexo" onChange="calcular_imc()" >
              <option value="mulher">Mulher</option>
              <option value="homem">Homem</option>
              <option value="mulher obesa">Mulher Obesa</option>
              <option value="homem obeso">Homem Obeso</option>
              <option value="mulher gestante">Mulher Gestante</option>
              <option value="mulher nutriz">Mulher Nutriz</option>
            </select></td>
          
          <td align="right"><label for="net_peso">Peso:</label></td>
          <td><input type="text" name="net_peso" id="peso" onKeyUp="calcular_imc()"></td>
         
        </tr>
        <tr>
          <td>Semana Gestacional:</td>
          <td><label for="gestacional"></label>
            <input name="gestacional" type="text" id="gestacional" onKeyUp="calcular_imc()"></td>
        
		 
		
          
          <td>Classificação IMC:</td>
          <td><label for="textfield12"></label>
            <input name="classificacao" type="text" id="classificacao" readonly></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Fator Atividade:</td>
          <td><label for="atividade_fisica"></label>
            <select name="atividade_fisica" id="atividade_fisica"   onChange="calcular_imc()" >
              <option value="sedentario">Sedentário</option>
              
              
              <option value="pouco ativo">Pouco Ativo</option>
              
              
              <option value="ativo">Ativo</option>
              
              
              <option value="muito ativo">Muito Ativo</option>
            </select></td>
          <td>&nbsp;</td>
          <td align="right"><label for="net_altura">Altura:</label></td>
          <td><input type="text" name="net_altura" id="altura" onKeyUp="calcular_imc()"></td>
          <td align="right">IMC:</td>
          <td><label for="net_imc"></label>
            <input name="net_imc" type="text" id="net_imc" readonly></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
       
        <tr>
          <td align="right">Idade:</td>
          <td><input name="net_idade" type="text" id="net_idade" onblur="calcular_imc()" value="0"/></td>
          
        </tr>
       
        
        <tr>
          <td>Resultado:</td>
       
        </tr>
        
        <tr>
          <td align="right">1º ao 6º mês</td>
          <td><label for="net_1ao6"></label>
            <input name="net_1ao6" type="text" id="net_1ao6" readonly ></td>
          <td>NET</td>
          <td align="right">após 6º mês</td>
          <td><label for="textfield13"></label>
            <input name="net_6" type="text" id="net_6" readonly ></td>
          <td>NET</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label for="textfield14"></label>
            <input name="net_1ao6_menos2dp" type="text" id="net_1ao6_menos2dp" readonly ></td>
          <td>NET-2DP</td>
          <td>&nbsp;</td>
          <td><label for="net_1ao6_menos2dp"></label>
            <input name="net_6menos2dp" type="text" id="net_6menos2dp" readonly></td>
          <td>NET-2DP</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label for="textfield15"></label>
            <input name="net_1ao6_mais2dp" type="text" id="net_1ao6_mais2dp" readonly></td>
          <td>NET+2DP</td>
          <td>&nbsp;</td>
          <td><label for="net_1ao6_mais2dp"></label>
            <input name="net_6mais2dp" type="text" id="net_6mais2dp" readonly></td>
          <td>NET+2DP</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
        </table>
        <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <button type="submit" class="btn btn-success" onClick="inverteData();" >Salvar</button>
       
       <button type="reset" name="button_limpar"  class="btn btn-success"/>Limpar</button>
    
      </form>

    </div>
    
    <div id="menu2" class="tab-pane fade">
      <h3>2.  Calculo de Dieta</h3>
      <form name="form2" method="post" action="" id="form2">
          <table class="table table-striped" width="904" height="457" border="1">
          <tr>
            <th colspan="11">grupo alimentares</th>
          </tr>
          <tr>
            <th width="136">&nbsp;</th>
            <td width="60">cereais </td>
            <td width="75">hortaliças cruas</td>
            <td width="78">hortaliças cozidas</td>
            <td width="63">frutas</td>
            <td width="75">leite </td>
            <td width="63">carnes</td>
            <td width="78">leguminosas</td>
            <td width="63">açúcar</td>
            <td width="63">gordura</td>
            <td width="80"><p>Valor em %</p></td>
          </tr>
          <tr>
            <td>Cafe da Manhã</td>
            <td><input name="porcao_cereal" type="text" id="porcao_cereal" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_crua" id="porcao_crua" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_cozida" id="porcao_cozida" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_fruta" id="porcao_fruta" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_leite" id="porcao_leite" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_carne" id="porcao_carne" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_leguminosa" id="porcao_leguminosa" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_acucar" id="porcao_acucar" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_gordura" id="porcao_gordura" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="resul_cafe_manha" id=""  size="10"></td>
          </tr>
          <tr>
            <td height="48">Lanche da Manhã</td>
            <td><input name="porcao_cereal2" type="text" id="porcao_cereal2" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_crua2" id="porcao_crua2" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_cozida2" id="porcao_cozida2" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_fruta2" id="porcao_fruta2" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_leite2" id="porcao_leite2" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_carne2" id="porcao_carne2" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_leguminosa2" id="porcao_leguminosa2" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_acucar2" id="porcao_acucar2" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_gordura2" id="porcao_gordura2" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="resul_lanche_manha" id="textfield3"  size="10"></td>
          </tr>
          <tr>
            <td>Almoço</td>
            <td><input name="porcao_cereal3" type="text" id="porcao_cereal3" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_crua3" id="porcao_crua3" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_cozida3" id="porcao_cozida3" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_fruta3" id="porcao_fruta3" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_leite3" id="porcao_leite3" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_carne3" id="porcao_carne3" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_leguminosa3" id="porcao_leguminosa3" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_acucar3" id="porcao_acucar3" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_gordura3" id="porcao_gordura3" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="textfield5" id="textfield3" size="10" ></td>
          </tr>
          <tr>
            <td>Lanche da Tarde</td>
            <td><input name="porcao_cereal4" type="text" id="porcao_cereal4" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_crua4" id="porcao_crua4" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_cozida4" id="porcao_cozida4" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_fruta4" id="porcao_fruta4" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_leite4" id="porcao_leite4" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_carne4" id="porcao_carne4" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_leguminosa4" id="porcao_leguminosa4" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_acucar4" id="porcao_acucar4" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_gordura4" id="porcao_gordura4" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="textfield6" id="textfield3" size="10"></td>
          </tr>
          <tr>
            <td>Jantar</td>
            <td><input name="porcao_cereal5" type="text" id="porcao_cereal5" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_crua5" id="porcao_crua5" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_cozida5" id="porcao_cozida5" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_fruta5" id="porcao_fruta5" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_leite5" id="porcao_leite5" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_carne5" id="porcao_carne5" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_leguminosa5" id="porcao_leguminosa5" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_acucar5" id="porcao_acucar5" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_gordura5" id="porcao_gordura5" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="textfield7" id="textfield3" size="10" ></td>
          </tr>
          <tr>
            <td>Ceia </td>
            <td><input name="porcao_cereal6" type="text" id="porcao_cereal6" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_crua6" id="porcao_crua6" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_cozida6" id="porcao_cozida6" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_fruta6" id="porcao_fruta6" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_leite6" id="porcao_leite6" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_carne6" id="porcao_carne6" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_leguminosa6" id="porcao_leguminosa6" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_acucar6" id="porcao_acucar6" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="porcao_gordura6" id="porcao_gordura6" size="10" onKeyUp="calcular()"></td>
            <td><input type="text" name="textfield8" id="textfield8" size="10" ></td> 
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#FF0000">Total</td>
            <td bgcolor="#FF0000"><input name="total_cereal" type="text" id="cerealTotal" size="10" readonly ></td>
            <td bgcolor="#FF0000"><input name="total_crua" type="text" id="cruaTotal" size="10" readonly ></td>
            <td bgcolor="#FF0000"><input name="total_cozida" type="text" id="cozidaTotal" size="10" readonly></td>
            <td bgcolor="#FF0000"><input name="total_fruta" type="text" id="frutaTotal" size="10" readonly ></td>
            <td bgcolor="#FF0000"><input name="total_leite" type="text" id="leiteTotal" size="10" readonly ></td>
            <td bgcolor="#FF0000"><input name="total_carne" type="text" id="carneTotal" size="10" readonly ></td>
            <td bgcolor="#FF0000"><input name="total_legu" type="text" id="leguTotal" size="10" readonly></td>
            <td bgcolor="#FF0000"><input name="total_acucar" type="text" id="acucarTotal" size="10" readonly ></td>
            <td bgcolor="#FF0000"><input name="total_gordura" type="text" id="gorduraTotal" size="10" readonly ></td>
          </tr>
          <tr>
            <td bgcolor="#FFFF00">Correção de valores*(g)</td>
            <td colspan="2" align="center" bgcolor="#FFFF00"><label for="correcao_cereal"></label>
              <label for="porcao_gordura"></label>
              <label for="correcao_kcal"></label>
              <input name="correcao_kcal" type="text" id="correcao_kcal" size="10" readonly></td>
            <td colspan="2" align="center" bgcolor="#FFFF00"><label for="correcao_cozidas"></label>
              <label for="correcao_carboidrato"></label>
              <input name="correcao_carboidrato" type="text" id="correcao_carboidrato" size="10" onKeyPress="calcular()"></td>
            <td colspan="2" align="center" bgcolor="#FFFF00"><label for="correcao_leite"></label>
              <label for="correcao_proteina"></label>
              <input name="correcao_proteina" type="text" id="correcao_proteina" size="10" onKeyPress="calcular()"></td>
            <td colspan="2" align="center" bgcolor="#FFFF00"><label for="correcao_leguminosas"></label>
              <label for="correcao_lipideo"></label>
              <input name="correcao_lipideo" type="text" id="correcao_lipideo" size="10" onKeyUp="calcular()"></td>
            <td bgcolor="#FFFF00"><label for="correcao_gordura">
              <!--*   Use o campo correção de valores para alterar valores de macronutrientes dos produtos light, diet ou especias,  usados pelo paciente e que  diferem da média da porção.   Para incluir, basta digitar o valor do(s) macronutriente(s) e para reduzir,  use o sinal negativo antes do número.  -->
            </label></td>
            <td>&nbsp;</td>
          </tr>
         
          <tr>
            <th colspan="11">Distribuição dos macronutrientes em Gramas</th>
          </tr>
          <tr>
            <th colspan="2">Kcal</th>
            <td>Carboidratos</td>
            <td><input name="total_carboidrato" type="text" id="total_carboidrato" size="10"></td>
            <td>Proteinas</td>
            <td><input name="total_proteina" type="text" id="total_proteina" size="10"></td>
            <td>Lipideos</td>
            <td><input name="total_lipideo" type="text" id="total_lipideo" size="10"></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <th colspan="2"> <input type="text" name="total_kcal" id="total_kcal"  ></th>
            <td align="right">%</td>
            <td><label for="porcentoCarboidrato"></label>
              <input name="porcentoCarboidrato" type="text" id="porcentoCarboidrato" size="10"></td>
            <td align="right"><label for="total_proteina">g / kg</label></td>
            <td><label for="gramakiloProteina"></label>
              <input name="gramakiloProteina" type="text" id="gramakiloProteina" size="10"></td>
            <td align="right"><label for="total_lipideo">%</label></td>
            <td><label for="porcentoLipideo"></label>
              <input name="porcentoLipideo" type="text" id="porcentoLipideo" size="10"></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <label for="textfield"></label>
        <p> data do calculo:
          <input type="text" name="textfield" id="textfield" value= "<?php  echo date ('d/m/Y')?>"  >
        </p>
       
        <button type="submit" class="btn btn-success" onClick="inverteData();" >Salvar</button>
       
       <button type="reset" name="button_limpar"  class="btn btn-success"/>Limpar</button>
    
      </form>
      
    </div>
    
    <div id="menu3" class="tab-pane fade">
      <h3>3 Calculo de Peso</h3>
     <form name="calculoPeso" id="calculoPeso" >
         <table class="table table-striped" width="984" height="419" border="0">
   
        <tr>
          <td>&nbsp;</td>
          <td>NET:</td>
          <td><label for="net"></label>
          <input name="net" type="text" id="net" readonly></td>
          <td>&nbsp;</td>
          <td>Sexo:</td>
          <td><label for="sexo2"></label>
          <input name="sexo2" type="text" id="sexo2" readonly></td>
          <td>&nbsp;</td>
          <td>IMC:</td>
          <td><label for="imc"></label>
          <input name="imc" type="text" id="imc" readonly></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Peso:</td>
          <td><label for="peso"></label>
          <input name="peso2" type="text" id="peso2" readonly></td>
          <td>&nbsp;</td>
          <td>Idade:</td>
          <td><label for="idade"></label>
          <input name="idade2" type="text" id="idade2" readonly></td>
          <td>&nbsp;</td>
          <td>Classificação IMC:</td>
          <td><label for="classificacao2"></label>
            <input name="classificacao2" type="text" id="classificacao2" readonly></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Altura:</td>
          <td><label for="altura"></label>
          <input name="altura2" type="text" id="altura2" readonly></td>
          <td>&nbsp;</td>
          <td>Fator Atividade:</td>
          <td><label for="fator_atividade"></label>
          <input name="fator_atividade" type="text" id="fator_atividade" readonly></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      
        <tr>
          <td>&nbsp;</td>
          <td>% de Redução de Peso:</td>
          <td><label for="reducao_peso"></label>
          <input type="text" name="reducao_peso" id="reducao_peso" onKeyUp="calculaPeso()"></td>
          <td>&nbsp;</td>
          <td>Perda Ponderal Total:</td>
          <td><label for="perda_ponderal"></label>
          <input name="perda_ponderal" type="text" id="perda_ponderal" onKeyUp="calculaPeso()" readonly></td>
          <td>Quilos</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Duração (Mês);</td>
          <td><label for="duracao"></label>
          <input type="text" name="duracao" id="duracao" onKeyUp="calculaPeso()"></td>
          <td>&nbsp;</td>
          <td>VET (Prescrito):</td>
          <td><label for="vet_prescrito"></label>
          <input name="vet_prescrito" type="text" id="vet_prescrito" readonly></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Proximo Retorno:</td>
          <td><label for="proximo_retorno"></label>
            <label for="proximo_retorno2"></label>
          <select name="proximo_retorno2" id="proximo_retorno2" onChange="calculaPeso()">
            <option value="0.25">1 Semana</option>
            <option value="0.50">2 Semanas</option>
            <option value="0.75">3 Semanas</option>
            <option value="1.00">4 Semanas</option>
            <option value="1.50">6 Semanas</option>
            <option value="2.00">2 Meses</option>
            <option value="3.00">3 Meses</option>
            <option value="4.00">4 Meses</option>
            <option value="5.00">5 Meses</option>
            <option value="6.00">6 Meses</option>
            <option value="7.00">7 Meses</option>
            <option value="8.00">8 Meses</option>
            <option value="9.00">9 Meses</option>
            <option value="10.00">10 Meses</option>
            <option value="11.00">11 Meses</option>
            <option value="12.00">1 Ano</option>
          </select></td>
          <td>&nbsp;</td>
          <td>VET (apos 10 semanas):</td>
          <td><label for="vet_apos_semana"></label>
          <input name="vet_apos_semana" type="text" id="vet_apos_semana" readonly ></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
      </table>
      </form>
      
      <button type="submit" class="btn btn-success" onClick="inverteData();" >Salvar</button>
       
       <button type="reset" name="button_limpar"  class="btn btn-success"/>Limpar</button>
    
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
    
  
</div>
</div>
