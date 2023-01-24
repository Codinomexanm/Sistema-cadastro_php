<script>
            function confirmar(id) {
                var resposta = confirm("deseja mesmo excluir?");
                if (resposta == true) {
                    window.location.href = "?op=1.5&id=" + id;
                }
            }
        </script>
<?php $data=$_POST['param'];?>

        <table  class="table table-bordered">
    <tbody>
        <tr>
            <th>Data</th>
            <th>Local</th>
            <th>Opções</th>
        </tr>
       <?php $sql = "SELECT id,data,local FROM atas WHERE data LIKE '%{$data}%'"; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>
        <tr>
    <Td><?php echo $row['data'];?></Td>
    <Td><?php echo $row['local'];?></Td>
    <Td><a href="?op=1.3&id=<?php echo $row['id'];?>" class="visualizar"><span class="glyphicon glyphicon-eye-open"></span>Visualizar</a> //
        <a href="?op=1.4&id=<?php echo $row['id'];?>" class="editar"><span class="glyphicon glyphicon-edit"></span>Editar</a> //
        <a href="javascript:func()" onClick="confirmar('<?php echo $row['id'];?>')" class="excluir"><span class="glyphicon glyphicon-remove-sign"></span>Excluir</a></Td>
        </tr>
            <?php }} else { echo "<center>Nada foi encontrado</center>"; }$conn->close();?>
    </tbody>
</table>

