<?php
// login.php
// Se o usuário mandar o formulário, você pode pode processar aqui :
if ($_SERVER['REQUEST_METHOD' ] === ' POST') {
    $email = trim($_POST['email'] ?? '');
    $senha = trim($_POST['senha'] ?? '');
    if($email === ' test@exemplo.com' && $senha === '1234') {
        echo"<p style='color:white; text-align:center;'>Login bem-sucedido!</p>";
    } else {
        echo "<p style='color:red; text-align:center;'>E-mail ou se senha inválidos.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Login</title>
<style>
    body {
        margin: 0;
        padding: 0;
        background-color:1980BA;
        font-family: Arial, sans-serif;
    }
    .container {
        width: 100%;
        max-width: 350px;
        margin: 80px auto;
        text-align: center;
    }
.logo {
    font-size: 40px;
    margin-bottom: 20px;
}
h1 {
    font-size: 22px;
    font-weight: bold;
    color: 000;
    margin-bottom: 25px;
}
.input {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: none;
    border-radius: 10px;
    background: #add;
    font-size: 16px;
}
.btn {
    width: 100%;
    padding: 12px;
    background-color: #000;
    color: #fff;
    font-size: 16px;
    border: 2px solid #fff;
    border-radius: 10px;
    cursor: pointer;
}
.btn:houver {
    opacity: 0.9;
}
</style>
</head>
<body>
        <div class=" container">
        <div class="logo">∞</div> <!-- Você pode trocar por um SVG ou Ícone -->
        <h1><Bem-Vindo de volta!></h1>
        <form action="" method="post">
            <input class="input" type="email" name="email" placeholder="E-mail" required>
            <input class="input" type="password" name="senha" placeholder="Senha"required>
            <button class="btn" type="submit">Conecte-se</button>
        </form>
    </div>
</body>
</html>