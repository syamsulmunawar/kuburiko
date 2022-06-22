<?php
    $jml_lpl        = query("SELECT COUNT(no_registrasi) FROM lapor_lahir WHERE status='kelurahan'")[0]["COUNT(no_registrasi)"];
    $jml_lpm        = query("SELECT COUNT(no_registrasi) FROM lapor_mati WHERE status='kelurahan'")[0]["COUNT(no_registrasi)"];
    $jml_akta_lahir = query("SELECT COUNT(nomor_akta) FROM akta_kelahiran")[0]["COUNT(nomor_akta)"];
    $jml_akta_mati  = query("SELECT COUNT(id) FROM akta_kematian")[0]["COUNT(id)"];
    $jml_kk         = query("SELECT COUNT(nomor_kk) FROM kartu_keluarga")[0]["COUNT(nomor_kk)"];
?>
    <div class="col-10 p-5 ml-auto">
        <h4><i class="fas fa-tachometer-alt mr-3"></i>Dashboard</h4><hr class="bg-secondary mb-4">

        <div class="row mx-auto text-white">
            <div class="card mr-4 mb-3 bg-success " style="width: 14rem; height: 9rem;">
                <div class="card-body pt-1">
                    <div class="card-body-icon">
                    <i class="fas fa-baby mr-3"></i>
                    </div>
                    <span class="card-title">PERMOHONAN SURAT KELAHIRAN</span>
                    <div class="display-4 mt-3"><?= $jml_lpl ?></div>
                    <a href="?page=daftar_kelahiran"><p class="card-text text-white mt-1">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                </div>
            </div>


            <div class="card mr-4 mb-3 bg-dark" style="width: 14rem; height: 9rem;">
                <div class="card-body pt-1">
                    <div class="card-body-icon">
                        <i class="fas fa-book-dead mr-3"></i>
                    </div>
                    <span class="card-title">PERMOHONAN SURAT KEMATIAN</span>
                    <div class="display-4 mt-3"><?= $jml_lpm ?></div>
                    <a href="?page=daftar_kematian"><p class="card-text text-white mt-1">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                </div>
            </div>


            <div class="card mb-3 mr-4 bg-info" style="width: 14rem; height: 9rem;">
                <div class="card-body pt-1">
                    <div class="card-body-icon">
                    <i class="fas fa-address-card mr-3"></i>
                    </div>
                    <span class="card-title">AKTA KELAHIRAN APPROVED</span>
                    <div class="display-4 mt-3"><?= $jml_akta_lahir ?></div>
                <a href="?page=kelahiran_approved"><p class="card-text text-white mt-1">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                </div>
            </div>
            <div class="card mb-3 mr-4 bg-danger" style="width: 14rem; height: 9rem;">
                <div class="card-body pt-1">
                    <div class="card-body-icon">
                      <i class="far fa-address-card mr-2"></i>
                    </div>
                    <span class="card-title">KEMATIAN APPROVED</span>
                    <div class="display-4 mt-3"><?= $jml_akta_mati ?></div>
                <a href="?page=kematian_approved"><p class="card-text text-white mt-1">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                </div>
            </div>
            <div class="card mb-3 mr-4 bg-secondary" style="width: 14rem; height: 9rem;">
                <div class="card-body pt-1">
                    <div class="card-body-icon">
                    <i class="fas fa-users mr-2"></i>
                    </div>
                    <span class="card-title">KARTU KELUARGA</span>
                    <div class="display-4 mt-3"><?= $jml_kk ?></div>
                <a href="?page=kartu_keluarga"><p class="card-text text-white mt-1">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                </div>
            </div>
        </div>    
    </div>
</div>