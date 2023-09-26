<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Aplikasi Penjualan</title>

  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() . 'assets/css/all.min.css' ?>" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() . 'assets/css/sb-admin.css' ?>" rel="stylesheet">

</head>

<body class="bg-dark">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="container">

    <div class="page-content container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="login-wrapper">
            <div class="box">
              <div class="content-wrap">
         
                <hr />
                <form action="" method="post" style="max-width: 600px;">
			<div>
				<label for="name">Email/Username*</label>
				<input type="text" name="username" class="<?= form_error('username') ? 'invalid' : '' ?>"
					placeholder="Your username or email" value="<?= set_value('username') ?>" required />
				<div class="invalid-feedback">
					<?= form_error('username') ?>
				</div>
			</div>
			<div>
				<label for="password">Password*</label>
				<input type="password" name="password" class="<?= form_error('password') ? 'invalid' : '' ?>"
					placeholder="Enter your password" value="<?= set_value('password') ?>" required />
				<div class="invalid-feedback">
					<?= form_error('password') ?>
				</div>
			</div>

			<div>
				<input type="submit" class="button button-primary" value="Login">
			</div>
		</form>
              </div>
            </div>
          </div>
         

          <!-- Bootstrap core JavaScript-->
          <script src="<?php echo base_url() . 'assets/jquerys/jquery.min.js' ?>"></script>
          <script src="<?php echo base_url() . 'assets/js/bootstrap.bundle.min.js' ?>"></script>
          <!-- Core plugin JavaScript-->
          <script src="<?php echo base_url() . 'assets/jquery-easing/jquery.easing.min.js' ?>"></script>

</body>

</html>