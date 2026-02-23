<?php

include('config.php');

// Insert Student Record
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
    echo "Record Not inserted😊!!";
  }
}

// Update Student Record
if (isset($_POST["update"])) {
  $id = intval($_POST['id']);
  $name = $_POST["name"];
  $class = $_POST["class"];

  $query = $db->prepare("UPDATE students SET Name=?, Class=? WHERE Id=?");
  $query->bindParam(1, $name);
  $query->bindParam(2, var: $class);
  $query->bindParam(3, var: $id);
  if ($query->execute()) {
    header("Location: index.php");
    exit();
  } else {
    echo "Record Not updated🥲!!";
  }
}
// Delete Student Record
if (isset($_GET["id"])) {
  $id = intval($_GET['id']);

  $query = $db->prepare("DELETE FROM students WHERE Id=?");
  $query->bindParam(1, var: $id);
  if ($query->execute()) {
    header("Location: index.php");
    exit();
  } else {
    echo "Record Not Deleted!!";
  }
}
