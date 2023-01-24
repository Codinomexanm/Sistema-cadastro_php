<?php include 'restricao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/estrutura.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        
    </head>        
    <body>
        <div class="top">
           
        </div>
        <div class="conteudo">
            
        <div class="logo">
           
        </div>
            <nav class="menu">
                <ul>
                    <li>
                        <a href="?">Início</a>
                    </li>
                    <?php
                    if ($_SESSION['nivel'] == '2') {
                        echo'<li><a href="?op=1">Atas</a></li>';
                        echo'<li> <a href="?op=4">Simular avaliação</a></li>';
                        echo'<li><a href="?op=8">Professores </a></li>';
                    }
                    ?>
                    <li> <a href="?op=2">PPC</a> </li>
                    <li> <a href="?op=3">Plano de ensino</a></li>
                    <?php
                    if ($_SESSION['nivel'] == '1') {
                        echo '<li><a href="?op=9">Atuação IES </a></li>';
                    }
                    ?>
                  
                     <a href="sair.php" class="sair">Sair</a> 
                   
              </ul>
 
</nav>
      <hr>