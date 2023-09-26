<?php
if (isset($_POST['submit'])) {

  include "../config/koneksi.php";

  // Ambil Data yang Dikirim dari Form

  $judul = $_POST['judul'];
  $isi = $_POST['isi'];



  $sql1 = "INSERT INTO legalistas VALUES('','" . $judul . "','" . $isi . "')";
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
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <h4>
          <center>Tambah Data Legalitas</center>
        </h4>
        <center>
          <div class="col-sm-10">
            <form method="post" action="" enctype="multipart/form-data">
              <table width="100%" class="table">
                <tr>
                  <th>Title : </th>
                  <td><input type="text" class="form-control" name="judul" size='50' placeholder="isi title.."></td>

                </tr>

                <tr>
                  <th>Deskripsi : </th>
                  <td><input type="text" class="form-control" name="isi" size='50' placeholder="deskripsi"></td>
                  <br><br>
                </tr>



              </table>
              <input type="submit" class="btn btn-success" name="submit" value="Simpan">
              <a href="index.php"><input type="button" class="btn btn-warning" value="Batal"></a>
            </form>

          </div>
        </center>

      </div>
  </div>




  <?php include "../footer.php"; ?>