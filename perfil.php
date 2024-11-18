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
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="container bg-white rounded shadow p-4" style="max-width: 400px;">
        <h2 class="text-center mb-4">Meus dados</h2>

        <div class="mb-3 d-flex justify-content-between align-items-center">
            <strong>Nome:</strong>
            <span><?php echo $usuario['nome']?></span>
        </div>

        <div class="mb-3 d-flex justify-content-between align-items-center">
            <strong>Email:</strong>
            <span><?php echo $usuario['email']?></span>
        </div>

        <div class="mb-3 d-flex justify-content-between align-items-center">
            <strong>Telefone:</strong>
            <span><?php echo $usuario['telefone']?> </span>
        </div>

        <div class="mb-3 d-flex justify-content-between align-items-center">
            <strong>Senha:</strong>
            <span><?php echo $usuario['senha']?></span>
        </div>
        <a href="editarPerfil.php" class="btn btn-primary d-flex align-items-center justify-content-center mt-3">
            <img src="https://img.icons8.com/color/48/000000/edit--v1.png" alt="Editar" style="width: 24px; height: 24px; margin-right: 8px;"> Editar Dados
        </a>

        <a href="index.php" class="btn btn-secondary d-flex align-items-center justify-content-center mt-3">
            <i class="fas fa-arrow-left me-2"></i> Voltar
        </a>
        <a href="ListAgenda.php" class="btn btn-secondary d-flex align-items-center justify-content-center mt-3">
            <i class="fas fa-arrow-left me-2"></i> Agendamentos
        </a>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
