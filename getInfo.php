<?php

include('config.php');

$id = intval($_GET['id']);

$query = $db->prepare("SELECT * FROM students WHERE Id = ?");

$query->bindValue(1, $id);

$query->execute();

while ($row = $query->fetchAll(PDO::FETCH_ASSOC)) {
  foreach ($row as $value) {
    echo $value['Id'] . "<br>" . $value['Name'] . " <br> " . $value['Class'] . "<br>";
  }
}
