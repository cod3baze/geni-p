<?php
require('../src/database/connection.php');

$list_id = isset($_GET["list_id"]) ? $_GET["list_id"] : null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <script src="https://cdn.jsdelivr.net/npm/markdown-it@11/index.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Roboto+Mono:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,500&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,500;0,700;1,300;1,500;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/Global.css" />
  <link rel="stylesheet" href="../css/App.css" />
  <link rel="stylesheet" href="../css/Learning.css" />
  <title>Learing | Genesis</title>
</head>

<body>
  <?php require('../components/header.php') ?>

  <div id="learning-screen-vw">
    <aside id="learning-vw">
      <?php
      $sql = "SELECT name FROM playlist WHERE id = '$list_id' LIMIT 1";
      $query = mysqli_query($link, $sql);
      if ($query && $list_id) {
        while ($data = mysqli_fetch_array($query)) {
          echo "
              <div id='learn-theme-group'>
                <h3>" . $data["name"] . "</h3>
              </div>";
        }
      } else {
        echo "
              <h1 style='color: red;'>ERRO AO PEGAR OS DADOS!</h1><br/>
              ";
      }
      ?>

      <div id="learning-lessons">
        <ul id="plist_over">
          <li id="list-over">
            <a href='/web/public/playlist.php?list_id=1' class="isLearning">
              <span>
                <i color="#FFFFA5" data-feather="pie-chart"></i>
              </span>
              <span>Introdu????o ao JS</span>
            </a>
          </li>

          <li id="list-over">
            <a href='/web/public/playlist.php?list_id=1' class="isLearning">
              <span>
                <i color="#FFFFA5" data-feather="pie-chart"></i>
              </span>
              <span>Introdu????o ao JS</span>
            </a>
          </li>

          <li id="list-over">
            <a href='/web/public/playlist.php?list_id=1' class="isLearning">
              <span>
                <i color="#FFFFA5" data-feather="pie-chart"></i>
              </span>
              <span>Introdu????o ao JS</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <main id="learning-vw">
      <div id="transcription">
        <script>
          const divx = document.querySelector('div#transcription').innerHTML = marked(` # Lorem ipsum dolor, sit amet consectetur adipisicing elit. \n\n > only teste`)
        </script>
      </div>
    </main>
  </div>

  <script>
    feather.replace()
  </script>
</body>

</html>
