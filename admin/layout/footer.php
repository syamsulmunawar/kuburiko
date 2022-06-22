
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- <script src="assets/js/admin.js"></script>
    <script src="assets/js/template/custom.js"></script> -->
    <script>
                var page = window.location.href.split("&")[0].split("=")[1];
                if(page == "daftar_kelahiran" || page == "formulir_kelahiran"){
                    $("#daftar_kelahiran").addClass('active');
                    $("#beranda").removeClass('active');	
                    $("#daftar_kematian").removeClass('active');
                    $("#kelahiran_appproved").removeClass('active');
                    $("#kematian_approved").removeClass('active');
                    $("#kartu_keluarga").removeClass('active');
                }
                else if(page == "daftar_kematian" || page == "formulir_kematian"){
                    $("#daftar_kematian").addClass('active');
                    $("#daftar_kelahiran").removeClass('active');
                    $("#beranda").removeClass('active');	
                    $("#kelahiran_appproved").removeClass('active');
                    $("#kematian_approved").removeClass('active');
                    $("#kartu_keluarga").removeClass('active');	
                }
                else if(page == "kelahiran_approved"){
                    $("#kelahiran_approved").addClass('active');
                    $("#kematian_approved").removeClass('active');
                    $("#daftar_kelahiran").removeClass('active');
                    $("#daftar_kematian").removeClass('active');
                    $("#beranda").removeClass('active');	
                    $("#kartu_keluarga").removeClass('active');
                }
                else if(page == "kematian_approved"){
                    $("#kematian_approved").addClass('active');
                    $("#daftar_kelahiran").removeClass('active');
                    $("#beranda").removeClass('active');	
                    $("#daftar_kematian").removeClass('active');
                    $("#kelahiran_appproved").removeClass('active');
                    $("#kartu_keluarga").removeClass('active');
                }
                else if(page == "kartu_keluarga"){
                    $("#kartu_keluarga").addClass('active');
                    $("#daftar_kelahiran").removeClass('active');
                    $("#beranda").removeClass('active');	
                    $("#daftar_kematian").removeClass('active');
                    $("#kelahiran_appproved").removeClass('active');
                    $("#kematian_approved").removeClass('active');
                }
    </script>
    
</body>
</html>