

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <title>DUKCAPIL KENDARI</title>
        <style>
            body{
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }
            .navbar-nav .active{
                background-color: lightblue;
                border-bottom: 1px solid lightslategray;
            }
            .navbar-nav li:hover{
                background-color: lightblue;
            }
        </style>
  </head>
  <body>
    
  <nav style="display:none;" class="navbar navbar-expand-lg navbar-light mb-5 px-0 bg-info fixed-top">
      <div class="row col-12 pr-0 m-0">
          <a class="navbar-brand" href="index.php">
              <img class="align-top ml-1" src="admin/assets/img/logo_kendari.png" width="35" height="35">
              <span class="navbar-brand">KUBURIKO</span>
            </a>
            
            <button class="navbar-toggler ml-auto mr-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li id="lapor_lahir" class="nav-item p-1 mr-1 rounded" style="font-size: 1.1rem;">
                        <a class="nav-link rounded pl-2" href="?page=lapor_lahir">Laporan Kelahiran</a>
                    </li>    
                    <li id="lapor_mati" class="nav-item p-1 mr-1 rounded" style="font-size: 1.1rem;">
                        <a class="nav-link rounded pl-2" href="?page=lapor_mati">Laporan Kematian</a>
                    </li>    
                    <li id="status_dokumen" class="nav-item p-1 mr-1 rounded" style="font-size: 1.1rem;">
                        <a class="nav-link rounded pl-2" href="?page=selesai_lapor">Status Dokumen</a>
                    </li>    
                </ul>
            </div>
        </div>
    </nav>


    <?php
        include 'penduduk/content.php';
    ?>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script>
            var page = window.location.href.split("&")[0].split("=")[1];
                if(page == "lapor_lahir"){
                    $("#lapor_lahir").addClass('active');
                    $("#lapor_mati").removeClass('active');
                    $("#status_dokumen").removeClass('active');
                }
                else if(page == "lapor_mati"){
                    $("#lapor_mati").addClass('active');
                    $("#lapor_lahir").removeClass('active');
                    $("#status_dokumen").removeClass('active');	
                }
                else if(page == "selesai_lapor"){
                    $("#status_dokumen").addClass('active');
                    $("#lapor_lahir").removeClass('active');
                    $("#lapor_mati").removeClass('active');
                }
        </script>    
    </body>
</html>



