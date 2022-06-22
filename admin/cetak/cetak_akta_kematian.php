<?php

    include '../function.php';
    include 'tgl_huruf.php';



    $no_reg = $_GET["noreg"];
    $akta   = query("SELECT * FROM akta_kematian WHERE no_registrasi = '$no_reg'")[0];

    
    $nik                = $akta["nik"];
    $kode               = $akta["kode_dokumen"];
    $no_akta            = $akta["nomor_akta"];
    $no_stbld           = $akta["nomor_stbld"];
    $tempat_lahir       = strtoupper($akta["tempat_lahir"]);
    $tanggal_lahir      = $akta["tanggal_lahir"];
    $tanggal_meninggal  = $akta["tanggal_meninggal"];
    
    $tgl_meninggal      = strtoupper(penyebut(substr($tanggal_meninggal, 8, 2)));
    $bln_meninggal      = strtoupper(getBulan(substr($tanggal_meninggal, 5, 2)));
    $thn_meninggal      = strtoupper(penyebut(substr($tanggal_meninggal, 0, 4)));
    
    $tgl_lahir      = strtoupper(penyebut(substr($tanggal_lahir, 8, 2)));
    $bln_lahir      = strtoupper(getBulan(substr($tanggal_lahir, 5, 2)));
    $thn_lahir      = strtoupper(penyebut(substr($tanggal_lahir, 0, 4)));
    
    


    $nama                   = strtoupper($akta["nama"]);
    $meniggal_di            = strtoupper($akta["tempat_meninggal"]);
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
    <link rel='stylesheet' href='akta_mati.css'>
    
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
        <div class='tempat_meninggal'>
            $meniggal_di
                 
        </div>
        <div class='tanggal_meninggal'>
            $tgl_meninggal
        </div>
        <div class='bulan_meninggal'>
            $bln_meninggal
        </div>
        <div class='tahun_meninggal'>
            $thn_meninggal
        </div>
        <div class='nama'>
            <b>$nama</b>
        </div>
        <div class='tempat_lahir'>
            $tempat_lahir
        </div>
        <div class='tanggal_lahir'>
            $tgl_lahir
        </div>
        <div class='bulan_lahir'>
            $bln_lahir
        </div>
        <div class='tahun_lahir'>
            $thn_lahir
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