<!DOCTYPE html>
<?php
  session_start();
?>
<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <meta name="title" content="Depression Client">

    <meta name="description" content="Depression Client by Mat">

    <meta name="keywords" content="Depression, Depression Client, Hacked Client, Client, Cheat, Hypixel, Envy, iHaq, Mat, Marton">

    <meta name="copyright" content="Copyright (c) 2018, Mat">

    <title>Depression Client</title>

    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png" />

    <!-- Style Sheets -->

    <link rel="stylesheet" href="css/master.css">
    <link data-react-helmet="true" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700"/>

    <!-- Java Script -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/navigation.js"></script>
    <script type="text/javascript" src="js/dropdown.js"></script>

    </script>

    </script>

  </head>

  <body>

    <header>

        <!-- Navigation Menu -->

        <nav>

            <?php

                if (isset($_SESSION['username'])){

                    echo '<h3>'.$_SESSION['username'].'</h3>';

                }

            ?>

              <div class="sub-container">

              <a class="active" onclick="switchElement(0);" id="bHome">Home</a>

              <a onclick="switchElement(1);" id="bFeatrues">Features</a>

              <a onclick="switchElement(2);" id="bDownloads">Downloads</a>

                <?php

                    if (isset($_SESSION['username'])) {

                        echo '<a href="scripts/logout.php" style="text-decoration:none;">Logout</a>';

                    }

                ?>

            </div>

        </nav>

        <!-- Showcase Container -->

          <div class="container showcase" id="landing-page">

            <div class="sub-container center">

              <h1><span>D</span>epression <span>C</span>lient</h1>

                <h4>by mat</h4>

              <a onclick="switchElement(2);" class="button selected">Download</a>

            </div>

          </div>

          <div class="container showcase hidden" id="features">

            <div class="sub-container center">

              <h1><span>F</span>eatures</h1>

                <div class="featrue-container">

                  <a class="feature">

                    <h2><span>O</span>ptifine</h2>

                    <h6>Increases Performance</h6>

                    <h6>Shader Compatibility</h6>

                  </a>

                  <a class="feature">

                    <h2><span>B</span>ypasses</h2>

                    <h6>Designed To Bypass Latest Anticheat's</h6>

                    <h6>NCP <span>/</span> GWEN <span>/</span> Watchdog <span>/</span> Fiona <span>/</span> Guardian</h6>

                  </a>

                  <a class="feature">

                    <h2><span>F</span>ree</h2>

                    <h6>Client Is Completely Free</h6>

                    <h6>As good as paid</h6>

                  </a>

                </div>

            </div>

          </div>

            <div class="container showcase hidden" id="downloads">

              <div class="sub-container center">

                <h1><span>D</span>ownloads</h1> <br>

                <form action="scripts/download.php" method="post">

                  <br>

                  <div class="container-drop ">

                    <div class="drop-header">

                        <?php

                          include_once 'scripts/database.php';

                            $result = $conn->query("SELECT * FROM versions ORDER BY id DESC LIMIT 0, 1");

                              if ($row = $result->fetch_assoc()) {

                                  echo '<input type="text" name="selection" id="drop-selection" value="'.$row['name'].'">';

                              }

                        ?>

                        <a  onclick="toggleDrop();"class="drop-trigger">▼</a>

                    </div>

                      <br>

                        <div class="drop-contents hidden" id="drop-down">

                            <?php

                                include 'scripts/database.php';

                                  $result = $conn->query("SELECT * FROM versions");

                                    while($row = $result->fetch_array()) {

                                        echo '<a onClick="selectVersion('.'\''.$row['name'].'\''.')">'.$row['name'].'</a>';

                                    }

                              ?>


                        </div>

                  </div>

                  <br>

                    <input type="submit" name="submit" class="button" value="Download"></input>

                </form>

              </div>

            </div>

    </header>

  </body>

</html>
