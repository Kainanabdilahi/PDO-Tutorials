<?php

include('config.php');

if (isset($_POST["add"])) {
  $id = intval($_POST['id']);
  $name = $_POST["name"];
  $class = $_POST["class"];

  $query = $db->prepare("INSERT INTO students (Name, Class) VALUES (?,?)");

  $query->bindValue(1, $name);
  $query->bindValue(2, $class);

  if ($query->execute()) {
    header("Location: index.php");
    exit();
  } else {
    echo "Record Not inserted!!";
  }
}
