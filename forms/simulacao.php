<div class="lado">
<form action="?op=4.2" method="post">
    <span class="pesquisar"> <input type="text" name="param" placeholder="Pesquisar(por curso)" required></span> 
</form>
</div>
<table class="table table-hover">
    <tr>
        <th class="info">Curso</th>
        <th class="info">Tipo</th>
        <th class="info">Senominação</th>
        <th class="info">Local de oferta</th>
    <th class="info">Opções</th>
    </tr>
    <tr>
   <?php $sql = "SELECT * FROM ppc"; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>
    <td><?php echo $row['nome'];?></td>
    <td><?php echo $row['tipo'];?></td>
    <td><?php echo $row['denominacao'];?></td>
    <td><?php echo $row['local'];?></td>
    <td><a href="?op=4.3&id=<?php echo $row['id'];?>" class="visualizar"><span class="glyphicon glyphicon-eye-open"></span>Visualizar</a></td>
    
</tr>
    <?php }} else { echo "Não existem cursos  cadastrados"; }?>
</table>
 