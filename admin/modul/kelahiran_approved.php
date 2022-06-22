  <?php

    $akta_lahir = read_lapor_lahir("SELECT * FROM akta_kelahiran");
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
    <h4><i class="fas fa-address-card mr-3 text-info"></i>Daftar Akta Kelahiran</h4><hr class="bg-secondary mb-4">        
    <table class="table table-striped table-bordered text-center">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nomor Register</th>
          <th scope="col">Nomor KK</th>
          <th scope="col">NIK</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Nama Ayah</th>
          <th scope="col" >Detail</th>
        </tr>
        <?php $i=1; ?>
        <?php foreach($akta_lahir as $akta) : ?>
        <tr>
          <td scope="col"><?= $i; ?></td>
          <td scope="col"><?= $akta["no_registrasi"] ?></td>
          <td scope="col"><?= $akta["no_kk"] ?></td>
          <td scope="col"><?= $akta["nik"] ?></td>
          <td scope="col"><?= ucwords($akta["nama_lengkap"]) ?></td>
          <td scope="col"><?= tanggal_indo($akta["tanggal_lahir"]); ?></td>
          <td scope="col"><?= ucwords($akta["nama_ayah"]) ?></td>
          <td><a target="_blank" href="cetak/cetak_akta_kelahiran.php?no_reg=<?= $akta["no_registrasi"]; ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Pinjamkan">Akta Kelahiran</a></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach;?>
      </thead>
    </table>
      
    </div>
</div>