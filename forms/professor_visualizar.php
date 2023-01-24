<script>
            function confirmar(id) {
                var resposta = confirm("deseja mesmo excluir?");
                if (resposta == true) {
                     window.location.href = "?op=8.5&id=" + id;
                }
            }
        </script>
<br>

<?php $sql = "SELECT * FROM professor WHERE id=".$_GET['id']."."; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>

<table class="table table-bordered">
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nome" required value="<?php echo $row['nome'];?>" class="form-control" readonly=""></td>
        </tr>
        
        <tr>
            <td>CPF</td>
            <td> <input type="number" name="cpf" required value="<?php echo $row['cpf'];?>" class="form-control" readonly=""></td>
        </tr>
        
        <tr>
            <td>Maior Titulacao</td>
            <td> <input type="text" name="maiortitulacao" required value="<?php echo $row['maiortitulacao'];?>" class="form-control" readonly=""></td>
        </tr>
        
        <tr>
            <td>Area de Formacao</td>
            <td><input type="text" name="area_formacao" required value="<?php echo $row['area_formacao'];?>" class="form-control" readonly=""></td>
        </tr>
        
        <tr>
            <td>Curriculo Lattes (LINK)</td>
            <td><input type="text" name="curriculo_lattes" required value="<?php echo $row['curriculo_lattes'];?>" class="form-control" readonly=""></td>
        </tr>
        
        <tr>
            <td>Data de Atualizacao </td>
            <td><input type="date" name="data_atualizacao" required value="<?php echo $row['data_atualizacao'];?>" class="form-control" readonly=""></td>
        </tr>
        <tr>
            <td><a href="?op=8.4&id=<?php echo $row['id'];?>" class="editar"><span class="glyphicon glyphicon-edit"></span>Editar</a></td>
            <td><a href="javascript:func()" onClick="confirmar('<?php echo $row['id'];?>')" class="excluir"><span class="glyphicon glyphicon-remove-sign"></span>Excluir</a></td>
        </tr>
    </table> 

<?php }}$conn->close();?>


