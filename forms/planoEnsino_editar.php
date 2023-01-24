<br>
<form method="post" action="">
    <?php $sql = "SELECT * FROM planoensino WHERE id=".$_GET['id']."."; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td class="info text-center" colspan="2">Identificação</td>
            </tr>
        </thead>
        <tr>
            <td>Curso:</td>
            <Td><?php echo $row['curs'];?> </td>
        </tr>
       
        <Tr>
            <td>Ano:</td>
            <Td><input type="number" name="ano" required value="<?php echo $row['ano'];?>" class="form-control"></Td>
        </Tr>
        
        <Tr>
            <td>Semestre:</td>
            <Td><input type="number" name="semestre" required value="<?php echo $row['semestre'];?>" class="form-control"></Td>
        </Tr>
        
        <Tr>
            <td>Disciplina</td>
            <Td><input type="text" name="disc" required value="<?php echo $row['disc'];?>" class="form-control"></Td>
        </Tr>
        
        <Tr>
            <td>Carga Horária semestral:</td>
            <Td> <input type="number" name="chs" required value="<?php echo $row['chm'];?>" class="form-control"></Td>
        </Tr>
       
       <Tr>
            <td>Período do curso:</td>
            <Td><input type="number" name="periodo" required value="<?php echo $row['periodo'];?>" class="form-control"></Td>
        </Tr>
        
         <Tr>
            <td>Professor(a):</td>
            <Td> <input type="name" name="prof" required value="<?php echo $row['prof'];?>" class="form-control"></Td>
        </Tr>
        
        <Tr>
            <td>Matrícula do professor(a):</td>
            <Td><input type="number" name="mat_prof" required value="<?php echo $row['mat_prof'];?>" class="form-control"></Td>
        </Tr>
        
        <Tr>
            <td>Ementa</td>
            <Td>
               <textarea rows="4" cols="50" name="ementa" class="form-control">
<?php echo $row['ementa'];?>
        </textarea> 
            </Td>
        </Tr>
        
        <Tr>
            <td>Competências e habilidades</td>
            <Td><textarea rows="4" cols="50" name="ch" class="form-control">
<?php echo $row['comp'];?>
        </textarea></Td>
        </Tr>
        
        
        <Tr>
            <td>Metodologia de Ensino</td>
            <Td><textarea rows="4" cols="50" name="me" class="form-control">
<?php echo $row['met'];?>
        </textarea></Td>
        </Tr>
        
        <thead>
            <tr>
                <td class="info text-center" colspan="2">Cronograma de Atividades</td>
            </tr>
        </thead>
        
        <Tr>
            <td class="text-center">Aula</td>
            <Td class="text-center">Conteúdo</Td>
        </Tr>
       
            <tr>
                <td class="text-center">1</td>
                <td><input tupe="text" name="a1" value="<?php echo $row['a1'];?>" class="form-control text-center" ></td>
            </tr>
            <tr>
                <td class="text-center">2</td>
                <td><input tupe="text" name="a2" value="<?php echo $row['a2'];?>" class="form-control text-center"></td>
            </tr>
            <tr>
                <td class="text-center">3</td>
                <td><input tupe="text" name="a3" value="<?php echo $row['a3'];?>" class="form-control text-center"></td>
            </tr>
            <tr>
                <td class="text-center">4</td>
                <td><input tupe="text" name="a4" value="<?php echo $row['a4'];?>" class="form-control text-center"></td>
            </tr>
            <tr>
                <td class="text-center">5</td>
                <td><input tupe="text" name="a5" value="<?php echo $row['a5'];?>" class="form-control text-center"></td>
            </tr>
            
             <tr>
                <td>Avaliação</td>
                <td>
                    <textarea rows="4" cols="50" name="avaliacao" class="form-control">
<?php echo $row['avaiacao'];?>
        </textarea>
                </td>
            </tr>
        
            <tr>
                <td>Bibliografia</td>
                <td>
                    
        <textarea rows="4" cols="50" name="bibliografia" class="form-control">
<?php echo $row['bibliografia'];?>
        </textarea>
                </td>
            </tr>
                <?php }}?>
             <tr>
            <td colspan="2">
                <input type="submit" value="Alterar" >
            </td>
        </tr>
    </table>
  
</form>

<?php
if(!empty($_POST)){
    $id=$_GET['id'];
    $a=$_POST['ano'];
    $s=$_POST['semestre'];
    $disc=$_POST['disc'];
    $chs=$_POST['chs'];
    $per=$_POST['periodo'];
    $prof=$_POST['prof'];
    $mprof=$_POST['mat_prof'];
    $em=$_POST['ementa'];
    $ch=$_POST['ch'];
    $me=$_POST['me'];
    $a1=$_POST['a1'];
    $a2=$_POST['a2'];
    $a3=$_POST['a3'];
    $a4=$_POST['a4'];
    $a5=$_POST['a5'];
    $ava=$_POST['avaliacao'];
    $bibl=$_POST['bibliografia'];


$sql = "UPDATE  planoensino SET 
                    ano='$a',
                   semestre='$s',
                    disc='$disc',
                    chm='$chs',
                    periodo='$per',
                    prof='$prof',
                   mat_prof='$mprof',
                    ementa='$em',
                    comp='$ch',
                    met='$me',
                   a1='$a1',
                    a2='$a2',
                    a3='$a3',
                    a4='$a4',
                     a5='$a5',
                     avaiacao='$ava',
                      bibliografia='$bibl'
                   WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
   echo '<script>alert("Editado com sucesso")</script>';
    echo '<script>window.history.back()</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}