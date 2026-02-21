<?php

include('config.php');

$id = $_GET['id'];

$query = $db->query("SELECT * FROM students WHERE Id = $id");

while ($row = $query->fetchAll(PDO::FETCH_ASSOC)) {
  foreach ($row as $value) {
    echo $value['Id'] . "<br>" . $value['Name'] . " <br> " . $value['Class'] . "<br>";
  }
}
