<div id="header">
  <nav>
    <div>
      <form name="send" id="form-res-in" method="get">
        <input placeholder="Search or jump to" type="search" name="search" id="search-bar" />
        <button name="send" type="submit" id="search-button">
          <i data-feather="search"></i>
        </button>
        <?php
        if (isset($_GET["send"])) {
          $query = isset($_GET["search"]) ? $_GET["search"] : 'elias';
          echo "
              <script>window.location.href='/web/public/results/users.php?query_search=$query'</script>
            ";
        }
        ?>
      </form>
    </div>

    <ul class="list-item-group">
      <li id="menu-group">
        <a id="menu-item" href="/web/public/recomendations.php">
          Recomendations
        </a>
      </li>
      <li id="menu-group">
        <a id="menu-item" href="/web/public/learning.php?issue_id=1">
          Issues
        </a>
      </li>
      <li id="menu-group">
        <a id="menu-item" href="/web/public/marketplace.php">
          Marketplace
        </a>
      </li>
      <li id="menu-group">
        <a id="menu-item" href="/web/public/home.php">
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
      <i data-feather="user"></i>
    </div>
  </div>
</div>
