<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'cadastro');

    $conn = new mysqli(HOST,USER,PASS,BASE);

    date_default_timezone_set('America/Sao_Paulo'); // Define o fuso horário de Brasília

    $dataHora = date('H:i - d/m/Y'); // Obtém a data e hora atual
?>