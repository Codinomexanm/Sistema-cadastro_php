<br>
<?php $sql = "SELECT * FROM ppc WHERE id=".$_GET['id']."."; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>
Curso:  <input type="text" readonly value="<?php echo $row['nome'];?>">
Tipo:<input type="text" readonly value=" <?php echo $row['tipo'];?>">
<br>
Denominação: <input type="text" readonly value="<?php echo $row['denominacao'];?>">
Local de oferta: <input type="text" readonly value="<?php echo $row['local'];?>">
<?php }} else { }?>
<form method="post">
    <br>
<fieldset>
    <?php $sql = "SELECT * FROM simulacao WHERE id=".$_GET['id']."."; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>
    <legend>Dimensão 1-Organização Didatíco-Pedagógica</legend>
    <h5>Categoria de análise: Projeto Pedagógico de Curso</h5>
    Contexto educacional
    <input type="number" min="1" max="5" required="" name="1" value="<?php echo $row['op1'];?>">
    <br>
    Autoavaliação
   <input type="number" min="1" max="5" required="" name="2"  value="<?php echo $row['op2'];?>">
    <br>
    Objetivos do curso
       <input type="number" min="1" max="5" required="" name="3"  value="<?php echo $row['op3'];?>">
    <br>
    Perfil profissional do egresso
       <input type="number" min="1" max="5" required="" name="4"  value="<?php echo $row['op4'];?>">
    <br>
    Número de vagas
       <input type="number" min="1" max="5" required="" name="5"  value="<?php echo $row['op5'];?>">
    
    <h5>Categoria de análise: Projeto Pedagógico de curso: Formação</h5>
    Estrutura currícular
       <input type="number" min="1" max="5" required="" name="6" value="<?php echo $row['op6'];?>">
    <br>
    Conteúdos curriculares
     <input type="number" min="1" max="5" required="" name="7"value="<?php echo $row['op7'];?>">
    <br>
    Metodologia
    <input type="number" min="1" max="5" required="" name="8"  value="<?php echo $row['op8'];?>">
    <br>
    Atendimento do discente
      <input type="number" min="1" max="5" required="" name="9"  value="<?php echo $row['op9'];?>">
    <br>
    
    <h5>Relato global da Dimensão 1-Organização Didatíco-Pedagógica</h5>
    <textarea cols="100" rows="4" name="rd1" >
            <?php echo $row['rdg1'];?>
        </textarea>
    <br>
</fieldset>
    <fieldset>
        <legend>Dimensão2-Corpo Docente</legend>
        <h5>Categoria de análise: Administração Acadêmica</h5>
        Composição do Núcleo Docente Estruturante-NDE
         <input type="number" min="1" max="5" required="" name="11" value="<?php echo $row['op11'];?>">
        <br>
        Titulação do NDE
        <input type="number" min="1" max="5" required="" name="12"  value="<?php echo $row['op12'];?>">
        <br>
        Experiência profissional do NDE
        <input type="number" min="1" max="5" required="" name="13"  value="<?php echo $row['op13'];?>">
        <br>
        Regime de trabalho do NDE
         <input type="number" min="1" max="5" required="" name="14"  value="<?php echo $row['op14'];?>">
        <br>
        Titulação, formação acadêmica e experiência do coordenador do curso
       <input type="number" min="1" max="5" required="" name="15"  value="<?php echo $row['op15'];?>">
        <br>
        Regime de trabalho do Coordenador do Curso
        <input type="number" min="1" max="5" required="" name="16" value="<?php echo $row['op16'];?>">
        <br>
        Composição e funcionamento do colegiado de curso ou equivalente
        <input type="number" min="1" max="5" required="" name="17"  value="<?php echo $row['op17'];?>">
        <br>
        
        <h5>Categoria de análise: Perfil dos Docentes</h5>
        Titulação do corpo docente
         <input type="number" min="1" max="5" required="" name="18"  value="<?php echo $row['op18'];?>">
        <br>
        Regime de trabalho do corpo docente
        <input type="number" min="1" max="5" required="" name="19"  value="<?php echo $row['op19'];?>">
        <br>
        Tempo de experiência de magistério superior ou experiência na educação profissional
        <input type="number" min="1" max="5" required="" name="20"  value="<?php echo $row['op20'];?>">
        <br>
        Tempo de experiência profissional do corpo docente (fora do magistério)
        <input type="number" min="1" max="5" required="" name="21"  value="<?php echo $row['op21'];?>">
        <br>
        <h5>Categoria de análise: Condições de Trabalho</h5>
        Número de alunos por docente equivalente a tempo integral
        <input type="number" min="1" max="5" required="" name="22" value="<?php echo $row['op22'];?>">
        <br>
        Número de alunos por turma em disciplina teórica
        <input type="number" min="1" max="5" required="" name="23"  value="<?php echo $row['op23'];?>">
        <br>
        Número médio de disciplinas por docente
       <input type="number" min="1" max="5" required="" name="24"  value="<?php echo $row['op24'];?>">
        <br>
        Pesquisa, produção científica e tecnológica
        <input type="number" min="1" max="5" required="" name="25"  value="<?php echo $row['op25'];?>">
        <br>
         <h5>Relato global da Dimensão 2-Organização Didatíco-Pedagógica</h5>
         <textarea cols="100" rows="4" name="rd2" >
            <?php echo $row['rgd2'];?>
        </textarea>
    </fieldset>
    
    <fieldset>
        <legend>Dimensão3- Instalações Físicas</legend>
        <h5>Categoria de análise: Instalações Gerais</h5>
        Sala de professores e sala de reuniões
       <input type="number" min="1" max="5" required="" name="27"  value="<?php echo $row['op27'];?>">
        <br>
        Gabinetes de trabalho para professores
        <input type="number" min="1" max="5" required="" name="28" value="<?php echo $row['op28'];?>">
        <br>
        Sala de aula
        <input type="number" min="1" max="5" required="" name="29"  value="<?php echo $row['op29'];?>">
        <br>
        Acesso dos alunos a equipamentos de informática
        <input type="number" min="1" max="5" required="" name="30"  value="<?php echo $row['op30'];?>">
        <br>
        Registros Acadêmicos
        <input type="number" min="1" max="5" required="" name="31" value="<?php echo $row['op31'];?>">
        <br>
        <h5>Categoria de análise: Biblioteca</h5>
        Livros da bibliografia básica
        <input type="number" min="1" max="5" required="" name="32"  value="<?php echo $row['op32'];?>">
        <br>
        Livros da bibliografia complementar
        <input type="number" min="1" max="5" required="" name="33"  value="<?php echo $row['op33'];?>">
        <br>
        Periódicos especializados, indexados e correntes
        <input type="number" min="1" max="5" required="" name="34"  value="<?php echo $row['op34'];?>">
        <br>
        <h5>Categoria de análise: Instalações e Laboratórios Específicos</h5>
        Laboratórios especializados
         <input type="number" min="1" max="5" required="" name="35"  value="<?php echo $row['op35'];?>">
        <br>
        Infraestrutura e serviços dos laboratórios especializados
        <input type="number" min="1" max="5" required="" name="36"  value="<?php echo $row['op36'];?>">
        <br>
        <h5>Relato global da Dimensão 3-Organização Didatíco-Pedagógica</h5>
        
        <textarea cols="100" rows="4" name="rd3" >
            <?php echo $row['rgd3'];?>
        </textarea>
    </fieldset>
   

