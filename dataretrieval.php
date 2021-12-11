<?php 
session_start();
include "db_conn.php";


if(isset($_GET['retrieve'])){
  $var = $_GET['regno'];
  $sql = "SELECT * FROM student_data where regno='$var'";
  $result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
      $_SESSION["regno"]= $row['regno'];
      $_SESSION["name1"] = $row['name'];
      $_SESSION["sub11"] = $row['sub1'];
      $_SESSION["sub21"] = $row['sub2'];
      $_SESSION["sub31"] = $row['sub3'];

}

}
if(isset($_GET['update'])){
  $_SESSION["update_data"]= $_GET['regno'];
  header("Location: updatedata.php");
}

if(isset($_GET['calculate'])){
  $var = $_GET['regno'];
  $sql = "SELECT * FROM student_data where regno='$var'";
  $result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
      $_SESSION["sub11"] = $row['sub1'];
      $_SESSION["sub21"] = $row['sub2'];
      $_SESSION["sub31"] = $row['sub3'];
      $_SESSION["average"] = ($_SESSION["sub11"] + $_SESSION["sub21"] + $_SESSION["sub21"])/3;
}
}

    if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Data retrieval</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body class="index1">
     <div class="data1" >
     	<h2>Data retrieval</h2>
      
       <form method="GET">
     	<label class="l1">Enter Registration Number</label>
       <input class="input1" type="text" name="regno" id= "regno" placeholder="Enter registration number"><br>
     	<button type="retrieve" name="update">Update</button>
     	<button type="retrieve" name="calculate">Calculate</button>
     	<button type="submit" name="retrieve">Submit</button>
        <br><br><br><br><br>
     	<label class="l2"><b>Details</b></label><br><br><label class="l1"><?php if (isset($_GET['calculate'])) { 
     		 echo "Average: ".$_SESSION["average"]; }?></label> <br>
       
     	<label class="l2" id="name1"> <?php if (isset($_GET['retrieve'])) { 
     		 echo "Student Name: ".$_SESSION["name1"]; }?>
     	</label><br><br><br>

       <label class="l2" id="reg_no"><?php if (isset($_GET['retrieve'])) { 
     		 echo "Regno: ".$_SESSION["regno"]; }?></label><br><br><br>


        <label class="l2" ><?php if (isset($_GET['retrieve'])) { 
     		 echo "Marks in Subject-1: ".$_SESSION["sub11"]; }?></label><br><br><br>

        <label class="l2"><?php if (isset($_GET['retrieve'])) { 
     		 echo "Marks in Subject-2: ".$_SESSION["sub21"]; }?></label><br><br><br>

        <label class="l2"><?php if (isset($_GET['retrieve'])) { 
     		 echo "Marks in Subject-3: ".$_SESSION["sub31"]; }?></label><br><br><br>
    </form>
     </div>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>

              