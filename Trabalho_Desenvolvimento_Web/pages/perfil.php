<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>

    <button id="theme-toggle" class="btn btn-secondary btn-theme-toggle">Alterar Tema</button>

    <header>
        <div class="logo">Estacionamento</div>
        <nav>
            <ul>
                <li><a href="index.php">Vagas</a></li>
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
        body.dark-theme .btn-outline-primary,
        body.dark-theme .profile-block {
            background-color: #444;
            color: white;
        }

        .container {
            margin-top: 50px;
        }

        .profile-block {
            width: 80%;
            margin: 0 auto;
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .profile-info {
            margin-bottom: 15px;
        }

        .profile-label {
            font-weight: bold;
        }

        .btn-theme-toggle {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }
        
        .dark-theme {
            background-color: #333;
            color: white;
        }

        .profile-image {
            text-align: center;
            margin-bottom: 20px;
        }

        .photo-container {
            width: 150px;
            height: 200px;
            border-radius: 10px;
            overflow: hidden;
            margin: 0 auto;
            position: relative;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .photo-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-image button {
            margin-top: 10px;
        }
    </style>

    <script>
        function toggleTheme() {
            const body = document.body;
            body.classList.toggle('dark-theme');
        }

        document.getElementById('theme-toggle').addEventListener('click', toggleTheme);
    </script>

    <div class="container">
        <h1 class="text-center mb-4">Perfil do Usuário</h1>
        <div class="profile-image">
            <div class="photo-container">
                <img id="user-photo" src="user-profile-placeholder.png" alt="Foto do Usuário">
            </div>
            <button id="change-photo-btn" class="btn btn-primary mt-2">Alterar Foto</button>
            <input type="file" id="photo-input" style="display: none;">
        </div>
        <div class="profile-block">
            <div class="profile-info">
                <span class="profile-label">Nome:</span> João da Silva
            </div>
            <div class="profile-info">
                <span class="profile-label">CPF:</span> 123.456.789-00
            </div>
            <div class="profile-info">
                <span class="profile-label">Endereço:</span> Rua das Flores, 123
            </div>
            <div class="profile-info">
                <span class="profile-label">Contato:</span> (11) 1234-5678
            </div>
            <div class="profile-info">
                <span class="profile-label">Email:</span> joao@example.com
            </div>
            <div class="profile-info">
                <span class="profile-label">Data de Nascimento:</span> 01/01/1990
            </div>
            <div class="profile-info">
                <span class="profile-label">Estabelecimento:</span> Estacionamento XYZ
            </div>
            <div class="profile-info">
                <span class="profile-label">CNPJ:</span> 12.345.678/0001-23
            </div>
            <div class="profile-info">
                <span class="profile-label">Telefone:</span> (11) 9876-5432
            </div>
            <div class="profile-info">
                <span class="profile-label">Endereço do Estabelecimento:</span> Av. das Árvores, 456
            </div>
            <div class="profile-info">
                <span class="profile-label">Email do Estabelecimento:</span> contato@estacionamentoxyz.com
            </div>
        </div>
    </div>
    <script>
        document.getElementById('change-photo-btn').addEventListener('click', function() {
            document.getElementById('photo-input').click();
        });
    
        document.getElementById('photo-input').addEventListener('change', function(event) {
            const selectedFile = event.target.files[0];
            if (selectedFile) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.querySelector('.profile-image img');
                    img.src = e.target.result;
                };
                reader.readAsDataURL(selectedFile);
            }
        });
    </script>
</body>
</html>
