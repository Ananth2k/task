<?php
include "db_conn.php";

$name = $_POST['NAME'];
$dob = $_POST['DOB'];
$maths = $_POST['MATHS'];
$science = $_POST['SCIENCE'];
$english = $_POST['ENGLISH'];

$total_marks = $maths + $science + $english;
$average_marks = $total_marks / 3;

$dob_timestamp = strtotime($dob);
$current_timestamp = time();
$age = floor(($current_timestamp - $dob_timestamp) / (365.25 * 24 * 60 * 60));

$sql = "INSERT INTO list (NAME,  DOB, MATHS, SCIENCE, ENGLISH, TOTAL, AVERAGE, AGE)
        VALUES ('$name', '$dob', $maths, $science, $english, $total_marks, $average_marks, $age)";

if ($conn->query($sql) === TRUE) {
    echo "Record added successfully";
     header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>