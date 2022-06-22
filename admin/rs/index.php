<?php
    session_start();
    
    if(!isset($_SESSION["login_rs"])){
        header("Location: ../login.php");
        exit;
    }

    include '../function.php';



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="..\assets\css\rs.css">    

    <title>DUKCAPIL KENDARI</title>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-light bg-info mb-1 fixed-top" >
    <a class="navbar-brand" href="#">
            <img class="align-top" src="../assets/img/logo_kendari.png" width="35" height="35">
            <span class="navbar-brand">DUKCAPIL KENDARI</span>
    </a>
    <div class="icon ml-auto mr-1">
        <a class="text-white" href="../logout.php"><span class="mr-2">Logout</span><i class="fas fa-sign-out-alt"></i></a>
    </div>
</nav>
<div class="row no-gutters mt-4" style="height: 100%;">
    <div id="sidebar" class="col-2 bg-dark pt-4 fixed-left" style="height: 100%; overflow-x: hidden; position: fixed; z-index: 1;">
        <ul class="nav flex-column">
            <li id="beranda" class="nav-item mb-1 mt-3 rounded active">
                <a class="nav-link py-3 text-white rounded" href="index.php" >Dashboard</a>
            </li>
            <li id="lapor_lahir" class="nav-item mb-1 rounded">
                <a class="nav-link text-white rounded" href="?page=lapor_lahir">Validasi Surat Keterangan Lahir</a>
            </li>
            <li id="lapor_mati" class="nav-item mb-1 rounded">
                <a class="nav-link text-white rounded" href="?page=lapor_mati">Validasi Surat Keterangan Kematian</a>
            </li>
        </ul>
    </div>
    <div class="col-10 ml-auto mt-3 p-5 ">
        
        <?php
            include 'modul/content.php';
        ?>

    </div>

</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
                var page = window.location.href.split("&")[0].split("=")[1];
                if(page == "lapor_lahir" || page == "formulir_lapor_lahir"){
                    $("#lapor_lahir").addClass('active');
                    $("#beranda").removeClass('active');	
                    $("#lapor_mati").removeClass('active');
                }
                if(page == "lapor_mati" || page == "formulir_lapor_mati"){
                    $("#lapor_mati").addClass('active');
                    $("#lapor_lahir").removeClass('active');
                    $("#beranda").removeClass('active');	
                }
    </script>
</body>
  </html>