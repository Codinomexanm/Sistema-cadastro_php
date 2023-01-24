
<form action="" method="post">
    <table class="table table-bordered">
        <tr>
                <td class="info text-center" colspan="2">Geral</td>
            </tr>
        <tr>
            <td>horas NDE</td>
            <td><input type="number" name="" required class="form-control"></td>
        </tr>
        
        <tr>
            <td>Orientação TCC</td>
            <td><input type="number" name="" required class="form-control"></td>
        </tr>
        
        <tr>
            <td>Coordenação do curso</td>
            <td><input type="number" name="" required class="form-control"></td>
        </tr>
        
        <tr>
            <td>Coordenação outros cursos</td>
            <td><input type="number" name="" required class="form-control"></td>
        </tr>
        
        <tr>
            <td>Pesquisa(semestre atual)</td>
            <td><input type="number" name="" required class="form-control"></td>
        </tr>
        
        <tr>
            <td>Atividade extra classe no curso</td>
            <td><input type="number" name="" required class="form-control"></td>
        </tr>
        
        <tr>
            <td>Atividade extra classe em outros cursos</td>
            <td><input type="number" name="" required class="form-control"></td>
        </tr>
        
        <tr>
            <td>Quantdade de horas no curso</td>
            <td><input type="number" name="" required class="form-control"></td>
        </tr>
        
        <tr>
            <td>Quantidade de horas em outros cursos</td>
            <td><input type="number" name="" required class="form-control"></td>
        </tr>
        
        
        <tr>
            <td>Disciplinas ministradas no curso</td>
            <td><textarea></textarea></td>
        </tr>
        
        <tr>
            <td>Disciplinas ministradas em outros cursos</td>
            <td><textarea></textarea></td>
        </tr>
        
        
         <tr>
                <td class="info text-center" colspan="2">Atuação Profissional</td>
            </tr> 
            
          <tr>
            <td>Menbro NDE?</td>
            <td><input type="checkbox" name="" required class="form-control"></td>
        </tr>
        
        <tr>
            <td>Menbro Colegiado?</td>
            <td><input type="checkbox" name="" required class="form-control"></td>
        </tr>
        
        <tr>
            <td>Tempo de vinculo initerrupto do docente com o curso</td>
            <td><input type="text" name="" required class="form-control">
            <input type="text" name="" required class="form-control"></td>
            
        </tr>
        
        <tr>
            <td>Tempo de experiência Magistério Superior</td>
            <td><input type="text" name="" required class="form-control">
            <input type="text" name="" required class="form-control"></td>
        </tr>
        
        <tr>
            <td>Experiência em curso a distância</td>
           <td><input type="text" name="" required class="form-control">
            <input type="text" name="" required class="form-control"></td>
        </tr>
        
        <tr>
            <td>Tempo de experiência Profissional</td>
           <td><input type="text" name="" required class="form-control">
            <input type="text" name="" required class="form-control"></td>
        </tr>
        
        <tr>
            <td>Participação em eventos</td>
            <td><input type="number" name="" required class="form-control"></td>
        </tr>
        
          <tr>
              <td class="info text-center" colspan="2">Publicações</td>
            </tr>
            
            <tr>
            <td>Artigos Publicados em periódicos científicos</td>
            <td><input type="number" name="" required class="form-control">Na área(quantidade)
            <input type="number" name="" required class="form-control">Livros publicados Em outras áreas(quantidade)</td>
        </tr>
        
         <tr>
            <td>Livros ou capítulos</td>
            <td><input type="number" name="" required class="form-control">Livros Publicados Na área(quantidade)
            <input type="number" name="" required class="form-control">Em outras áreas(quantidade)</td>
        </tr>
        
        <tr>
            <td>Trabalhos publicados em anais</td>
            <td><input type="number" name="" required class="form-control">completos(quantidade)
            <input type="number" name="" required class="form-control">resumos(quantidade)</td>
        </tr>
        
        <tr>
            <td>Propriedade intelectual</td>
            <td><input type="number" name="" required class="form-control">Depositada(quantidade)
            <input type="number" name="" required class="form-control">Registrada(quantidade)</td>
        </tr>
        
        <tr>
            <td >Outras publicações</td>
        
        
          
            <td><input type="number" name="" required class="form-control">Traduções de livrosm capítulos de livros ou artigos publicados(quantidade)
       
       
       
            <input type="number" name="" required class="form-control">Projetos e/ou produções técnicas artísticas e culturais(quantidade)
        
        
       
            <input type="number" name="" required class="form-control">Produção didático-pedagógica relevante, publicada ou não(quantidade)</td>
      
        <tr>
            <td colspan="2">
                <input type="submit" value="Incluir">
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