<br>
<form action="" method="post">
    <table class="table table-bordered">
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nome" required class="form-control"></td>
        </tr>
        
        <tr>
            <td>CPF</td>
            <td><input type="number" name="cpf" required class="form-control"></td>
        </tr>
        
        <tr>
            <td>Maior Titulação</td>
            <td><input type="text" name="maiortitulacao" required class="form-control"></td>
        </tr>
        
        <tr>
            <td>Área de Formação</td>
            <td><input type="text" name="area_formacao" required class="form-control"></td>
        </tr>
        
        <tr>
            <td>Curriculo Lattes</td>
            <td><input type="text" name="curriculo_lattes" required class="form-control"></td>
        </tr>
        
        <tr>
            <td>Data de atualização</td>
            <td><input type="date" name="data_atualizacao" required class="form-control"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Incluir" class="incluir">
            </td>
        </tr>
    </table>
    
</form>
<?php
if(!empty($_POST)){
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $maiortitulacao=$_POST['maiortitulacao'];
    $area_formacao=$_POST['area_formacao'];
    $curriculo_lattes=$_POST['curriculo_lattes'];
    $data_atualizacao=$_POST['data_atualizacao'];

$sql="INSERT INTO professor VALUES('','$nome','$cpf','$maiortitulacao','$area_formacao','$curriculo_lattes','$data_atualizacao')";
if ($conn->query($sql) === TRUE) {
   echo '<script>alert("Professor Cadastrado! Para acessar o sistema o professor deverá inserir o nome e o CPF")</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

   

$conn->close();
}