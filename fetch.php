<?php

require_once('config.php');

$query = $db->query("SELECT * FROM students");

while ($row = $query->fetch(PDO::FETCH_ASSOC)) { ?>
  <a href="getInfo.php?id=<?php echo $row['Id']; ?>">

    <?php echo $row["Id"] . ": " . $row["Name"] . "<br>"; ?>
  </a>
<?php } ?>