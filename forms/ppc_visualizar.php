<script>
            function confirmar(id) {
                var resposta = confirm("deseja mesmo excluir?");
                if (resposta == true) {
                     window.location.href = "?op=2.5&id=" + id;
                }
            }
        </script>
<br>
<?php $sql = "SELECT * FROM ppc WHERE id=".$_GET['id']."."; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>
 <table class="table table-bordered">
        <tr>
            <td colspan="2" class="info text-center">Curso</td>
        </tr>
        <tr>
            <td>Nome do curso</td>
            <td><input type="text" name="nome" required value="<?php echo $row['nome'];?>" class="form-control" readonly=""></td>
        </tr>
        
        <tr>
            <td>Tipo de curso </td>
            <td><input type="text" name="tipo" required value="<?php echo $row['tipo'];?>" class="form-control" readonly=""></td>
        </tr>
        
        <tr>
            <td> Modalidade</td>
            <td><input type="text" name="modalidade" required value="<?php echo $row['modalidade'];?>" class="form-control" readonly=""></td>
        </tr>
        
        <tr>
            <td>Denominação</td>
            <td> <input type="text" name="denominacao" required value="<?php echo $row['denominacao'];?>" class="form-control" readonly=""></td>
        </tr>
        
        <tr>
            <td>Habilitação</td>
            <td><input type="text" name="habilitacao" required value="<?php echo $row['habilitacao'];?>" class="form-control" readonly=""></td>
        </tr>
        
        <tr>
            <td>Local</td>
            <td><input type="text" name="local" required value="<?php echo $row['local'];?>" class="form-control" readonly=""></td>
        </tr>
        
        <tr>
            <td>Turnos</td>
            <td> <input type="text" name="turnos" required value="<?php echo $row['turnos'];?>" class="form-control" readonly=""></td>
        </tr>
        
        <tr>
            <td> Vagas</td>
            <td><input type="number" name="vagas" required value="<?php echo $row['vagas'];?>" class="form-control" readonly=""></td>
        </tr>
        
        <tr>
            <td>Carga horária</td>
            <td><input type="text" name="carga" required value="<?php echo $row['carga'];?>" class="form-control" readonly=""> Horas</td>
        </tr>
        <tr>
            <td colspan="2" class="info text-center">Estrutura curricular</td>
        </tr>
   
        <tr>
            <td>Regime</td>
             <td><input type="text" name="regime" required value="<?php echo $row['regime'];?>" class="form-control" readonly=""></td>
        </tr>
        <tr>
            <td>Períodos </td>
             <td><input type="text" name="periodos" required value="<?php echo $row['periodos'];?>" class="form-control" readonly=""></td>
        </tr>
        <tr>
            <td colspan="2" class="info text-center">Coordenador do Curso</td>
        </tr>
        
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nomeC" required value="<?php echo $row['nome_cord'];?>" class="form-control" readonly=""></td>
        </tr>
        
        <tr>
            <td>CPF</td>
            <td><input type="text" name="cpf" required value="<?php echo $row['cpf'];?>" class="form-control" readonly=""></td>
        </tr>
        
        <tr>
            <td>Titulação</td>
            <td><input type="text" name="titulacao" required value="<?php echo $row['titulacao'];?>" class="form-control" readonly=""></td>
        </tr>
        
        <tr>
            <td>Tempo de dedicação</td>
            <td> <input type="number" name="tempo" required value="<?php echo $row['tempo_dedi'];?>" class="form-control" readonly=""> anos</td>
        </tr>
        
        <tr>
            <td colspan="2" class="info text-center"></td>
        </tr>
        
        <tr>
            <td>Perfil do Curso</td>
            <td>
    <textarea rows="4" cols="50" name="perfil_curso" class="form-control" readonly="">
<?php echo $row['pc'];?>
        </textarea></td>
        </tr>
        
         <tr>
            <td>Perfil do Egresso:</td>
            <td>
        <textarea rows="4" cols="50" name="perfil_egresso" class="form-control" readonly="">
<?php echo $row['pe'];?>
        </textarea></td>
        </tr>
        
         <tr>
            <td>Forma de acesso ao curso</td>
            <td><textarea rows="4" cols="50" name="fa" class="form-control" readonly="">
<?php echo $row['fa'];?>
        </textarea></td>
        </tr>
        
         <tr>
            <td>Representação gráfica de um perfil de formação:</td>
            <td>
        <textarea rows="4" cols="50" name="representacao" class="form-control" readonly="">
<?php echo $row['repre'];?>
        </textarea></td>
        </tr>
        
         <tr>
            <td>Sistema de avaliação do processo Ensino Aprendizagem</td>
            <td><textarea rows="4" cols="50" name="sapea" class="form-control" readonly="">
<?php echo $row['sapea'];?>
        </textarea></td>
        </tr>
        
         <tr>
            <td>Sistema de avaliação do projeto do curso</td>
            <td><textarea rows="4" cols="50" name="sapc" class="form-control" readonly="">
<?php echo $row['sapc'];?>
        </textarea></td>
        </tr>
        
         <tr>
            <td>trabalho de conclusão de curso:</td>
            <td><input type="text" name="tcc" value="<?php echo $row['tcc'];?>" class="form-control" readonly=""></td>
        </tr>
        
         <tr>
            <td> Estágio curricular:</td>
            <td><input type="text" name="estagio" value="<?php echo $row['estagio'];?>" class="form-control" readonly=""></td>
        </tr>
        
         <tr>
            <td>Política de atendimento a pessoas com deficiência e/ou Mobilidade reduzida:</td>
            <td><textarea rows="4" cols="50" name="politica" class="form-control" readonly="">
<?php echo $row['politica'];?>
        </textarea></td>
        </tr> 
        <tr>
            <td><a href="?op=2.4&id=<?php echo $row['id'];?>" class="editar"><span class="glyphicon glyphicon-edit"></span>Editar</a></td>
            <td><a href="javascript:func()" onClick="confirmar('<?php echo $row['id'];?>')" class="excluir"><span class="glyphicon glyphicon-remove-sign"></span>Excluir</a></td>
        </tr>
    </table> 
        
<?php }}$conn->close();?>


