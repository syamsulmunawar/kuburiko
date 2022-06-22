
<?php

include '../function.php';

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
    
require_once '../vendor/autoload.php';
    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);

    $kepalaKeluarga = $kepala_keluarga['nama'];
    $desaKelurahan  = $data_kk['desa_kelurahan'];
    $kecamatan      = $data_kk['kecamatan'];
    $rt             = $data_kk['rt'];
    $rw             = $data_kk['rw'];
    $kabupaten      = $data_kk['kabupaten'];
    $kodePos        = $data_kk['kode_pos'];
    $provinsi       = $data_kk['provinsi'];


    $page = '

    <!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="kartu_keluarga.css">

<title>DUKCAPIL KENDARI</title>
</head>
<body>
  <div class="no_kk">
     <b>' . strtoupper($no_kk) . '</b>
  </div>
  <div  class="ket">
    <table cellpadding="0">
        <tr>
            <td style="width: 14.5%;">Nama Kepala Keluarga</td>
            <td style="width: 1.5%;">:</td>
            <td><b>' . strtoupper($kepalaKeluarga) . '</b></td>
            <td colspan="10"></td>
            <td style="width: 11%;">Desa/Kelurahan</td>
            <td style="width: 1.5%;">:</td>
            <td>' . strtoupper($desaKelurahan) . '</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>' . strtoupper($desaKelurahan) . '</td>
            <td colspan="10"></td>
            <td>Kecamatan</td>
            <td>:</td>
            <td>' . strtoupper($kecamatan) . '</td>
        </tr>
        <tr>
            <td>RT/RW</td>
            <td>:</td>
            <td>' . $rt . '/' . $rw . '</td>
            <td colspan="10"></td>
            <td>Kabupaten</td>
            <td>:</td>
            <td>' . strtoupper($kabupaten) . '</td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td>:</td>
            <td>' . $kodePos . '</td>
            <td colspan="10"></td>
            <td>Provinsi</td>
            <td>:</td>
            <td>' . strtoupper($provinsi) . '</td>
        </tr>
    </table>
  </div>
  <div class="tb_1">
  
    <table cellspacing="0" border="1" style="margin-bottom: 5px;" >
            <tr>
                <th style="width: 3%;">No</th>
                <th style="width: 22%;">Nama Lengkap</th>
                <th style="width: 11%;">NIK</th>
                <th style="width: 8%;">Jenis Kelamin</th>
                <th style="width: 15%;">Tempat Lahir</th>
                <th style="width: 7%;">Tanggal Lahir</th>
                <th style="width: 5%;">Agama</th>
                <th style="width: 15%;">Pendidikan</th>
                <th style="width: 14%;">Jenis Pekerjaan</th>
            </tr>
            <tr>
                <th></th>
                <th><b>(1)<b></th>
                <th><b>(2)<b></th>
                <th><b>(3)<b></th>
                <th><b>(4)<b></th>
                <th><b>(5)<b></th>
                <th><b>(6)<b></th>
                <th><b>(7)<b></th>
                <th><b>(8)<b></th>
            </tr>';
            
            $i= 10-count($anggota);
            $no=1;

            for($a= 0; $a<count($anggota); $a++){
                $page .= '
                    <tr>
                        <th>' . $no++ . ' </th>
                        <td>' . strtoupper($anggota[$a]["nama"]) . ' </td>
                        <td>' . strtoupper($anggota[$a]["nik"]) . '</td>
                        <td>' . strtoupper($anggota[$a]["jenis_kelamin"]) . '</td>
                        <td>' . strtoupper($anggota[$a]["tempat_lahir"]) . '</td>
                        <td>' . date("d-m-yy", strtotime($anggota[$a]["tanggal_lahir"])) . '</td>
                        <td>' . strtoupper($anggota[$a]["agama"]) . '</td>
                        <td>' . strtoupper($anggota[$a]["pendidikan"]) . '</td>
                        <td>' . strtoupper($anggota[$a]["pekerjaan"]) . '</td>
                    </tr>';
            }
            for($b=1; $b<=$i;$b++){
                $page .= '
                    <tr>
                        <th>' . $no++ . '</th>
                        <td> -</td>
                        <td> -</td>
                        <td> -</td>
                        <td> -</td>
                        <td> -</td>
                        <td> -</td>
                        <td> -</td>
                        <td> -</td>
                    </tr>';
            }
                $page .='
    </table>
  
     <table cellspacing="0" border="1" >
         <tr>
             <th rowspan="2" style="width: 3%;">No</th>
             <th rowspan="2" style="width: 11%;">Status Perkawinan</th>
             <th rowspan="2" style="width: 11%;">Status Hubungan Dalam Keluarga</th>
             <th rowspan="2" style="width: 11%;">Kewarganegaraan</th>
             <th colspan="2">Dokumen Imigrasi</th>
             <th colspan="2">Nama Orang Tua</th>
         </tr>
         <tr>
             <th style="width: 10%;">No. KITAP</th>
             <th style="width: 10%;">No. Paspor</th>
             <th style="width: 22%;">Ayah</th>
             <th style="width: 22%;">Ibu</th>
         </tr>
         <tr>
            <th></th>
            <th><b>(9)<b></th>
            <th><b>(10)<b></th>
            <th><b>(11)<b></th>
            <th><b>(12)<b></th>
            <th><b>(13)<b></th>
            <th><b>(14)<b></th>
            <th><b>(15)<b></th>
         </tr>';

         $nomor = 1;
         for($a= 0; $a<count($anggota); $a++){
            $page .='
                <tr>
                    <th>' . $nomor++ . '</th>
                    <td>' . strtoupper($anggota[$a]["status_perkawinan"]) . '</td>
                    <td>' . strtoupper($anggota[$a]["status_dalam_keluarga"]) . '</td>
                    <td>WNI</td>
                    <td> -</td>
                    <td> -</td>
                    <td>' . strtoupper($anggota[$a]["ayah"]) . '</td>
                    <td>' . strtoupper($anggota[$a]["ibu"]) . '</td>
                </tr>';
         }
            for($b=1;$b<=$i;$b++){
            $page .='
                <tr>
                    <th>' . $nomor++ . '</th>
                    <td> -</td>
                    <td> -</td>
                    <td> -</td>
                    <td> -</td>
                    <td> -</td>
                    <td> -</td>
                    <td> -</td>
                </tr>';
            }
            $page .='
     </table>   
