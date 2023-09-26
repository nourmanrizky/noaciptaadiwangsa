  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
          <a class="navbar-brand" href="<?= base_url('home'); ?>">
              <img src="<?= base_url('vendor/'); ?>images/logo.png" style="width: 40%;" alt="logo"> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                  <a class="nav-link" href="<?= base_url('home'); ?>">Home <span class="sr-only">(current)</span></a>


                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          About Us
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="<?= base_url('about'); ?>">Profile Perusahaan</a>

                          <a class="dropdown-item" href="<?= base_url('about/struktur'); ?>">Struktur Organisasi</a>

                      </div>
                  </li>

                  <a class="nav-link" href="<?= base_url('ourservices'); ?>">Services</a>
                  <a class="nav-link" href="<?= base_url('contact/'); ?>">Contact</a>
                  <a class="nav-link" href="https://noaciptaadiwangsa.com/webmail">Webmail</a>
                  <!-- <a class="nav-btna btn btn-primary tombol">Join Us</a> -->
              </div>
          </div>
      </div>
  </nav>

  <!-- End Navbar -->