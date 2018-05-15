<?php

session_start();

if (!isset($_POST['submit'])) {
  header("Location: ../admin.php");
  exit();
}

include_once 'database.php';

$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);

if (empty($username) or empty($password)){
  header("Location: ../admin.php");
  exit();
}

$result = $conn->query("SELECT * FROM users WHERE username='$username'");

if ($result->num_rows <= 0) {
    header("Location: ../admin.php");
    exit();
}

if ($row = $result->fetch_assoc()) {
    $hashedPwdCheck = password_verify($password, $row['password']);
    if ($hashedPwdCheck) {

      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;

      $result = $conn->query("SELECT * FROM versions ORDER BY id DESC LIMIT 0, 1");
      if ($row = $result->fetch_assoc()) {
          $_SESSION['latest-version'] = $row['name'];
      }

      $result = $conn->query("SELECT * FROM downloads");
      if ($row = $result->fetch_assoc()) {
          $_SESSION['total-downloads'] = $row['total'];
          $_SESSION['total-money'] = ($row['total'] * 0.00148944063926940639269406392694);
      }

      header("Location: ../panel/");
      exit();

    } else {
      header("Location: ../admin.php");
      exit();
    }
}

?>
