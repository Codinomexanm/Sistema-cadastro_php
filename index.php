<?php include 'head.php';
include'conexao.php';


if (!empty($_GET['op'])) {
    if ($_GET['op'] == '1') {
        include '/forms/atas.php';  
    }
     if ($_GET['op'] == '1.1') {
            include '/forms/atas_inserir.php';    
    }
     if ($_GET['op'] == '1.2') {
            include 'forms/atas_pesquiar.php'; 
         
    }
     if ($_GET['op'] == '1.3') {
            include '/forms/atas_visualizar.php'; 
        
    }
    if ($_GET['op'] == '1.4') {
            include '/forms/atas_editar.php'; 
        
    }
    if ($_GET['op'] == '1.5') {
            include '/forms/atas_del.php'; 
        
    }
    if ($_GET['op'] == '2') {
            include '/forms/ppc.php'; 
        
    }
    if ($_GET['op'] == '2.1') {
            include '/forms/ppc_inserir.php'; 
        
    }
     if ($_GET['op'] == '2.2') {
            include '/forms/ppc_pesquisar.php'; 
        
    }
     if ($_GET['op'] == '2.3') {
            include '/forms/ppc_visualizar.php'; 
        
    }
     if ($_GET['op'] == '2.4') {
            include '/forms/ppc_editar.php'; 
        
    }
     if ($_GET['op'] == '2.5') {
            include '/forms/ppc_del.php'; 
        
    }
     if ($_GET['op'] == '3') {
            include '/forms/planoEnsino.php'; 
        
    }
    if ($_GET['op'] == '3.1') {
            include '/forms/planoEnsino_inserir.php'; 
        
    }
     if ($_GET['op'] == '3.2') {
            include '/forms/planoEnsino_pesquisar.php'; 
        
    }
     if ($_GET['op'] == '3.3') {
            include '/forms/planoEnsino_visualizar.php'; 
        
    }
     if ($_GET['op'] == '3.4') {
            include '/forms/planoEnsino_editar.php'; 
        
    }
     if ($_GET['op'] == '3.5') {
            include '/forms/planoEnsino_del.php'; 
        
    }
      if ($_GET['op'] == '4') {
            include '/forms/simulacao.php'; 
        
    }  
    
    if ($_GET['op'] == '4.2') {
            include '/forms/simulacao_pesquisar.php'; 
        
    }
    if ($_GET['op'] == '4.3') {
            include '/forms/simulacao_visualizar.php'; 
        
    }
    if ($_GET['op'] == '4.4') {
            include '/forms/simulacao_editar.php'; 
        
    }
    if ($_GET['op'] == '4.5') {
            include '/forms/simulacao_del.php'; 
        
    }
    if ($_GET['op'] == '8') {
            include 'forms/professor.php'; 
        
    }
    if ($_GET['op'] == '8.1') {
            include 'forms/professor_inserir.php'; 
        
    }
    if ($_GET['op'] == '8.2') {
            include 'forms/professor_pesquisar.php'; 
        
    }
    if ($_GET['op'] == '8.3') {
            include 'forms/professor_visualizar.php'; 
        
    }
    if ($_GET['op'] == '8.4') {
            include 'forms/professor_editar.php'; 
        
    }
    if ($_GET['op'] == '8.5') {
            include '/forms/professor_del.php'; 
        
    }
    
     if ($_GET['op'] == '9') {
            include '/forms/atuacao_ies_inserir.php'; 
        
    }
    
    if ($_GET['op'] == 'sobre') {
            include '/sobre.php'; 
        
    }
    if ($_GET['op'] == 'ajuda') {
            include '/ajuda.php'; 
        
    }
}
include 'footer.php'; ?>