<?php
    include('connection.php');

    if (isset($_POST['email']) || isset($_POST['senha'])) {
        if (strlen($_POST['email']) == 0) {
            echo "Preencha o campo de email";
        }else if(strlen($_POST['senha']) == 0){
            echo "Preencha o campo de senha";
        } else{
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "select * from users where email = '$email' and senha = '$senha'";
            $sql_query = $mysqli ->query($sql_code) or die("Falha". $mysqli->error);

            $qtdUsers = $sql_query-> num_rows;

            if ($qtdUsers == 1) {
                $usuario = $sql_query-> fetch_assoc();

                if (!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome']; 
                $_SESSION['email'] = $usuario['email']; 
                $_SESSION['telefone'] = $usuario['telefone'];
                $_SESSION['senha'] = $usuario['senha'];

                header('Location: index.php');

            }else{
                echo "Falha ao conectar, email ou senha incorretos!";
            }

        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="sign">
<h1>Acessar conta</h1>
    <form action="" method="post">
        <p>
            <label>Email:</label>
            <input type="email" name="email" id="email">
        </p>
        <p>
            <label>Senha:</label>
            <input type="password" name="senha" id="senha">
        </p>
        <p>
            <input type="submit" value="login" class="botao">
        </p>
    </form>
    <a href="newUser.php">Não tenho conta</a>
    </div>
    

    

</body>
</html>