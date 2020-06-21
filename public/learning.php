<?php
require('../src/database/connection.php');

$issue_id = isset($_GET["issue_id"]) ? $_GET["issue_id"] : null;
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
    <main id="learning-vw">
      <div id="transcription">
        <?php
        $sql = "SELECT * FROM issue WHERE id='$issue_id'";
        $query = mysqli_query($link, $sql);
        if ($query && $issue_id) {
          while ($data = mysqli_fetch_array($query)) {
            $body = utf8_encode($data["body"]);
            echo
              "
              <script>
                const divx = document.querySelector('div#transcription').innerHTML = marked(`" . $body . "`);
              </script>
            ";
          }
        } else {
          echo "
            <h1 style='color: red;'>ERRO AO PEGAR OS DADOS!</h1><br/>
            ";
        }

        ?>
      </div>
    </main>
  </div>

  <script>
    feather.replace()
  </script>
</body>

</html>
