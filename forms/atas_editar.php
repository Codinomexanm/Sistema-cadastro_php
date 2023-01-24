
<?php $sql = "SELECT * FROM atas WHERE id=".$_GET['id']."."; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>
<form action="" method="post">
    <table class="table table-bordered">
        <tr>
            <td>Data</td>
            <td><input type="date" name="data" required value="<?php echo $row['data'];?>" class="form-control"></td>
        </tr>
        
        <tr>
            <td>Local</td>
            <td><input type="text" name="local" required value="<?php echo $row['local'];?>" class="form-control"></td>
        </tr>
        
        <tr>
            <td>Deliberações</td>
            <td><input type="text" name="deliberacoes" required value="<?php echo $row['deliberacoes'];?>" class="form-control"></td>
        </tr>
        
        <tr>
            <td>Participantes</td>
            <td><input type="text" name="participantes" required value="<?php echo $row['participantes'];?>" class="form-control"></td>
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
$data=$_POST['data'];
$local=$_POST['local'];
$deliberacoes=$_POST['deliberacoes'];
$participantes=$_POST['participantes'];

$sql = "UPDATE atas SET 
                    data='$data',
                    local='$local',
                    deliberacoes='$deliberacoes',
                    participantes='$participantes'
                   WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Editado com sucesso")</script>';
     echo '<script>window.history.back()</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}