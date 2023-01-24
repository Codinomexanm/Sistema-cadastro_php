
<form action="" method="post">
    <table class="table table-bordered">
        <tr>
            <td>Data</td>
            <td><input type="date" name="data" required class="form-control"></td>
        </tr>
        
          <tr>
            <td>Local</td>
            <td><input type="text" name="local" required class="form-control"></td>
        </tr>
        
          <tr>
            <td>Deliberações</td>
            <td><input type="text" name="deliberacoes" required class="form-control"></td>
        </tr>
        
          <tr>
            <td>Participantes</td>
            <td><input type="text" name="participantes" required class="form-control"></td>
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
    $data=$_POST['data'];
$local=$_POST['local'];
$deliberacoes=$_POST['deliberacoes'];
$participantes=$_POST['participantes'];

$sql="INSERT INTO atas VALUES('','$data','$local','$deliberacoes','$participantes')";
if ($conn->query($sql) === TRUE) {
   echo '<script>alert("ata Cadastrada")</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}