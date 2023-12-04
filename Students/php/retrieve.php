<?php
include "db_conn.php";



$sql = "SELECT * FROM list ORDER BY NAME ASC";
$data = $conn->query($sql);

if (isset($_POST['delete'])) {
  $id = $_POST['delete'];
  $sql = "DELETE FROM list WHERE ID='$id'";
  
  if ($conn->query($sql) === TRUE) {
     header("Location: index.php");
  } else {
    echo "Error deleting record: " . $conn->error;
  }
}



?>