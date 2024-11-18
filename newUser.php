<?php
     include('connection.php');

     if (isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['telefone']) || $_POST['nome']) {
         if (strlen($_POST['email']) == 0) {
             echo "Preencha o campo de email";
         }else if(strlen($_POST['senha']) == 0){
             echo "Preencha o campo de senha";
         }elseif (strlen($_POST['telefone']) == 0) {
            echo "Preencha seu número de telefone";
         }elseif (strlen($_POST['nome']) == 0) {
            echo "Preencha o seu nome";
         } 
         else{
             $email = $mysqli->real_escape_string($_POST['email']);
             $senha = $mysqli->real_escape_string($_POST['senha']);
             $tel = $mysqli->real_escape_string($_POST['telefone']);
             $nome = $mysqli->real_escape_string($_POST['nome']);
             
             $sql_code = "INSERT INTO `users`(`id`, `nome`, `email`, `telefone`, `senha`) VALUES ('0','$nome','$email','$tel','$senha')";
             $sql_query = $mysqli ->query($sql_code) or die("Falha". $mysqli->error);

             header('Location: index.php');
         }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <div class="sign">
        <h2>Adicionar Usuário</h2>
        <p>
            <label>Telefone:</label>
            <input type="tel" name="telefone" id="telefone">
        </p>
        <p>
            <label>Nome:</label>
            <input type="text" name="nome" id="nome">
        </p>
        <p>
            <label>Email:</label>
            <input type="email" name="email" id="email">
        </p>
        <p>
            <label>Senha:</label>
            <input type="password" name="senha" id="senha">
        </p>
        <p>
            <input type="submit" value="enviar" class="botao">
        </p>
        <p>
            <a href="login.php" class="botao">Voltar</a>
        </p>
    </form>
    </div>
</body>
</html>