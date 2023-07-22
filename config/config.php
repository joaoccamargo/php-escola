<?php
// Dados do Banco
$host = 'localhost'; 
$usuario = 'root'; 
$senha = ''; 
$banco = 'sistemaescola';

// Faz a conexão com banco de dados
try {
    $conexao = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    die("Erro na conexão com o banco de dados: " . $error->getMessage());
}