<fieldset>
    <legend>Sugestão de melhoria</legend>
        
        <textarea cols="100" rows="4" name="sugestao">
            <?php echo $row['sugestao'];?>
        </textarea>
</fieldset>
    <?php }} else {  }?>
<input type="submit" value="calcular">
</form>

<?php
if(!empty($_POST)){
    $id=$_GET['id'];
    $op1=$_POST['1'];
    $op2=$_POST['2'];
    $op3=$_POST['3'];
    $op4=$_POST['4'];
    $op5=$_POST['5'];
    $op6=$_POST['6'];
    $op7=$_POST['7'];
    $op8=$_POST['8'];
    $op9=$_POST['9'];
    $rdg1=$_POST['rd1'];
    $op11=$_POST['11'];
    $op12=$_POST['12'];
    $op13=$_POST['13'];
    $op14=$_POST['14'];
    $op15=$_POST['15'];
    $op16=$_POST['16'];
    $op17=$_POST['17'];
    $op18=$_POST['18'];
    $op19=$_POST['19'];
    $op20=$_POST['20'];
    $op21=$_POST['21'];
    $op22=$_POST['22'];
    $op23=$_POST['23'];
    $op24=$_POST['24'];
    $op25=$_POST['25'];
    $rdg2=$_POST['rd2'];
    $op27=$_POST['27'];
    $op28=$_POST['28'];
    $op29=$_POST['29'];
    $op30=$_POST['30'];
    $op31=$_POST['31'];
    $op32=$_POST['32'];
    $op33=$_POST['33'];
    $op34=$_POST['34'];
    $op35=$_POST['35'];
    $op36=$_POST['36'];
    $rdg3=$_POST['rd3'];
    $n1=(int)($op1+$op2+$op3+$op4+$op5+$op6+$op7+$op8+$op9)/9;
    $n2=(int)($op11+$op12+$op13+$op14+$op15+$op16+$op17+$op18+$op19+$op20+$op21+$op22+$op23+$op24+$op25)/15;
    $n3=(int)($op27+$op28+$op29+$op30+$op31+$op32+$op33+$op34+$op35+$op36)/10;
    $nf=($n1+$n2+$n3)/3;
    $sugestao=$_POST['sugestao'];
    
    $sql = "UPDATE simulacao SET 
                   op1='$op1',
                   op2='$op2',
                   op3='$op3',
                   op4='$op4',
                   op5='$op5',
                   op6='$op6',
                   op7='$op7',
                   op8='$op8',
                   op9='$op9',
                   rdg1='$rdg1',
                   op11='$op11',
                   op12='$op12',
                   op13='$op13',
                   op14='$op14',
                   op15='$op15',
                   op16='$op16',
                   op17='$op17',
                   op18='$op18',
                   op19='$op19',
                   op20='$op20',
                   op21='$op21',
                   op22='$op22',
                   op23='$op23',
                   op24='$op24',
                   op25='$op25',
                   rgd2='$rdg2',
                   op27='$op27',
                   op28='$op28',
                   op29='$op29',
                   op30='$op30',
                   op31='$op31',
                   op32='$op32',
                   op33='$op33',
                   op34='$op34',
                   op35='$op35',
                   op36='$op36',
                   rgd3='$rdg3',
                   n1='$n1',
                   n2='$n2',
                   n3='$n3',
                   nf='$nf',
                   sugestao='$sugestao'
                   WHERE id='$id'";
    
if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Editado com sucesso")</script>';
    echo '<script>window.history.back()</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
