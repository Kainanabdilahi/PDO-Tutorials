<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDO</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
  <div class="container col-5">
    <div class="d-flex justify-content-between mt-2">
      <h3>PDO Crud Operations</h3>
      <a href="fetch.php" class="btn btn-primary">View List</a>
    </div>
    <form action="getInfo.php" method="post">
      <div class="form-group">
        <label for="id">ID</label>
        <input type="text" name="id" class="form-control" placeholder="Enter Student ID" readonly>
      </div>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Student name">
      </div>

      <div class="form-group">
        <label for="class">Class</label>
        <input type="text" name="class" class="form-control" placeholder="Enter Student Class">
      </div>

      <button type="submit" name="add" class="btn btn-success btn-block">
        Insert Record
      </button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
</body>

</html>