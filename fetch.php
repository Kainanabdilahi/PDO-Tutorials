<?php
include("config.php");
include("header.php");
?>

<body class="">
  <div class="container col-4 shadow p-4 mt-3">
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

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
</body>

</html>