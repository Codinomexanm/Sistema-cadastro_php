<script>
            function confirmar(id) {
                var resposta = confirm("deseja mesmo excluir?");
                if (resposta == true) {
                    window.location.href = "?op=2.5&id=" + id;
                }
            }
        </script>
<?php $nome=$_POST['param'];?>

        <table class="table table-bordered">
    <tbody>
        <tr>
            <th>Nome</th>
            <th>Opções</th>da
        </tr>
       <?php $sql = "SELECT * FROM ppc WHERE nome LIKE '%{$nome}%'"; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>
        <tr>
    <Td><?php echo $row['nome'];?></Td>
    <Td><a href="?op=2.3&id=<?php echo $row['id'];?>" class="visualizar"><span class="glyphicon glyphicon-eye-open"></span></a> //
        <a href="?op=2.4&id=<?php echo $row['id'];?>" class="editar"><span class="glyphicon glyphicon-edit"></span></a> //
        <a href="javascript:func()" onClick="confirmar('<?php echo $row['id'];?>')" class="excluir"><span class="glyphicon glyphicon-remove-sign"></span></a></Td>
        </tr>
            <?php }} else { echo "<center>Nada foi encontrado</center>"; }$conn->close();?>
    </tbody>
</table>

