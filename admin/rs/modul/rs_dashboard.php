<?php
    $lpl = query("SELECT COUNT(no_registrasi) FROM lapor_lahir WHERE status='penduduk'")[0]["COUNT(no_registrasi)"];
    $lpm = query("SELECT COUNT(no_registrasi) FROM lapor_mati WHERE status='penduduk'")[0]["COUNT(no_registrasi)"];
?>
<div>
        <h4><i class="fas fa-tachometer-alt mt-0 mr-2 text-info"></i>Dashboard</h4><hr class="bg-secondary mb-4">

        <div class="row text-white mx-auto">
            <div class="card ml-5 mr-4 mb-3 bg-success " style="width: 22rem; height: 12rem;">
                <div class="card-body pt-1">
                    <div class="card-body-icon">
                        <i class="fas fa-baby mr-2 text-white" style="font-size: 7rem;"></i>
                    </div>
                    <h5>PERMOHONAN SURAT KELAHIRAN</h5>
                    <div class="display-2 ml-2" style="font-weight: bold;"><?= $lpl; ?></div>
                    <a href="?page=lapor_lahir"><p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                </div>
            </div>


            <div class="card ml-5 mb-3 bg-dark" style="width: 22rem; height: 12rem;">
                <div class="card-body pt-1">
                    <div class="card-body-icon">
                    <i class="fas fa-book-dead mr-3" style="font-size: 7rem;"></i>
                    </div>
                    <h5>PERMOHONAN SURAT KEMATIAN</h5>
                    <div class="display-2 ml-2" style="font-weight: bold;"><?= $lpm ?></div>
                <a href="?page=lapor_mati"><p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                </div>
            </div>

        </div>    
    </div>
</div>