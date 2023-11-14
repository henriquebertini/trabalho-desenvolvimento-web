<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trivaga - Encontre a sua vaga ideal</title>
  <link rel="stylesheet" href="styles/styles.css">
  <style>

    .about {
      background-color: #f7f7f7;
      padding: 40px;
      border-top: 1px solid #ccc;
      border-bottom: 1px solid #ccc;
      margin-bottom: 40px;
    }

    .about h2 {
      font-size: 24px;
      margin-bottom: 20px;
      text-align: center;
      color: #333;
      font-family: Arial, sans-serif;
    }

    .dark-theme .about h2 {
      color: #333;
    }

    .about-text {
      font-size: 16px;
      line-height: 1.6;
      color: #333;
    }

    .image-slider {
      padding: 40px;
      text-align: center;
    }

    .image-slider h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .image-carousel {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 20px;
      margin-top: 20px;
    }

    .image-carousel img {
      max-width: 100%;
      height: auto;
    }

    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px;
    }

    .left-container {
      margin-bottom: 40px;
      margin-top: 8%;
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

    .btn-theme-toggle {
      position: fixed;
      bottom: 20px;
      right: 20px;
      padding: 10px 15px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      z-index: 1000;
    }

    .btn-theme-toggle:hover {
      background-color: #0056b3;
    }

    .btn-theme-toggle:focus {
      outline: none;
    }

    .parking-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .parking-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .parking-list li {
      background-color: #f4f4f4;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      color: #333;
      font-family: Arial, sans-serif;
      transition: background-color 0.3s, color 0.3s;

    }

    .dark-theme .parking-list li {
      background-color: #444;
      color: white;
    }

    .parking-list h2 {
      font-size: 20px;
      margin-bottom: 10px;
    }

    .parking-list h1 {
      margin-top: 30%;
    }

    .parking-list p {
      font-size: 14px;
      margin: 5px 0;
    }
  </style>
</head>

<body>

  <button id="theme-toggle" class="btn btn-secondary btn-theme-toggle">Alterar Tema</button>

  <header>
    <div class="logo">Estacionamento</div>
    <nav>
      <ul>
        <li><a href="pages/sobre.php">Sobre</a></li>
        <li><a href="pages/perfil.php">Perfil</a></li>
        <li><a href="pages/login.php">Login</a></li>
        <li><a href="pages/cadastro.php">Cadastro</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <div class="left-container">
      <h1>Lista de Estacionamentos</h1>
      <ul class="parking-list">
        <li>
          <h2>Estacionamento 1</h2>
          <p>Endereço: Rua A, 123</p>
          <p>Vagas disponíveis: 30</p>
        </li>
        <li>
          <h2>Estacionamento 2</h2>
          <p>Endereço: Rua B, 456</p>
          <p>Vagas disponíveis: 20</p>
        </li>
        <li>
          <h2>Estacionamento 3</h2>
          <p>Endereço: Rua C, 789</p>
          <p>Vagas disponíveis: 25</p>
        </li>
        <li>
          <h2>Estacionamento 3</h2>
          <p>Endereço: Rua C, 789</p>
          <p>Vagas disponíveis: 25</p>
        </li>
        <li>
          <h2>Estacionamento 3</h2>
          <p>Endereço: Rua C, 789</p>
          <p>Vagas disponíveis: 25</p>
        </li>
      </ul>
    </div>
    <div class="right-container">
      <h1>Encontre a sua vaga ideal</h1>
      <form id="search-form">
        <input type="text" placeholder="Destino">
        <input type="date" placeholder="Check-in">
        <input type="date" placeholder="Check-out">
        <button type="submit">Pesquisar</button>
      </form>
      <div class="map-container" id="map"></div>
    </div>
  </main>

  <section class="image-slider">
    <h2>Galeria de Imagens</h2>
    <div class="image-carousel">
      <img src="images/img1.jpg" alt="Imagem 1">
      <img src="images/img2.jpg" alt="Imagem 2">
      <img src="images/img3.png" alt="Imagem 3">
    </div>
  </section>

  <section class="about">
    <h2>Sobre a Empresa</h2>
    <p class="about-text">A Estacionamento é uma empresa de tecnologia dedicada a simplificar e otimizar a busca por
      vagas de estacionamento. Nós colaboramos com empresas parceiras em toda a região para oferecer uma experiência de
      estacionamento conveniente e eficiente.</p>
    <p class="about-text">Com a nossa plataforma avançada, os usuários podem encontrar vagas disponíveis, reservar
      antecipadamente e pagar de forma segura, tudo isso com apenas alguns cliques. Nossa missão é melhorar a mobilidade
      urbana, proporcionando soluções inovadoras e acessíveis para o estacionamento.</p>
  </section>

  <footer>
    <p>Desenvolvimento Web - Grupo Estacionamento</p>
  </footer>

  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
  <script src="scripts.js"></script>
  <script>
    function toggleTheme() {
      const body = document.body;
      body.classList.toggle('dark-theme');
    }

    document.getElementById('theme-toggle').addEventListener('click', toggleTheme);
  </script>
</body>

</html>