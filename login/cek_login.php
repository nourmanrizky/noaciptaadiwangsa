
<?php
error_reporting(0);
include "config/koneksi.php";

$username = $_POST['username'];
$pass     = $_POST['password'];

$sql1 = "SELECT * FROM users WHERE username = '$username' AND password='$pass'";
$sql2 = mysqli_query($conn, $sql1);
$row = mysqli_fetch_array($sql2);
if ($row['username'] == $username and $row['password'] == $pass) {
  session_start();
  $_SESSION['username'] = $row['username'];
  $_SESSION['password'] = $row['password'];
  header('location:home/index.php');
} else {
  echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br>";
  echo "<br>";
  echo "<input class='btn btn-blue' type=button value='ULANGI LAGI'
  onclick=location.href='index.php'></a></center>";
}
?>