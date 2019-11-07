<?php 
session_start();
//cek apakah user sudahh login
if (!isset($_SESSION['userid'])) {
	header ("location:index.php");

}
//cek level admin
if ($_SESSION['level']!="admin") {
	die("Anda bukan admin");
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>halaman 1</title>
</head>
<body>
	
<h1>SELAMAT DATANG <?php echo $_SESSION['userid'] ?></h1><br>

<a href="log.php?op=out">Logout</a>

</body>
</html>