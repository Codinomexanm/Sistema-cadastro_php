<br>
<?php $sql = "SELECT * FROM professor WHERE id=".$_GET['id']."."; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>
<form action="" method="post">
    <table class="table table-bordered">
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nome" required value="<?php echo $row['nome'];?>" class="form-control"></td>
        </tr>
        
        <tr>
            <td>CPF</td>
            <td> <input type="number" name="cpf" required value="<?php echo $row['cpf'];?>" class="form-control"></td>
        </tr>
        
        <tr>
            <td>Maior Titulacao</td>
            <td> <input type="text" name="maiortitulacao" required value="<?php echo $row['maiortitulacao'];?>" class="form-control"></td>
        </tr>
        
        <tr>
            <td>Area de Formacao</td>
            <td><input type="text" name="area_formacao" required value="<?php echo $row['area_formacao'];?>" class="form-control"></td>
        </tr>
        
        <tr>
            <td>Curriculo Lattes (LINK)</td>
            <td><input type="text" name="curriculo_lattes" required value="<?php echo $row['curriculo_lattes'];?>" class="form-control"></td>
        </tr>
        
        <tr>
            <td>Data de Atualizacao </td>
            <td><input type="date" name="data_atualizacao" required value="<?php echo $row['data_atualizacao'];?>" class="form-control"></td>
        </tr>
         <tr>
            <td colspan="2">
                <input type="submit" value="Alterar" >
            </td>
        </tr>
    </table>
    
    
    <?php }}?>
</form>

<?php
if(!empty($_POST)){
    $id=$_GET['id'];
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $maiortitulacao=$_POST['maiortitulacao'];
    $area_formacao=$_POST['area_formacao'];
    $curriculo_lattes=$_POST['curriculo_lattes'];
    $data_atualizacao=$_POST['data_atualizacao'];

$sql = "UPDATE professor SET 
                    nome='$nome',
                    cpf='$cpf',
                    maiortitulacao='$maiortitulacao',
                    area_formacao='$area_formacao',
                    curriculo_lattes='$curriculo_lattes',
                    data_atualizacao='$data_atualizacao'    
                   WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Editado com sucesso")</script>';
    echo '<script>window.history.back()</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
