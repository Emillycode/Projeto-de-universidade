<?php

$hostname     = getenv('DB_HOST')     ?: 'localhost';
$usuario      = getenv('DB_USER')     ?: 'root';
$senha        = getenv('DB_PASSWORD') ?: '';
$bancodedados = getenv('DB_NAME')     ?: 'cadastro';
$porta        = getenv('DB_PORT')     ?: 3306;

$conexao = new mysqli($hostname, $usuario, $senha, $bancodedados, (int)$porta);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
} 

$conexao->set_charset("utf8");
?>