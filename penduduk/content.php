<?php





if(isset($_GET["page"])){
    $halaman = $_GET["page"];
    if($halaman == 'lapor_lahir'){
        include 'penduduk/lapor_lahir.php';
    }
    else if($halaman == 'lapor_mati'){
        include 'penduduk/lapor_mati.php';
    }
    else if($halaman == 'selesai_lapor'){
        include 'penduduk/selesai_lapor.php';
    }
}else{
    include 'penduduk/dashboard.php';
}







?>

