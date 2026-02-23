
<?php

include('config.php');
include('header.php');

$query = $db->query("SELECT * FROM students");
?>

<div class="container mt-4 d-flex justify-content-center">

  <div class="card-body col-6">
    <div class="d-flex justify-content-between mb-2">
      <h3>Student List</h3>
      <a href="fetch.php" class="btn btn-primary">Add Student</a>
    </div>

    <table class="table table-bordered table-hover">
      <thead class="thead-info">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Class</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $query->fetch(PDO::FETCH_ASSOC)) { ?>
          <tr>
            <td><?php echo $row["Id"]; ?></td>
            <td><?php echo $row["Name"]; ?></td>
            <td><?php echo $row["Class"]; ?></td>
            <td>
              <a class="btn btn-info">Edit</a>
              <a class="btn btn-danger">Delete</a>
            </td>

          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>