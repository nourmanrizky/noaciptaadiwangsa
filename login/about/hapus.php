<?php

 include "../config/koneksi.php";


$id = $_GET['id'];



$sql = "DELETE FROM about WHERE id='".$id."'";
$sql2 = mysqli_query($conn, $sql); 

 
  header("location: index.php"); 


?>