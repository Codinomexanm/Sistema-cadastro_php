<script>
            function confirmar(id) {
                var resposta = confirm("deseja mesmo excluir?");
                if (resposta == true) {
                     window.location.href = "?op=1.5&id=" + id;
                }
            }
        </script>

<table class="table table-bordered">
<?php $sql = "SELECT * FROM atas WHERE id=".$_GET['id']."."; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>
    <tr>
            <td>Data</td>
            <td><input type="date" name="data" required value="<?php echo $row['data'];?>" class="form-control" readonly=""></td>
        </tr>
        
        <tr>
            <td>Local</td>
            <td><input type="text" name="local" required value="<?php echo $row['local'];?>" class="form-control" readonly=""></td>
        </tr>
        
        <tr>
            <td>Deliberações</td>
            <td><input type="text" name="deliberacoes" required value="<?php echo $row['deliberacoes'];?>" class="form-control" readonly=""></td>
        </tr>
        
        <tr>
            <td>Participantes</td>
            <td><input type="text" name="participantes" required value="<?php echo $row['participantes'];?>" class="form-control" readonly=""></td>
        </tr>
    
    <tr>
        <td><a href="?op=1.4&id=<?php echo $row['id'];?>" class="editar"><span class="glyphicon glyphicon-edit"></span>  Editar</a></td>
        <td><a href="javascript:func()" onClick="confirmar('<?php echo $row['id'];?>')" class="excluir"><span class="glyphicon glyphicon-remove-sign"></span>   Excluir</a></td>
    </tr>

<?php }}$conn->close();?>
</table>

