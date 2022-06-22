<?php

    include 'admin/function.php';

    if(isset($_POST["kirim"])){ 
       tambah_lapor_lahir($_POST);
    }
?>
<style>
    input {
        margin-bottom: -4px;
        margin-top : -7px;
    }
    select{
        margin-top : -7px;
    }
</style>
<div class="col-12 col-sm-8 mx-auto mt-5 pt-3">
    <div class="col-sm-6 text-center mx-auto mt-4">
        <h5 class="text-center"><b>PERMOHONAN AKTA KELAHIRAN</b></h5>
    </div>
    <form class="needs-validation" id="lapor_lahir" action="" method="POST" enctype="multipart/form-data">
    <div id="kartu_keluarga" class="p-sm-5">
            <div class="col-12 pt-1 rounded bg-dark mb-2">
                <h5 class="text-center text-info" style="margin-bottom:0"><b>Data Kartu Keluarga</b></h5>
                <small class="text-secondary"> Isi data dibawah berdasarkan Kartu Keluarga</small>
            </div>
            
            <div class="form-row mb-1">
                <div class="form-group col-sm-12 col-12">
                    <label for="nomor_kk">Nomor Kartu Kelurga</label>
                    <input type="text" class="form-control" name="nomor_kk" id="nomor_kk" minlength="16" required>
                    <small id="nomor_kk_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-2" style="margin-bottom: 0">
                    <label for="alamat">Alamat</label>
                </div>
            </div>
            <div class="form-row ml-3 mb-1">
                <div class="form-group col-sm-6 col-6">
                    <label for="rt">RT</label>
                    <input type="text" class="form-control" name="rt" id="rt" required>
                    <small id="rt_error" class="pl-2" style="color: red;"></small>
                </div>
                <div class="form-group col-sm-6 col-6">
                    <label for="rw">RW</label>
                    <input type="text" class="form-control" name="rw" id="rw" required>
                    <small id="rw_error" class="pl-2" style="color: red;"></small>
                </div>
                <div class="form-group col-sm-12 col-12">
                    <label for="kode_pos">Kode Pos</label>
                    <input type="text" class="form-control" name="kode_pos" id="kode_pos" required>
                    <small id="kode_pos_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            <div class="form-row ml-3 mb-1">
                <div class="form-group  col-sm-6 col-6">
                    <label for="desa_kelurahan">Desa/Kelurahan</label>
                    <input type="text" class="form-control" name="desa_kelurahan" id="desa_kelurahan" required>
                    <small id="desa_kelurahan_error" class="pl-2" style="color: red;"></small>
                </div>
                <div class="form-group col-sm-6 col-6">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" class="form-control" name="kecamatan" id="kecamatan" required>
                    <small id="kecamatan_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            <div class="form-row mb-1 ml-3">
                <div class="form-group col-sm-6 col-6">
                    <label for="kabupaten">Kabupaten/Kota</label>
                    <input type="text" class="form-control" name="kabupaten" id="kabupaten" required>
                    <small id="kabupaten_error" class="pl-2" style="color: red;"></small>
                </div>
                <div class="form-group col-sm-6 col-6">
                    <label for="provinsi">provinsi</label>
                    <input type="text" class="form-control" name="provinsi" id="provinsi" required>
                    <small id="provinsi_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
        
        
        <div class="pb-3 mb-5 border-top border-right border-bottom">
            <div class="col-12" style="padding: 0;"><h5 class="text-info border-top pl-2 py-1 mb-3"><b>Kepala Keluarga</b></h5></div>
            
            <div class="form-row mb-1 pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-12">
                    <label for="nik_ayah">NIK</label>
                    <input type="text" class="form-control" name="nik_ayah" id="nik_ayah" minlength="16" required>
                    <small id="nik_ayah_error" class="pl-2" style="color: red;"></small>
                </div>
            
                <div class="form-group col-sm-6 col-12">
                    <label for="nama_ayah">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" required>
                    <small id="nama_ayah_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            
            <div class="form-row mb-1 pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-12">
                    <label for="tl_ayah">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tl_ayah" id="tl_ayah" required>
                    <small id="tl_ayah_error" class="pl-2" style="color: red;"></small>
                </div>
                <div class="form-group col-sm-4 col-12">
                    <label for="tll_ayah">Tanggal</label>
                    <input class="form-control" type="date"  name="tll_ayah" id="tll_ayah" required>
                    <small id="tll_ayah_error" class="pl-2" style="color: red;" style="margin-top: -1px;"></small>
                </div>
            </div>
            <div class="form-row mb-1 pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-12">
                    <label for="agama_ayah" class="col-form-label">Agama</label>
                    <select class="form-control" name="agama_ayah" id="agama_ayah">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <small id="agama_ayah_error" class="pl-2" style="color: red;"></small>
                </div>
            
                <div class="form-group col-sm-6 col-12">
                    <label for="pendidikan_ayah" class="col-form-label">Pendidikan</label>
                    <select class="form-control" name="pendidikan_ayah" id="pendidikan_ayah">
                        <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                        <option value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                        <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                        <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                        <option value="DIPLOMA I">DIPLOMA I</option>
                        <option value="DIPLOMA II">DIPLOMA II</option>
                        <option value="DIPLOMA III">DIPLOMA III</option>
                        <option value="DIPLOMA IV">DIPLOMA IV</option>
                        <option value="STRATA I">STRATA I</option>
                        <option value="STRATA II">STRATA II</option>
                        <option value="STRATA III">STRATA III</option>
                    </select>
                    <small id="pendidikan_ayah_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            <div class="form-row mb-1 pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-12 col-12">
                    <label for="pekerjaan_ayah">pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" required>
                    <small id="pekerjaan_ayah_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            <div class="form-row mb-1 pl-sm-5 pr-sm-5">
                <div class="form-group col-4" style="margin-bottom: 0;">
                    <label>Orang Tua</label>
                </div>
            </div>
            <div class="form-row mb-1 ml-3  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-6">
                    <label for="nama_ayah_ayah">Nama Ayah</label>
                    <input type="text" class="form-control" name="nama_ayah_ayah" id="nama_ayah_ayah" required>
                    <small id="nama_ayah_ayah_error" class="pl-2" style="color: red;"></small>
                </div>
                <div class="form-group col-sm-6 col-6">
                    <label for="nama_ayah_ayah">Nama Ibu</label>
                    <input type="text" class="form-control" name="nama_ibu_ayah" id="nama_ibu_ayah" required>
                    <small id="nama_ibu_ayah_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
        </div>
        
        <div class="pb-3 mb-5 border-top border-right border-bottom">
            <div class="col-11"><h5 class="border-top pt-2 text-info mb-3"><b>Data Istri</b></h5></div>
            
            <div class="form-row mb-1 pl-sm-5 pr-sm-5 pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-12">
                    <label for="nik_istri">NIK istri</label>
                    <input type="text" class="form-control" name="nik_istri" id="nik_istri" minlength="16" required>
                    <small id="nik_istri_error" class="pl-2" style="color: red;"></small>
                </div>
            
                <div class="form-group col-sm-6 col-12">
                    <label for="nama_istri">Nama istri</label>
                    <input type="text" class="form-control" name="nama_istri" id="nama_istri" required>
                    <small id="nama_istri_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            <div class="form-row mb-1 pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-12">
                    <label for="tgl_pernikahan">Tanggal Pernikahan</label>
                    <input type="date" class="form-control" name="tgl_pernikahan" id="tgl_pernikahan" required>
                    <small id="tgl_pernikahan_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            <div class="form-row mb-1 pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-12">
                    <label for="tl_istri">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tl_istri" id="tl_istri" required>
                    <small id="tl_istri_error" class="pl-2" style="color: red;"></small>
                </div>
                <div class="form-group col-sm-6 col-12">
                    <label for="tll_istri">Tanggal</label>
                    <input class="form-control" type="date" name="tll_istri" id="tll_istri" required>
                    <small id="tll_istri_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            <div class="form-row mb-1 pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-12">
                    <label for="agama_istri" class="col-form-label">Agama</label>
                    <select class="form-control" name="agama_istri" id="agama_istri">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <small id="agama_istri_error" class="pl-2" style="color: red;"></small>
                </div>
            
                <div class="form-group col-sm-6 col-12">
                    <label for="pendidikan_istri" class="col-form-label">Pendidikan</label>
                    <select class="form-control" name="pendidikan_istri" id="pendidikan_istri">
                        <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                        <option value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                        <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                        <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                        <option value="DIPLOMA I">DIPLOMA I</option>
                        <option value="DIPLOMA II">DIPLOMA II</option>
                        <option value="DIPLOMA III">DIPLOMA III</option>
                        <option value="DIPLOMA IV">DIPLOMA IV</option>
                        <option value="STRATA I">STRATA I</option>
                        <option value="STRATA II">STRATA II</option>
                        <option value="STRATA III">STRATA III</option>
                    </select>
                    <small id="pendidikan_istri_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            <div class="form-row mb-1 pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-12 col-12">
                    <label for="pekerjaan_istri">pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan_istri" id="pekerjaan_istri" class="required">
                    <small id="pekerjaan_istri_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            <div class="form-row mb-1 pl-sm-5 pr-sm-5">
                <div class="form-group" style="margin-bottom: 0;">
                    <label for="alamat">Orang Tua</label>
                </div>
            </div>
            <div class="form-row mb-1 pl-sm-5 pr-sm-5 ml-3">
                <div class="form-group col-sm-6 col-6">
                    <label for="nama_ayah_istri">Nama Ayah</label>
                    <input type="text" class="form-control" name="nama_ayah_istri" id="nama_ayah_istri" class="required">
                    <small id="_error" class="pl-2" style="color: red;"></small>
                    <small id="nama_ayah_istri_error" class="pl-2" style="color: red;"></small>
                </div>
                <div class="form-group col-sm-6 col-6">
                    <label for="nama_ayah_istri">Nama Ibu</label>
                    <input type="text" class="form-control" name="nama_ibu_istri" id="nama_ibu_istri" class="required">
                    <small id="_error" class="pl-2" style="color: red;"></small>
                    <small id="nama_ibu_istri_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
        </div>
        <div class="form-row mb-1">
            <div class="form-group col-sm-12 col-12">
                <label class="col-form-label" for="jumlah_anak">Jumlah Anak</label>
                <select class="form-control" id="jumlah_anak">
                    <option value="0">Belum Punya</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <div class="ml-1">
                    <small><i>(jumlah anak sesuai kartu keluarga sekarang)</i></small>
                </div>
            </div>
        </div>
        
        <div class="pb-3 mb-5 border-top border-right border-bottom" id="anak1" style="display: none;">
            <div class="col-12"><h5 class="border-top pt-2 text-info mb-3"><b>Data Anak Pertama</b></h5></div>
            
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-12">
                    <label for="nik_anak1">NIK</label>
                    <input type="text" class="form-control" name="nik_anak1" id="nik_anak1">
                    <small id="nik_anak1_error" class="pl-2" style="color: red;"></small>
                </div>
            
                <div class="form-group col-sm-6 col-12">
                    <label for="nama_anak1">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_anak1" id="nama_anak1">
                    <small id="nama_anak1_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            <div class="form-row mb-1 pl-sm-5 pr-sm-5">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk_anak1" id="jk_anak1" value="Laki-laki" checked>
                        <label class="form-check-label" for="laki-laki">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk_anak1" id="perempuan" value="Perempuan">
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-12">
                    <label for="tl_anak1">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tl_anak1" id="tl_anak1">
                    <small id="tl_anak1_error" class="pl-2" style="color: red;"></small>
                </div>
                <div class="form-group col-sm-4 col-12">
                    <label for="tll_anak1">Tanggal</label>
                    <input class="form-control" type="date" name="tll_anak1" id="tll_anak1">
                    <small id="tll_anak1_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-12">
                    <label for="agama" class="col-form-label">Agama</label>
                    <select class="form-control" name="agama_anak1" id="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            
                <div class="form-group col-sm-6 col-12">
                    <label for="pendidikan_anak1" class="col-form-label">Pendidikan</label>
                    <select class="form-control" name="pendidikan_anak1" id="pendidikan_anak1">
                        <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                        <option value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                        <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                        <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                        <option value="DIPLOMA I">DIPLOMA I</option>
                        <option value="DIPLOMA II">DIPLOMA II</option>
                        <option value="DIPLOMA III">DIPLOMA III</option>
                        <option value="DIPLOMA IV">DIPLOMA IV</option>
                        <option value="STRATA I">STRATA I</option>
                        <option value="STRATA II">STRATA II</option>
                        <option value="STRATA III">STRATA III</option>
                    </select>
                </div>
            </div>
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-12 col-12">
                    <label for="pekerjaan_anak1">pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan_anak1" id="pekerjaan_anak1">
                    <small id="pekerjaan_anak1_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>     
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-12 col-12">
                    <label for="status_perkawinan_anak1" class="col-form-label">Status Perkawinan</label>
                    <select class="form-control" name="status_perkawinan_anak1" id="status_perkawinan_anak1">
                        <option value="Kawin">Kawin</option>
                        <option value="Belum Kawin">Belum Kawin</option>
                    </select>
                </div>
            </div>     
        </div>
        <div class="pb-3 mb-5 border-top border-right border-bottom" id="anak2" style="display: none;">
            <div class="col-12"><h5 class="border-top pt-2 text-info mb-3"><b>Data Anak Kedua</b></h5></div>
            
            <div class="form-row mb-1  pl-sm-5 pr-sm-5  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-12">
                    <label for="nik_anak2">NIK</label>
                    <input type="text" class="form-control" name="nik_anak2" id="nik_anak2">
                    <small id="nik_anak2_error" class="pl-2" style="color: red;"></small>
                </div>
            
                <div class="form-group col-sm-6 col-12">
                    <label for="nama_anak2">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_anak2" id="nama_anak2">
                    <small id="nama_anak2_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-20">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk_anak2" id="jk_anak2" value="Laki-laki" checked>
                        <label class="form-check-label" for="laki-laki">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk_anak2" id="perempuan" value="Perempuan">
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-12">
                    <label for="tl_anak2">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tl_anak2" id="tl_anak2">
                    <small id="tl_anak2_error" class="pl-2" style="color: red;"></small>
                </div>
                <div class="form-group col-sm-4 col-12">
                    <label for="tll_anak2">Tanggal</label>
                    <input class="form-control" type="date" name="tll_anak2" id="tll_anak2">
                    <small id="tll_anak2_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-12">
                    <label for="agama" class="col-form-label">Agama</label>
                    <select class="form-control" name="agama_anak2" id="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            
                    <div class="form-group col-sm-6 col-12">
                        <label for="pendidikan_anak2" class="col-form-label">Pendidikan</label>
                        <select class="form-control" name="pendidikan_anak2" id="pendidikan_anak2">
                            <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                            <option value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                            <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                            <option value="DIPLOMA I">DIPLOMA I</option>
                            <option value="DIPLOMA II">DIPLOMA II</option>
                            <option value="DIPLOMA III">DIPLOMA III</option>
                            <option value="DIPLOMA IV">DIPLOMA IV</option>
                            <option value="STRATA I">STRATA I</option>
                            <option value="STRATA II">STRATA II</option>
                            <option value="STRATA III">STRATA III</option>
                        </select>
                    </div>
                </div>
                <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-12 col-12">
                        <label for="pekerjaan_anak2">pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan_anak2" id="pekerjaan_anak2">
                        <small id="pekerjaan_anak2_error" class="pl-2" style="color: red;"></small>
                    </div>
            </div>     
                <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                    <div class="form-group col-sm-12 col-12">
                        <label for="status_perkawinan_anak2" class="col-form-label">Status Perkawinan</label>
                        <select class="form-control" name="status_perkawinan_anak2" id="status_perkawinan_anak2">
                            <option value="Kawin">Kawin</option>
                            <option value="Belum Kawin">Belum Kawin</option>
                        </select>
                    </div>
                </div>     
            </div>
            <div class="pb-3 mb-5 border-top border-right border-bottom" id="anak3" style="display: none;">
                <div class="col-12"><h5 class="border-top pt-2 text-info mb-3"><b>Data Anak Ketiga</b></h5></div>
                
                <div class="form-row mb-1  pl-sm-5 pr-sm-5  pl-sm-5 pr-sm-5">
                    <div class="form-group col-sm-6 col-12">
                        <label for="nik_anak3">NIK</label>
                        <input type="text" class="form-control" name="nik_anak3" id="nik_anak3">
                        <small id="nik_anak3_error" class="pl-2" style="color: red;"></small>
                    </div>
                
                    <div class="form-group col-sm-6 col-12">
                        <label for="nama_anak3">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_anak3" id="nama_anak3">
                        <small id="nama_anak3_error" class="pl-2" style="color: red;"></small>
                    </div>
                </div>
                <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                    <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                    <div class="col-sm-30">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk_anak3" id="jk_anak3" value="Laki-laki" checked>
                            <label class="form-check-label" for="laki-laki">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk_anak3" id="perempuan" value="Perempuan">
                            <label class="form-check-label" for="perempuan">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                    <div class="form-group col-sm-6 col-12">
                        <label for="tl_anak3">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tl_anak3" id="tl_anak3">
                        <small id="tl_anak3_error" class="pl-2" style="color: red;"></small>
                    </div>
                    <div class="form-group col-sm-4 col-12">
                        <label for="tll_anak3">Tanggal</label>
                        <input class="form-control" type="date" name="tll_anak3" id="tll_anak3">
                        <small id="tll_anak3_error" class="pl-2" style="color: red;"></small>
                    </div>
                </div>
                <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                    <div class="form-group col-sm-6 col-12">
                        <label for="agama" class="col-form-label">Agama</label>
                        <select class="form-control" name="agama_anak3" id="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                
                    <div class="form-group col-sm-6 col-12">
                        <label for="pendidikan_anak3" class="col-form-label">Pendidikan</label>
                        <select class="form-control" name="pendidikan_anak3" id="pendidikan_anak3">
                            <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                            <option value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                            <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                            <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                            <option value="DIPLOMA I">DIPLOMA I</option>
                            <option value="DIPLOMA II">DIPLOMA II</option>
                            <option value="DIPLOMA III">DIPLOMA III</option>
                            <option value="DIPLOMA IV">DIPLOMA IV</option>
                            <option value="STRATA I">STRATA I</option>
                            <option value="STRATA II">STRATA II</option>
                            <option value="STRATA III">STRATA III</option>
                        </select>
                    </div>
                </div>
                <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                    <div class="form-group col-sm-12 col-12">
                        <label for="pekerjaan_anak3">pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan_anak3" id="pekerjaan_anak3">
                        <small id="pekerjaan_anak3_error" class="pl-2" style="color: red;"></small>
                    </div>
                </div>     
                <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                    <div class="form-group col-sm-12 col-12">
                        <label for="status_perkawinan_anak3" class="col-form-label">Status Perkawinan</label>
                        <select class="form-control" name="status_perkawinan_anak3" id="status_perkawinan_anak3">
                            <option value="Kawin">Kawin</option>
                            <option value="Belum Kawin">Belum Kawin</option>
                    </select>
                </div>
            </div>     
        </div>
        <div class="pb-3 mb-5 border-top border-right border-bottom" id="anak4" style="display: none;">
            <div class="col-12"><h5 class="border-top pt-2 text-info mb-3"><b>Data Anak Keempat</b></h5></div>
            
            <div class="form-row mb-1  pl-sm-5 pr-sm-5  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-12">
                    <label for="nik_anak4">NIK</label>
                    <input type="text" class="form-control" name="nik_anak4" id="nik_anak4">
                    <small id="nik_anak4_error" class="pl-2" style="color: red;"></small>
                </div>
            
                <div class="form-group col-sm-6 col-12">
                    <label for="nama_anak4">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_anak4" id="nama_anak4">
                    <small id="nama_anak4_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk_anak4" id="jk_anak4" value="Laki-laki" checked>
                        <label class="form-check-label" for="laki-laki">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk_anak4" id="perempuan" value="Perempuan">
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-12">
                    <label for="tl_anak4">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tl_anak4" id="tl_anak4">
                    <small id="tl_anak4_error" class="pl-2" style="color: red;"></small>
                </div>
                <div class="form-group col-sm-4 col-12">
                    <label for="tll_anak4">Tanggal</label>
                    <input class="form-control" type="date" name="tll_anak4" id="tll_anak4">
                    <small id="tll_anak4_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-12">
                    <label for="agama" class="col-form-label">Agama</label>
                    <select class="form-control" name="agama_anak4" id="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            
                <div class="form-group col-sm-6 col-12">
                    <label for="pendidikan_anak4" class="col-form-label">Pendidikan</label>
                    <select class="form-control" name="pendidikan_anak4" id="pendidikan_anak4">
                        <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                        <option value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                        <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                        <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                        <option value="DIPLOMA I">DIPLOMA I</option>
                        <option value="DIPLOMA II">DIPLOMA II</option>
                        <option value="DIPLOMA III">DIPLOMA III</option>
                        <option value="DIPLOMA IV">DIPLOMA IV</option>
                        <option value="STRATA I">STRATA I</option>
                        <option value="STRATA II">STRATA II</option>
                        <option value="STRATA III">STRATA III</option>
                    </select>
                </div>
            </div>
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-12 col-12">
                    <label for="pekerjaan_anak4">pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan_anak4" id="pekerjaan_anak4">
                    <small id="pekerjaan_anak4_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>     
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-12 col-12">
                    <label for="status_perkawinan_anak4" class="col-form-label">Status Perkawinan</label>
                    <select class="form-control" name="status_perkawinan_anak4" id="status_perkawinan_anak4">
                        <option value="Kawin">Kawin</option>
                        <option value="Belum Kawin">Belum Kawin</option>
                    </select>
                </div>
            </div>     
        </div>
        <div class="pb-3 mb-5 border-top border-right border-bottom" id="anak5" style="display: none;">
            <div class="col-12"><h5 class="border-top pt-2 text-info mb-3"><b>Data Anak Kelima</b></h5></div>
            
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-12">
                    <label for="nik_anak5">NIK</label>
                    <input type="text" class="form-control" name="nik_anak5" id="nik_anak5">
                    <small id="nik_anak5_error" class="pl-2" style="color: red;"></small>
                </div>
            
                <div class="form-group col-sm-6 col-12">
                    <label for="nama_anak5">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_anak5" id="nama_anak5">
                    <small id="nama_anak5_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk_anak5" id="jk_anak5" value="Laki-laki" checked>
                        <label class="form-check-label" for="laki-laki">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk_anak5" id="perempuan" value="Perempuan">
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-12">
                    <label for="tl_anak5">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tl_anak5" id="tl_anak5">
                    <small id="tl_anak5_error" class="pl-2" style="color: red;"></small>
                </div>
                <div class="form-group col-sm-4 col-12">
                    <label for="tll_anak5">Tanggal</label>
                    <input class="form-control" type="date" name="tll_anak5" id="tll_anak5">
                    <small id="tll_anak5_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-12">
                    <label for="agama" class="col-form-label">Agama</label>
                    <select class="form-control" name="agama_anak5" id="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            
                <div class="form-group col-sm-6 col-12">
                    <label for="pendidikan_anak5" class="col-form-label">Pendidikan</label>
                    <select class="form-control" name="pendidikan_anak5" id="pendidikan_anak5">
                        <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                        <option value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                        <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                        <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                        <option value="DIPLOMA I">DIPLOMA I</option>
                        <option value="DIPLOMA II">DIPLOMA II</option>
                        <option value="DIPLOMA III">DIPLOMA III</option>
                        <option value="DIPLOMA IV">DIPLOMA IV</option>
                        <option value="STRATA I">STRATA I</option>
                        <option value="STRATA II">STRATA II</option>
                        <option value="STRATA III">STRATA III</option>
                    </select>
                </div>
            </div>
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-12 col-12">
                    <label for="pekerjaan_anak5">pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan_anak5" id="pekerjaan_anak5">
                    <small id="pekerjaan_anak5_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>     
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-12 col-12">
                    <label for="status_perkawinan_anak5" class="col-form-label">Status Perkawinan</label>
                    <select class="form-control" name="status_perkawinan_anak5" id="status_perkawinan_anak5">
                        <option value="Kawin">Kawin</option>
                        <option value="Belum Kawin">Belum Kawin</option>
                    </select>
                </div>
            </div>     
        </div>
