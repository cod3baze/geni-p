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
  <link rel="stylesheet" href="../css/settings.css" />
  <script src="../src/services/index.js"></script>
  <title>Settings | Genesis</title>
</head>

<body>
  <div id="profile-container">
    <?php
    require('../components/header.php')
    ?>

    <div id="profile-wrapper">
      <main>
        <div id="profile-block-group">
          <h3>Definições</h3>
          <ul>
            <a class="clicled" href="/web/public/settingsy.php">
              Perfil
            </a>

            <a href="/web/public/settingsx.php">
              Segurança
            </a>
          </ul>
        </div>

        <?php
        require('../components/profilex.php')
        ?>

      </main>
      <aside>
        <div id="profile-visual-group">
          <img id="stg-photo" src="../assets/svgs/github-icon.png" alt="Foto de perfil" />
          <div id="profile-edition">
            <span>
              <i color="#FFFFA5" data-feather="disc"></i>
            </span>
          </div>
        </div>
      </aside>
    </div>
  </div>

  <script>
    feather.replace()
  </script>
</body>

</html>
