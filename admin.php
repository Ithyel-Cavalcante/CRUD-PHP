<?php
session_start();
include('connection.php');

if (!isset($_SESSION['email']) || $_SESSION['email'] != 'admin@gmail.com' || $_SESSION['senha'] != 'admin') {
    header('Location: index.php'); 
    exit;
}

$sql = "SELECT * FROM agendamento ORDER BY data_corte DESC, hora_corte DESC";
$result = $conn->query($sql);

$agendamentos = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $agendamentos[] = $row;
    }
} else {
    $agendamentos = [];
    $error_msg = "Nenhum agendamento encontrado.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo - Agendamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">Painel Administrativo</h1>
    <h2 class="text-center mb-4">Lista de Agendamentos</h2>

    <?php if (!empty($error_msg)): ?>
        <div class="alert alert-warning"><?php echo $error_msg; ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome Cliente</th>
                <th>Telefone</th>
                <th>Tipo de Corte</th>
                <th>Data do Corte</th>
                <th>Hora do Corte</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($agendamentos) > 0): ?>
                <?php foreach ($agendamentos as $agendamento): ?>
                <tr>
                    <td><?php echo $agendamento['nome_cliente']; ?></td>
                    <td><?php echo $agendamento['telefone_cliente']; ?></td>
                    <td><?php echo $agendamento['corte_cliente']; ?></td>
                    <td><?php echo date('d/m/Y', strtotime($agendamento['data_corte'])); ?></td>
                    <td><?php echo date('H:i', strtotime($agendamento['hora_corte'])); ?></td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">Nenhum agendamento encontrado.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>

</body>
</html>
