<?php

try {
  $db = new PDO("mysql:host=localhost;dbname=pdo_db", "root", "");
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
