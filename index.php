<?php require("./src/database/connection.php");  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="./src/services/middleware/useCookies.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Roboto+Mono:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,500&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,500;0,700;1,300;1,500;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./css/Global.css" />
  <link rel="stylesheet" href="./css/Auth.css" />
  <title>CADASTRO | Genesis</title>
</head>

<body>
  <div id="container-session">
    <div id="session-group">
      <form name="register" class="form-session" method="POST">
        <div id="input-group">
          <div>
            <label for="name">Nome</label>
            <input required type="text" placeholder="Digite seu nome" name="name" id="name" />
          </div>

          <div>
            <label for="email">Email</label>
            <input required placeholder="Digite seu email" type="email" name="email" id="email" />
          </div>

          <div>
            <label for="senha">Senha</label>
            <input required type="password" placeholder="Digite sua senha secreta" name="password" id="senha" />
          </div>
        </div>
        <button name="register" class="session" id="submit" type="submit">
          Registrar
        </button>
        <div id="loader-session"></div>
      </form>
      <?php
      if (isset($_POST["register"])) {
        $email = isset($_POST["email"]) ? $_POST["email"] : null;
        $nome = isset($_POST["name"]) ? $_POST["name"] : null;
        $password = isset($_POST["password"]) ? $_POST["password"] : null;

        if ($email && $nome && $password) {
          $canny = false;
          $register = "INSERT INTO users() values (DEFAULT, '$nome', '$email', '$password', '$canny', '', '');";
          $res = mysqli_query($link, $register) or die("<script>alert('Erro ao inserir os dados :D')</script>");
          echo "<script>alert('Usuário cadastrado');</script>";

          // pegar os dados para settar no browser
          $dt_sql = "SELECT * FROM users WHERE email='$email'";
          $dt_query = mysqli_query($link, $dt_sql);
          $user_id = "user_id";
          $nm = "name";
          while ($qr = mysqli_fetch_array($dt_query)) {
            echo
              "<script>"
                . "var setCookiee = window.setCookie;"
                . "setCookiee(" . "'user_id'" . " ," . $qr["id"] . ", 10);"
                . "setCookie(" . "'usernamex'" . " '$qr[$nm]' " . "10)"
                . "</script>";
          }
        } else {
          echo "<script>alert('Insere os dados correspondentes!')</script>";
        }
      }
      ?>
    </div>
  </div>

  <script src="./src/services/middleware/useCookies.js"></script>
  <script src="./src/services/index.js"></script>
</body>

</html>
