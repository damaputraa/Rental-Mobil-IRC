<?php
session_start();
require_once "../config.php";
if (!isset($_SESSION["admin"])) {
  header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mobil</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/jquery.min.js"></script>
    <!-- Optional, Add fancyBox for media, buttons, thumbs -->
    <link rel="stylesheet" href="../assets/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../assets/fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../assets/fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
    <script type="text/javascript" src="../assets/fancybox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="../assets/fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="../assets/fancybox/source/helpers/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="../assets/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script><!-- Optional, Add mousewheel effect -->
    <script type="text/javascript" src="../assets/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <style>
        body {
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">ADMIN | RENTAL MOBIL CALYSTA</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="?page=home">Beranda <span class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Input Data <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="?page=admin">Admin</a></li>
                            <!-- <li><a href="?page=jenis">Jenis</a></li> -->
                            <li><a href="?page=mobil">Mobil</a></li>
                            <li><a href="?page=supir">Supir</a></li>
                            <li><a href="?page=pelanggan">Pelanggan</a></li>
                          </ul>
                        </li>
                        <!-- <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laporan <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="?page=lap_konfirmasi">Konfirmasi</a></li>
                            <li><a href="?page=lap_permobil">Penyewaan Permobil</a></li>
                            <li><a href="?page=lap_seringdenda">Sering Denda</a></li>
                            <li><a href="?page=lap_perperiode">Penyewaan Perperiode</a></li>
                            <li><a href="?page=lap_terlaris">Terlaris</a></li>
                            <li><a href="?page=lap_denda">Denda</a></li>
                          </ul>
                        </li> -->
                        <li><a href="logout.php">Logout</a></li>
                        <li><a href="#">|</a></li>
                        <li><a href="#" style="font-weight: bold; color: red;"><?= ucfirst($_SESSION["admin"]["username"]) ?></a></li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
                <div class="row">
                  <div class="col-md-12">

                  <div class="jadwal">
                    <p class="tanggal"><?php echo date('d F Y');?></p>
                    
                    <body onLoad="waktu()">
                        <div class="text-center" id="jam-digital">
                          <div id="hours"><p id="jam"></p></div>
                          <div id="titik-dua"><p id="titik">:</p></div>
                          <div id="minute"><p id="menit"></p></div>
                          <div id="titik-dua"><p id="titik">:</p></div>
                          <div id="second"><p id="detik"></p></div>
                        </div>
                      </body>
                  </div>
                    
                    <h4 class="text-center">Selamat datang di Web Aplikasi Admin, Silahkan pilih menu di atas untuk proses input</h4>
                    <div style="text-align: center;" class="text-center">
                    <!doctype html>
                <html>
                <head>
                <meta charset="utf-8">
                <title>Jam Digital</title>

                </head>

                <style>
                    .tanggal {font-size: 20px;}
                    #jam-digital { align-items: center; overflow: hidden;  width:100%}
                    #hours{float: left; width:50px; height:50px; border-radius:100%; color:#fff; background-color:#6B9AB8; margin:0px 2px}
                    #minute{float: left; width:50px; height:50px; border-radius:100%; color:#fff; margin:0 2px; background-color:#A5B1CB}
                    #second{float: left; color:#fff; width:50px; height:50px; border-radius:100%; background-color:#FF618A; margin:0 2px}
                    #jam-digital p{ font-size:32px; text-align:center; margin-top:4px}
                    #titik-dua{float: left;   margin:0px 2px}
                </style>

                  </html>
              
                </div>
              <?php include adminPage($_ADMINPAGE); ?>
            </div>
        </div>
    </div>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
                    window.setTimeout("waktu()",1000);
                    function waktu() {
                        var tanggal = new Date();
                        setTimeout("waktu()",1000);
                        document.getElementById("jam").innerHTML = tanggal.getHours();
                        document.getElementById("menit").innerHTML = tanggal.getMinutes();
                        document.getElementById("detik").innerHTML = tanggal.getSeconds();
                    }
                </script>
</body>
</html>