<?php

if($_SERVER['REQUEST_METHOD']=='POST') {

   $response = array();
   //mendapatkan data
   $id_matkul = $_POST['id_matkul'];
   $nama_matkul = $_POST['nama_matkul'];
   $sks = $_POST['sks'];
   $id_dosen = $_POST['id_dosen'];

   require_once('dbconnect.php');
   //Cek npm sudah terdaftar apa belum
   $sql = "SELECT * FROM matkul WHERE id_matkul ='$id_matkul'";
   $check = mysqli_fetch_array(mysqli_query($con,$sql));
   if(isset($check)){
     $response["value"] = 0;
     $response["message"] = "oops! NPM sudah terdaftar!";
     echo json_encode($response);
   } else {
     $sql = "INSERT INTO matkul (id_matkul,nama_matkul,sks,id_dosen) VALUES('$id_matkul','$nama_matkul','$sks','$id_dosen')";
     if(mysqli_query($con,$sql)) {
       $response["value"] = 1;
       $response["message"] = "Sukses mendaftar";
       echo json_encode($response);
     } else {
       $response["value"] = 0;
       $response["message"] = "oops! Coba lagi!";
       echo json_encode($response);
     }
   }
   // tutup database
   mysqli_close($con);
} else {
  $response["value"] = 0;
  $response["message"] = "oops! Coba lagii!";
  echo json_encode($response);
}?>
