<?php

$conn = mysqli_connect("localhost","root","","kuburiko");

if(!$conn){
    echo "gagal terkoneksi";
}

function alamat($desa_kelurahan,$kecamatan,$kabupaten,$provinsi){

    return "$desa_kelurahan, $kecamatan, $kabupaten, $provinsi";
}

function tambah_kk($data){
    global $conn;


    $nomor_kk       = htmlspecialchars($data["nomor_kk"]);
    $rt             = htmlspecialchars($data["rt"]);
    $rw             = htmlspecialchars($data["rw"]);
    $desa_kelurahan = htmlspecialchars($data["desa_kelurahan"]);
    $kecamatan      = htmlspecialchars($data["kecamatan"]);
    $kabupaten      = htmlspecialchars($data["kabupaten"]);
    $provinsi       = htmlspecialchars($data["provinsi"]);
    $kode_pos       = htmlspecialchars($data["kode_pos"]);

     mysqli_query($conn, "INSERT INTO kartu_keluarga VALUES(
        
         '$nomor_kk','$rt','$rw','$desa_kelurahan','$kecamatan','$kabupaten','$provinsi','$kode_pos'

    )");

}
function tambah_penduduk($data){
    global $conn;



    $nik_ayah                   = htmlspecialchars($data["nik_ayah"]);
    $no_kk                      = htmlspecialchars($data["nomor_kk"]);
    $nama_ayah                  = htmlspecialchars($data["nama_ayah"]);
    $jk_ayah                    = "Laki-laki";
    $tl_ayah                    = htmlspecialchars($data["tl_ayah"]);
    $tll_ayah                   = htmlspecialchars($data["tll_ayah"]);
    $agama_ayah                 = htmlspecialchars($data["agama_ayah"]);
    $pendidikan_ayah            = htmlspecialchars($data["pendidikan_ayah"]);
    $pekerjaan_ayah             = htmlspecialchars($data["pekerjaan_ayah"]);
    $status_perkawinan_ayah     = "Kawin";
    $status_dlm_keluarga_ayah   = "Kepala Keluarga";
    $nama_ayah_ayah             = htmlspecialchars($data["nama_ayah_ayah"]);
    $nama_ibu_ayah              = htmlspecialchars($data["nama_ibu_ayah"]);
    $alamat                     = alamat(htmlspecialchars($data["desa_kelurahan"]),htmlspecialchars($data["kecamatan"]),
                                         htmlspecialchars($data["kabupaten"]),htmlspecialchars($data["provinsi"]));

    
     mysqli_query($conn, "INSERT INTO data_penduduk VALUES(
        
        NULL,'$nik_ayah','$no_kk','$nama_ayah','$jk_ayah','$tl_ayah','$tll_ayah','$agama_ayah',
        '$pendidikan_ayah','$pekerjaan_ayah','$alamat','$status_perkawinan_ayah','$status_dlm_keluarga_ayah',
        '$nama_ayah_ayah','$nama_ibu_ayah'

)");
    $nik_istri                  = htmlspecialchars($data["nik_istri"]);
    $no_kk                      = htmlspecialchars($data["nomor_kk"]);
    $nama_istri                 = htmlspecialchars($data["nama_istri"]);
    $jk_istri                   = "Perempuan";
    $tl_istri                   = htmlspecialchars($data["tl_istri"]);
    $tll_istri                  = htmlspecialchars($data["tll_istri"]);
    $agama_istri                = htmlspecialchars($data["agama_istri"]);
    $pendidikan_istri           = htmlspecialchars($data["pendidikan_istri"]);
    $pekerjaan_istri            = htmlspecialchars($data["pekerjaan_istri"]);
    $status_perkawinan_istri    = "Kawin";
    $status_dlm_keluarga_istri  = "Istri";
    $nama_ayah_istri            = htmlspecialchars($data["nama_ayah_istri"]);
    $nama_ibu_istri             = htmlspecialchars($data["nama_ibu_istri"]);
    
     mysqli_query($conn, "INSERT INTO data_penduduk VALUES(
        
        NULL,'$nik_istri','$no_kk','$nama_istri','$jk_istri','$tl_istri','$tll_istri','$agama_istri',
        '$pendidikan_istri','$pekerjaan_istri','$alamat','$status_perkawinan_istri','$status_dlm_keluarga_istri',
        '$nama_ayah_istri','$nama_ibu_istri'

)");


for($i=1; $i<=5; $i++){
    $anak_nik               = htmlspecialchars($data["nik_anak".$i]);
    $anak_nama              = htmlspecialchars($data["nama_anak".$i]);
    $anak_jk                = htmlspecialchars($data["jk_anak".$i]);
    $anak_tl                = htmlspecialchars($data["tl_anak".$i]);
    $anak_tll               = htmlspecialchars($data["tll_anak".$i]);
    $anak_agama             = htmlspecialchars($data["agama_anak".$i]);
    $anak_pekerjaan         = htmlspecialchars($data["pekerjaan_anak".$i]);
    $anak_pendidikan        = htmlspecialchars($data["pendidikan_anak".$i]);
    $anak_status_perkawinan = htmlspecialchars($data["status_perkawinan_anak".$i]);
    
    if($anak_nik != null){
        
        mysqli_query($conn,  "INSERT INTO data_penduduk VALUES(
        NULL,'$anak_nik', '$no_kk', '$anak_nama', '$anak_jk', '$anak_tl', '$anak_tll', '$anak_agama', '$anak_pendidikan',
        '$anak_pekerjaan','$alamat', '$anak_status_perkawinan', 'anak', '$nama_ayah', '$nama_istri'
        )");
    }
    

}



   

}

