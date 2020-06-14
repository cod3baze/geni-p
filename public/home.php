<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="../src/services/middleware/useCookies.js"></script>
  <script src="../src/services/middleware/auth.js"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Roboto+Mono:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,500&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,500;0,700;1,300;1,500;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/insights.css">
  <link rel="stylesheet" href="../css/Global.css" />
  <link rel="stylesheet" href="../css/App.css">
  <title>HOME | Genesis</title>
</head>

<body>

  <div class="App">
    <?php
    echo "
      <script>
        var isAuthenticated = window.isAuthenticated;
        isAuthenticated();
      </script>
    ";

    require('../components/header.php')
    ?>

    <aside id="aside">
      <div id="top-aside">
        <div id="user-aside">
          <strong>Elias Alexandre</strong>
        </div>
        <div id="aside-repo">
          <div>
            <p class="sttrong">Activits</p>
            <button class="new">New</button>
          </div>
          <div>
            <input placeholder="Encontrar uma atividade" type="search" name="search-repo" id="search-repo" />
          </div>
        </div>
      </div>
      <div id="navigation-aside">
        <ul id="aside-items-group">
          <li>
            <a href="/web">
              <span class="items-icon">
                <i color="#FFFFA5" data-feather="activity"></i>
              </span>
              <span>Eliasallex/Dotnet</span>
            </a>
          </li>
          <li>
            <a href="/web">
              <span class="items-icon">
                <i color="#FFFFA5" data-feather="activity"></i>
              </span>
              <span>Eliasallex/Boas-Praticas</span>
            </a>
          </li>
          <li>
            <a href="/web">
              <span class="items-icon">
                <i color="#FFFFA5" data-feather="activity"></i>
              </span>
              <span>Eliasallex/SistemasOperacionais</span>
            </a>
          </li>
          <li>
            <a href="/web">
              <span class="items-icon">
                <i color="#FFFFA5" data-feather="activity"></i>
              </span>
              <span>Eliasallex/Node.JS</span>
            </a>
          </li>
        </ul>
      </div>
      <div id="footer">
        <p>
          <a href="/web">Creator: Elias garcia Alexandre</a>
        </p>
        <p>
          <a href="/web">&copy;GENESIS SYSTEMS</a>
        </p>
      </div>
    </aside>

    <main></main>
    <?php
    require('../components/insights.php')
    ?>
  </div>

  <script>
    feather.replace()
  </script>
</body>

</html>
