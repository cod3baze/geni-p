<?php
require('../../src/database/connection.php');

$query_search = isset($_GET["query_search"]) ? $_GET["query_search"] : null;
?>

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
  <link rel="stylesheet" href="./styles.css" />
  <title>WELCOME | Genesis</title>
</head>

<body>
  <?php require('../../components/header.php') ?>

  <div id="result-search">
    <aside id="res-search">
      <h4>Tópicos</h4>
      <ul id="res-lis">
        <a href="./users.php?query_search=<?php echo $query_search; ?>" class="isSelected">
          Usuários
        </a>
        <a href="./lists.php?query_search=<?php echo $query_search; ?>">
          Listas
        </a>
        <a href="./articles.php?query_search=<?php echo $query_search; ?>">
          Artigos
        </a>
      </ul>
    </aside>

    <main id="res-query">
      <ul id="res-app">
        <?php
        if ($query_search) {
          $sql = "SELECT name, email FROM users WHERE name LIKE '%$query_search%'";
          $sql_result = mysqli_query($link, $sql);
          if ($sql_result) {
            while ($set = mysqli_fetch_array($sql_result)) {
              $email = $set["email"];
              $name = $set["name"];
              echo
                "
                <li id='res-users-app'>
                  <div id='header-user'>
                    <span>
                      <FiUser />
                    </span>
                    <strong>$name</strong>
                  </div>
                  <div id='desc-user'>
                    <p>$email</p>
                  </div>
                  <a id='goAhead' href='/public/users/$email'>
                    Ver perfil
                  </a>
                </li>
              ";
            }
          } else {
            echo
              "
            <li id='res-users-app'>
              <p styles='color: red'>SEM RESULTADOS</p>
            </li>
            ";
          }
        } else {
          echo "<script>alert('Insere uma querie válida')</script>";
        }
        ?>
      </ul>
    </main>
  </div>

  <script>
    feather.replace()
  </script>
</body>

</html>
