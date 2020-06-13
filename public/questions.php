<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Roboto+Mono:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,500&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,500;0,700;1,300;1,500;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/Global.css" />
  <link rel="stylesheet" href="../css/App.css" />
  <link rel="stylesheet" href="../css/Questions.css" />
  <title>WELCOME | Genesis</title>
</head>

<body>
  <?php require('../components/header.php') ?>
  <div id="questions-frame">
    <div id="welcome-question">
      <h2>Bem vindo a plataforma</h2>
      <p>
        Woohoo! Você está se juntando a milhares de desenvolvedores que estão
        fazendo o seu melhor trabalo na plataforma. Conte nos sobre o seu
        interesse. Vamos ajudar voçê a começar
      </p>
    </div>
    <div id="questions-group">
      <h3>Qual tipo de trabalho voçê faz, principalmente</h3>
      <ul id="questions">
        <li class="selected">
          <strong>Software Enginner</strong>
          <p>Eu codifico</p>
        </li>

        <li class="selected">
          <strong>UX & Design</strong>
          <p>Eu desenho interfaces</p>
        </li>

        <li class="selected">
          <strong>Técnico de rede</strong>
          <p>Eu gerencio rede</p>
        </li>

        <li class="selected">
          <strong>Segurança da informação</strong>
          <p>Mantenho a infra segura</p>
        </li>
      </ul>
    </div>

    <div id="questions-group">
      <h3>Quanta experiência voçê tem?</h3>
      <ul id="questions">
        <li class="selected">
          <strong>Nenhuma</strong>
          <p>Eu nunca programei</p>
        </li>

        <li class="selected">
          <strong>Um pouco</strong>
          <p>Eu desenho interfaces</p>
        </li>

        <li class="selected">
          <strong>Quantidade moderada</strong>
          <p>Tenho alguma experiência</p>
        </li>

        <li class="selected">
          <strong>Muita</strong>
          <p>Sou muito experiênte</p>
        </li>
      </ul>
    </div>

    <div className="last" id="questions-group">
      <h3>Qual o seu plano ao usar a plataforma?</h3>
      <ul id="questions">
        <li class="selected">
          <strong>Aprender</strong>
          <p>Pronto pra decolar</p>
        </li>

        <li class="selecte">
          <strong>(+) Ensinar</strong>
          <p>Quero passar oque já sei,...</p>
        </li>
      </ul>
    </div>

    <div id="finished-questions">
      <h3>Estrou + Interesado em:</h3>
      <div id="interests-group">
        <input required placeholder="JavaScript, NodeJS, PHP" type="text" name="interests" id="interest" />
        <p>
          Vamos conectar voçê com comcomunidades e projetos do seu interesse.
        </p>
      </div>
      <button id="setup">
        Completar setup
      </button>
    </div>
  </div>

  <script>
    feather.replace()
  </script>
</body>

</html>
