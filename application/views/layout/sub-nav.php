<!--  CATATAN:
      sub-nav.php ini digunakan untuk subnav pada page main/home untuk menampilkan tombol LOGIN atau SIGN UP
-->

<nav class="navbar navbar-expand-lg navbar-dark " style="background: #fff5e6;">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div>
    <a href="<?php echo base_url() ?>user/login" class="btn" style="background-color: white; border-width: 2px; border-color: orange; color: orange; font-size: 18px;"><b>Login</b></a>
    <a href="<?php echo base_url() ?>user/daftar" class="btn" style="background-color: orange; border-width: 2px; border-color: orange; color: white; font-size: 18px;"><b>Sign Up</b></a>
  </div>
</nav>