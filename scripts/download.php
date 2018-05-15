<?php

if (!isset($_POST['submit'])) {
  header("Location: /");
  exit();
}

include_once 'database.php';

$name = $conn->real_escape_string($_POST['selection']);

include_once 'scripts/database.php';

$result = $conn->query("SELECT * FROM versions WHERE name='$name'");

if ($row = $result->fetch_assoc()) {
  header("Location: ".$row['link']."");
  exit();
}

?>
