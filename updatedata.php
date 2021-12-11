<?php 
session_start(); 

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Upate</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="index1">
     <form class="data1" action="updatecode.php" method="post">
     	<h2>Data Updation</h2>
     	<label class="l1">Student Registration Number</label>
     	<input required class="input1" type="text" name="regno" value=<?php echo $_SESSION["update_data"];?>  placeholder="Enter registration number" disabled><br>

     	<label class="l1">Student Name</label>
     	<input required class="input1" type="text" name="name1" placeholder="Enter name"><br>

        <label class="l1">Marks in Subject-1</label>
     	<input required class="input1" type="text" name="sub11" placeholder="Enter marks for subject 1"><br> 

        <label class="l1">Marks in Subject-2</label>
     	<input required class="input1" type="text" name="sub21" placeholder="Enter marks for subject 2"><br> 

        <label class="l1">Marks in Subject-3</label>
     	<input required class="input1" type="text" name="sub31" placeholder="Enter marks for subject 3"><br> 
     	<button type="submit">Update</button>
     </form>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>