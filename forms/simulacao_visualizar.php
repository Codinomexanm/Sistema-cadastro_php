<br>
<?php $sql = "SELECT * FROM ppc WHERE id=".$_GET['id']."."; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>
Curso:  <input type="text" readonly value="<?php echo $row['nome'];?>">
Tipo:<input type="text" readonly value=" <?php echo $row['tipo'];?>">
<br>
Denominação: <input type="text" readonly value="<?php echo $row['denominacao'];?>">
Local de oferta: <input type="text" readonly value="<?php echo $row['local'];?>">
<?php }} else { /*echo "Não existem cursos  cadastrados";*/ $conn->close();}?>

    <br>
<fieldset>
    <?php $sql = "SELECT * FROM simulacao WHERE id=".$_GET['id']."."; $result = $conn->query($sql);if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {?>
    <legend>Dimensão 1-Organização Didatíco-Pedagógica</legend>
    <h5>Categoria de análise: Projeto Pedagógico de Curso</h5>
    Contexto educacional
    <input type="number" min="1" max="5" required="" name="1" readonly value="<?php echo $row['op1'];?>">
    <br>
    Autoavaliação
   <input type="number" min="1" max="5" required="" name="2" readonly value="<?php echo $row['op2'];?>">
    <br>
    Objetivos do curso
       <input type="number" min="1" max="5" required="" name="3" readonly value="<?php echo $row['op3'];?>">
    <br>
    Perfil profissional do egresso
       <input type="number" min="1" max="5" required="" name="4" readonly value="<?php echo $row['op4'];?>">
    <br>
    Número de vagas
       <input type="number" min="1" max="5" required="" name="5" readonly value="<?php echo $row['op5'];?>">
    
    <h5>Categoria de análise: Projeto Pedagógico de curso: Formação</h5>
    Estrutura currícular
       <input type="number" min="1" max="5" required="" name="6" readonly value="<?php echo $row['op6'];?>">
    <br>
    Conteúdos curriculares
     <input type="number" min="1" max="5" required="" name="7"readonly value="<?php echo $row['op7'];?>">
    <br>
    Metodologia
    <input type="number" min="1" max="5" required="" name="8" readonly value="<?php echo $row['op8'];?>">
    <br>
    Atendimento do discente
      <input type="number" min="1" max="5" required="" name="9" readonly value="<?php echo $row['op9'];?>">
    <br>
    
    <h5>Relato global da Dimensão 1-Organização Didatíco-Pedagógica</h5>
    <textarea cols="100" rows="4" name="rd1" readonly>
            <?php echo $row['rdg1'];?>
        </textarea>
    <br>
</fieldset>
    <fieldset>
        <legend>Dimensão2-Corpo Docente</legend>
        <h5>Categoria de análise: Administração Acadêmica</h5>
        Composição do Núcleo Docente Estruturante-NDE
         <input type="number" min="1" max="5" required="" name="11" readonly value="<?php echo $row['op11'];?>">
        <br>
        Titulação do NDE
        <input type="number" min="1" max="5" required="" name="12" readonly value="<?php echo $row['op12'];?>">
        <br>
        Experiência profissional do NDE
        <input type="number" min="1" max="5" required="" name="13" readonly value="<?php echo $row['op13'];?>">
        <br>
        Regime de trabalho do NDE
         <input type="number" min="1" max="5" required="" name="14" readonly value="<?php echo $row['op14'];?>">
        <br>
        Titulação, formação acadêmica e experiência do coordenador do curso
       <input type="number" min="1" max="5" required="" name="15" readonly value="<?php echo $row['op15'];?>">
        <br>
        Regime de trabalho do Coordenador do Curso
        <input type="number" min="1" max="5" required="" name="16" readonly value="<?php echo $row['op16'];?>">
        <br>
        Composição e funcionamento do colegiado de curso ou equivalente
        <input type="number" min="1" max="5" required="" name="17" readonly value="<?php echo $row['op17'];?>">
        <br>
        
        <h5>Categoria de análise: Perfil dos Docentes</h5>
        Titulação do corpo docente
         <input type="number" min="1" max="5" required="" name="18" readonly value="<?php echo $row['op18'];?>">
        <br>
        Regime de trabalho do corpo docente
        <input type="number" min="1" max="5" required="" name="19" readonly value="<?php echo $row['op19'];?>">
        <br>
        Tempo de experiência de magistério superior ou experiência na educação profissional
        <input type="number" min="1" max="5" required="" name="20" readonly value="<?php echo $row['op20'];?>">
        <br>
        Tempo de experiência profissional do corpo docente (fora do magistério)
        <input type="number" min="1" max="5" required="" name="21" readonly value="<?php echo $row['op21'];?>">
        <br>
        <h5>Categoria de análise: Condições de Trabalho</h5>
        Número de alunos por docente equivalente a tempo integral
        <input type="number" min="1" max="5" required="" name="22" readonly value="<?php echo $row['op22'];?>">
        <br>
        Número de alunos por turma em disciplina teórica
        <input type="number" min="1" max="5" required="" name="23" readonly value="<?php echo $row['op23'];?>">
        <br>
        Número médio de disciplinas por docente
       <input type="number" min="1" max="5" required="" name="24" readonly value="<?php echo $row['op24'];?>">
        <br>
        Pesquisa, produção científica e tecnológica
        <input type="number" min="1" max="5" required="" name="25" readonly value="<?php echo $row['op25'];?>">
        <br>
         <h5>Relato global da Dimensão 2-Organização Didatíco-Pedagógica</h5>
         <textarea cols="100" rows="4" name="rd2" readonly>
            <?php echo $row['rgd2'];?>
        </textarea>
    </fieldset>
    
    <fieldset>
        <legend>Dimensão3- Instalações Físicas</legend>
        <h5>Categoria de análise: Instalações Gerais</h5>
        Sala de professores e sala de reuniões
       <input type="number" min="1" max="5" required="" name="27" readonly value="<?php echo $row['op27'];?>">
        <br>
        Gabinetes de trabalho para professores
        <input type="number" min="1" max="5" required="" name="28" readonly value="<?php echo $row['op28'];?>">
        <br>
        Sala de aula
        <input type="number" min="1" max="5" required="" name="29" readonly value="<?php echo $row['op29'];?>">
        <br>
        Acesso dos alunos a equipamentos de informática
        <input type="number" min="1" max="5" required="" name="30" readonly value="<?php echo $row['op30'];?>">
        <br>
        Registros Acadêmicos
        <input type="number" min="1" max="5" required="" name="31" readonly value="<?php echo $row['op31'];?>">
        <br>
        <h5>Categoria de análise: Biblioteca</h5>
        Livros da bibliografia básica
        <input type="number" min="1" max="5" required="" name="32" readonly value="<?php echo $row['op32'];?>">
        <br>
        Livros da bibliografia complementar
        <input type="number" min="1" max="5" required="" name="33" readonly value="<?php echo $row['op33'];?>">
        <br>
        Periódicos especializados, indexados e correntes
        <input type="number" min="1" max="5" required="" name="34" readonly value="<?php echo $row['op34'];?>">
        <br>
        <h5>Categoria de análise: Instalações e Laboratórios Específicos</h5>
        Laboratórios especializados
         <input type="number" min="1" max="5" required="" name="35" readonly value="<?php echo $row['op35'];?>">
        <br>
        Infraestrutura e serviços dos laboratórios especializados
        <input type="number" min="1" max="5" required="" name="36" readonly value="<?php echo $row['op36'];?>">
        <br>
        <h5>Relato global da Dimensão 3-Organização Didatíco-Pedagógica</h5>
        
        <textarea cols="100" rows="4" name="rd3" readonly>
            <?php echo $row['rgd3'];?>
        </textarea>
    </fieldset>
   

<fieldset>
    <legend>Cálculo das notas</legend>
    <table border="1">
        <tr>
            <th>Item</th>
            <th>Notas</th>
            <th>Nota Final</th>
        </tr>
        <tr>
            <td>Dimensão 1</td>
            <td><?php echo $row['n1'];?></td>
            <td  rowspan="3"><?php echo $row['nf'];?></td>
        </tr>
         <tr>
            <td>Dimensão 2</td>
            <td><?php echo $row['n2'];?></td>
            
        </tr>
         <tr>
            <td>Dimensão 3</td>
            <td><?php echo $row['n3'];?></td>
        </tr>
    </table>
     <h5>Sugestão de melhoria</h5>
        
        <textarea cols="100" rows="4" name="sugestao" readonly>
            <?php echo $row['sugestao'];?>
        </textarea>
</fieldset>
    <?php }} else {  }$conn->close();?>
    <a href="?op=4.4&id=<?php echo $_GET['id'];?>" class="editar">Avaliar Novamente</a>