<?php 
session_start(); 
include "db_conn.php";

$regno = $_SESSION["update_data"];
$name = $_POST['name1'];
$sub1 = $_POST['sub11'];
$sub2 = $_POST['sub21'];
$sub3 = $_POST['sub31'];

$sql = "UPDATE `student_data` SET `name`='$name',`sub1`='$sub1',`sub2`='$sub2',`sub3`='$sub3' WHERE `regno`='$regno'";

if ($conn->query($sql) === TRUE) {
  header("Location: home.php");
} else {
  echo "Error updating record: No record found " . $conn->error;
}

?>