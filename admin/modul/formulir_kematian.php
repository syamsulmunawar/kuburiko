<?php


    $no_reg = $_GET["no_reg"];
    $nik_simati = $_GET["nik_simati"];
    
    
    $lapor_mati = read_lapor_mati("SELECT * FROM lapor_mati WHERE no_registrasi = '$no_reg'");
    $simati = read_data_penduduk("SELECT * FROM data_penduduk WHERE nik = '$nik_simati'")[0];
    $no_kk      = $lapor_mati[0]["no_kk_simati"];
    $keluarga   = query("SELECT nama FROM data_penduduk WHERE no_kk =".$no_kk." AND status_dalam_keluarga='Kepala Keluarga'")[0]['nama'];

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
        if(isset($_POST["approve"])){
            approve_mati($no_reg,$_POST);
            echo "<script>
                    alert('Laporan $no_reg Telah Di Approved')
                    </script>";
            header("Location: index.php?page=kematian_approved");
        }
        if(isset($_POST["tolak"])){
            tolak_lapor_mati($no_reg);
            echo "<script>
                    alert('Laporan $no_reg Telah Di Approved')
                    </script>";
            header("Location: index.php?page=kematian_approved");
            
        }


?>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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

    
  <div class="col-10 ml-auto mt-3 p-5">
        <?php foreach($lapor_mati as $lpm): ?>
    <div id="formulir_mati" class="mx-5 px-5 mt-4">

        
            <div class="ml-auto mb-5">
                <h6 class="ml-auto"><b class="border p-2 pr-3">NOMOR REGISTRASI : <?= $lpm["no_registrasi"]; ?></b></h6>
            </div>
            <div class="row">
                <div class="col-12 mb-3">    
                    <h4 class="text-center mx-auto"><b>SURAT KETERANGAN KEMATIAN</b></h4>
                </div>
            </div>
            <div class="row">
                <label class="col-4"><b> Nomor Kartu Keluaraga</b></label>
                <label class="col-1"><b>:</b></label>
                <b><?= strtoupper($lpm["no_kk_simati"]); ?></b>
            </div>
            <div class="row">
                <label class="col-4"><b> Kepala Keluarga</b></label>
                <label class="col-1"><b>:</b></label>
                <b><?= strtoupper($keluarga); ?></b>
            </div>
            <div class="form-row">
                <h7 class="ml-auto"><b class="p-2 pr-3">Tanggal Lapor    : <?= tanggal_indo($lpm["tanggal_lapor"]); ?></b></h7>
            </div>
            

            
            
            <div class="identitas p-1 pb-2">
                
                <h6><b> SIMATI</b></h6>
                <ol>
                    <li>
                        <div class="row">
                            <label class="col-4">Nama Lengkap</label>
                            <label class="col-1">:</label>
                            <?= ucwords($lpm["nama_simati"]); ?>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-4">Jenis Kelamin</label>
                            <label class="col-1">:</label>
                            <?= ucwords($lpm["jk_simati"]); ?>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-4">Tempat, Tanggal Lahir</label>
                            <label class="col-1">:</label>
                            <?= ucwords($lpm["tempat_lahir_simati"]) .', '. tanggal_indo($lpm["tgl_lahir_simati"]); ?>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-4">Pekerjaan</label>
                            <label class="col-1">:</label>
                            <?= ucwords($lpm["pekerjaan_simati"]); ?>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-4">Agama</label>
                            <label class="col-1">:</label>
                            <?= ucwords($lpm["agama_simati"]); ?>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-4">Alamat</label>
                            <label class="col-1">:</label>
                            <?= ucwords($lpm["alamat_simati"]); ?>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-4">Meninggal di</label>
                            <label class="col-1">:</label>
                            <?= ucwords($lpm["meninggal_di"]); ?>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-4">Hari/Tanggal Kematian</label>
                            <label class="col-1">:</label>
                            <?= $lpm["hari_kematian"].', '. tanggal_indo($lpm["tanggal_kematian"]); ?>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-4">Pukul</label>
                            <label class="col-1">:</label>
                            <?= date('H:i',strtotime($lpm["pukul"])); ?>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-4">Penyebab Kematian</label>
                            <label class="col-1">:</label>
                            <?= ucwords($lpm["penyebab_kematian"]); ?>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-4">Bukti Kematian</label>
                            <label class="col-1">:</label>
                            <?= ucwords($lpm["bukti_kematian"]); ?>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-4">Nama Ayah/Ibu</label>
                            <label class="col-1">:</label>
                            <?= ucwords($simati["ayah"]); ?>
                        </div>
                    </li>
                    

                </ol>
            </div>

            <div class="identitas p-1 pb-2">
                
                <h6><b> PELAPOR</b></h6>
                <ol>
                    <li>
                        <div class="row">
                            <label class="col-4">NIK</label>
                            <label class="col-1">:</label>
                            <?= strtoupper($lpm["nik_pelapor"]); ?>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-4">Nama Lengkap</label>
                            <label class="col-1">:</label>
                            <?= ucwords($lpm["nama_pelapor"]); ?>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-4">Tempat, Tanggal Lahir</label>
                            <label class="col-1">:</label>
                            <?= ucwords($lpm["tempat_lahir_pelapor"]) .', '. tanggal_indo($lpm["tgl_lahir_pelapor"]); ?>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-4">Umur</label>
                            <label class="col-1">:</label>
                            <?= strtoupper($lpm["umur_pelapor"]); ?> &nbsp;Tahun
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-4">Jenis Kelamin</label>
                            <label class="col-1">:</label>
                            <?= ucwords($lpm["jk_pelapor"]); ?>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-4">Pekerjaan</label>
                            <label class="col-1">:</label>
                            <?= ucwords($lpm["pekerjaan_pelapor"]); ?>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-4">Pertalian Dengan Simati</label>
                            <label class="col-1">:</label>
                            <?= ucwords($lpm["hubungan_pelapor"]); ?>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-4">Alamat</label>
                            <label class="col-1">:</label>
                            <?= ucwords($lpm["alamat_pelapor"]); ?>
                        </div>
                    </li>
                </ol>
            </div>

            <div class="identitas p-1 pb-2">
                <h6 class="text-center"><b> KTP PELAPOR</b></h6>
                
                <div class="col-12 mb-3">    
                    <div class="ktp_pelapor text-center">
                        <img src="assets/berkas/<?= $lpm["ktp_pelapor"] ?>" width="400px" alt="">
                    </div>
                </div>
            </div>
            <div class="identitas p-1 pb-2">
                <h6 class="text-center"><b> KTP SIMATI</b></h6>
                
                <div class="col-12 mb-3">    
                    <div class="ktp_simati text-center">
                        <img src="assets/berkas/<?= $lpm["ktp_simati"] ?>" width="400px" alt="">
                    </div>
                </div>
            </div>
            <div class="identitas p-1 pb-2">
                <h6 class="text-center"><b> KARTU KELUARGA</b></h6>
                
                <div class="col-12 mb-3">    
                    <div class="kk_simati text-center">
                        <img src="assets/berkas/<?= $lpm["kk_simati"] ?>" width="400px" alt="">
                    </div>
                </div>
            </div>
            <div class="identitas p-1 pb-2">
                <h6 class="text-center"><b> AKTA KELAHIRAN</b></h6>
                
                <div class="col-12 mb-3">    
                    <div class="akta_kelahiran text-center">
                        <img src="assets/berkas/<?= $lpm["akta_kelahiran_simati"] ?>" width="400px">
                    </div>
                </div>
            </div>
            <div class="identitas bottom p-1 pb-2">
                <h6 class="text-center"><b> SURAT KETERANGAN KEMATIAN</b></h6>
                
                <div class="col-12 mb-3">    
                    <div class="akta_kematian text-center">
                        <img src="assets/berkas/<?= $lpm["surat_ket_kematian"] ?>" width="400px">
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3 mt-5">    
                <center>
                    <form action="" method="post" style="display: inline-block;">
                        <button name="tolak" type="submit" class="btn btn-sm btn-danger mr-2">Tolak Laporan</button>
                    </form>
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#staticBackdrop">VALIDASI</button>
                </center>

<!-- Modal -->
                <form action="" method="POST">
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-primary text-center" id="staticBackdropLabel"><b>Masukkan Data Dokumen Akta</b></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="col-4" for="kode_dokumen">Kode Dokumen</label>
                                            <input class="col-7" name="kode_dokumen" type="text" id="kode_dokumen">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-4" for="no_akta">Nomor Akta Lahir</label>
                                            <input class="col-7" name="no_akta" type="text" id="no_akta">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-4" for="no_stbld">Nomor STBLD</label>
                                            <input class="col-7" name="no_stbld" type="text" id="no_stbld">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                        <button type="submit" name="approve" class="btn btn-primary">Approve</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </form>
            </div>

        </div>
                <?php endforeach; ?>
    </div>
    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
