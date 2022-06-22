<?php

$lapor_mati = read_lapor_mati("SELECT * FROM lapor_mati WHERE status='capil'");
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

<div class="col-10 p-5 ml-auto">
<h4><i class="far fa-address-card mr-3 text-info"></i>Daftar Akta Kematian</h4><hr class="bg-secondary mb-4">        
<table class="table table-striped table-bordered text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nomor Register</th>
      <th scope="col">Tanggal Lapor</th>
      <th scope="col">Nama Yang Meninggal</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Pelapor</th>
      <th scope="col" >Berkas Pelapor</th>
    </tr>
    <?php $i=1; ?>
    <?php foreach($lapor_mati as $lpm) : ?>
    <tr>
      <td scope="col"><?= $i; ?></td>
      <td scope="col"><?= $lpm["no_registrasi"] ?></td>
      <td scope="col"><?= tanggal_indo($lpm["tgl_lahir_simati"]) ?></td>
      <td scope="col"><?= ucwords($lpm["nama_simati"]) ?></td>
      <td scope="col"><?= tanggal_indo($lpm["tgl_lahir_simati"]); ?></td>
      <td scope="col"><?= ucwords($lpm["nama_pelapor"]) ?></td>
      <td><a target="_blank" href="cetak/cetak_akta_kematian.php?noreg=<?=$lpm["no_registrasi"];?>" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Pinjamkan">Akta Kematian</a></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; $i++;?>
  </thead>
</table>
  
</div>
</div>