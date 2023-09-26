<?php
if(isset($_POST['submit']))
{

 include "../config/koneksi.php";

// Ambil Data yang Dikirim dari Form

$judul = $_POST['judul'];
$isi = $_POST['isi'];



  $sql1 = "INSERT INTO aboutsesdua VALUES('','".$judul."','".$isi."')";
  $sql2 = mysqli_query($conn, $sql1); 


    header("location: index.php"); 
  

}
?>


<html>
<head>
<title>:: Administrator ::</title>
<link rel="stylesheet" href="css/style.css" />
			
			<script type="text/javascript" src="../js/jquery-1.4.1.min.js"></script>
			<script type="text/javascript" src="js/custom.js"></script>
			<script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>
</head>
<body>
<?php include "../head.php"; ?>
<?php include "../sidebar.php"; ?>

<link rel="stylesheet" href="../js/bootstrap.min.css">
<section class="content">
      <div class="container-fluid">

  
  <div class="col-sm-2">
</div>
	 
   <div class="col-sm-10">
  <h1><center>Tambah</center></h1>
  <form method="post" action="" enctype="multipart/form-data">
  <table cellpadding="8">

  <tr>
    <td>judul</td>
    <td><input type="text" name="judul" size='50' placeholder="Judul" "></td>
    <br><br>
  </tr>
<br><br>
  
  
<tr>
    <td>Teks</td>
  	<td><textarea name='isi' style='width: 920px; height: 550px;' class="ckeditor"></textarea>
    <br><br>
  </tr>
<br><br>
  


  </table>
  
  <hr>
  <input type="submit" name="submit" value="Simpan">
  <a href="index.php"><input type="button" value="Batal"></a>
  </form>

  



  <?php include "../footer.php"; ?>