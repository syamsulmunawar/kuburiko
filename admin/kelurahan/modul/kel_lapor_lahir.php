<?php
    $lapor_lahir = read_lapor_lahir("SELECT * FROM lapor_lahir WHERE status= 'rs_puskesmas' ");
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

<h4><i class="fas fa-baby mr-2 text-info"></i>&nbsp;Daftar Laporan Kelahiran</h4><hr class="bg-secondary mb-4">        
    <table class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nomor Register</th>
                    <th scope="col">Tanggal Lapor</th>
                    <th scope="col">Nama Bayi</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col" >Berkas</th>
                </tr>
            </thead>
                <?php $i=1; ?>
                <?php foreach($lapor_lahir as $lpl) : ?>
                    <tr>
                        <td scope="col"><?= $i; ?></td>
                        <td scope="col"><?= $lpl["no_registrasi"] ?></td>
                        <td scope="col"><?= tanggal_indo($lpl["tanggal_lapor"]) ?></td>
                        <td scope="col"><?= ucwords($lpl["nama_bayi"]) ?></td>
                        <td scope="col"><?= tanggal_indo($lpl["tgl_lahir_anak"]) ?></td>
                        <td><a href="?page=formulir_lapor_lahir&no_reg=<?= $lpl['no_registrasi'] ?>&no_kk=<?= $lpl['no_kk']; ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Detail Berkas">Lihat Berkas</a></td>

                    </tr>
                <?php $i++; ?>
                <?php endforeach; $i++;?>
        
    </table>