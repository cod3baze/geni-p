<?php
require_once('../src/database/connection.php')
?>

<div id="form-wrapper">
  <form method="POST" name="login">
    <div id="input-group">
      <div>
        <label for="email">Email</label>
        <input required placeholder="Digite seu email" type="email" name="email" id="email" />
      </div>

      <div>
        <label for="senha">Senha</label>
        <input required type="password" placeholder="Digite sua senha secreta" name="password" id="senha"={password} />
      </div>
    </div>
    <div id="loading-form">Loading..</div>
    <button name="login" id="submit" type="submit">
      Entrar
    </button>
  </form>
  <?php
  if (isset($_POST["login"])) {
    $email = isset($_POST["email"]) ? $_POST["email"] : null;
    $password = isset($_POST["password"]) ? $_POST["password"] : null;

    if ($email && $password) {
      $sql = "SELECT * FROM users WHERE email='$email'";
      $query = mysqli_query($link, $sql) or die("Erro na conexão com o DB");

      while ($set = mysqli_fetch_array($query) or die("Usuário não encontrado")) {
        $nm = "name";
        echo
          "<script>"
            . "var setCookiee = window.setCookie;"
            . "setCookiee(" . "'user_id'" . " ," . $set["id"] . ", 10);"
            . "setCookiee(" . "'username'," . "'$set[$nm]'" . ", 10)"
            . "</script>";
        echo "<br/><br/><br/>";
        echo
          "<script>
            window.location.href = 'http://localhost/web/public/home.php'
          </script>";
      }
    }
  }
  ?>
</div>
<div id="card-account">
  <h4>New to Genesys?</h4>
  <a id="new-account" href="/web">
    create an account
  </a>
</div>
