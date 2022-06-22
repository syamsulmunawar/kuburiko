<?php



    if(isset($_GET["page"])){
        $halaman = $_GET["page"];
        if($halaman == 'lapor_lahir'){
            include 'modul/rs_lapor_lahir.php';
        }
        else if($halaman == 'lapor_mati'){
            include 'modul/rs_lapor_mati.php';
        }else if($halaman == 'formulir_lapor_lahir'){
            include 'rs_formulir_lahir.php';
        }else if($halaman == 'formulir_lapor_mati'){
            include 'rs_formulir_mati.php';
        }
    }else{
        include 'modul/rs_dashboard.php';
    }






?>