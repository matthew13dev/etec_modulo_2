<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f0f0f0; }
        .login-container { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        form { display: flex; flex-direction: column; }
        input { margin: 10px 0; padding: 10px; font-size: 16px; }
        button { padding: 10px; background-color: #28a745; color: #fff; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; }
        button:hover { background-color: #218838; }
        .signup-link { text-align: center; margin-top: 15px; }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login_process.php" method="post">
            <input type="text" name="usuario" placeholder="Usuário" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
        <div class="signup-link">
            <p>Não tem uma conta? <a href="signup.html">Inscreva-se aqui</a>.</p>
        </div>
    </div>
</body>
</html>
