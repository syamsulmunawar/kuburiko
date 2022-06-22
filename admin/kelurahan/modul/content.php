<?php



    if(isset($_GET["page"])){
        $halaman = $_GET["page"];
        if($halaman == 'lapor_lahir'){
            include 'modul/kel_lapor_lahir.php';
        }
        else if($halaman == 'lapor_mati'){
            include 'modul/kel_lapor_mati.php';
        }
        else if($halaman == 'formulir_lapor_mati'){
            include 'kel_formulir_mati.php';
        }
        else if($halaman == 'formulir_lapor_lahir'){
            include 'kel_formulir_lahir.php';
        }
    }else{
        include 'modul/kel_dashboard.php';
    }






?>