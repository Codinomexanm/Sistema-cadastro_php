
<br>
<form action="" method="post">
     <table class="table table-bordered">
        <tr>
            <td colspan="2" class="info text-center">Curso</td>
        </tr>
        <tr>
            <td>Nome do curso</td>
            <td><input type="text" name="nome" required  class="form-control"></td>
        </tr>
        
        <tr>
            <td>Tipo de curso </td>
            <td><input type="text" name="tipo" required  class="form-control"></td>
        </tr>
        
        <tr>
            <td> Modalidade</td>
            <td><input type="text" name="modalidade" required  class="form-control"></td>
        </tr>
        
        <tr>
            <td>Denominação</td>
            <td> <input type="text" name="denominacao" required  class="form-control"></td>
        </tr>
        
        <tr>
            <td>Habilitação</td>
            <td><input type="text" name="habilitacao" required  class="form-control"></td>
        </tr>
        
        <tr>
            <td>Local</td>
            <td><input type="text" name="local" required  class="form-control"></td>
        </tr>
        
        <tr>
            <td>Turnos</td>
            <td> <input type="text" name="turnos" required  class="form-control"></td>
        </tr>
        
        <tr>
            <td> Vagas</td>
            <td><input type="number" name="vagas" required  class="form-control"></td>
        </tr>
        
        <tr>
            <td>Carga horária</td>
            <td><input type="text" name="carga" required  class="form-control"> Horas</td>
        </tr>
        <tr>
            <td colspan="2" class="info text-center">Estrutura curricular</td>
        </tr>
   
        <tr>
            <td>Regime</td>
             <td><input type="text" name="regime" required class="form-control"></td>
        </tr>
        <tr>
            <td>Períodos </td>
             <td><input type="text" name="periodos" required class="form-control"></td>
        </tr>
        <tr>
            <td colspan="2" class="info text-center">Coordenador do Curso</td>
        </tr>
        
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nomeC" required  class="form-control"></td>
        </tr>
        
        <tr>
            <td>CPF</td>
            <td><input type="text" name="cpf" required  class="form-control"></td>
        </tr>
        
        <tr>
            <td>Titulação</td>
            <td><input type="text" name="titulacao" required  class="form-control"></td>
        </tr>
        
        <tr>
            <td>Tempo de dedicação</td>
            <td> <input type="number" name="tempo" required  class="form-control"> anos</td>
        </tr>
        
        <tr>
            <td colspan="2" class="info text-center"></td>
        </tr>
        
        <tr>
            <td>Perfil do Curso</td>
            <td>
    <textarea rows="4" cols="50" name="perfil_curso" class="form-control">

        </textarea></td>
        </tr>
        
         <tr>
            <td>Perfil do Egresso:</td>
            <td>
        <textarea rows="4" cols="50" name="perfil_egresso" class="form-control">

        </textarea></td>
        </tr>
        
         <tr>
            <td>Forma de acesso ao curso</td>
            <td><textarea rows="4" cols="50" name="fa" class="form-control">

        </textarea></td>
        </tr>
        
         <tr>
            <td>Representação gráfica de um perfil de formação:</td>
            <td>
        <textarea rows="4" cols="50" name="representacao" class="form-control">

        </textarea></td>
        </tr>
        
         <tr>
            <td>Sistema de avaliação do processo Ensino Aprendizagem</td>
            <td><textarea rows="4" cols="50" name="sapea" class="form-control">

        </textarea></td>
        </tr>
        
         <tr>
            <td>Sistema de avaliação do projeto do curso</td>
            <td><textarea rows="4" cols="50" name="sapc" class="form-control">

        </textarea></td>
        </tr>
        
         <tr>
            <td>trabalho de conclusão de curso:</td>
            <td><input type="text" name="tcc"  class="form-control"></td>
        </tr>
        
         <tr>
            <td> Estágio curricular:</td>
            <td><input type="text" name="estagio"  class="form-control"></td>
        </tr>
        
         <tr>
            <td>Política de atendimento a pessoas com deficiência e/ou Mobilidade reduzida:</td>
            <td><textarea rows="4" cols="50" name="politica" class="form-control">

        </textarea></td>
        </tr> 
        <tr>
            <td colspan="2">
                <input type="submit" value="Incluir" class="incluir">
            </td>
        </tr>
    </table>


</form>
<?php
if (!empty($_POST)) {
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $modalidade = $_POST['modalidade'];
    $denominacao = $_POST['denominacao'];
    $habilitacao = $_POST['habilitacao'];
    $local = $_POST['local'];
    $turnos = $_POST['turnos'];
    $vagas = $_POST['vagas'];
    $carga = $_POST['carga'];
    $regime = $_POST['regime'];
    $periodos = $_POST['periodos'];
    $nome_coord = $_POST['nomeC'];
    $cpf = $_POST['cpf'];
    $titulacao = $_POST['titulacao'];
    $tempo = $_POST['tempo'];
    $pc=$_POST['perfil_curso'];
    $pe=$_POST['perfil_egresso'];
    $fa=$_POST['fa'];
    $repre=$_POST['representacao'];
    $sapea=$_POST['sapea'];
    $sapc=$_POST['sapc'];
    $tcc=$_POST['tcc'];
    $estagio=$_POST['estagio'];
    $politica=$_POST['politica'];


    $sql = "INSERT INTO ppc VALUES('','$nome','$tipo','$modalidade','$denominacao','$habilitacao','$local','$turnos','$vagas','$carga','$regime','$periodos','$nome_coord','$cpf','$titulacao','$tempo','$pc','$pe','$fa','$repre','$sapea','$sapc','$tcc','$estagio','$politica')";
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("ppc Cadastrado")</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
  }
   $sql = "SELECt * FROM ppc ORDER BY id DESC LIMIT 1"; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {
       
    $idd= $row['id'];
   }}
  // echo $idd;
   
   $sql="INSERT INTO simulacao(id) VALUES('$idd')";
   $conn->query($sql);
    $conn->close();
}