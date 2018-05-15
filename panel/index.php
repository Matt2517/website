<!DOCTYPE html>

<?php session_start(); ?>

<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <meta name="title" content="Depression Client">

    <meta name="description" content="Depression Client by Mat">

    <meta name="keywords" content="Depression, Depression Client, Hacked Client, Client, Cheat, Hypixel, Envy, iHaq, Mat, Marton">

    <meta name="copyright" content="Copyright (c) 2018, Mat">

    <title>Depression Client | Panel</title>

    <link rel="shortcut icon" type="image/png" href="../assets/images/favicon.png" />

    <!-- Style Sheets -->

    <link rel="stylesheet" href="../css/panel.css">
    <link data-react-helmet="true" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700"/>

    <!-- Java Script -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </script>

  </head>

  <body>

    <div class="container side-menu">

      <div class="head">

        <h2>Admin <span>Panel</span></h2>

      </div>

        <div class="sub-container">

          <a href="../scripts/reload.php" onclick="">Reload</a>

          <a href="../scripts/logout.php">Logout</a>

        </div>

    </div>

    <div class="container content">

      <div class="header"> </div>

      <div class="sub-contents">

        <div class="contents border-b extra">
            <a href="#">Dashboard</a>
        </div>

        <div class="contents stats">

          <div class="splitter">

            <p class="main-display"><?php echo $_SESSION['total-downloads']; ?></p>

              <p class="content-sub">total downloads</p>

          </div>

          <?php
            if(!isset($_SESSION['total-downloads'])){
              header("Location: ../");
              exit();
            }
          ?>

            <div class="c-container special">

                <h4>$<?php echo $_SESSION['total-money']; ?></h4>

                  <h5>Total Earned</h5>

            </div>

            <div class="c-container special-r">

                <h4>$0.001489441</h4>

                  <h5>Money Per Click</h5>

            </div>

        </div>

        <br><br><br><br>

        <div class="contents stats">

          <div class="splitter">

            <p class="main-display"><?php echo $_SESSION['latest-version']; ?></p>

              <p class="content-sub">latest version</p>

          </div>

          <div class="upload">

              <h4>Upload</h4>

                <form class="upload" action="../scripts/upload.php" method="post">

                  <input class="textbox" type="text" name="name" placeholder="Version / Name">

                  <input  class="textbox" type="text" name="link" placeholder="Link">

                  <input  class="button" type="submit" name="submit" value="Upload">

                </form>

          </div>

        </div>

      </div>

    </div>

  </body>

</html>
