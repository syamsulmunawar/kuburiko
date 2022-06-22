
<?php

include 'function.php';

$no_kk = $_GET["no_kk"];

$data_kk = read_data_penduduk("SELECT * FROM kartu_keluarga WHERE nomor_kk= '$no_kk' ")[0];

$kepala_keluarga = read_data_penduduk("SELECT * FROM data_penduduk WHERE no_kk= '$no_kk' AND status_dalam_keluarga = 'Kepala Keluarga'")[0];
$anggota = read_data_penduduk("SELECT * FROM data_penduduk WHERE no_kk= '$no_kk'");

function tanggal_indo($tanggal){

    $bulan = array (1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );
$split = explode('-', $tanggal);
return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];


}
    


?>


<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/admin.css">
<style>
    .container{
        font-family: 'Times New Roman', Times, serif;
        font-size: 12pt;
        padding : 4cm 4cm 3cm 3cm;
    }
    .identitas{
        border: 2px solid black;
    }
</style>


<title>DUKCAPIL KENDARI</title>
</head>
<body>
  <div class="container col-12 ml-auto mr-auto">
     <h3 class=""><b>KARTU KELUARGA</b></h3>
     <h5><b>No. <?= $no_kk; ?></b></h5>
    <table>
        <tr>
            <td>Nama Kepala Keluarga</td>
            <td>:</td>
            <td><?= $kepala_keluarga["nama"] ?></td>
            <td colspan="10"></td>
            <td>Desa/Kelurahan</td>
            <td>:</td>
            <td><?= $data_kk["desa_kelurahan"] ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $data_kk["desa_kelurahan"] ?></td>
            <td colspan="10"></td>
            <td>Kecamatan</td>
            <td>:</td>
            <td><?= $data_kk["kecamatan"] ?></td>
        </tr>
        <tr>
            <td>RT/RW</td>
            <td>:</td>
            <td><?= $data_kk["rt"] ?>/<?= $data_kk["rw"] ?></td>
            <td colspan="10"></td>
            <td>Kabupaten</td>
            <td>:</td>
            <td><?= $data_kk["kabupaten"] ?></td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td>:</td>
            <td><?= $data_kk["kode_pos"] ?></td>
            <td colspan="10"></td>
            <td>Provinsi</td>
            <td>:</td>
            <td><?= $data_kk["provinsi"] ?></td>
        </tr>
    </table>

  <table border="1" >
         <tr>
             <th>No</th>
             <th>Nama Lengkap</th>
             <th>NIK</th>
             <th>Jenis Kelamin</th>
             <th>Tempat Lahir</th>
             <th>Tanggal Lahir</th>
             <th>Agama</th>
             <th>Pendidikan</th>
             <th>Jenis Pekerjaan</th>
         </tr>
         <tr>
             <td></td>
             <td>(1)</td>
             <td>(2)</td>
             <td>(3)</td>
             <td>(4)</td>
             <td>(5)</td>
             <td>(6)</td>
             <td>(7)</td>
             <td>(8)</td>
         </tr>
         <?php $i= 10-count($anggota); ?>
         <?php $no=1; ?>
            <?php for($a= 0; $a<count($anggota); $a++): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $anggota[$a]["nama"] ?></td>
                    <td><?= $anggota[$a]["nik"] ?></td>
                    <td><?= $anggota[$a]["jenis_kelamin"] ?></td>
                    <td><?= $anggota[$a]["tempat_lahir"] ?></td>
                    <td><?= $anggota[$a]["tanggal_lahir"] ?></td>
                    <td><?= $anggota[$a]["agama"] ?></td>
                    <td><?= $anggota[$a]["pendidikan"] ?></td>
                    <td><?= $anggota[$a]["pekerjaan"] ?></td>
                </tr>
            <?php endfor; ?>
            <?php for($b=1;$b<=$i;$b++): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            <?php endfor; ?>
     </table>


     <table class="mt-3" border="1" >
         <tr>
             <th rowspan="2">No</th>
             <th rowspan="2">Status Perkawinan</th>
             <th rowspan="2">Status Hubungan Dalam Keluarga</th>
             <th rowspan="2">Kewarganegaraan</th>
             <th colspan="2">Dokumen Imigrasi</th>
             <th colspan="2">Nama Orang Tua</th>
         </tr>
         <tr>
             <th>No. KITAP</th>
             <th>No. Paspor</th>
             <th>Ayah</th>
             <th>Ibu</th>
         </tr>
         <tr>
             <td></td>
             <td>(9)</td>
             <td>(10)</td>
             <td>(11)</td>
             <td>(12)</td>
             <td>(13)</td>
             <td>(14)</td>
             <td>(15)</td>
         </tr>
         <?php $nomor = 1; ?>
         <?php for($a= 0; $a<count($anggota); $a++): ?>
                <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?= $anggota[$a]["status_perkawinan"] ?></td>
                    <td><?= $anggota[$a]["status_dalam_keluarga"] ?></td>
                    <td>WNI</td>
                    <td>-</td>
                    <td>-</td>
                    <td><?= $anggota[$a]["ayah"] ?></td>
                    <td><?= $anggota[$a]["ibu"] ?></td>
                </tr>
            <?php endfor; ?>
            <?php for($b=1;$b<=$i;$b++): ?>
                <tr>
                    <td><?= $nomor++; ?></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            <?php endfor; ?>
     </table>
            
</div>



  <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="jquery/jquery.slim.min.js"></script> -->
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>