function tambah_lapor_lahir($data){
    global $conn;


    if(query("SELECT MAX(id) FROM lapor_lahir")[0] !== null){
        $urutan = query("SELECT MAX(id) FROM lapor_lahir")[0];
        var_dump($urutan);
        $urut = $urutan["MAX(id)"];
    }
    else{
        $urut = null;
    }

    // $urutan  = query("SELECT MAX(id) FROM lapor_lahir")[0];

    // $urut  = $urutan["MAX(id)"];

        if($urut == null){
            $urut       =  1;
            $no_registrasi  = "LPL" . str_pad($urut, 3, "0", STR_PAD_LEFT);
        }
        else if($urut !== null){
            $urut  += 1;
            $no_registrasi  = "LPL" . str_pad($urut, 3, "0", STR_PAD_LEFT);
        }
            
        
 
    $no_kk              = htmlspecialchars($data["nomor_kk"]);

    $nama_anak          = htmlspecialchars($data["nama_anak"]);
    $jk_anak            = htmlspecialchars($data["jk_anak"]);
    $tempat_dilahirkan  = htmlspecialchars($data["tempat_dilahirkan"]);
    $tempat_lahir       = htmlspecialchars($data["tempat_lahir"]);
    $hari               = htmlspecialchars($data["hari"]);
    $tll_anak           = htmlspecialchars($data["tll_anak"]);
    $pukul              = htmlspecialchars($data["pukul"]);
    $jenis_kelahiran    = htmlspecialchars($data["jenis_kelahiran"]);
    $anak_ke            = htmlspecialchars($data["anak_ke"]);
    $penolong_kelahiran = htmlspecialchars($data["penolong_kelahiran"]);
    $berat              = htmlspecialchars($data["berat"]);
    $tinggi             = htmlspecialchars($data["tinggi"]);

    $nik_ayah           = htmlspecialchars($data["nik_ayah"]);
    $nama_ayah          = htmlspecialchars($data["nama_ayah"]);
    $tll_ayah           = htmlspecialchars($data["tll_ayah"]);
    $pekerjaan_ayah     = htmlspecialchars($data["pekerjaan_ayah"]);
    $alamat_ayah        = alamat(htmlspecialchars($data["desa_kelurahan"]),htmlspecialchars($data["kecamatan"]),
                          htmlspecialchars($data["kabupaten"]),htmlspecialchars($data["provinsi"]));
    
    $nik_ibu            = htmlspecialchars($data["nik_istri"]);
    $nama_ibu           = htmlspecialchars($data["nama_istri"]);
    $tl_ibu             = htmlspecialchars($data["tl_istri"]);
    $tll_ibu            = htmlspecialchars($data["tll_istri"]);
    $pekerjaan_ibu      = htmlspecialchars($data["pekerjaan_istri"]);
    $alamat_ibu         = alamat(htmlspecialchars($data["desa_kelurahan"]),htmlspecialchars($data["kecamatan"]),
                          htmlspecialchars($data["kabupaten"]),htmlspecialchars($data["provinsi"]));
    $tgl_pernikahan     = htmlspecialchars($data["tgl_pernikahan"]);

    $nik_pelapor        = htmlspecialchars($data["nik_ayah"]);
    $nama_pelapor       = htmlspecialchars($data["nama_ayah"]);
    $umur_pelapor       = htmlspecialchars($data["anak_ke"]);
    $jk_pelapor         = htmlspecialchars($data["jk_anak"]);
    $pekerjaan_pelapor  = htmlspecialchars($data["pekerjaan_ayah"]);
    $alamat_pelapor     = alamat(htmlspecialchars($data["desa_kelurahan"]),htmlspecialchars($data["kecamatan"]),
                          htmlspecialchars($data["kabupaten"]),htmlspecialchars($data["provinsi"]));

    $ktp_ayah    = upload('ktp_ayah');
        if($ktp_ayah === "kosong"){
            echo "<script>
                        alert('Foto KTP Ayah Kosong');
                </script>";
            return false;
        }else if($ktp_ayah === "ekstensi"){
            echo "<script>
                        alert('Ekstensi File KTP Ayah Tidak Sesuai!');
                </script>";
            return false;
        }else if($ktp_ayah === "ukuran"){
            echo "<script>
                        alert('Ukuran File Foto KTP Ayah Tidak Sesuai!');
                </script>";
            return false;
        }
    $ktp_ibu     = upload('ktp_ibu');
        if($ktp_ibu === "kosong"){
            echo "<script>
                        alert('Foto KTP Ibu Kosong');
                </script>";
            return false;
        }else if($ktp_ibu === "ekstensi"){
            echo "<script>
                        alert('Ekstensi File KTP Ibu Tidak Sesuai!');
                </script>";
            return false;
        }else if($ktp_ibu === "ukuran"){
            echo "<script>
                        alert('Ukuran File Foto KTP Ibu Tidak Sesuai!');
                </script>";
            return false;
        }
    $kk          = upload('kk');
        if($kk === "kosong"){
            echo "<script>
                        alert('Foto Kartu Keluarga Kosong');
                </script>";
            return false;
        }else if($kk === "ekstensi"){
            echo "<script>
                        alert('Ekstensi File Kartu Keluarga Tidak Sesuai!');
                </script>";
            return false;
        }else if($kk === "ukuran"){
            echo "<script>
                        alert('Ukuran File Foto Kartu Keluarga Tidak Sesuai!');
                </script>";
            return false;
        }
    $buku_nikah  = upload('buku_nikah');
        if($buku_nikah === "kosong"){
            echo "<script>
                        alert('Foto Buku Nikah Kosong');
                </script>";
            return false;
        }else if($buku_nikah === "ekstensi"){
            echo "<script>
                        alert('Ekstensi File Buku Nikah Tidak Sesuai!');
                </script>";
            return false;
        }else if($buku_nikah === "ukuran"){
            echo "<script>
                        alert('Ukuran File Foto Buku Nikah Tidak Sesuai!');
                </script>";
            return false;
        }
    $ket_lahir   = upload('ket_lahir');
        if($ket_lahir === "kosong"){
            echo "<script>
                        alert('Foto Surat Keterangan Lahir Kosong');
                </script>";
            return false;
        }else if($ket_lahir === "ekstensi"){
            echo "<script>
                        alert('Ekstensi File Surat Keterangan Lahir Tidak Sesuai!');
                </script>";
            return false;
        }else if($ket_lahir === "ukuran"){
            echo "<script>
                        alert('Ukuran File Foto Surat Keterangan Lahir Tidak Sesuai!');
                </script>";
            return false;
        }
    


     mysqli_query($conn, "INSERT INTO lapor_lahir VALUES(
        NULL,'$no_registrasi',now(),'$no_kk','$tgl_pernikahan',
        '$nama_anak','$jk_anak','$tempat_dilahirkan','$tempat_lahir','$hari','$tll_anak','$pukul','$jenis_kelahiran','$anak_ke','$penolong_kelahiran','$berat','$tinggi',
        '$ktp_ayah','$ktp_ibu', '$kk', '$buku_nikah','$ket_lahir','penduduk'

)");

        if(mysqli_affected_rows($conn) > 0){
            echo "<script>
                    alert('Laporan Telah Terkirim');
                    document.location.href = 'index.php?page=selesai_lapor&noreg=$no_registrasi';
        </script>";
        }else{
            echo "Data gagal ditambahkan" . "<br><br>";
            echo mysqli_error($conn);
        }
        
        tambah_kk($data);
        tambah_penduduk($data);
}


