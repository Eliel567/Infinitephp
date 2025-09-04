<?php
// Conexão com banco MySQL
$host = "localhost";
$user = "root";   // seu usuário do MySQL
$pass = "";       // sua senha do MySQL
$db   = "infinite_db"; // nome do banco de dados

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$email = $_POST['email'];
$senha = $_POST['senha'];
$confirma = $_POST['confirma_senha'];

// Validações
if ($senha !== $confirma) {
    die("As senhas não coincidem. <a href='cadastro.php'>Tente novamente</a>");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("E-mail inválido. <a href='cadastro.php'>Tente novamente</a>");
}

// Criptografa a senha
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

// Insere no banco
$sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha_hash')";

if ($conn->query($sql) === TRUE) {
    echo "Conta criada com sucesso! <a href='login.php'>Fazer login</a>";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