</div>
        <div id="bayi" class="pb-3 mb-5 p-sm-5" style="display: none;">
            <!-- Anak -->
            <div class="col-12 pt-1 rounded bg-dark mb-2">
                <h5 class="text-center text-info"><b>Data Anak Baru Lahir</b></h5>
                <small class="text-secondary"> Isi data dibawah berdasarkan Surat Keterangan Lahir</small>
            </div>
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-12 col-12">
                    <label for="nama_anak">Nama Bayi/Anak</label>
                    <input type="text" class="form-control" name="nama_anak" id="nama_anak" class="required">
                    <small id="nama_anak_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            <div class="form-row mb-1  pl-sm-5 pr-sm-5 mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk_anak" id="jk_anak" value="Laki-laki" checked>
                        <label class="form-check-label" for="laki-laki">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk_anak" id="perempuan" value="Perempuan">
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-12 col-12">
                    <label for="tempat_lahir">Tempat Kelahiran</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" class="required">
                    <small id="tempat_lahir_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            <div class="form-row mb-1  pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-12">
                    <label for="hari" >Hari</label>
                    <select class="form-control" name="hari" id="hari">
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jum'at</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                    </select>
                </div>
                <div class="form-group col-sm-6 col-12">
                    <label for="tll_anak">Tanggal Lahir</label>
                    <input class="form-control" type="date" name="tll_anak" id="tll_anak" class="required">
                    <small id="tll_anak_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            <div class="form-row mb-1 pl-sm-5 pr-sm-5" >
                <div class="form-group col-sm-6 col-12 is-valid">
                    <label for="pukul" class="col-form-label">Pukul</label>
                    <input class="form-control" type="time" name="pukul" id="pukul" class="required">
                    <small id="pukul_error" class="pl-2" style="color: red;"></small>
                </div>
            
                <div class="form-group col-sm-6 col-12">
                    <label for="tempat_dilahirkan" class="col-form-label">Tempat Dilahirkan</label>
                    <select class="form-control" name="tempat_dilahirkan" id="tempat_dilahirkan" class="required">
                        <small id="_error" class="pl-2" style="color: red;"></small>
                        <option value="RS/RSB">RS/RSB</option>
                        <option value="Puskesmas">Puskesmas</option>
                        <option value="Polindes">Polindes</option>
                        <option value="Rumah">Rumah</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="form-row mb-1 pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-12">
                    <label for="jenis_kelahiran">jenis kelahiran</label>
                    <select class="form-control" name="jenis_kelahiran" id="jenis_kelahiran">
                        <option value="Tunggal">Tunggal</option>
                        <option value="Kembar 2">Kembar2</option>
                        <option value="Kembar 3">Kembar3</option>
                        <option value="Kembar 4">Kembar4</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="form-group col-sm-6 col-12">
                    <label for="anak_ke">Anak Ke</label>
                    <input type="text" class="form-control" name="anak_ke" id="anak_ke" class="required">
                    <small id="anak_ke_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
            
            <div class="form-row mb-1 pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-12 col-12">
                    <label for="penolong_kelahiran" class="col-form-label">Penolong kelahiran</label>
                    <select class="form-control" name="penolong_kelahiran" id="penolong_kelahiran">
                        <option value="Dokter">Dokter</option>
                        <option value="Bidan/Perawat">Bidan/Perawat</option>
                        <option value="Dukun">Dukun</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="form-row mb-1 pl-sm-5 pr-sm-5">
                <div class="form-group col-sm-6 col-6">
                    <label for="berat">Berat (Kg)</label>
                    <input type="text" class="form-control" name="berat" id="berat" class="required">
                    <small id="berat_error" class="pl-2" style="color: red;"></small>
                </div>
                <div class="form-group col-sm-6 col-6">
                    <label for="tinggi">Tinggi (Cm)</label>
                    <input type="text" class="form-control" name="tinggi" id="tinggi" class="required">
                    <small id="tinggi_error" class="pl-2" style="color: red;"></small>
                </div>
            </div>
        </div>
        
        <div id="berkas" style="display: none;">
            <div class="form-group mb-3">
                <label class="col-sm-5 col-form-label">Foto KTP Ayah*</label>
                <input type="file" class="col-sm-4 col-9" name="ktp_ayah" id="ktp_ayah" required>
                <small class="text-secondary ml-3 row">Foto Harus Berformat(JPG/JPEG/PNG) dengan Ukuran Maksimal 1 MB</small>
            </div>
            <div class="form-group mb-3">
                <label class="col-sm-5 col-form-label">Foto KTP Ibu*</label>
                <input type="file" class="col-sm-4 col-9" name="ktp_ibu" id="ktp_ibu" required>
                <small class="text-secondary ml-3 row">Foto Harus Berformat(JPG/JPEG/PNG) dengan Ukuran Maksimal 1 MB</small>
            </div>
            <div class="form-group mb-3">
                <label class="col-sm-5 col-form-label">Foto Kartu Keluarga Sekarang*</label>
                <input type="file" class="col-sm-4 col-9" name="kk" id="kk" required>
                <small class="text-secondary ml-3 row">Foto Harus Berformat(JPG/JPEG/PNG) dengan Ukuran Maksimal 1 MB</small>
            </div>
            <div class="form-group mb-3">
                <label class="col-sm-5 col-form-label">Upload Foto Buku NIkah/ Akte Nikah*</label>
                <input type="file" class="col-sm-4 col-9" name="buku_nikah" id="buku_nikah" required>
                <small class="text-secondary ml-3 row">Foto Harus Berformat(JPG/JPEG/PNG) dengan Ukuran Maksimal 1 MB</small>
            </div>
            <div class="form-group mb-3">
                <label class="col-sm-5 col-form-label">Upload Foto Surat Keterangan Kelahiran dari Rumah Sakit*</label>
                <input type="file" class="col-sm-4 col-9" name="ket_lahir" id="ket_lahir" required>
                <small class="text-secondary ml-3 row">Foto Harus Berformat(JPG/JPEG/PNG) dengan Ukuran Maksimal 1 MB</small>
            </div>

            <div class="form-row mb-sm-3 mb-5 mt-5">
                <div class="form-group col-sm-8">
                    <center><button type="submit" class="btn btn-primary" name="kirim">Kirim Laporan</button></center>
                </div>
            </div>
        </div>
        <div class="navigasi d-flex mb-sm-3 mb-5 ">
            <div class="mr-auto">
                <button type="button" id="prev" style="display: none;" class="btn btn-sm btn-secondary">Kembali</button>
            </div>
            <div class="ml-auto">
                <button type="button" id="next" class="btn btn-sm btn-success">Selanjutnya >></button>
            </div>
        </div>

</form>
    
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
<script src="admin\assets\jquery\val.lapor_lahir.js"></script>
<script src="admin\assets\js\lapor_lahir\admin.js"></script>