function tambah_lapor_mati($data){
    global $conn;


   

    $urutan  = query("SELECT MAX(id) FROM lapor_mati")[0];
    $urut  = $urutan["MAX(id)"];

        if($urut == null){
            $urut       =  1;
            
            $no_registrasi  = "LPM" . str_pad($urut, 3, "0", STR_PAD_LEFT);
        }
        else if($urut !== null){
            $urut  += 1;
            $no_registrasi  = "LPM" . str_pad($urut, 3, "0", STR_PAD_LEFT);
        }
        

    $nik_pelapor        = htmlspecialchars($data["nik_pelapor"]);
    $nama_pelapor       = htmlspecialchars($data["nama_pelapor"]);
    $jk_pelapor         = htmlspecialchars($data["jk_pelapor"]);
    $tl_pelapor         = htmlspecialchars($data["tl_pelapor"]);
    $tll_pelapor        = htmlspecialchars($data["tll_pelapor"]);
    $umur_pelapor       = htmlspecialchars($data["umur_pelapor"]);
    $pekerjaan_pelapor  = htmlspecialchars($data["pekerjaan_pelapor"]);
    $pertalian          = htmlspecialchars($data["pertalian"]);
    $alamat_pelapor     = alamat(htmlspecialchars($data["desa_kelurahan_pelapor"]),htmlspecialchars($data["kecamatan_pelapor"]),
                                 htmlspecialchars($data["kabupaten_pelapor"]),htmlspecialchars($data["provinsi_pelapor"]));
    
    $no_kk              = htmlspecialchars($data["nomor_kk"]);
    $nik_simati         = htmlspecialchars($data["nik_simati"]);
    $nama_simati        = htmlspecialchars($data["nama_simati"]);
    $jk_simati          = htmlspecialchars($data["jk_simati"]);
    $tl_simati          = htmlspecialchars($data["tempat_lahir_simati"]);
    $tll_simati         = htmlspecialchars($data["tll_simati"]);
    $pekerjaan_simati   = htmlspecialchars($data["pekerjaan_simati"]);
    $agama_simati       = htmlspecialchars($data["agama_simati"]);
    $alamat_simati      = alamat(htmlspecialchars($data["desa_kelurahan_simati"]),htmlspecialchars($data["kecamatan_simati"]),
                                 htmlspecialchars($data["kabupaten_simati"]),htmlspecialchars($data["provinsi_simati"]));
    $meninggal_di       = htmlspecialchars($data["meninggal_di"]);
    $hari               = htmlspecialchars($data["hari"]);
    $tgl_meninggal      = htmlspecialchars($data["tgl_meninggal"]);
    $pukul              = htmlspecialchars($data["pukul"]);
    $penyebab_kematian  = htmlspecialchars($data["penyebab_kematian"]);
    $bukti_kematian     = htmlspecialchars($data["bukti_kematian"]);

    $ktp_simati      = upload('ktp_simati');
        if($ktp_simati === "kosong"){
            echo "<script>
                        alert('Foto KTP Simati Kosong');
                </script>";
            return false;
        }else if($ktp_simati === "ekstensi"){
            echo "<script>
                        alert('Ekstensi File KTP Simati Tidak Sesuai!');
                </script>";
            return false;
        }else if($ktp_simati === "ukuran"){
            echo "<script>
                        alert('Ukuran File Foto KTP Simati Tidak Sesuai!');
                </script>";
            return false;
        }
    $kk              = upload('kk');
        if($kk === "kosong"){
            echo "<script>
                        alert('Foto Kartu Keluarga Kosong');
                </script>";
            return false;
        }else if($kk === "ekstensi"){
            echo "<script>
                        alert('Ekstensi File Kartu Keluarga Tidak Sesuai!');
                </script>";
            return false;
        }else if($kk === "ukuran"){
            echo "<script>
                        alert('Ukuran File Foto Kartu Keluarga Tidak Sesuai!');
                </script>";
            return false;
        }
    $ktp_pelapor     = upload('ktp_pelapor');
        if($ktp_pelapor === "kosong"){
            echo "<script>
                        alert('Foto KTP Pelapor Kosong');
                </script>";
            return false;
        }else if($ktp_pelapor === "ekstensi"){
            echo "<script>
                        alert('Ekstensi File KTP Pelapor Tidak Sesuai!');
                </script>";
            return false;
        }else if($ktp_pelapor === "ukuran"){
            echo "<script>
                        alert('Ukuran File Foto KTP Pelapor Tidak Sesuai!');
                </script>";
            return false;
        }
    $akta_kelahiran  = upload('akta_kelahiran');
        if($akta_kelahiran === "kosong"){
            echo "<script>
                        alert('Foto Akta Kelahiran Kosong');
                </script>";
            return false;
        }else if($akta_kelahiran === "ekstensi"){
            echo "<script>
                        alert('Ekstensi File Akta Kelahiran Tidak Sesuai!');
                </script>";
            return false;
        }else if($akta_kelahiran === "ukuran"){
            echo "<script>
                        alert('Ukuran File Foto Akta Kelahiran Tidak Sesuai!');
                </script>";
            return false;
        }
    $ket_kematian    = upload('ket_kematian');
        if($ket_kematian === "kosong"){
            echo "<script>
                        alert('Foto Surat Keterangan Kematian Kosong');
                </script>";
            return false;
        }else if($ket_kematian === "ekstensi"){
            echo "<script>
                        alert('Ekstensi File Surat Keterangan Kematian Tidak Sesuai!');
                </script>";
            return false;
        }else if($ket_kematian === "ukuran"){
            echo "<script>
                        alert('Ukuran File Foto Surat Keterangan Kematian Tidak Sesuai!');
                </script>";
            return false;
        }



     mysqli_query($conn, "INSERT INTO lapor_mati VALUES(
        NULL,'$no_registrasi',now(),'$nik_pelapor','$nama_pelapor','$jk_pelapor','$tl_pelapor','$tll_pelapor','$umur_pelapor','$pekerjaan_pelapor','$pertalian','$alamat_pelapor',
        '$no_kk','$nik_simati','$nama_simati','$jk_simati','$tl_simati','$tll_simati','$pekerjaan_simati','$agama_simati','$alamat_simati',
        '$meninggal_di','$hari','$tgl_meninggal','$pukul','$penyebab_kematian','$bukti_kematian',
        '$ktp_simati','$kk','$ktp_pelapor','$akta_kelahiran','$ket_kematian','penduduk'

    )");

        if(mysqli_affected_rows($conn) > 0){
            echo "<script>
                alert('Laporan Telah Terkirim');
                document.location.href = 'index.php?page=selesai_lapor&noreg=$no_registrasi';
                </script>";
        }else{
            echo "Data gagal ditambahkan" . "<br><br>";
            echo mysqli_error($conn);
        }

        tambah_penduduk($data);
        tambah_kk($data);
}

     function upload($files){
        $namaFile   = $_FILES[$files]['name'];
        $ukuranFile = $_FILES[$files]['size'];
        $tmpFile    = $_FILES[$files]['tmp_name'];
        $error      = $_FILES[$files]['error'];
        

    
        //cek apakah tidak ada gambar yang diupload
        if($error === 4){
                return "kosong";
        }
    
        //cek apakah yang diupload adalah gambar
        $ekstensiGambarValid = ['jpg','jpeg','png'];
        $ekstensiGambar = explode('.',$namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
    
        if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
            return "ekstensi";
        }
        
        //cek apakah ukurannya terlalu besar 
        if($ukuranFile > 1000000 || $ukuranFile === 0){
                return "ukuran";
        }
        //generate nama file
        $namaFileBaru = uniqid();
        $namaFileBaru .= $ekstensiGambar;
        
    
        //upload file
        move_uploaded_file($tmpFile,'admin/assets/berkas/'.$namaFileBaru);
        
        return $namaFileBaru;
    }





     function read_lapor_lahir($query){
        global $conn;

        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
        
     }
     function read_lapor_mati($query){
        global $conn;

        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
        
     }




    function approve_lahir_kel($no_regis){
        global $conn;

        $no_reg = $no_regis;

        mysqli_query($conn, "UPDATE lapor_lahir SET status='kelurahan' WHERE no_registrasi='$no_reg'");
        echo "<script>
                alert('Laporan $no_reg Telah Disetujui');
                document.location.href = 'index.php?page=lapor_lahir';
        </script>";
    }
    function approve_mati_kel($no_regis){
        global $conn;

        $no_reg = $no_regis;

        mysqli_query($conn, "UPDATE lapor_mati SET status='kelurahan' WHERE no_registrasi='$no_reg'");
        echo "<script>
                alert('Laporan $no_reg Telah Disetujui');
                document.location.href = 'index.php?page=lapor_mati';
        </script>";
        
    }

    function approve_lahir_rs($no_regis){
        global $conn;

        $no_reg = $no_regis;

        mysqli_query($conn, "UPDATE lapor_lahir SET status='rs_puskesmas' WHERE no_registrasi='$no_reg'");
        echo "<script>
                alert('Laporan $no_reg Telah Disetujui');
                document.location.href = 'index.php?page=lapor_lahir';
        </script>";
    }
    function  rs_tolak_lapor_lahir($no_reg){
        global $conn;
        mysqli_query($conn, "UPDATE lapor_lahir SET status='rs_tolak' WHERE no_registrasi='$no_reg'");

        echo "<script>
                alert('Laporan $no_reg Ditolak');
                document.location.href = 'index.php?page=lapor_lahir';
        </script>";
    }
    function  kel_tolak_lapor_lahir($no_reg){
        global $conn;
        mysqli_query($conn, "UPDATE lapor_lahir SET status='kelurahan_tolak' WHERE no_registrasi='$no_reg'");

        echo "<script>
                alert('Laporan $no_reg Ditolak');
                document.location.href = 'index.php?page=lapor_lahir';
        </script>";
    }
    function  rs_tolak_lapor_mati($no_reg){
        global $conn;
        mysqli_query($conn, "UPDATE lapor_mati SET status='rs_tolak' WHERE no_registrasi='$no_reg'");

        echo "<script>
                alert('Laporan $no_reg Ditolak');
                document.location.href = 'index.php?page=lapor_mati';
        </script>";
    }
    function  kel_tolak_lapor_mati($no_reg){
        global $conn;
        mysqli_query($conn, "UPDATE lapor_mati SET status='kelurahan_tolak' WHERE no_registrasi='$no_reg'");

        echo "<script>
                alert('Laporan $no_reg Ditolak');
                document.location.href = 'index.php?page=lapor_mati';
        </script>";
    }
    
    function approve_mati_rs($no_regis){
        global $conn;

        $no_reg = $no_regis;

        mysqli_query($conn, "UPDATE lapor_mati SET status='rs_puskesmas' WHERE no_registrasi='$no_reg'");
        echo "<script>
                alert('Laporan $no_reg Telah Disetujui');
                document.location.href = 'index.php?page=lapor_mati';
        </script>";
    }


    function approve_lahir($no_reg,$kode_dokumen){
        global $conn;

        //approve laporan
        mysqli_query($conn, "UPDATE lapor_lahir SET status='capil' WHERE no_registrasi='$no_reg'");

        //buat nik baru
            $data = query("SELECT * FROM lapor_lahir WHERE no_registrasi = '$no_reg'")[0];

            $no_kk = $data["no_kk"];

            $data1 = query("SELECT max(nik) FROM data_penduduk WHERE no_kk = '$no_kk' and status_dalam_keluarga = 'Anak'")[0];

            $nik_anak_terakhir = $data1["max(nik)"];

            $urutan_nik = substr($nik_anak_terakhir, 12, 4);

                $urut       = (int) $urutan_nik;
                $urut       = $urut + 1;
                $urut       = str_pad($urut, 4, "0", STR_PAD_LEFT);
                
                
                $tgl = substr($data["tgl_lahir_anak"],8,2);
                $bln = substr($data["tgl_lahir_anak"],5,2);
                $thn = substr($data["tgl_lahir_anak"],2,2);
                
                $nilaikode  = substr($no_kk, 0, 6);
                $nilaikode .= $tgl.$bln.$thn;
                
                $nik_baru  = $nilaikode . $urut;
        
        //masukkan bayi ke data penduduk

        $data_kk    = query("SELECT * FROM kartu_keluarga WHERE nomor_kk = '$no_kk'")[0];

        $nama       = $data["nama_bayi"];
        $jk         = $data["jk_bayi"];
        $tl         = $data["tempat_kelahiran"];
        $tll        = $data["tgl_lahir_anak"];
        $agama      = query("SELECT agama FROM data_penduduk WHERE no_kk = '$no_kk' AND status_dalam_keluarga = 'Kepala Keluarga'")[0]["agama"];
        $alamat     = alamat($data_kk["desa_kelurahan"],$data_kk["kecamatan"],
                             $data_kk["kabupaten"],$data_kk["provinsi"]);
        $ayah       = query("SELECT nama FROM data_penduduk WHERE no_kk = '$no_kk' AND status_dalam_keluarga = 'Kepala Keluarga'")[0]["nama"];
        $ibu       = query("SELECT nama FROM data_penduduk WHERE no_kk = '$no_kk' AND status_dalam_keluarga = 'Istri'")[0]["nama"];


        $query = "INSERT INTO data_penduduk VALUES(
                NULL,'$nik_baru','$no_kk','$nama','$jk','$tl','$tll','$agama','TIDAK/BELUM SEKOLAH',
                'TIDAK/BELUM BEKERJA','$alamat','BELUM KAWIN','Anak','$ayah','$ibu'
        )";

        mysqli_query($conn,$query);


        //tambah ke akta kelahiran 
        $anak_ke        = $data["anak_ke"];
        $kodeDokumen    = $kode_dokumen["kode_dokumen"];
        $no_akta        = $kode_dokumen["no_akta"];
        $no_stbld       = $kode_dokumen["no_stbld"];
        
        
        
        $query_tambah_akta = "INSERT INTO akta_kelahiran VALUES(
                '$no_akta','$kodeDokumen','$no_stbld','$no_reg','$nik_baru','$no_kk','$nama','$anak_ke','$jk','$tl','$tll','$ayah','$ibu'
        )";

        mysqli_query($conn, $query_tambah_akta);
        echo "<script>
                alert('Laporan $no_reg Telah Di Approve');
                document.location.href = 'index.php?page=kelahiran_approved';
        </script>";

    }
    function  tolak_lapor_lahir($no_reg){
        global $conn;
        mysqli_query($conn, "UPDATE lapor_lahir SET status='capil_tolak' WHERE no_registrasi='$no_reg'");

        echo "<script>
                alert('Laporan $no_reg Ditolak');
                document.location.href = 'index.php?page=daftar_kelahiran';
        </script>";
    }
    function  tolak_lapor_mati($no_reg){
        global $conn;
        mysqli_query($conn, "UPDATE lapor_mati SET status='capil_tolak' WHERE no_registrasi='$no_reg'");

        echo "<script>
                alert('Laporan $no_reg Ditolak');
                document.location.href = 'index.php?page=daftar_kematian';
        </script>";
    }

    function approve_mati($no_regis, $kode_dokumen){
        global $conn;
        

        $no_reg = $no_regis;


        mysqli_query($conn, "UPDATE lapor_mati SET status='capil' WHERE no_registrasi='$no_reg'");
        $dt_laporan = query("SELECT * FROM lapor_mati WHERE no_registrasi = '$no_reg'")[0];


        $nik_simati = $dt_laporan["nik_simati"];

        $dt_simati = query("SELECT * FROM data_penduduk WHERE nik = '$nik_simati'")[0];

        $no_kk      = $dt_simati["no_kk"];


        if($dt_simati["status_dalam_keluarga"] == 'Kepala Keluarga'){
            mysqli_query($conn, "UPDATE data_penduduk SET status_dalam_keluarga = 'Kepala Keluarga' WHERE 
            status_dalam_keluarga = 'Istri' AND no_kk = '$no_kk'");
        }

        mysqli_query($conn, "DELETE FROM data_penduduk WHERE nik='$nik_simati'");

        //insert to akta kematian
        
        $nama               = $dt_laporan["nama_simati"];
        $tempat_meninggal   = $dt_laporan["meninggal_di"];
        $tanggal_meninggal  = $dt_laporan["tanggal_kematian"];
        $tempat_lahir       = $dt_laporan["tempat_lahir_simati"];
        $tanggal_lahir      = $dt_laporan["tgl_lahir_simati"];
        $nomor_akta         = $kode_dokumen["no_akta"];
        $kodeDokumen        = $kode_dokumen["kode_dokumen"];
        $no_stbld           = $kode_dokumen["no_stbld"];


        $query = "INSERT INTO akta_kematian VALUES(
            NULL,'$nomor_akta','$kodeDokumen','$no_stbld','$no_reg',
            '$nik_simati','$nama','$tanggal_lahir','$tempat_meninggal','$tanggal_meninggal','$tempat_lahir'
            )";

        mysqli_query($conn, $query);

        header("Location: index.php?page=kematian_approved");
        



    }


    function query($query){
        global $conn;

        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

     
    function read_data_penduduk($query){
        global $conn;

        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

?>d