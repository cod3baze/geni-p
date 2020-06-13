<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Roboto+Mono:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,500&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,500;0,700;1,300;1,500;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/Global.css" />
  <link rel="stylesheet" href="../css/App.css" />
  <link rel="stylesheet" href="../css/Questions.css" />
  <title>Questions | Genesis</title>
</head>

<body>
  <?php require('../components/header.php') ?>
  <form id="questions-frame">
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
      <selection name="work" id="questions">
        <option value="1" class="selected">
          <strong>Software Enginner</strong>
          <p>Eu codifico</p>
        </option>

        <option value="2">
          <strong>Técnico de rede</strong>
          <p>Eu gerencio rede</p>
        </option>

        <option value="3">
          <strong>Segurança da informação</strong>
          <p>Mantenho a infra segura</p>
        </option>

        <option value="4">
          <strong>Segurança da informação</strong>
          <p>Mantenho a infra segura</p>
        </option>
      </selection>
    </div>

    <div id="questions-group">
      <h3>Quanta experiência voçê tem?</h3>
      <selection id="questions">
        <option>
          <strong>Nenhuma</strong>
          <p>Eu nunca programei</p>
        </option>

        <option>
          <strong>Um pouco</strong>
          <p>Eu desenho interfaces</p>
        </option>

        <option>
          <strong>Quantidade moderada</strong>
          <p>Tenho alguma experiência</p>
        </option>

        <option class="selected">
          <strong>Muita</strong>
          <p>Sou muito experiênte</p>
        </option>
      </selection>
    </div>

    <div className="last" id="questions-group">
      <h3>Qual o seu plano ao usar a plataforma?</h3>
      <selection id="questions">
        <option class="selected">
          <strong>Aprender</strong>
          <p>Pronto pra decolar</p>
        </option>

        <option class="selecte">
          <strong>(+) Ensinar</strong>
          <p>Quero passar oque já sei,...</p>
        </option>
      </selection>
    </div>

    <div id="finished-questions">
      <h3>Estrou + Interesado em:</h3>
      <div id="interests-group">
        <input required placeholder="JavaScript, NodeJS, PHP" type="text" name="interests" id="interest" />
        <p>
          Vamos conectar voçê com comcomunidades e projetos do seu interesse.
        </p>
      </div>
      <button type="submit" name="setup" id="setup">
        Completar setup
      </button>
    </div>
  </form>

  <script src="../src/services/functions.js"></script>
</body>

</html>
