<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Entry</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="index1">
     <form class="data1" action="addentry.php" method="post">
     	<h2>Data Entry</h2>
     	<label class="l1">Student Registration Number</label>
     	<input required class="input1" type="text" name="regno" placeholder="Enter registration number"><br>

     	<label class="l1">Student Name</label>
     	<input required class="input1" type="text" name="name" placeholder="Enter name"><br>

        <label class="l1">Marks in Subject-1</label>
     	<input required class="input1" type="text" name="sub1" placeholder="Enter marks for subject 1"><br> 

        <label class="l1">Marks in Subject-2</label>
     	<input required class="input1" type="text" name="sub2" placeholder="Enter marks for subject 2"><br> 

        <label class="l1">Marks in Subject-3</label>
     	<input required class="input1" type="text" name="sub3" placeholder="Enter marks for subject 3"><br> 
     	<button type="submit">Submit</button>
     </form>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>