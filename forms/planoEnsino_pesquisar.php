<script>
            function confirmar(id) {
                var resposta = confirm("deseja mesmo excluir?");
                if (resposta == true) {
                    window.location.href = "?op=3.5&id=" + id;
                }
            }
        </script>
<?php $c=$_POST['param'];?>

        <table class="table table-bordered">
    <tbody>
        <tr>
            <th>Curso</th>
            <th>Semestre</th>
            <th>Opções</th>
        </tr>
       <?php $sql = "SELECT * FROM planoensino WHERE curs LIKE '%{$c}%'"; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>
        <tr>
    <Td><?php echo $row['curs'];?></Td>
    <Td><?php echo $row['semestre'];?></Td>
    <Td><a href="?op=3.3&id=<?php echo $row['id'];?>" class="visualizar"><span class="glyphicon glyphicon-eye-open"></span></a> //
        <a href="?op=3.4&id=<?php echo $row['id'];?>" class="editar"><span class="glyphicon glyphicon-edit"></span></a> //
        <a href="javascript:func()" onClick="confirmar('<?php echo $row['id'];?>')" class="excluir"><span class="glyphicon glyphicon-remove-sign"></span></a></Td>
        </tr>
            <?php }} else { echo "N<center>Nada foi encontrado</center>"; }$conn->close();?>
    </tbody>
</table>

