
<script>
            function confirmar(id) {
                var resposta = confirm("deseja mesmo excluir?");
                if (resposta == true) {
                    window.location.href = "?op=1.5&id=" + id;
                }
            }
 </script>

 <div class="lado">
 <a href="?op=1.1" >Incluir</a>
 <form action="?op=1.2" method="post"> 
     <input type="text" name="param" placeholder="Pesquisar (por data)" required>
 </form>
 </div>
     <div class="tabela">
 <table class="table table-hover">
    <tbody>
        <tr>
            <th class="info">Data</th>
            <th class="info">Local</th>
            <th class="info">Opções</th>
        </tr>
        <?php $sql = "SELECT * FROM atas"; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>
        <tr>
    <Td><?php echo $row['data'];?></Td>
    <Td><?php echo $row['local'];?></Td>
    <Td><a href="?op=1.3&id=<?php echo $row['id'];?>" class="visualizar"><span class="glyphicon glyphicon-eye-open">Visualizar</span> </a> //
        <a href="?op=1.4&id=<?php echo $row['id'];?>" class="editar"><span class="glyphicon glyphicon-edit">Editar</a> //
        <a href="javascript:func()" onClick="confirmar('<?php echo $row['id'];?>')" class="excluir"><span class="glyphicon glyphicon-remove-sign"></span>Excluir</a></Td>
        </tr>
            <?php }} else { echo "Não há atas cadastradas"; }$conn->close();?>
    </tbody>
</table>
     </div>