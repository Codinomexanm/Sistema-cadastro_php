<?php $nome=$_POST['param'];?>

<table >
    <tbody>
        <tr>
            <th>Nome</th>
            <th>Opções</th>
        </tr>
       <?php $sql = "SELECT * FROM ppc WHERE nome LIKE '%{$nome}%'"; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>
        <tr>
    <Td><?php echo $row['nome'];?></Td>
    <Td><a href="?op=4.3&id=<?php echo $row['id'];?>">Visualizar</a>
        </tr>
            <?php }} else { echo "<center>Nada foi encontrado</center>"; }$conn->close();?>
    </tbody>
</table>

