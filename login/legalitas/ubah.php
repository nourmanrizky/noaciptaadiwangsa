<?php
if (isset($_POST['submit'])) {
  include "../config/koneksi.php";
  $id = $_GET['id'];

  $judul = $_POST['judul'];
  $isi = $_POST['isi'];






  // Proses ubah data ke Database
  $sql1 = "UPDATE legalistas SET 	
	
		judul ='" . $judul . "',
		isi='" . $isi . "'




	WHERE id='" . $id . "'";
  $sql2 = mysqli_query($conn, $sql1);
  header("location: index.php");
}


include "../config/koneksi.php";


$id = $_GET['id'];

$query = "SELECT * FROM legalistas WHERE 	id='" . $id . "'";
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



  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <center>
          <div class="col-sm-10">
            <h4>
              <center>Edit Legalitas</center>
            </h4>
            <form method="post" action="" enctype="multipart/form-data">
              <table class="table">
                <tr>
                  <th>Title:</th>
                  <td><input type="text" class="form-control" name="judul" value="<?php echo $data['judul']; ?>" style="background: #FFF;"></td>
                </tr>

                <tr>
                  <th>Deskripsi:</th>
                  <td>
                    <input type="text" class="form-control" name="isi" value="<?php echo $data['isi']; ?>" style="background: #FFF;">
                  </td>
                </tr>

              </table>

              <input type="submit" class="btn btn-success" name="submit" value="Ubah">
              <a href="index.php"><input type="button" class="btn btn-warning" value="Batal"></a>
            </form>
            <!-- </div> -->
          </div>
        </center>
      </div>
  </div>
  <?php include "../footer.php"; ?>