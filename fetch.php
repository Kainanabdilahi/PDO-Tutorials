<?php
include("config.php");
include("header.php");
?>

<body class="">
  <div class="container col-3 shadow p-4 mt-3">
    <h3>Add Student</h3>
    <form action="getInfo.php" method="post">
      <div class="form-group">
        <label for="id">ID</label>
        <input type="text" name="id" class="form-control" placeholder="Enter Student ID" readonly>
      </div>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Student name" required>
      </div>

      <div class="form-group">
        <label for="class">Class</label>
        <input type="text" name="class" class="form-control" placeholder="Enter Student Class" required>
      </div>

      <button type="submit" name="add" class="btn btn-success btn-block">
        Save
      </button>
    </form>
  </div>

</body>

</html>