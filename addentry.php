<?php 
session_start(); 
include "db_conn.php";

$regno = $_POST['regno'];
$name = $_POST['name'];
$sub1 = $_POST['sub1'];
$sub2 = $_POST['sub2'];
$sub3 = $_POST['sub3'];

$sql = "Insert into student_data values('$regno','$name','$sub1','$sub2','$sub3')";

if ($conn->query($sql) === TRUE) {
  header("Location: home.php");
} else {
  echo "Error updating record: " . $conn->error;
}

?>