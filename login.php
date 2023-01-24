<?php include'conexao.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/estrutura.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    </head>
    <body>
        <div class="top"> </div>
        <div class="conteudo">
            <div class="login">
                <img src="img/login.png">
                <form action=""  method="post">
                    <h2>  Acesso </h2>
                    <br>
                    <input type="text" name="nome"  placeholder="Login" required autofocus >
                    <br><br>
                    <input type="text" name="cpf"  placeholder="Senha" required  >
                    <br><br>
                    <input type="submit" value="entrar"  class="entrar">


                </form>
            </div>

        </div>
    </body>
</html>



<?php
if (!empty($_POST['nome'])and ! empty($_POST['cpf'])) {

    $n = $_POST['nome'];
    $cpf = $_POST['cpf'];

    if ($n == 'coordenador' && $cpf == 'coordenador') {
        session_start();
        $_SESSION['usuario'] = "Coordenador";
        $_SESSION['id'] = '00';
        $_SESSION['nivel'] = '2';
        header('location:index.php');
    } else {
        $sql = "SELECT * FROM professor WHERE nome='$n' AND cpf='$cpf' LIMIT 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                session_start();
                $_SESSION['id'] = $row['id'];
                $_SESSION['usuario'] = $row['nome'];
                $_SESSION['nivel'] = '1';
                header('location:index.php');
            }
        } else {
            echo '<script>alert("Dados incorretos");</script>';
        }
    }
}
$conn->close();
