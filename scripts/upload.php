<?php

if (session_id() == "")
  session_start();

if (!isset($_POST['submit'])) {
  header("Location: ../panel/");
  exit();
}

include_once 'database.php';

$name = $conn->real_escape_string($_POST['name']);
$link = $conn->real_escape_string($_POST['link']);

if (empty($name) or empty($link)){
    header("Location: ../panel/");
  exit();
}

$result = $conn->query("INSERT INTO versions (name, link) VALUES ('$name', '$link')");
$_SESSION['latest-version'] = $name;
header("Location: ../panel/");

?>
