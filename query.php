<?php

require_once('config.php');

$query = $db->query("SELECT * FROM students");

foreach ($query as $row) {
  echo  $row['Id'] . " - "  . $row['Name'] . " - " . $row['Class'] . "<br>";
}
