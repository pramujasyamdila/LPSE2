<div id="header" class="container-fluid">
   <div id="headerContent">
      <img class="pull-left" alt="LPSE" src="<?= base_url() ?>//assets/img/jasamarga.png" width="200px" />
      <img class="pull-right" alt="LPSE" src="<?= base_url() ?>//assets/img/lpse.png" />
      <div id="systemMessage"></div>
   </div>
</div>
<nav class="navbar navbar-custom">
   <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed  glyphicon glyphicon-menu-hamburger " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="#"></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
            <li class="active"><a href="<?= base_url('ppk/home/home') ?>">BRANDA</a></li>
            <li><a href="<?= base_url('ppk/daftar_paket/daftar_paket') ?>">DAFTAR PAKET</a></li>
            <li class=""><a class="nav-link" href="#">LOG AKSES</a></li>
            <li class=""><a class="nav-link" href="#">GANTI PASSWORD</a></li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
               <a href="<?= base_url('lpse/lpse/index') ?>" class="dropdown-toggle" style="width: 100px;text-align:center;">Logout</a>
            </li>
         </ul>
      </div><!-- /.navbar-collapse -->
   </div><!-- /.container-fluid -->
</nav>
<!-- nav mini -->