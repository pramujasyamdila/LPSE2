<!DOCTYPE html>
<html lang="en">

<head>
   <title>LPSE Jasa Marga
   </title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
   <meta name="apple-mobile-web-app-capable" content="yes">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=1024"> -->

   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

   <!-- Optional theme -->
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

   <!-- Latest compiled and minified JavaScript -->
   <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
   <link rel="stylesheet" href="<?= base_url() ?>assets/public/boostrap/css/bootstrap.min.css" type="text/css" media="screen" />
   <link rel="stylesheet" href="<?= base_url() ?>assets/public/boostrap/css/bootstrap-theme.css" type="text/css" media="screen" />
   <link rel="stylesheet" href="<?= base_url() ?>assets/public/boostrap/kintek.css" type="text/css" media="screen">
</head>

<body>
   <!-- Pesan jika fitur javascript tidak diaktifkan -->
   <!-- <noscript>
      <div class="alert alert-danger text-center">
         <h5>Untuk tampilan aplikasi SPSE yang lebih baik, harap aktifkan fitur javascript pada browser anda</h5>
      </div>
   </noscript> -->

   <div id="header" class="container-fluid">
      <div id="headerContent">
         <img class="pull-left" alt="LPSE" src="<?= base_url() ?>/assets/img/jasamarga.png" width="200px" />
         <img class="pull-right" alt="LPSE" src="<?= base_url() ?>/assets/img/lpse.png" />
         <div id="systemMessage"></div>
      </div>
   </div>
   <div class='notifications top-right'></div>
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
               <li class="active"><a href="#">BRANDA</a></li>
               <li><a href="#">SAFTAR PAKET</a></li>
               <li class=""><a class="nav-link" href="#">REGULASI</a></li>
               <li class=""><a class="nav-link" href="#">KONTEN KHUSUS</a></li>
               <li class=""><a class="nav-link" href="#">DAFTAR HITAM</a></li>
               <li class=""><a class="nav-link" href="#">KONTAK KAMI</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
               <li class="nav-daftarpemyedia"><a href="#">Daftar Penyedia</a></li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <li>
                        <form class="form-inline" style="padding: 10px;">
                           <div class="form-group">
                              <div class="input-group">
                                 <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
                                 <input type="text" class="form-control" id="exampleInputAmount" placeholder="User Id">
                              </div>
                              <div class="input-group" style="margin-top: 10px;">
                                 <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
                                 <input type="password" class="form-control" id="exampleInputAmount" placeholder="User Id">
                              </div>
                           </div>
                           <a href="<?= base_url('ppk/home/home') ?>" style="width: 200px;margin-top:10px;" class="btn btn-success col-xs-12">Login</a>
                        </form>
                     </li>
                     <li><a href="#"></a></li>
                  </ul>
               </li>
            </ul>
         </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
   </nav>


   <div id="main" class="container">
      <div class="row">
         <div class="col-xs-12 col-sm-6 col-md-8">
            <div id="carousel" class="carousel slide" data-ride="carousel"><a class="left carousel-control" href="#carousel" data-slide="prev"><span class="icon-prev"></span> </a><a class="right carousel-control" href="#carousel" data-slide="next"><span class="icon-next"></span></a></div>
         </div>
         <div class="col-xs-6 col-md-4" style="padding-left:0;"><a id="contact" href="/eproc4/publik/kontakkami"><img src="<?= base_url() ?>/assets/img/jasamarga.png"" class=" img-responsive" style="margin-top: 30px;" /></a></div>
      </div>
      <div class="content">
         <div class="breadcrumb-news">
            <ul id="news-ticker">

            </ul>
         </div>
         <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-8">
               <div class="panel panel-primary">
                  <div class="panel-heading"><a href="/eproc4/lelang">Tender &raquo;</a></div>
                  <table class="table table-condensed">
                     <thead>
                        <tr>
                           <th width="5%">No</th>
                           <th>Nama Paket</th>
                           <th width="120" class=center>HPS</th>
                           <th class=center width="170">Akhir Pendaftaran</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td colspan="4" class="bs-callout-info active"><a href="#" onclick="$('.Pengadaan_Barang').toggle();">Pengadaan Barang </a><span class="badge pull-right">2</span></td>
                        </tr>
                        <tr class="Pengadaan_Barang" sytle="display:none">
                           <td>
                              <center>1</center>
                           </td>
                           <td><a href="/eproc4/lelang/3622194/pengumumanlelang" target="_blank">Pengadaan Konsumsi Pelatihan Berbasis Kompetensi</a>&nbsp;<span class="label label-danger">spse 4.3</span></td>
                           <td class="table-hps">Rp 2,7 M</td>
                           <td class="center">21 Februari 2021 23:59</td>
                        </tr>
                        <tr class="Pengadaan_Barang" sytle="display:none">
                           <td>
                              <center>2</center>
                           </td>
                           <td><a href="/eproc4/lelang/3621194/pengumumanlelang" target="_blank">Pengadaan Bahan Pelatihan Berbasis Kompetensi</a>&nbsp;<span class="label label-danger">spse 4.3</span></td>
                           <td class="table-hps">Rp 2,8 M</td>
                           <td class="center">21 Februari 2021 23:59</td>
                        </tr>
                        <tr>
                           <td colspan="4" class="bs-callout-info active"><a href="#" onclick="$('.Jasa_Konsultansi_Badan_Usaha').toggle();">Jasa Konsultansi Badan Usaha </a><span class="badge pull-right">1</span></td>
                        </tr>
                        <tr class="Jasa_Konsultansi_Badan_Usaha" sytle="display:none">
                           <td>
                              <center>1</center>
                           </td>
                           <td><a href="/eproc4/lelang/3617194/pengumumanlelang" target="_blank">Pengembangan Fitur Layanan SISNAKER</a>&nbsp;<span class="label label-danger">spse 4.3</span></td>
                           <td class="table-hps">Rp 805 Jt</td>
                           <td class="center">18 Februari 2021 23:59</td>
                        </tr>
                        <tr>
                           <td colspan="4" class="bs-callout-info active"><a href="#" onclick="$('.Pekerjaan_Konstruksi').toggle();">Pekerjaan Konstruksi </a><span class="badge pull-right">2</span></td>
                        </tr>
                        <tr class="Pekerjaan_Konstruksi" sytle="display:none">
                           <td>
                              <center>1</center>
                           </td>
                           <td><a href="/eproc4/lelang/3577194/pengumumanlelang" target="_blank">Pembangunan Workshop Teknik Las dan Workshop Otomotive Mobil</a>&nbsp;<span class="label label-danger">spse 4.3</span></td>
                           <td class="table-hps">Rp 5 M</td>
                           <td class="center">17 Februari 2021 23:59</td>
                        </tr>
                        <tr class="Pekerjaan_Konstruksi" sytle="display:none">
                           <td>
                              <center>2</center>
                           </td>
                           <td><a href="/eproc4/lelang/3575194/pengumumanlelang" target="_blank">Pembangunan Workshop Bisman dan Garment Apparel</a>&nbsp;<span class="label label-danger">spse 4.3</span></td>
                           <td class="table-hps">Rp 5,2 M</td>
                           <td class="center">17 Februari 2021 23:59</td>
                        </tr>
                        <tr>
                           <td colspan="4" class="bs-callout-info active"><a href="#" onclick="$('.Jasa_Lainnya').toggle();">Jasa Lainnya </a><span class="badge pull-right">1</span></td>
                        </tr>
                        <tr class="Jasa_Lainnya" sytle="display:none">
                           <td>
                              <center>1</center>
                           </td>
                           <td><a href="/eproc4/lelang/3615194/pengumumanlelang" target="_blank">Pengadaan Konsumsi Peserta Pelatihan Berbasis Kompetensi (PBK) Non Boarding Tahap I dan II Pada Balai Besar Pengembangan Latihan Kerja Bekas,</a>&nbsp;<span class="label label-danger">spse 4.3</span></td>
                           <td class="table-hps">Rp 474 Jt</td>
                           <td class="center">17 Februari 2021 17:00</td>
                        </tr>
                        <tr>
                           <td colspan="4" class="bs-callout-info active"><a href="#" onclick="$('.Jasa_Konsultansi_Perorangan').toggle();">Jasa Konsultansi Perorangan </a><span class="badge pull-right">0</span></td>
                        </tr>
                     </tbody>
                  </table>
               </div>

               <div class="panel panel-danger" style="border-color:  #FF3333 !important;">
                  <div class="panel-heading"><a href="/eproc4/nontender">Non Tender &raquo;</a></div>
                  <table class="table table-condensed pl">
                     <thead>
                        <tr>
                           <th width="5%">No</th>
                           <th>Nama Paket</th>
                           <th class=center>HPS</th>
                           <th class=center width="170">Akhir Pendaftaran</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td colspan="4" class="bs-callout-danger"><a href="#" onclick="$('.Pengadaan_Barang_pl').toggle();">Pengadaan Barang </a><span class="badge pull-right">0</span></td>
                        </tr>
                        <tr>
                           <td colspan="4" class="bs-callout-danger"><a href="#" onclick="$('.Jasa_Konsultansi_Badan_Usaha_pl').toggle();">Jasa Konsultansi Badan Usaha </a><span class="badge pull-right">0</span></td>
                        </tr>
                        <tr>
                           <td colspan="4" class="bs-callout-danger"><a href="#" onclick="$('.Pekerjaan_Konstruksi_pl').toggle();">Pekerjaan Konstruksi </a><span class="badge pull-right">0</span></td>
                        </tr>
                        <tr>
                           <td colspan="4" class="bs-callout-danger"><a href="#" onclick="$('.Jasa_Lainnya_pl').toggle();">Jasa Lainnya </a><span class="badge pull-right">0</span></td>
                        </tr>
                        <tr>
                           <td colspan="4" class="bs-callout-danger"><a href="#" onclick="$('.Jasa_Konsultansi_Perorangan_pl').toggle();">Jasa Konsultansi Perorangan </a><span class="badge pull-right">0</span></td>
                        </tr>
                     </tbody>
                  </table>
               </div>

            </div>
            <div class="col-xs-12 col-md-4">
               <div class="list-group" style="width:100%; word-wrap:break-word; display:inline-block;">
                  <a href="/eproc4/pengumuman" class="list-group-item active">Pengumuman dan Berita &raquo;</a>

                  <a href="/eproc4/pengumuman/1304194" class="list-group-item" target="_blank">24 Agustus 2020 12:06
                     <br />pengumuman tender pengadaan renovasi Ruang Panel Listrik Utama Pada BBPLK bekasi</a>

                  <a href="/eproc4/pengumuman/1303194" class="list-group-item" target="_blank">19 Agustus 2020 22:48
                     <br />Pengumuman Tender Renovasi Ex Ruang Perpustakaan Pada BBPLK Bekasi</a>

                  <a href="/eproc4/pengumuman/1302194" class="list-group-item" target="_blank">19 Agustus 2020 14:40
                     <br />Pengumuman Tender Renovasi Rumah Dinas Kepala BBPLK Bekasi</a>

                  <a href="/eproc4/pengumuman/1301194" class="list-group-item" target="_blank">19 Agustus 2020 14:31
                     <br />Pengumuman Tender Renovasi Gedung Kantor Tata Usahan BBPLK Bekasi</a>

                  <a href="/eproc4/pengumuman/1300194" class="list-group-item" target="_blank">18 Agustus 2020 22:00
                     <br />Pengumuman Tender Ulang Pengadaan Pekerjaan Renovasi Saluran Drainase Pada BBPLK Bekasi</a>

                  <a href="/eproc4/pengumuman/1299194" class="list-group-item" target="_blank">06 Agustus 2020 22:52
                     <br />Undangan Pembuktian Dokumen Kualifikasi</a>

                  <a href="/eproc4/pengumuman/1298194" class="list-group-item" target="_blank">24 Juni 2020 21:21
                     <br />Pengumuman Tender Pengadaan Renovasi Saluran Drainase pada BBPLK Bekasi</a>

                  <a href="/eproc4/pengumuman/1297194" class="list-group-item" target="_blank">29 Mei 2020 21:10
                     <br />pengumuman tender pengadaan meubelair perkantoran pada balai besar pengembangan latihan kerja bekasi</a>

               </div>
               <div class="list-group">
                  <a class="list-group-item active">Link Penting</a>
                  <a href="/eproc4/lelang_umum" class="list-group-item">Tender Non-Eproc</a>
               </div>
            </div>
         </div>
      </div>

   </div>
   <form id="formLogout" action="/eproc4/logout" method="post"></form>

   <div id="footer">
      <div class="container">
         <ul class="list-inline">
            <li><a href="/eproc4/publik/tentangkami">Tentang Kami</a></li>
            <li><a href="http://inaproc.id/pakta-integritas" target="_blank">Pakta Integritas</a></li>
            <li><a href="http://inaproc.id/syarat-ketentuan" target="_blank">Persyaratan dan Ketentuan</a></li>
         </ul>
         <div id="footerInfo">
            <div id="infoLeft" class="pull-left">
               <p>Total Pengunjung: 2.321.268</p><span id="realtime"></span> <span>WIB</span>
            </div>
            <div id="infoRight">
               <p>&copy; 2006-2021 Lembaga Kebijakan Pengadaan Barang/Jasa Pemerintah (<a href="http://www.lkpp.go.id" target="_blank">LKPP</a>)</p>
               <p>SPSE v4.3u20191009</p>
            </div>
         </div>
      </div>
   </div>
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
   <!-- <script type="text/javascript" src="/eproc4/public/javascripts/jquery-1.12.4.min.js"></script> -->
   <script type="text/javascript" src="<?= base_url('assets/') ?>public/boostrap/js/jquery.min.js"></script>
   <script type="text/javascript" src="<?= base_url('assets/') ?>public/boostrap/js/bootstrap.min.js"></script>

   <script type="text/javascript">
      $(document).on('click', 'ul li', function() {
         $(this).addClass('active').siblings().removeClass('active')
      })
   </script>
   <!-- <script type="text/javascript" src="<?= base_url('assets/') ?>public/boostrap/js/npm.js"></script> -->
   <!-- <script type="text/javascript" src="/eproc4/public/bootstrap/js/bootstrap-dialog.min.js"></script>
   <script type="text/javascript" src="/eproc4/public/bootstrap-select/bootstrap-select.min.js"></script>
   <script type="text/javascript" src="/eproc4/public/javascripts/jquery.jclock.min.js"></script>
   <script type="text/javascript" src="/eproc4/public/javascripts/jquery.cookies.min.js"></script>
   <script type="text/javascript" src="/eproc4/public/javascripts/common.js"></script>
   <script type="text/javascript" src="/eproc4/public/javascripts/strength.js" charset="utf-8"></script>
   <script type="text/javascript" src="/eproc4/public/javascripts/tus/tus.js" charset="utf-8"></script>
   <script type="text/javascript" src="/eproc4/public/javascripts/resumeable-upload.js" charset="utf-8"></script>
   <script type="text/javascript" src="/eproc4/public/javascripts/jquery.maskedinput.min.js" charset="utf-8"></script>
   <script type="text/javascript" src="/eproc4/public/javascripts/jquery.webticker.min.js" charset="utf-8"></script> -->
   <!--[if lt IE 9]>
        <script type="text/javascript" src="/eproc4/public/bootstrap/js/html5shiv.min.js"></script>
        <script type="text/javascript" src="/eproc4/public/bootstrap/js/respond.min.js"></script>
        <![endif]-->

   <!-- <script type="text/javascript">
      $(document).ready(function() {
         $.ajax({
            url: "/eproc4/json/getservertime",
            cache: false,
            success: function(data) {
               $('#realtime').jclock({
                  format: '%d %B %Y %H:%M',
                  seedTime: parseInt(data),
                  utc: true,
                  utc_offset: 7
               });
            }
         });
         $("#login").on("click", function() {
            $("#loginForm").load("/eproc4/publik/formlogin");
         });
         $('#news-ticker').webTicker({
            height: '15px'
         });


      });
   </script> -->
</body>

</html>