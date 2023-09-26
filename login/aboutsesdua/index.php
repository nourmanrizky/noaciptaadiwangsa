<html>

<head>
	<title>:: Administrator ::</title>

</head>

<body>
	<?php

	include "../head.php";
	include "../sidebar.php";
	?>
	<link rel="stylesheet" href="../js/bootstrap.min.css">

	<div class="content-wrapper">
		<section class="content">
			<div class="container-fluid">
				<h4>
					<center>About Section 2<center>
				</h4>



				<div class="col-sm-10">
					<!-- <a href="simpan.php">Tambah</a><br><br> -->
					<table width="100%" class="table">
						<tr>
							<th>
								NO
							</th>
							<th>
								Judul
							</th>

							<th>
								Deskripsi
							</th>
							<th colspan="2">
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
							$result_count = mysqli_query($conn, "SELECT COUNT(*) As total_records FROM `aboutsesdua`");
							$total_records = mysqli_fetch_array($result_count);
							$total_records = $total_records['total_records'];
							$total_no_of_pages = ceil($total_records / $total_records_per_page);
							$second_last = $total_no_of_pages - 1; // total page minus 1

							$result = mysqli_query($conn, "SELECT * FROM `aboutsesdua`  ORDER BY id DESC LIMIT $offset, $total_records_per_page");
							while ($row = mysqli_fetch_array($result)) {
								$no = $no + 1;
								echo "<tr>";
								echo "<td> $no</td>";

								echo "<td>" . $row['judul'] . "</td>";
								echo "<td>" . $row['isi'] . "</td>";
								echo "<td><a href='ubah.php?id=" . $row['id'] . "'>Ubah</a></td>";
								// echo "<td><center><a href='hapus.php?id=" . $row['id'] . "'>Hapus</a></td>";
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

							<li <?php if ($page_no <= 1) {
									echo "class='disabled'";
								} ?>>
								<a <?php if ($page_no > 1) {
										echo "href='?page_no=$previous_page'";
									} ?>>Previous</a>
							</li>

							<?php
							if ($total_no_of_pages <= 10) {
								for ($counter = 1; $counter <= $total_no_of_pages; $counter++) {
									if ($counter == $page_no) {
										echo "<li class='active'><a>$counter</a></li>";
									} else {
										echo "<li><a href='?page_no=$counter'>$counter</a></li>";
									}
								}
							} elseif ($total_no_of_pages > 10) {

								if ($page_no <= 4) {
									for ($counter = 1; $counter < 8; $counter++) {
										if ($counter == $page_no) {
											echo "<li class='active'><a>$counter</a></li>";
										} else {
											echo "<li><a href='?page_no=$counter'>$counter</a></li>";
										}
									}
									echo "<li><a>...</a></li>";
									echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
									echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
								} elseif ($page_no > 4 && $page_no < $total_no_of_pages - 4) {
									echo "<li><a href='?page_no=1'>1</a></li>";
									echo "<li><a href='?page_no=2'>2</a></li>";
									echo "<li><a>...</a></li>";
									for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {
										if ($counter == $page_no) {
											echo "<li class='active'><a>$counter</a></li>";
										} else {
											echo "<li><a href='?page_no=$counter'>$counter</a></li>";
										}
									}
									echo "<li><a>...</a></li>";
									echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
									echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
								} else {
									echo "<li><a href='?page_no=1'>1</a></li>";
									echo "<li><a href='?page_no=2'>2</a></li>";
									echo "<li><a>...</a></li>";

									for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
										if ($counter == $page_no) {
											echo "<li class='active'><a>$counter</a></li>";
										} else {
											echo "<li><a href='?page_no=$counter'>$counter</a></li>";
										}
									}
								}
							}
							?>

							<li <?php if ($page_no >= $total_no_of_pages) {
									echo "class='disabled'";
								} ?>>
								<a <?php if ($page_no < $total_no_of_pages) {
										echo "href='?page_no=$next_page'";
									} ?>>Next</a>
							</li>
							<?php if ($page_no < $total_no_of_pages) {
								echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
							} ?>
						</ul>
					</center>
				</div>
			</div>

	</div>

	<?php

	include "../footer.php";

	?>