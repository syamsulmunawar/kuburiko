<?php

    include '../function.php';
    include 'tgl_huruf.php';



    $no_reg = $_GET["no_reg"];
    $akta   = query("SELECT * FROM akta_kelahiran WHERE no_registrasi = '$no_reg'")[0];
    
    $nik            = $akta["nik"];
    $kode           = $akta["kode_dokumen"];
    $no_akta        = $akta["nomor_akta"];
    $no_stbld       = $akta["nomor_stbld"];
    $tempat_lahir   = strtoupper($akta["tempat_lahir"]);
    $tanggal_lahir  = $akta["tanggal_lahir"];
    
    $tanggal    = strtoupper(penyebut(substr($tanggal_lahir, 8, 2)));
    $bulan      = strtoupper(getBulan(substr($tanggal_lahir, 5, 2)));
    $tahun      = strtoupper(penyebut(substr($tanggal_lahir, 0, 4)));
    
    


    $nama                   = strtoupper($akta["nama_lengkap"]);
    $anak_ke                = strtoupper(penyebut($akta["anak_ke"]));
    $jenis_kelamin          = strtoupper($akta["jenis_kelamin"]);
    $nama_ayah              = strtoupper($akta["nama_ayah"]);
    $nama_ibu               = strtoupper($akta["nama_ibu"]);
    $tanggal_bulan_terbit   = "SEMBILAN BELAS JUNI";
    $tahun_terbit           = "DUA RIBU DUA PULUH";
    $dikeluarkan_di         = "BULUKUMBA";
    $instansi               = "BULUKUMBA";
    $nama_petugas           = "ANDI CAWA MIRI, SH";
    $pangkat                = "Pembina Utama Muda";
    $nip                    = "19581129 198711 1 001";

    require_once '../vendor/autoload.php';
    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);


    $page = "
    
        
<!DOCTYPE html>
<html>
<head>
    
    <title>Akta Kelahiran</title>
    <link rel='stylesheet' href='akta_lahir.css'>
    
</head>
<body>
    
    
        <br>
            <div class='nik'>
                $nik      
            </div>
            <div class='kode'>
                $kode
            </div>
        
        <div class='negara'>
            INDONESIA
        </div>
        <div class='no_akta'>
            $no_akta
        </div>
        <div class='no_stbld'>
            $no_stbld
        </div>
        <div class='tempat_lahir'>
            $tempat_lahir        
        </div>
        <div class='tanggal_lahir'>
            $tanggal
        </div>
        <div class='bulan'>
            $bulan
        </div>
        <div class='tahun'>
            $tahun
        </div>
        <div class='nama'>
            <b>$nama</b>
        </div>
        <div class='anak_ke'>
            $anak_ke
        </div>
        <div class='jenis_kelamin'>
            ANAK $jenis_kelamin DARI SUAMI - ISTRI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
        </div>
        <div class='nama_ayah_ibu'>
            $nama_ayah DAN $nama_ibu
        </div>
        <div class='dikeluarkan_di'>
            DI $dikeluarkan_di
        </div>
        <div class='tanggal_bulan_terbit'>
            $tanggal_bulan_terbit
        </div>
        <div class='tahun_terbit'>
            TAHUN $tahun_terbit
        </div>
        <div class='capil'>
            DINAS KEPENDUDUKAN DAN
        </div>
        <div class='kota_capil'>
            CATATAN SIPIL $instansi
        </div>
        <div class='nama_petugas'>
            <span><u><b>$nama_petugas</b></u></span>
        </div>
        <div class='pangkat'>
            Pangkat : $pangkat
        </div>
        <div class='nip'>
            NIP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $nip
        </div>



    
</body>
</html>

    
    
    ";


    $mpdf->WriteHTML($page);

    $mpdf->Output();

?>