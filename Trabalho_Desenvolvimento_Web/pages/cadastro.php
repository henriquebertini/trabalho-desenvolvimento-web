<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>

    <button id="theme-toggle" class="btn btn-secondary btn-theme-toggle">Alterar Tema</button>

    <header>
        <div class="logo">Estacionamento</div>
        <nav>
            <ul>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
            </ul>
        </nav>
    </header>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        body.dark-theme {
            background-color: #333;
            color: white;
        }


        body.dark-theme .form-block,
        body.dark-theme .form-control,
        body.dark-theme .input-largo,
        body.dark-theme .btn-primary,
        body.dark-theme .btn-outline-primary {
            background-color: #444;
            color: white;
        }

        .container {
            margin-top: 50px;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 120px;
            margin-bottom: 20px;
            padding: 0% 20%;
        }

        .btn-cadastro {
            flex: 1;
            padding: 15px 10%;
            font-size: 14px;
        }

        .form-block {
        width: 40%; /* Defina a largura desejada para o form-block */
        margin: 0 auto; /* Centralize horizontalmente */
        background-color: #f4f4f4;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }

        .input-largo {
            width: 200%;
        }

        .btn-theme-toggle 
        {
        position: fixed;
        bottom: 20px;
        right: 20px;
        }

        .btn-theme-toggle {
        position: fixed;
        bottom: 20px;
        right: 20px;
        }

        /* Novos estilos para o tema escuro */
        .dark-theme {
            background-color: #333;
            color: white;
        }

    </style>

    <div class="container">
        <h1 class="text-center mb-4">Cadastro</h1>
        <div class="btn-container">
            <button id="pessoa-btn" class="btn btn-outline-primary btn-cadastro" onclick="mostrarCampos('pessoa')">Pessoa</button>
            <button id="estabelecimento-btn" class="btn btn-outline-primary btn-cadastro" onclick="mostrarCampos('estabelecimento')">Estabelecimento</button>
        </div>
        <div class="form-block">
            <form action="#" method="POST">
                <div id="campos-pessoa" style="display:block;">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" id="nome" name="nome" class="form-control input-largo" required>
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label">CPF:</label>
                        <input type="text" id="cpf" name="cpf" class="form-control input-largo" required>
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço:</label>
                        <input type="text" id="endereco" name="endereco" class="form-control input-largo" required>
                    </div>
                    <div class="mb-3">
                        <label for="contato" class="form-label">Contato:</label>
                        <input type="text" id="contato" name="contato" class="form-control input-largo" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" name="email" class="form-control input-largo" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" id="senha" name="senha" class="form-control input-largo" required>
                    </div>
                    <div class="mb-3">
                        <label for="dataNascimento" class="form-label">Data de Nascimento:</label>
                        <input type="date" id="dataNascimento" name="dataNascimento" class="form-control input-largo" required>
                    </div>
                </div>

                <div id="campos-estabelecimento" style="display:none;">
                    <div class="mb-3">
                        <label for="nomeEstabelecimento" class="form-label">Nome do Estabelecimento:</label>
                        <input type="text" id="nomeEstabelecimento" name="nomeEstabelecimento" class="form-control input-largo" required>
                    </div>
                    <div class="mb-3">
                        <label for="cnpj" class="form-label">CNPJ:</label>
                        <input type="text" id="cnpj" name="cnpj" class="form-control input-largo" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone:</label>
                        <input type="text" id="telefone" name="telefone" class="form-control input-largo" required>
                    </div>
                    <div class="mb-3">
                        <label for="enderecoEstabelecimento" class="form-label">Endereço do Estabelecimento:</label>
                        <input type="text" id="enderecoEstabelecimento" name="enderecoEstabelecimento" class="form-control input-largo" required>
                    </div>
                    <div class="mb-3">
                        <label for="emailEstabelecimento" class="form-label">Email do Estabelecimento:</label>
                        <input type="email" id="emailEstabelecimento" name="emailEstabelecimento" class="form-control input-largo" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block">Cadastrar</button>
            </form>
        </div>
    </div>

    <script>
        function mostrarCampos(tipo) {
            if (tipo === 'pessoa') {
                document.getElementById('pessoa-btn').classList.add('btn-primary');
                document.getElementById('pessoa-btn').classList.remove('btn-outline-primary');
                document.getElementById('estabelecimento-btn').classList.remove('btn-primary');
                document.getElementById('estabelecimento-btn').classList.add('btn-outline-primary');
                document.getElementById('campos-pessoa').style.display = 'block';
                document.getElementById('campos-estabelecimento').style.display = 'none';
            } else if (tipo === 'estabelecimento') {
                document.getElementById('estabelecimento-btn').classList.add('btn-primary');
                document.getElementById('estabelecimento-btn').classList.remove('btn-outline-primary');
                document.getElementById('pessoa-btn').classList.remove('btn-primary');
                document.getElementById('pessoa-btn').classList.add('btn-outline-primary');
                document.getElementById('campos-pessoa').style.display = 'none';
                document.getElementById('campos-estabelecimento').style.display = 'block';
            }

        }
        function toggleTheme() {
        const body = document.body;
        body.classList.toggle('dark-theme');
    }

    document.getElementById('theme-toggle').addEventListener('click', toggleTheme);
    </script>
</body>
</html>
