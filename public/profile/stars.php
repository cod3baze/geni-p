<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Roboto+Mono:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,500&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,500;0,700;1,300;1,500;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../../css/Global.css" />
  <link rel="stylesheet" href="../../css/App.css" />
  <link rel="stylesheet" href="./css/styles.css" />
  <title>Stars | Genesis</title>
</head>

<body>
  <?php require('../../components/header.php') ?>

  <div id="profile-unic-user">
    <aside id="user-aside-overview">
      <span id="badge-overview">#LEARNING</span>
      <div id="user-overview">
        <img id="user-img-over" src="../../assets/svgs/github-icon.png" alt="Foto de perfil" />
        <div id="user-over">
          <span>
            <i color="#FFFFA5" data-feather="user"></i>
          </span>
          <strong>Elias alexandre</strong>
        </div>
        <button onClick={goToSettings}>Editar Usuário</button>
      </div>
      <div id="about-user-overview">
        <div id="about-over">
          <h5>Sobre</h5>
          <p>Programador das tecnologias em volta da linguagem JS</p>
        </div>

        <div id="about-over">
          <h5>Descrição</h5>
          <p>Programador</p>
          <p>Inicinate</p>
          <p>*#*Aprender</p>
        </div>
      </div>
    </aside>
    <main id="user-main-overview">
      <div id="main-menu-choose">
        <ul id="menu-choose-over">
          <li>
            Overview
          </li>
          <li class="menuSelected">
            Stars
          </li>
          <li>
            Approximate
          </li>
          <li>
            Approximations
          </li>
        </ul>
      </div>

      <div id="overview-container">
        <div id="view-activi">
          <h5>Listas marcadas</h5>
          <div id="vw-act">
            <div id="learing-activity">
              <strong>Introdução á NodeJS</strong>
              <p>Javascript</p>
              <span>Criador: CEO</span>
              <span>Stars: 2334</span>
            </div>
            <div id="learing-activity">
              <strong>Inicial em DotNet</strong>
              <p>C#</p>
              <span>Criador: CEO</span>
              <span>Stars: 944</span>
            </div>
            <div id="learing-activity">
              <strong>Boas práticas em programação</strong>
              <p>Geral</p>
              <span>Criador: CEO</span>
              <span>Stars: 8788979</span>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script>
      feather.replace()
    </script>
</body>

</html>
