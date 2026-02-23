<?php
include("config.php");
include("header.php");

if (isset($_GET["id"])) {
  $stdId = $_GET["id"];

  $query = $db->prepare("SELECT * FROM students WHERE Id=?");
  $query->bindParam(1, $stdId);

  $query->execute();

  while($row = $query->fetch(PDO::FETCH_ASSOC)){
    $id = $row["Id"];
    $name = $row["Name"];
    $class = $row["Class"];
  }
}
?>

<body class="">
  <div class="container col-3 shadow p-4 mt-3">
    <h3>Update Student</h3>
    <form action="getInfo.php" method="post">
      <div class="form-group">
        <label for="id">ID</label>
        <input type="text" name="id" class="form-control" placeholder="Enter Student ID" readonly value="<?php echo $id ?>">
      </div>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Student name" required value="<?php echo $name ?>">
      </div>

      <div class="form-group">
        <label for="class">Class</label>
        <input type="text" name="class" class="form-control" placeholder="Enter Student Class" required value="<?php echo $class ?>">
      </div>

      <button type="submit" name="update" class="btn btn-success btn-block">
        Update
      </button>
    </form>
  </div>

</body>

</html>