<?php
if (isset($_POST['submit'])) {
  include "../config/koneksi.php";
  $id = $_GET['id'];

  $judul = $_POST['judul'];
  $isi = $_POST['isi'];






  // Proses ubah data ke Database
  $sql1 = "UPDATE aboutsesdua SET 	
	
		judul ='" . $judul . "',
		isi='" . $isi . "'




	WHERE id='" . $id . "'";
  $sql2 = mysqli_query($conn, $sql1);
  header("location: index.php");
}


include "../config/koneksi.php";


$id = $_GET['id'];

$query = "SELECT * FROM aboutsesdua WHERE 	id='" . $id . "'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);
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
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">


        <div class="col-sm-10">
          <h1>
            <center>Edit</center>
          </h1>



          <form method="post" action="" enctype="multipart/form-data">
            <table cellpadding="8">





              <tr>
                <th>judul : </th>
                <td><input class="form-control" type="text" name="judul" value="<?php echo $data['judul']; ?>" style="background: #FFF;"></td>
              </tr>
              <tr>
              <tr>
                <th>Deskripsi : </th>
                <td><textarea name='isi' style='width: 720px; height: 350px;' class="ckeditor"><?php echo $data['isi']; ?></textarea>

              </tr>
              <tr>




            </table>

            <hr>
            <input type="submit" name="submit" class="btn btn-success" value="Ubah">
            <a href="index.php"><input type="button" class="btn btn-warning" value="Batal"></a>
        </div>
      </div>
  </div>
  <?php include "../footer.php"; ?>