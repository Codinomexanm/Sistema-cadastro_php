<script>
            function confirmar(id) {
                var resposta = confirm("deseja mesmo excluir?");
                if (resposta == true) {
                    window.location.href = "?op=3.5&id=" + id;
                }
            }
 </script>
<div class="lado">
<a href="?op=3.1">Incluir</a>
 <form action="?op=3.2" method="post">
     
     <input type="text" name="param" placeholder="Pesquisar (por curso)" required></form>
</div>
<table class="table table-hover">
    <tbody>
        <tr>
            <th class="info">Curso</th>
            <th class="info">Semestre</th>
            <th class="info">Opções</th>
        </tr>
        <?php $sql = "SELECT * FROM planoensino"; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>
        <tr>
    <Td><?php echo $row['curs'];?></Td>
    <Td><?php echo $row['semestre'];?></Td>
    <Td><a href="?op=3.3&id=<?php echo $row['id'];?>" class="visualizar"><span class="glyphicon glyphicon-eye-open">Visualizar</a> //
        <a href="?op=3.4&id=<?php echo $row['id'];?>" class="editar"><span class="glyphicon glyphicon-edit">Editar</a> //
        <a href="javascript:func()" onClick="confirmar('<?php echo $row['id'];?>')" class="excluir"><span class="glyphicon glyphicon-remove-sign"></span>Excluir</a></Td>
        </tr>
            <?php }} else { echo "Não há Plano de Ensino  cadastrado"; }$conn->close();?>
    </tbody>
</table>

