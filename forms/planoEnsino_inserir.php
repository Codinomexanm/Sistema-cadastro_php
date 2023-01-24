<br>
<form method="post" action="">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td class="info text-center" colspan="2">Identificação</td>
            </tr>
        </thead>
        <tr>
            <td> Curso: </td>
            <td>
       <select name="curso" class="form-control">
           <?php $sql = "SELECT nome FROM ppc"; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>
           <option value="<?php echo $row['nome'];?>">
        <?php echo $row['nome'];?>
           </option>
        <?php }} else { echo "<option>Não existem cursos  cadastrados"; $token=1; }?>
        </select>
            </td>
    </tr>
    <?php
    if(!empty($token)and $token==1){
        echo '<script>alert("Cadastre algum curso para poder ultilizar essa funcionalidade")</script>';
        header("refresh:1;index.php?op=2.1");
    }
    ?>
    <Tr>
            <td>Ano:</td>
            <Td><input type="number" name="ano" required  class="form-control"></Td>
        </Tr>
        
        <Tr>
            <td>Semestre:</td>
            <Td><input type="number" name="semestre" required  class="form-control"></Td>
        </Tr>
        
        <Tr>
            <td>Disciplina</td>
            <Td><input type="text" name="disc" required  class="form-control"></Td>
        </Tr>
        
        <Tr>
            <td>Carga Horária semestral:</td>
            <Td> <input type="number" name="chs" required  class="form-control"></Td>
        </Tr>
       
       <Tr>
            <td>Período do curso:</td>
            <Td><input type="number" name="periodo" required  class="form-control"></Td>
        </Tr>
        
         <Tr>
            <td>Professor(a):</td>
            <Td> <input type="name" name="prof" required  class="form-control"></Td>
        </Tr>
        
        <Tr>
            <td>Matrícula do professor(a):</td>
            <Td><input type="number" name="mat_prof" required  class="form-control"></Td>
        </Tr>
        
        <Tr>
            <td>Ementa</td>
            <Td>
               <textarea rows="4" cols="50" name="ementa" class="form-control">

        </textarea> 
            </Td>
        </Tr>
        
        <Tr>
            <td>Competências e habilidades</td>
            <Td><textarea rows="4" cols="50" name="ch" class="form-control">

        </textarea></Td>
        </Tr>
        
        
        <Tr>
            <td>Metodologia de Ensino</td>
            <Td><textarea rows="4" cols="50" name="me" class="form-control">

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
                <td><input tupe="text" name="a1"  class="form-control text-center" ></td>
            </tr>
            <tr>
                <td class="text-center">2</td>
                <td><input tupe="text" name="a2"  class="form-control text-center"></td>
            </tr>
            <tr>
                <td class="text-center">3</td>
                <td><input tupe="text" name="a3" class="form-control text-center"></td>
            </tr>
            <tr>
                <td class="text-center">4</td>
                <td><input tupe="text" name="a4"  class="form-control text-center"></td>
            </tr>
            <tr>
                <td class="text-center">5</td>
                <td><input tupe="text" name="a5" class="form-control text-center"></td>
            </tr>
            
             <tr>
                <td>Avaliação</td>
                <td>
                    <textarea rows="4" cols="50" name="avaliacao" class="form-control">

        </textarea>
                </td>
            </tr>
        
            <tr>
                <td>Bibliografia</td>
                <td>
                    
        <textarea rows="4" cols="50" name="bibliografia" class="form-control">

        </textarea>
                </td>
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
    $c=$_POST['curso'];
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


$sql="INSERT INTO planoensino VALUES('','$c','$a','$s','$disc','$chs','$per','$prof','$mprof','$em','$ch','$me','$a1','$a2','$a3','$a4','$a5','$ava','$bibl')";
if ($conn->query($sql) === TRUE) {
   echo '<script>alert("Plano de ensino cadastrado")</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}