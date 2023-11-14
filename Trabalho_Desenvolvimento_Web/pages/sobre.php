<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: #333;
            background-color: #f4f4f4;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .custom-navbar {
            background-color: #007bff !important;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-nav .nav-link {
            color: #fff !important;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #ddd !important;
        }

        h1 {
            font-weight: bold;
            color: #0056b3;
        }

        p {
            font-size: 1.1em;
            line-height: 1.6;
        }

        [data-aos] {
            transition: transform 0.4s, opacity 0.4s;
        }

        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        button,
        .btn,
        a {
            transition: all 0.3s;
        }

        button:hover,
        .btn:hover,
        a:hover {
            opacity: 0.9;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light custom-navbar">
        <div class="container">
            <a class="navbar-brand navbar-light" href="../index.php" style="color: #fff;">Estacionamento</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="sobre.php">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="perfil.php">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro.php">Cadastro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="mb-4">Sobre o Estacionamento</h1>
                    <p>O Estacionamento é uma empresa dedicada a tornar a experiência de estacionamento mais fácil e eficiente para todos. Com anos de experiência no setor, entendemos os desafios que motoristas e proprietários de estacionamentos enfrentam diariamente. É por isso que desenvolvemos um sistema de gestão de vagas e estacionamentos de última geração, projetado para atender às necessidades de nossos clientes.</p>
                </div>
                <div class="col-lg-8">
                    <h1 class="mb-4">Nossa missão</h1>
                    <p>Nossa missão é revolucionar a forma como as pessoas interagem com estacionamentos. Queremos eliminar o estresse de encontrar uma vaga, economizar tempo e garantir que os estacionamentos estejam funcionando de forma eficiente. Acreditamos que um estacionamento bem gerenciado não só beneficia os motoristas, mas também melhora a qualidade de vida nas áreas urbanas.</p>
                </div>
                <div class="col-lg-8">
                    <h1 class="mb-4">Compromisso com a Sustentabilidade</h1>
                    <p>No Estacionamento, também nos preocupamos com o meio ambiente. Promovemos práticas sustentáveis em todos os nossos estacionamentos, incentivando o uso de veículos elétricos, oferecendo estações de carregamento e implementando políticas ecológicas de gestão de resíduos.</p>
                </div>
                <div class="col-lg-4">
                    <img src="../images/img1.jpg" alt="Imagem da Empresa" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <div class="container">
            &copy; 2023 Estacionamento. Todos os direitos reservados.
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>