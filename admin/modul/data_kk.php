  <?php

    $data_kk = read_data_penduduk("SELECT * FROM kartu_keluarga");
    

  ?>
  
  <div class="col-10 p-5 ml-auto">
    <h4><i class="fas fa-users mr-3 text-info"></i>Daftar Kartu Keluarga</h4><hr class="bg-secondary mb-4">        
    
    <table class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nomor Kartu Keluarga</th>
                    <th scope="col">Kabupaten</th>
                    <th scope="col">Kecamatan</th>
                    <th scope="col">Desa/Kelurahan</th>
                    <th scope="col" >Detail KK</th>                    
                </tr>
            </thead>
                <?php $i=1; ?>
                <?php foreach($data_kk as $dt) : ?>
                    <tr>
                        <td scope="col"><?= $i; ?></td>
                        <td scope="col"><?= $dt["nomor_kk"] ?></td>
                        <td scope="col"><?= ucwords($dt["kabupaten"]); ?></td>
                        <td scope="col"><?= ucwords($dt["kecamatan"]); ?></td>
                        <td scope="col"><?= ucwords($dt["desa_kelurahan"]); ?></td>
                        <td><a target="_blank" href="cetak/cetak_kartu_keluarga.php?no_kk=<?= $dt["nomor_kk"]; ?>" class="btn btn-primary btn-sm">Kartu Keluarga</a></td>
                    </tr>
                <?php $i++; ?>
                <?php endforeach; $i++;?>
        
    </table>
      
    </div>
</div>