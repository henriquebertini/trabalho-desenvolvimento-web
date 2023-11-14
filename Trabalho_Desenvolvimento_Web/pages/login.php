<!DOCTYPE html>
<html>

<head>
    <title>Tela de Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/styles.css">

    <style>
        body {
            background-color: white;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 70px;
        }

        .card {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .card-header {
            background-color: #007ABE;
            color: #fff;
            text-align: center;
        }

        .card-body {
            padding: 30px;
        }

        .form-group label {
            color: #2d6073;
        }

        .btn-primary {
            background-color: #007ABE;
            border-color: #2d6073;
        }

        .btn-primary:hover {
            background-color: #1a4351;
            border-color: #1a4351;
        }

        .card-header h4 {
            margin-bottom: 0;
        }

        .alert {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Estacionamento</h4>
                    </div>
                    <div class="card-body">
                        <?php if (isset($mensagem)) : ?>
                            <div class="alert <?php echo $alert_class; ?>"><?php echo $mensagem; ?></div>
                        <?php endif; ?>
                        <form action="../processamento/processar_login.php" method="POST">
                            <div class="form-group">
                                <label for="usuario">Usuário:</label>
                                <input type="text" class="form-control form-control-lg" id="usuario" name="usuario" placeholder="Digite seu usuário" required>
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha:</label>
                                <input type="password" class="form-control form-control-lg" id="senha" name="senha" placeholder="Digite sua senha" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
