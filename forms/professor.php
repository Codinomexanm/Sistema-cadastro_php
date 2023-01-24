<script>
            function confirmar(id) {
                var resposta = confirm("deseja mesmo excluir?");
                if (resposta == true) {
                    window.location.href = "?op=8.5&id=" + id;
                }
            }
 </script>
<div class="lado">
 <a href="?op=8.1">Incluir</a>
 <form action="?op=8.2" method="post">
     <span class="glyphicon glyphicon-search"> </span>
     <input type="text" name="param" placeholder="Pesquisar" required></form> 
</div>
<table class="table table-hover">
    <tbody>
        <tr>
            <th class="info">Nome</th>
            <th class="info">Area de Formacao</th>
            <th class="info">Opções</th>
        </tr>
        <?php $sql = "SELECT * FROM professor"; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>
        <tr>
    <Td><?php echo $row['nome'];?></Td>
    <Td><?php echo $row['area_formacao'];?></Td>
    <Td><a href="?op=8.3&id=<?php echo $row['id'];?>" class="visualizar"><span class="glyphicon glyphicon-eye-open"></span>Visualizar</a> //
        <a href="?op=8.4&id=<?php echo $row['id'];?>" class="editar"><span class="glyphicon glyphicon-edit">Editar</a> //
        <a href="javascript:func()" onClick="confirmar('<?php echo $row['id'];?>')" class="excluir"><span class="glyphicon glyphicon-remove-sign"></span>Excluir</a></Td>
        </tr>
            <?php }} else { echo "Professor não possui cadastro"; }$conn->close();?>
    </tbody>
</table>