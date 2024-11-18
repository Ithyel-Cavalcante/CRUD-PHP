<?php
session_start();
include('connection.php');

if (!isset($_SESSION['id'])) {
    die("Erro: Usuário não autenticado.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['corte_cliente'])) {
        echo "Preencha o campo de corte.";
    } elseif (empty($_POST['data_corte'])) {
        echo "Preencha a data do agendamento.";
    } elseif (empty($_POST['hora_corte'])) {
        echo "Preencha o horário do agendamento.";
    } else {
        $user_id = $mysqli->real_escape_string($_SESSION['id']);
        $telefone = $mysqli->real_escape_string($_SESSION['telefone']);
        $corte = $mysqli->real_escape_string($_POST['corte_cliente']);
        $data = $mysqli->real_escape_string($_POST['data_corte']);
        $horario = $mysqli->real_escape_string($_POST['hora_corte']);

        $sql_code = "INSERT INTO agendamento (telefone_cliente, corte_cliente, data_corte, hora_corte, user_id) 
                     VALUES ('$telefone', '$corte', '$data', '$horario', '$user_id')";

        if ($mysqli->query($sql_code)) {
            header('Location: index.php');
            exit;
        } else {
            echo "Erro ao agendar: " . $mysqli->error;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Corte</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <section class="container my-5">
        <h1 class="text-center mb-4">Agendar Corte</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="agendarCorte.php" method="POST" class="bg-white p-4 rounded-lg shadow-sm">
                    
                    <div class="form-group">
                        <label for="corte_cliente">Tipo de Corte</label>
                        <input type="text" id="corte_cliente" name="corte_cliente" class="form-control" require>
                    </div>

                    <div class="form-group">
                        <label for="data_corte">Data do Corte</label>
                        <input type="date" id="data_corte" name="data_corte" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="hora_corte">Hora do Corte</label>
                        <input type="time" id="hora_corte" name="hora_corte" class="form-control" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Agendar Corte</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

