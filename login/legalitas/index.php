<html>

<head>
	<title>:: Administrator ::</title>
</head>

<body>
	<?php
	// Load file koneksi.php
	include "../head.php";
	include "../sidebar.php";
	?>

	<div class="content-wrapper">

		<section class="content">
			<div class="container-fluid">
				<h4>
					<center>Data Legalitas<center>
				</h4>




				<div class="col-sm-10">
					<a href="simpan.php" class="btn btn-outline-primary"> + Tambah</a><br><br>
					<table class="table" width="100%" class>
						<tr class="table-primary">
							<th>
								No.
							</th>
							<th>
								Title
							</th>

							<th>
								Deskripsi
							</th>
							<th colspan=" 2">
								Aksi
							</th>



						</tr>

						</thead>
						<tbody>
							<?php
							include "../config/koneksi.php";

							if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
								$page_no = $_GET['page_no'];
							} else {
								$page_no = 1;
							}

							$total_records_per_page = 7;
							$offset = ($page_no - 1) * $total_records_per_page;
							$previous_page = $page_no - 1;
							$next_page = $page_no + 1;
							$adjacents = "2";
							$no = '0';
							$result_count = mysqli_query($conn, "SELECT COUNT(*) As total_records FROM `legalistas`");
							$total_records = mysqli_fetch_array($result_count);
							$total_records = $total_records['total_records'];
							$total_no_of_pages = ceil($total_records / $total_records_per_page);
							$second_last = $total_no_of_pages - 1; // total page minus 1

							$result = mysqli_query($conn, "SELECT * FROM `legalistas`  ORDER BY id DESC LIMIT $offset, $total_records_per_page");
							while ($row = mysqli_fetch_array($result)) {
								$no = $no + 1;
								echo "<tr>";
								echo "<td> $no</td>";

								echo "<td>" . $row['judul'] . "</td>";
								echo "<td>" . $row['isi'] . "</td>";
								echo "<td><a href='ubah.php?id=" . $row['id'] . "'>Ubah</a></td>";
								echo "<td><a href='hapus.php?id=" . $row['id'] . "'>Hapus</a></td>";
								echo "</tr>";
							}
							mysqli_close($conn);
							?>
						</tbody>
					</table>
					<center>
						<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
							<strong>Page <?php echo $page_no . " of " . $total_no_of_pages; ?></strong>
						</div>

						<ul class="pagination">
							<?php if ($page_no > 1) {
								echo "<li><a href='?page_no=1'>First Page</a></li>";
							}
							?>

						</ul>
					</center>
				</div>
			</div>
			<!-- /.row -->
			<!-- Main row -->

	</div><!-- /.container-fluid -->

	<?php
	// Load file koneksi.php
	include "../footer.php";

	?>