</div>

<div class="lembar">

    <table>
        <tr>
            <td style="width: 45%;">Dikeluarkan Tanggal</td>
            <td style="width: 2%;">:</td>
            <td style="width: 9%"></td>
            <td><span style="border: 1px solid black;">&nbsp;&nbsp;' . date("d-m-yy") . '&nbsp;&nbsp;</span></td>
        </tr>
        <tr>
            <td>LEMBAR</td>
            <td style="width: 2%;">:</td>
            <td>I.</td>
            <td> Kepala Keluarga </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>II.</td>
            <td>RT</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>III.</td>
            <td>Desa/Kelurahan</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>IV.</td>
            <td>Kecamatan</td>
        </tr>
        
    </table>

</div>
<div class="kepala_keluarga">

    KEPALA KELUARGA <br>
    <br><br><br>
    <u>'. strtoupper($kepalaKeluarga) .'</u><br>
    Tanda Tangan/Cap Jempol

</div>
<div class="kepala_dinas">

    KEPALA DINAS KEPENDUDUKAN DAN <br>
    PENCATATAN SIPIL
    <br><br><br>
    <u>Dra. A. MULYATI NUR. M.Pd</u><br>
    NIP: 12345678912345678

</div>




<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>';

$mpdf->WriteHTML($page);

    $mpdf->Output();


?>


