<?php

    if(isset($_GET['page'])){
        
        $halaman = $_GET['page'];
        if($halaman == 'daftar_kelahiran'){
            include 'modul/daftar_kelahiran.php';
        }
        elseif($halaman == 'daftar_kematian'){
            include 'modul/daftar_kematian.php';
        }
        elseif($halaman == 'kelahiran_approved'){
            include 'modul/kelahiran_approved.php';
        }
        elseif($halaman == 'kematian_approved'){
            include 'modul/kematian_approved.php';
        }
        elseif($halaman == 'kartu_keluarga'){
            include 'modul/data_kk.php';
        }
        elseif($halaman == 'formulir_kelahiran'){
            include 'modul/formulir_kelahiran.php';
        }
        elseif($halaman == 'formulir_kematian'){
            include 'modul/formulir_kematian.php';
        }
    }
    else{
        include 'modul/dashboard.php';
    }

?>