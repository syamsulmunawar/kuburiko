<?php

    $no_reg = $_GET["no_reg"];
    $nik_simati = $_GET["nik_simati"];


    $lapor_mati = read_lapor_mati("SELECT * FROM lapor_mati WHERE no_registrasi = '$no_reg'");
    $no_kk      = $lapor_mati[0]["no_kk_simati"];
    $keluarga   = query("SELECT nama FROM data_penduduk WHERE no_kk =".$no_kk." AND status_dalam_keluarga='Kepala Keluarga'")[0]['nama'];
    $simati = read_data_penduduk("SELECT * FROM data_penduduk WHERE nik = '$nik_simati'")[0];

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
            
            approve_mati_kel($no_reg);
        }
        if(isset($_POST["tolak"])){
            kel_tolak_lapor_mati($no_reg);
        }


?>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <style>
        .container{
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
            padding : 4cm 4cm 3cm 3cm;
        }
        .identitas{
            border: 1px solid black;
            border-bottom: none;
        }
        .bottom{
            border-bottom: 1px solid black;
        }
    </style>

    
    <div id="formulir_mati" class="mx-5 px-5 mt-4">
        <?php foreach($lapor_mati as $lpm): ?>
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
                        <img src="../assets/berkas/<?= $lpm["ktp_pelapor"] ?>" width="400px" alt="">
                    </div>
                </div>
            </div>
            <div class="identitas p-1 pb-2">
                <h6 class="text-center"><b> KTP SIMATI</b></h6>
                
                <div class="col-12 mb-3">    
                    <div class="ktp_simati text-center">
                        <img src="../assets/berkas/<?= $lpm["ktp_simati"] ?>" width="400px" alt="">
                    </div>
                </div>
            </div>
            <div class="identitas p-1 pb-2">
                <h6 class="text-center"><b> KARTU KELUARGA</b></h6>
                
                <div class="col-12 mb-3">    
                    <div class="kk_simati text-center">
                        <img src="../assets/berkas/<?= $lpm["kk_simati"] ?>" width="400px" alt="">
                    </div>
                </div>
            </div>
            <div class="identitas p-1 pb-2">
                <h6 class="text-center"><b> AKTA KELAHIRAN</b></h6>
                
                <div class="col-12 mb-3">    
                    <div class="akta_kelahiran text-center">
                        <img src="../assets/berkas/<?= $lpm["akta_kelahiran_simati"] ?>" width="400px">
                    </div>
                </div>
            </div>
            <div class="identitas bottom p-1 pb-2">
                <h6 class="text-center"><b> SURAT KETERANGAN KEMATIAN</b></h6>
                
                <div class="col-12 mb-3">    
                    <div class="akta_kematian text-center">
                        <img src="../assets/berkas/<?= $lpm["surat_ket_kematian"] ?>" width="400px">
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3 mt-5">    
                <form action="" method="POST">
                    <center>
                        <button class="btn btn-danger btn-sm mr-2" name="tolak" type="submit">TOLAK LAPORAN <span class="text-warning"><?= $no_reg; ?></span></button>
                        <button class="btn btn-success btn-sm" name="approve" type="submit">APPROVE LAPORAN <span class="text-warning"><?= $no_reg; ?></span></button>
                    </center>
                </form>
            </div>


                <?php endforeach; ?>
    </div>
    

