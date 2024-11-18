<?php
    $usuario = 'root';
    $senha = '';
    $database = 'barbearia';
    $host = 'localhost';
    $mysqli = new mysqli($host, $usuario, $senha, $database);

    

    if($mysqli -> error){
        die ("Falha ao tentar conectar no banco de dados: ". $mysqli -> error);

    }

?>