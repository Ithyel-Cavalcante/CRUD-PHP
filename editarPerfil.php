<?php
session_start();

if (!isset($_SESSION['id']) || !isset($_SESSION['nome'])) {
    header('Location: login.php');
    exit();
}

include('connection.php');

$id_usuario = $_SESSION['id'];
$sql_code = "SELECT * FROM users WHERE id = '$id_usuario'";
$sql_query = $mysqli->query($sql_code) or die("Erro de consulta: " . $mysqli->error);

if ($sql_query->num_rows == 1) {
    $usuario = $sql_query->fetch_assoc();
} else {
    echo "Usuário não encontrado.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $mysqli->real_escape_string($_POST['nome']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $telefone = $mysqli->real_escape_string($_POST['telefone']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $stmt = $mysqli->prepare("UPDATE users SET nome = ?, email = ?, telefone = ?, senha = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $nome, $email, $telefone, $senha, $id_usuario);
    if ($stmt->execute()) {
        $_SESSION['nome'] = $nome;
        header('Location: index.php');
        exit();
    } else {
        echo "Erro ao atualizar os dados.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="container bg-white rounded shadow p-4" style="max-width: 400px;">
        <h2 class="text-center mb-4">Editar Dados</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $usuario['nome']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $usuario['email']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $usuario['telefone']; ?>">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha:</label>
                <input type="text" class="form-control" id="senha" name="senha" value="<?php echo $usuario['senha']; ?>" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Salvar Alterações</button> 
        </form>
            <a href="index.php" class="btn btn-secondary d-flex align-items-center justify-content-center mt-3">
                <i class="fas fa-arrow-left me-2"></i> Voltar
            </a>
    </div>
</body>
</html>
