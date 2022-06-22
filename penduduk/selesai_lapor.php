<?php

    include 'admin/function.php';

    $noreg;

    if(isset($_GET["noreg"])){
        $noreg = $_GET["noreg"];
        $status = "<span class='text-success'>
        Dokumen Dengan Nomor Registrasi <b>$noreg</b> Sedang Dalam Proses Verifikasi Data Dan Kelengkapan Dokumen Oleh Petugas RS/Puskesmas
        </span>";
    }

    if(isset($_POST["cari"])){
        $key  = $_POST["noreg"];
        $cari = substr($_POST["noreg"],0,3);
        $status;

        if($cari == "LPM"){
            if(($result = query("SELECT status FROM lapor_mati WHERE no_registrasi = '$key'"))==false){
                $noreg = "";
                $status = "<span class='text-warning'>Nomor Registrasi Yang Anda Masukkan Tidak Ditemukan</span>";    
            }
        }elseif($cari == "LPL"){
            if(($result = query("SELECT status FROM lapor_lahir WHERE no_registrasi = '$key'"))==false){
                $noreg = "";
                $status = "<span class='text-warning'>Nomor Registrasi Yang Anda Masukkan Tidak Ditemukan</span>";    
            }
        }else{
            $noreg = "";
            $status = "<span class='text-warning'>Nomor Registrasi Yang Anda Masukkan Tidak Ditemukan</span>";
        }
        
        if(isset($result[0]['status'])){
            $result = $result[0]['status'];
            if($result == "penduduk"){
                $noreg = $key;
                $status = "<span class='text-info'>
                            Dokumen Dengan Nomor Registrasi <b>$noreg</b> Sedang Dalam Proses Verifikasi Data Dan Kelengkapan Dokumen Oleh Petugas RS/Puskesmas
                            </span>";
            }elseif($result == "rs_puskesmas"){
                $noreg = $key;
                $status = "<span class='text-info'>
                            Dokumen Dengan Nomor Registrasi <b>$noreg</b> Telahi Divalidasi Oleh Petugas RS/Puskesmas Dan Sedang Dalam Proses Verifikasi Data Dan Kelengkapan Dokumen Oleh Petugas Kelurahan
                            </span>";
            }elseif($result == "rs_tolak"){
                $noreg = $key;
                $status = "<span class='text-danger'>
                            Dokumen Dengan Nomor Registrasi <b>$noreg</b> Dinyatakan Tidak Valid Oleh Petugas RS/Puskesmas
                            </span>";
            }elseif($result == "kelurahan"){
                $noreg = $key;
                $status = "<span class='text-info'>
                            Dokumen Dengan Nomor Registrasi <b>$noreg</b> Telah Divalidasi Oleh Petugas Kelurahan Dan Sedang Dalam Proses Verifikasi Data Dan Kelengkapan Dokumen Oleh Petugas Catatan Sipil
                            </span>";
            }elseif($result == "kelurahan_tolak"){
                $noreg = $key;
                $status = "<span class='text-danger'>
                            Dokumen Dengan Nomor Registrasi <b>$noreg</b> Dinyatakan Tidak Valid Oleh Petugas Kelurahan
                            </span>";
            }elseif($result == "capil"){
                $noreg = $key;
                $status = "<span class='text-success'>
                            Dokumen Dengan Nomor Registrasi <b>$noreg</b> Telah Selesai Diproses, Silahkan Mengunjungi Kantor Dinas Kependudukan Dan Catatan Sipil Untuk Mengambil Kutipan Akta Sesuai Dengan Nomor Registrasi Anda. 
                            </span>";
            }elseif($result == "capil_tolak"){
                $noreg = $key;
                $status = "<span class='text-danger'>
                            Dokumen Dengan Nomor Registrasi <b>$noreg</b> Dinyatakan Tidak Valid Oleh Petugas Catatan Sipil
                            </span>";
            }
        }else{
            $noreg = "";
            $status = "<span class='text-danger'>Nomor Registrasi Yang Anda Masukkan Tidak Ditemukan</span>";
        }
        
    }
    


?>

<div class="col-12 col-sm-8 mx-auto mt-5  rounded pt-5">
<h4 class="text-center mb-3 my-0 "><b>STATUS DOKUMEN</b></h4>
<div id="pemberitahuan" style="display: none;" class="col-12 pl-2 bg-dark text-white rounded p-2 mb-1">
    <p style="font-size: 1.5rem">
        Nomor Registrasi Laporan Anda : <span class="text-success"><b> <?= $noreg ?> </b></span></p> 
        <p class="text-warning">Ingat/Catat Nomor Registrasi Anda Dan Gunakan Kotak Pencarian Dibawah Ini Untuk 
        Memantau Status Laporan Yang Anda Ajukan
</p>
</div>
    <form action="" method="post">
        <div class="form-group col-9 mx-auto">
            <input name="noreg" id="noreg" onkeyup="this.value = this.value.toUpperCase()" class="form-control col-12 mb-1" type="text" placeholder="NO. REGISTRASI">
            <button class="btn btn-sm btn-primary col-12" type="submit" name="cari">Cari</button>
        </div>
        <div id="result" style="display: none;font-size: 1.1rem" class="form-group bg-light bg-outline-success text-secondary p-3 col-10 mx-auto rounded border">
            <?= $status ?>
        </div>
    </form>

</div>

        <script>
            <?php if(isset($_GET["noreg"])): ?>
            
                document.getElementById("pemberitahuan").style.display = "block";
                document.getElementById("noreg").value = "<?= $noreg ?>";
            
            <?php endif; ?>
            <?php if(isset($noreg)): ?>
            
                document.getElementById("result").style.display = "block";
            
            <?php endif; ?>
            <?php if(isset($_POST["cari"])): ?>
            
                document.getElementById("pemberitahuan").style.display = "none";
            
            <?php endif; ?>
            
        </script>