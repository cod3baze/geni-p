<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <div id="header">
      <nav>
        <div>
          <input placeholder="Search or jump to" type="search" name="search" id="search-bar" />
        </div>

        <ul class="list-item-group">
          <li id="menu-group">
            <a id="menu-item" href="/web">
              Recomendations
            </a>
          </li>
          <li id="menu-group">
            <a id="menu-item" href="/web">
              Issues
            </a>
          </li>
          <li id="menu-group">
            <a id="menu-item" href="/web">
              Marketplace
            </a>
          </li>
          <li id="menu-group">
            <a id="menu-item" href="/web">
              Explore
            </a>
          </li>
        </ul>
      </nav>

      <div id="session-group">
        <div class="notifications">
          <i data-feather="activity"></i>
        </div>
        <div class="notifications">
          <i data-feather="activity"></i>
        </div>
        <div class="notifications">
          <i data-feather="activity"></i>
        </div>
      </div>
    </div>

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
                <FiActivity color="#FFFFA5" />
              </span>
              <span>Eliasallex/Dotnet</span>
            </a>
          </li>
          <li>
            <a href="/web">
              <span class="items-icon">
                <FiActivity color="#FFFFA5" />
              </span>
              <span>Eliasallex/Boas-Praticas</span>
            </a>
          </li>
          <li>
            <a href="/web">
              <span class="items-icon">
                <FiActivity color="#FFFFA5" />
              </span>
              <span>Eliasallex/SistemasOperacionais</span>
            </a>
          </li>
          <li>
            <a href="/web">
              <span class="items-icon">
                <FiActivity color="#FFFFA5" />
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
