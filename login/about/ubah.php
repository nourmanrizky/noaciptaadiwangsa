<?php
if (isset($_POST['submit'])) {
  include "../config/koneksi.php";
  $id = $_GET['id'];

  $judul = $_POST['judul'];
  $isi = $_POST['isi'];






  // Proses ubah data ke Database
  $sql1 = "UPDATE about SET 	
	
		judul ='" . $judul . "',
		isi='" . $isi . "'




	WHERE id='" . $id . "'";
  $sql2 = mysqli_query($conn, $sql1);
  header("location: index.php");
}


include "../config/koneksi.php";


$id = $_GET['id'];

$query = "SELECT * FROM about WHERE 	id='" . $id . "'";
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-6">

          <div class="col-sm-6">

          </div><!-- /.col -->
          <div class="col-sm-6">

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">



        <div class="col-sm-10">
          <h1>
            <center>Edit</center>
          </h1>



          <form method="post" action="" enctype="multipart/form-data">
            <table cellpadding="8">





              <tr>
                <th>Judul : </th>
                <td><input type="text" class="form-control" name="judul" value="<?php echo $data['judul']; ?>" style="background: #FFF;"></td>
              </tr>
              <tr>
              <tr>
                <th>Isi: </th>
                <td><textarea name='isi' style='width: 720px; height: 350px;' class="ckeditor"><?php echo $data['isi']; ?></textarea>
              </tr>
              <tr>




            </table>

            <hr>
            <input type="submit" name="submit" value="Ubah" class="btn btn-success">
            <a href="index.php"><input type="button" value="Batal" class="btn btn-warning"></a>
            <?php include "../footer.php"; ?>