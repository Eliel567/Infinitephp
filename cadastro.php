<?php
// cadastro.php
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie sua conta</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #1980BA;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            width: 90%;
            max-width: 400px;
        }

        .logo img {
            width: 120px;
            /* ajusta o tamanho da logo */
            margin-bottom: 20px;
        }

        h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: black;
        }

        input {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border-radius: 15px;
            border: none;
            outline: none;
            font-size: 16px;
            background: #E6E6E6;
        }

        button {
            width: 100%;
            padding: 15px;
            margin-top: 20px;
            border-radius: 25px;
            border: none;
            font-size: 18px;
            background: black;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="Image/Infinite.png" alt="Logo Infinite">
        </div>
        <h2>Crie sua conta</h2>
        <form action="processa_cadastro.php" method="POST">
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="senha" placeholder="Crie sua senha" required>
            <input type="password" name="confirma_senha" placeholder="Repita sua senha" required>
            <button type="submit">Criar Conta</button>
        </form>
    </div>
</body>

</html>