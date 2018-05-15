<?php

include 'database.php';

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

 ?>
