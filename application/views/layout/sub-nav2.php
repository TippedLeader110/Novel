<!--  CATATAN:
      sub-nav.php ini digunakan untuk subnav pada page main/home untuk menampilkan tombol LOGIN atau SIGN UP
-->

<nav class="navbar navbar-expand-lg navbar-dark " style="background: #fff5e6;">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div>
    <?php if ($this->session->user!=''): ?>
    <a href="<?php echo base_url() ?>user/profile" class="btn" style="background-color: white; border-width: 2px; border-color: orange; color: orange; font-size: 18px;" title="Click Here to See Your Profile">Welcome ,<b> <?php echo $this->session->user ?></b> !</a>    
      <a href="<?php echo base_url() ?>user/logout" class="btn" style="border-width: 2px; border-color: orange; color: orange; font-size: 18px; margin-left: 720px;" title="Sign Out">
        <b>Sign Out</b>
      </a>    
    <?php endif ?>
    <?php if ($this->session->user==''): ?>
    <a href="<?php echo base_url() ?>user/login" class="btn" style="background-color: white; border-width: 2px; border-color: orange; color: orange; font-size: 18px;"><b>Login</b></a>
    <a href="<?php echo base_url() ?>user/daftar" class="btn" style="background-color: orange; border-width: 2px; border-color: orange; color: white; font-size: 18px;"><b>Sign Up</b></a>
    <?php endif ?>
  </div>
</nav>
<!--  CATATAN:
      sub-nav2.php ini digunakan untuk subnav pada page dengan layout User untuk menampilkan tombol profil user setelah login
-->
<!-- <nav class="navbar navbar-expand-lg navbar-dark " style="background: #fff5e6;">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 18px;">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: orange;">
          User
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

    </ul>
  </div>
</nav> -->