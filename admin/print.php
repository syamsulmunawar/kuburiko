
<?php
     // include 'function.php';


    // // $no_reg = $_GET["id"];

    require_once __DIR__ . '/vendor/autoload.php';

    $mpdf = new \Mpdf\Mpdf();


    
    $html='<html>
    <head>
        <title>Halaman Print</title>
        
    </head>
    <body>    
        <div class="container">
            <p style="text-align: right;"><strong>No. Reg : </strong></p>

            <div class="noreg">
                <p><u>Nomor Induk Kependudukan</u><sub>&nbsp;&nbsp; </sub><sub>:</sub></p>
                <p><em>Personel Registration Number</em></p>
            </div>

            
            <p style="text-align: center;"><strong><u>PENCATATAN SIPIL</u></strong></p>
            <p style="text-align: center;"><em>REGISTRY OFFICE</em></p>

            <p style="text-align: center;"><em>&nbsp;</em></p>
            <p style="text-align: center;"><u>WARGA NEGARA</u><strong>INDONESIA</strong></p>
            <p style="text-align: center;"><em>&nbsp;NATIONALITY Of INDONESIA</em></p>

            <p style="text-align: center;"><em>&nbsp;</em></p>
            <p style="text-align: center;"><strong><u>KUTIPAN AKTA KELAHIRAN</u></strong></p>
            <p style="text-align: center;"><em>EXCERPT OF BIRTH CERTIFICATE</em></p>
            <p style="text-align: center;"><em>&nbsp;</em></p>
            
            <p><u>Berdasarkan Akta Kelahiran Nomor</u> .........................................................................................</p>
            <p><em>By Virtue Of Birth Certificate Number ....</em></p>
            
            <p><u>Menurut Stbld </u>.</p>
            <p><em>In accordance with state gazette</em></p>
            
            <p><u>Bahwa di </u>.. <u>pada tanggal </u>.</p>
            <p><em>that in on date</em></p>
            
            <p> <u>tahun </u>. <u>Telah lahir </u><sub>:</sub></p>
            <p><sub> </sub> <em>on year  was born</em></p>
            
            <p>...</p>
            
            <p><u>anak ke</u> .....................................................................................................................................</p>
            <p><em>child no</em></p>
            
            
            
            <p style="text-align: center;">dan</p>
            <p style="text-align: center;"><em>and</em></p>
            <p style="text-align: center;"><em></em></p>
            
            <p style="text-align: center;"><u>Kutipan ini dikeluarkan </u>.</p>
            <p style="text-align: center;"><em>The excerpt is issued</em></p>
            <p style="text-align: center;"><em></em></p>
            <p style="text-align: center;"><u>pada tanggal </u>...</p>
            <p style="text-align: center;"><em>on date</em></p>
            <p style="text-align: center;"><em></em></p>
            <p style="text-align: center;"></p>
            <p style="text-align: center;"></p>
            <p style="text-align: center;"><u>Kepala </u></p>
            <p style="text-align: center;"><em>Head of</em></p>
            <p style="text-align: center;"><em></em></p>
            <p style="text-align: center;"></p>
            <p style="text-align: center;"></p>
            <p style="text-align: center;"></p>
            <p style="text-align: center;"></p>
            <p style="text-align: center;"></p>
            <ol style="text-align: center;">
            <li><u> SISRUWADI, S.H., M.KN.</u></li>
            </ol>
            <p style="text-align: center;">NIP 19620204 198903 1 020</p>       
        </div>
        </body>
        </html>';
        
        
        

     $mpdf->WriteHTML($html);           
     $mpdf->Output();
                                
                                
                                
                                
                                
       
                                

    







