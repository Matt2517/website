<?php

include_once 'database.php';

$result = $conn->query("SELECT * FROM versions ORDER BY id DESC LIMIT 0, 1");
if ($row = $result->fetch_assoc()) {
  die($row['name']);
}

?>
