<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Usuários</title>
    <link rel="stylesheet" href="style.css"> <!-- Link para o arquivo CSS -->
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <h2>Menu</h2>
            <nav>
                <ul>
                    <li><a href="#cadastro">Cadastro de Usuários</a></li>
                    <li><a href="#listagem">Listagem de Usuários</a></li>
                </ul>
            </nav>
        </aside>

        <div class="main-content">
            <header>
                <h1>Gerenciamento de Usuários</h1>
                <button class="logout-btn">Logout</button>
            </header>

            <div class="content-wrapper">
                <section id="cadastro" class="section">
                    <h2>Cadastro de Novos Usuários</h2>
                    <form method="post" action="inserir_usuario.php">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" id="nome" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone:</label>
                            <input type="text" id="telefone" name="telefone" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <button type="submit">Cadastrar</button>
                    </form>
                </section>

                <section id="listagem" class="section">
                    <h2>Listagem de Usuários</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Email</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>João Silva</td>
                                <td>(11) 99999-9999</td>
                                <td>joao@email.com</td>
                                <td>
                                    <button class="action-btn">Editar</button>
                                    <button class="action-btn">Excluir</button>
                                </td>
                            </tr>
                            <!-- Outros registros -->
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>
</body>
</html>
