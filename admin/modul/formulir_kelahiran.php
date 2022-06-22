<?php


    $no_reg = $_GET["no_reg"];
    $no_kk = $_GET["no_kk"];

    $lapor_lahir = read_lapor_lahir("SELECT * FROM lapor_lahir WHERE no_registrasi = '$no_reg'");
    $data_ayah = read_data_penduduk("SELECT * FROM data_penduduk WHERE no_kk = '$no_kk' AND status_dalam_keluarga = 'Kepala Keluarga'")[0];
    $data_ibu = read_data_penduduk("SELECT * FROM data_penduduk WHERE no_kk = '$no_kk' AND status_dalam_keluarga = 'Istri'")[0];

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
            
            approve_lahir($no_reg, $_POST);
        }
        if(isset($_POST["tolak"])){
            
            tolak_lapor_lahir($no_reg);
        }


?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/admin.css">
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
        .bottom {
            border : 1px solid black;
        }
    </style>

<div class="col-10 ml-auto mt-3 p-5">
    <div id="formulir_lahir" class="mx-5 px-5 mt-4">
        <?php foreach($lapor_lahir as $lpl): ?>
            <div class="ml-auto mb-5">
                <h6 class="ml-auto"><b class="border p-2 pr-3">NOMOR REGISTRASI : <?= $lpl["no_registrasi"]; ?></b></h6>
            </div>
            <div class="row">
                <div class="col-12 mb-3">    
                    <h4 class="text-center mx-auto"><b>SURAT KETERANGAN KELAHIRAN</b></h4>
                </div>
            </div>
            <div class="row">
                <label class="col-4"><b> Nomor Kartu Keluaraga</b></label>
                <label class="col-1"><b>:</b></label>
                <b><?= strtoupper($lpl["no_kk"]); ?></b>
            </div>
            <div class="row">
                <div class="col-4"><b>Nama Kepala Keluaraga</b></div>
                <label class="col-1"><b>:</b></label>  
                <b><?= strtoupper($data_ayah["nama"]); ?></b>
            </div>
            <div class="form-row">
                <h7 class="ml-auto"><b class="p-2 pr-3">Tanggal Lapor    : <?= tanggal_indo($lpl["tanggal_lapor"]); ?></b></h7>
            </div>
            <div class="identitas p-1 pb-2">
                <h6><b> BAYI / ANAK</b></h6>
                <ol>
                    <li>
                        <div class="row">
                            <label class="col-3">Nama</label>
                            <label class="col-1">:</label>
                            <div class="col-8"><?= ucwords($lpl["nama_bayi"]); ?></div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-3">Jenis Kelamin</label>
                            <label class="col-1">:</label>
                            <div class="col-8"><?= ucwords($lpl["jk_bayi"]); ?></div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-3">Tempat Dilahirkan</label>
                            <label class="col-1">:</label>
                            <div class="col-8"><?= ucwords($lpl["tempat_dilahirkan"]); ?></div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-3">Tempat Kelahiran</label>
                            <label class="col-1">:</label>
                            <div class="col-8"><?= ucwords($lpl["tempat_kelahiran"]); ?></div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-3">Hari dan Tanggal Lahir</label>
                            <label class="col-1">:</label>
                            <div class="col-8"><?= $lpl["hari_kelahiran"]; ?>,&nbsp; 
                            <?=tanggal_indo($lpl["tgl_lahir_anak"]); ?></div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-3">Pukul</label>
                            <label class="col-1">:</label>
                            <div class="col-8"><?= date('H:i',strtotime($lpl["pukul"])); ?></div>
                        </div>
                    </li>
                    <li>
                    <div class="row">
                        <label class="col-3">Jenis Kelahiran</label>
                        <label class="col-1">:</label>
                        <div class="col-8"><?= ucwords($lpl["jenis_kelahiran"]); ?></div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <label class="col-3">Kelahiran Ke</label>
                        <label class="col-1">:</label>
                        <div class="col-8"><?= strtoupper($lpl["anak_ke"]); ?></div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <label class="col-3">Penolong Kelahiran</label>
                        <label class="col-1">:</label>
                        <div class="col-8"><?= ucwords($lpl["penolong_kelahiran"]); ?></div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <label class="col-3">Berat</label>
                        <label class="col-1">:</label>
                        <div class="col-8"><?= $lpl["berat"]; ?> &nbsp; CM</div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <label class="col-3">Panjang</label>
                        <label class="col-1">:</label>
                        <div class="col-8"><?= $lpl["tinggi"]; ?> &nbsp; CM</div>
                    </div>
                </li>
            </ol>
        </div>
        <div class="identitas p-1 pb-2">
            <h6><b> IBU</b></h6>
            <ol>
                <li>
                    <div class="row">
                        <label class="col-3">NIK</label>
                        <label class="col-1">:</label>
                        <div class="col-8"><?= $data_ibu["nik"]; ?></div>
                    </div>
                </li>
                    <li>
                        <div class="row">
                            <label class="col-3">Nama Lengkap</label>
                            <label class="col-1">:</label>
                            <div class="col-8"><?= ucwords($data_ibu["nama"]); ?></div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-3">Tanggal Lahir</label>
                            <label class="col-1">:</label>
                            <div class="col-8"><?= tanggal_indo($data_ibu["tanggal_lahir"]); ?></div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-3">Pekerjaan</label>
                            <label class="col-1">:</label>
                            <div class="col-8"><?= ucwords($data_ibu["pekerjaan"]); ?></div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-3">Alamat</label>
                            <label class="col-1">:</label>
                            <div class="col-8"><?= ucwords($data_ibu["alamat"]); ?></div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-3">Tgl Pencatatan Perkawinan</label>
                            <label class="col-1">:</label>
                            <div class="col-8"><?= tanggal_indo($lpl["tanggal_pernikahan"]); ?></div>
                        </div>
                    </li>
                </ol>
            </div>
            <div class="identitas p-1 pb-2">
                
                <h6><b> AYAH</b></h6>
                <ol>
                    <li>
                        <div class="row">
                            <label class="col-3">NIK</label>
                            <label class="col-1">:</label>
                            <div class="col-8"><?= $data_ayah["nik"]; ?></div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-3">Nama Lengkap</label>
                            <label class="col-1">:</label>
                            <div class="col-8"><?= ucwords($data_ayah["nama"]); ?></div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-3">Tanggal Lahir</label>
                            <label class="col-1">:</label>
                            <div class="col-8"><?= tanggal_indo($data_ayah["tanggal_lahir"]); ?></div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-3">Pekerjaan</label>
                            <label class="col-1">:</label>
                            <div class="col-8"><?= ucwords($data_ayah["pekerjaan"]); ?></div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <label class="col-3">Alamat</label>
                            <label class="col-1">:</label>
                            <div class="col-8"><?= ucwords($data_ayah["alamat"]); ?></div>
                        </div>
                    </li>
                </ol>
            </div>
            
            <div class="identitas p-1 pb-2">
                <h6 class="text-center"><b> KTP AYAH</b></h6>
                
                <div class="col-12 mb-3">    
                    <div class="ktp_ayah text-center">
                        <img src="assets/berkas/<?= $lpl["ktp_ayah"] ?>" width="300px" alt="">
                    </div>
                </div>
            </div>
            <div class="identitas p-1 pb-2">
                <h6 class="text-center"><b> KTP IBU</b></h6>
                
                <div class="col-12 mb-3">    
                    <div class="ktp_ayah text-center">
                        <img src="assets/berkas/<?= $lpl["ktp_ibu"] ?>" width="300px" alt="">
                    </div>
                </div>
            </div>
            <div class="identitas p-1 pb-2">
                <h6 class="text-center"><b> KARTU KELUARGA</b></h6>
                
                <div class="col-12 mb-3">    
                    <div class="ktp_ayah text-center">
                        <img src="assets/berkas/<?= $lpl["kk"] ?>" width="300px" alt="">
                    </div>
                </div>
            </div>
            <div class="identitas p-1 pb-2">
                <h6 class="text-center"><b> BUKU NIKAH</b></h6>
                
                <div class="col-12 mb-3">    
                    <div class="ktp_ayah text-center">
                        <img src="assets/berkas/<?= $lpl["buku_nikah"] ?>" width="300px">
                    </div>
                </div>
            </div>
            <div class="identitas bottom p-1 pb-2">
                <h6 class="text-center"><b> SURAT KETERANGAN LAHIR</b></h6>
                
                <div class="col-12 mb-3">    
                    <div class="ktp_ayah text-center">
                        <img src="assets/berkas/<?= $lpl["ket_lahir"] ?>" width="300px">
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3 mt-3">    
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



