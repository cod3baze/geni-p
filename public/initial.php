<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="../src/services/middleware/useCookies.js"></script>
  <script src="../src/services/middleware/auth.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Roboto+Mono:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,500&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,500;0,700;1,300;1,500;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/Global.css" />
  <link rel="stylesheet" href="../css/Initial.css" />
  <link rel="stylesheet" href="../css/form.css">
  <title>WELCOME | Genesis</title>
</head>

<body>
  <?php echo
    "<script>
      var isAuth = window.isAuthenticated;
      isAuth();
    </script>";
  ?>
  <div id="container">
    <aside id="form-aside">
      <div id="anuncios">
        <h3>Build for Engineers</h3>
        <p id="text-limited">
          Elias é uma plataforma para te ajudar a levar a sua carreira pro
          outro nível, da melhor forma e sem custo!
        </p>
      </div>
      <div id="ilustry">
        <img src="../assets/svgs/initialHomeFriends.svg" alt="IMAGEM DA FAMILY DEVELOPERS" />
      </div>
    </aside>
    <main id="form-main">
      <?php
      require('../components/form.php')
      ?>
    </main>
  </div>
</body>

</html>
