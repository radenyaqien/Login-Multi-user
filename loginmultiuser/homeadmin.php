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
 	<title>Halaman Admin</title>
 </head>
 <body>
 	<?php echo $_SESSION['userid'] ?>
 	<a href="halaman1.php">Halaman 1</a>
 	<a href="halaman2.php">Halaman 2</a>
 	<a href="log.php?op=out">Logout</a>
 </body>
 </html>