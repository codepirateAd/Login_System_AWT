<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="main">
     <br><Br>
          <h1>Welcome to Student Information System</h1>
          <a class= "a" id="logout" href="logout.php">Logout</a>
          <br><br><br><br><br><br><br><br><br>
          <a class= "a" id="entry" href="dataentry.php">Data entry</a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a class= "a" id="retrieve" href="dataretrieval.php">Data retrieval</a>
          <br><br><br><br><br><br><br><br>
          
          <h1> My Favourite Sports Person </h1><br>
          <a href="https://en.wikipedia.org/wiki/MS_Dhoni"><img class="ff" src="img/msdhoni.jpg"/></a>
          <a href="https://en.wikipedia.org/wiki/Harmanpreet_Kaur"><img src="img/hk.jpg"/></a>
          <a href="https://en.wikipedia.org/wiki/Sunil_Chhetri"><img src="img/Sunil-Chetri-Kreedon.jpg"/></a>
          <a href="https://en.wikipedia.org/wiki/Virat_Kohli"><img src="img/Virat-Kohli-Kreedon.jpg"/></a>
          <a href="https://en.wikipedia.org/wiki/Yuvraj_Singh"><img src="img/Yuvraj-Singh.jpeg"/></a><br><br>

          <br><br><br><br><br><br><br><br>

          <footer>
               <c class="ed">Name: <?php echo $_SESSION['name']; ?></c>
               <c class="ed">Regno: <?php echo $_SESSION['user_name']; ?></c>
               <c class="ed">Official Email: <?php echo $_SESSION['email']; ?></c>
          </footer>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>