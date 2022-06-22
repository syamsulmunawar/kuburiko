// $(function(){
//     var $lpl = $("#lapor_lahir");
//     if($lpl.length){

//         $lpl.validate({
//             rules:{
//                 nomor_kk: {
//                     required: true
//                 }
//             },
//             messages: {
//                 nomor_kk: {
//                     required: "Bagian ini <em>harus diisi</em>"
//                 }
//             }
//         });
//     }
// });

$(function(){


    $("#nomor_kk_error").hide();
    var error_nomor_kk = false;
    $("#rt_error").hide();
    var error_rt = false;
    $("#rw_error").hide();
    var error_rw = false;
    $("#kode_pos_error").hide();
    var error_kode_pos = false;
    $("#desa_kelurahan_error").hide();
    var error_desa_kelurahan = false;
    $("#kecamatan_error").hide();
    var error_kecamatan = false;
    $("#kabupaten_error").hide();
    var error_kabupaten = false;
    $("#provinsi_error").hide();
    var error_provinsi = false;

    $("#nik_ayah_error").hide();
    var error_nik_ayah = false;
    $("#nama_ayah_error").hide();
    var error_nama_ayah = false;
    $("#tl_ayah_error").hide();
    var error_tl_ayah = false;
    $("#tll_ayah_error").hide();
    var error_tll_ayah = false;
    $("#agama_ayah_error").hide();
    var error_agama_ayah = false;
    $("#pendidikan_ayah_error").hide();
    var error_pendidikan_ayah = false;
    $("#pekerjaan_ayah_error").hide();
    var error_pekerjaan_ayah = false;
    $("#nama_ayah_ayah_error").hide();
    var error_nama_ayah_ayah = false;
    $("#nama_ibu_ayah_error").hide();
    var error_nama_ibu_ayah = false;
    $("#nik_istri_error").hide();
    var error_nik_istri = false;
    $("#nama_istri_error").hide();
    var error_nama_istri = false;
    $("#tgl_pernikahan_error").hide();
    var error_tgl_pernikahan = false;
    $("#tl_istri_error").hide();
    var error_tl_istri = false;
    $("#tll_istri_error").hide();
    var error_tll_istri = false;
    $("#agama_istri_error").hide();
    var error_agama_istri = false;
    $("#pendidikan_istri_error").hide();
    var error_pendidikan_istri = false;
    $("#pekerjaan_istri_error").hide();
    var error_pekerjaan_istri = false;
    $("#nama_ayah_istri_error").hide();
    var error_nama_ayah_istri = false;
    $("#nama_ibu_istri_error").hide();
    var error_nama_ibu_istri = false;

    $("#nik_anak1_error").hide();
    var error_nik_anak1 = false;
    $("#nama_anak1_error").hide();
    var error_nama_anak1 = false;
    $("#tl_anak1_error").hide();
    var error_tl_anak1 = false;
    $("#tll_anak1_error").hide();
    var error_tll_anak1 = false;
    $("#pekerjaan_anak1_error").hide();
    var error_pekerjaan_anak1 = false;
    
    $("#nik_anak2_error").hide();
    var error_nik_anak2 = false;
    $("#nama_anak2_error").hide();
    var error_nama_anak2 = false;
    $("#tl_anak2_error").hide();
    var error_tl_anak2 = false;
    $("#tll_anak2_error").hide();
    var error_tll_anak2 = false;
    $("#pekerjaan_anak2_error").hide();
    var error_pekerjaan_anak2 = false;
    
    $("#nik_anak3_error").hide();
    var error_nik_anak3 = false;
    $("#nama_anak3_error").hide();
    var error_nama_anak3 = false;
    $("#tl_anak3_error").hide();
    var error_tl_anak3 = false;
    $("#tll_anak3_error").hide();
    var error_tll_anak3 = false;
    $("#pekerjaan_anak3_error").hide();
    var error_pekerjaan_anak3 = false;
    
    $("#nik_anak4_error").hide();
    var error_nik_anak4 = false;
    $("#nama_anak4_error").hide();
    var error_nama_anak4 = false;
    $("#tl_anak4_error").hide();
    var error_tl_anak4 = false;
    $("#tll_anak4_error").hide();
    var error_tll_anak4 = false;
    $("#pekerjaan_anak4_error").hide();
    var error_pekerjaan_anak4 = false;
    
    $("#nik_anak5_error").hide();
    var error_nik_anak5 = false;
    $("#nama_anak5_error").hide();
    var error_nama_anak5 = false;
    $("#tl_anak5_error").hide();
    var error_tl_anak5 = false;
    $("#tll_anak5_error").hide();
    var error_tll_anak5 = false;
    $("#pekerjaan_anak5_error").hide();
    var error_pekerjaan_anak5 = false;

    $("#nama_anak_error").hide();
    var error_nama_anak = false;
    $("#tempat_lahir_error").hide();
    var error_tempat_lahir = false;
    $("#tll_anak_error").hide();
    var error_tll_anak = false;
    $("#pukul_error").hide();
    var error_pukul = false;
    $("#anak_ke_error").hide();
    var error_anak_ke = false;
    $("#berat_error").hide();
    var error_berat = false;
    $("#tinggi_error").hide();
    var error_tinggi = false;

    // $("#ktp_ayah_error").hide();
    var error_ktp_ayah  = false;
    $("#ktp_ibu_error").hide();
    var error_ktp_ibu   = false;
    $("#kk_error").hide();
    var error_kk        = false;
    $("#buku_nikah_error").hide();
    var error_buku_nikah= false;
    $("#ket_lahir_error").hide();
    var error_ket_lahir = false;


    $("#nomor_kk").focusout(function(){
        cek_nomor_kk();
    });
    function cek_nomor_kk(){
        var nomor_kk = $("#nomor_kk").val().length;
        if(nomor_kk == 0){
            $("#nomor_kk_error").html("Kolom Ini Harus Diisi");
            $("#nomor_kk_error").show();
            error_nomor_kk = true;
        }else if(nomor_kk !== 0 && nomor_kk !== 16){
            $("#nomor_kk_error").html("Nomor KK Harus Berisi 16 Karakter!");
            $("#nomor_kk_error").show();
            error_nomor_kk = true;
        }else{
            $("#nomor_kk_error").hide();
        }
    }
    $("#rt").focusout(function(){
        cek_rt();
    });
    function cek_rt(){
        var rt = $("#rt").val().length;
        if(rt !== 3){
            $("#rt_error").html("Nomor RT Harus 3 Karakter (Contoh: 001)");
            $("#rt_error").show();
            error_rt = true;
        }else{
            $("#rt_error").hide();
        }
    }
    $("#rw").focusout(function(){
        cek_rw();
    });
    function cek_rw(){
        var rw = $("#rw").val().length;
        if(rw !== 3){
            $("#rw_error").html("Nomor RW Harus 3 Karakter (Contoh: 001)");
            $("#rw_error").show();
            error_rw = true;
        }else{
            $("#rw_error").hide();
        }
    }
    $("#kode_pos").focusout(function(){
        cek_kode_pos();
    });
    function cek_kode_pos(){
        var kode_pos = $("#kode_pos").val().length;
        if(kode_pos !== 5){
            $("#kode_pos_error").html("Kode Pos Harus 5 Karakter (Contoh: 92001)");
            $("#kode_pos_error").show();
            error_kode_pos = true;
        }else{
            $("#kode_pos_error").hide();
        }
    }
    $("#desa_kelurahan").focusout(function(){
        cek_desa_kelurahan();
    });
    function cek_desa_kelurahan(){
        var desa_kelurahan = $("#desa_kelurahan").val().length;
        if(desa_kelurahan < 3){
            $("#desa_kelurahan_error").html("Nama Desa/Kelurahan Harus Benar");
            $("#desa_kelurahan_error").show();
            error_desa_kelurahan = true;
        }else{
            $("#desa_kelurahan_error").hide();
        }
    }
    $("#kecamatan").focusout(function(){
        cek_kecamatan();
    });
    function cek_kecamatan(){
        var kecamatan = $("#kecamatan").val().length;
        if(kecamatan < 3){
            $("#kecamatan_error").html("Nama Kecamatan Harus Benar");
            $("#kecamatan_error").show();
            error_kecamatan = true;
        }else{
            $("#kecamatan_error").hide();
        }
    }
    $("#kabupaten").focusout(function(){
        cek_kabupaten();
    });
    function cek_kabupaten(){
        var kabupaten = $("#kabupaten").val().length;
        if(kabupaten < 3){
            $("#kabupaten_error").html("Nama Kabupaten Harus Benar");
            $("#kabupaten_error").show();
            error_kabupaten = true;
        }else{
            $("#kabupaten_error").hide();
        }
    }
    $("#provinsi").focusout(function(){
        cek_provinsi();
    });
    function cek_provinsi(){
        var provinsi = $("#provinsi").val().length;
        if(provinsi < 3){
            $("#provinsi_error").html("Nama Provinsi Harus Benar");
            $("#provinsi_error").show();
            error_provinsi = true;
        }else{
            $("#provinsi_error").hide();
        }
    }
    $("#nik_ayah").focusout(function(){
        cek_nik_ayah();
    });
    function cek_nik_ayah(){
        var nik_ayah = $("#nik_ayah").val().length;
        if(nik_ayah !== 0 && nik_ayah !== 16){
            $("#nik_ayah_error").html("NIK Harus berjumlah 16 Karakter!");
            $("#nik_ayah_error").show();
            error_nik_ayah = true;
        }else if(nik_ayah == 0){
            $("#nik_ayah_error").html("Kolom Ini Harus Diisi");
            $("#nik_ayah_error").show();
            error_nik_ayah = true;
        }else{
            $("#nik_ayah_error").hide();
        }
    }
    $("#nama_ayah").focusout(function(){
        cek_nama_ayah();
    });
    function cek_nama_ayah(){
        var nama_ayah = $("#nama_ayah").val().length;
        if(nama_ayah == 0){
            $("#nama_ayah_error").html("Kolom Ini Harus Diisi");
            $("#nama_ayah_error").show(); 
            error_nama_ayah = true;
        }else{
            $("#nama_ayah_error").hide();
        }
    }
    $("#tl_ayah").focusout(function(){
        cek_tl_ayah();
    });
    function cek_tl_ayah(){
        var tl_ayah = $("#tl_ayah").val().length;
        if(tl_ayah == 0){
            $("#tl_ayah_error").html("Kolom Ini Harus Diisi");
            $("#tl_ayah_error").show();
            error_tl_ayah = true;
        }else{
            $("#tl_ayah_error").hide();
        }
    }
    $("#tll_ayah").focusout(function(){
        cek_tll_ayah();
    });
    function cek_tll_ayah(){
        var tll_ayah = $("#tll_ayah").val().length;
        if(tll_ayah == 0){
            $("#tll_ayah_error").html("Kolom Ini Harus Diisi");
            $("#tll_ayah_error").show();
            error_tll_ayah = true;
        }else{
            $("#tll_ayah_error").hide();
        }
    }
    // $("#agama_ayah").focusout(function(){
    //     var agama_ayah = $("#agama_ayah").val().length;
    //     if(agama_ayah < 3){
    //         $("#agama_ayah_error").html("");
    //         $("#agama_ayah_error").show();
    //         error_agama_ayah = true;
    //     }else{
    //         $("#agama_ayah_error").hide();
    //     }
    // });
    // $("#pendidikan_ayah").focusout(function(){
    //     var pendidikan_ayah = $("#pendidikan_ayah").val().length;
    //     if(pendidikan_ayah < 3){
    //         $("#pendidikan_ayah_error").html("");
    //         $("#pendidikan_ayah_error").show();
    //         error_pendidikan_ayah = true;
    //     }else{
    //         $("#pendidikan_ayah_error").hide();
    //     }
    // });
    $("#pekerjaan_ayah").focusout(function(){
        cek_pekerjaan_ayah();
    });
    function cek_pekerjaan_ayah(){
        var pekerjaan_ayah = $("#pekerjaan_ayah").val().length;
        if(pekerjaan_ayah == 0){
            $("#pekerjaan_ayah_error").html("Kolom Ini Harus Diisi");
            $("#pekerjaan_ayah_error").show();
            error_pekerjaan_ayah = true;
        }else{
            $("#pekerjaan_ayah_error").hide();
        }
    }
    $("#nama_ayah_ayah").focusout(function(){
        cek_nama_ayah_ayah();
    });
    function cek_nama_ayah_ayah(){
        var nama_ayah_ayah = $("#nama_ayah_ayah").val().length;
        if(nama_ayah_ayah == 0){
            $("#nama_ayah_ayah_error").html("Kolom Ini Harus Diisi");
            $("#nama_ayah_ayah_error").show();
            error_nama_ayah_ayah = true;
        }else{
            $("#nama_ayah_ayah_error").hide();
        }
    }
    $("#nama_ibu_ayah").focusout(function(){
        cek_nama_ibu_ayah();
    });
    function cek_nama_ibu_ayah(){
        var nama_ibu_ayah = $("#nama_ibu_ayah").val().length;
        if(nama_ibu_ayah == 0){
            $("#nama_ibu_ayah_error").html("Kolom Ini Harus Diisi");
            $("#nama_ibu_ayah_error").show();
            error_nama_ibu_ayah = true;
        }else{
            $("#nama_ibu_ayah_error").hide();
        }
    }
    $("#nik_istri").focusout(function(){
        cek_nik_istri();
    });
    function cek_nik_istri(){
        var nik_istri = $("#nik_istri").val().length;
        if(nik_istri !== 0 && nik_istri !== 16){
            $("#nik_istri_error").html("NIK Harus Berisi 16 Karakter");
            $("#nik_istri_error").show();
            error_nik_istri = true;
        }else if(nik_istri == 0){
            $("#nik_istri_error").html("Kolom Ini Harus Diisi");
            $("#nik_istri_error").show();
            error_nik_istri = true;
        }else{
            $("#nik_istri_error").hide();
        }
    }
    $("#nama_istri").focusout(function(){
        cek_nama_istri();
    });
    function cek_nama_istri(){
        var nama_istri = $("#nama_istri").val().length;
        if(nama_istri == 0){
            $("#nama_istri_error").html("Kolom Ini Harus Diisi");
            $("#nama_istri_error").show();
            error_nama_istri = true;
        }else{
            $("#nama_istri_error").hide();
        }
    }
    $("#tgl_pernikahan").focusout(function(){
        cek_tgl_pernikahan();
    });
    function cek_tgl_pernikahan(){
        var tgl_pernikahan = $("#tgl_pernikahan").val().length;
        if(tgl_pernikahan == 0){
            $("#tgl_pernikahan_error").html("Kolom Ini Harus Diisi");
            $("#tgl_pernikahan_error").show();
            error_tgl_pernikahan = true;
        }else{
            $("#tgl_pernikahan_error").hide();
        }
    }
    $("#tl_istri").focusout(function(){
        cek_tl_istri();
    });
    function cek_tl_istri(){
        var tl_istri = $("#tl_istri").val().length;
        if(tl_istri == 0){
            $("#tl_istri_error").html("Kolom Ini Harus Diisi");
            $("#tl_istri_error").show();
            error_tl_istri = true;
        }else{
            $("#tl_istri_error").hide();
        }
    }
    $("#tll_istri").focusout(function(){
        cek_tll_istri();
    });
    function cek_tll_istri(){
        var tll_istri = $("#tll_istri").val().length;
        if(tll_istri == 0){
            $("#tll_istri_error").html("Kolom Ini Harus Diisi");
            $("#tll_istri_error").show();
            error_tll_istri = true;
        }else{
            $("#tll_istri_error").hide();
        }
    }
    // $("#agama_istri").focusout(function(){
    //     var agama_istri = $("#agama_istri").val().length;
    //     if(agama_istri < 3){
    //         $("#agama_istri_error").html("");
    //         $("#agama_istri_error").show();
    //         error_agama_istri = true;
    //     }else{
    //         $("#agama_istri_error").hide();
    //     }
    // });
    // $("#pendidikan_istri").focusout(function(){
    //     var pendidikan_istri = $("#pendidikan_istri").val().length;
    //     if(pendidikan_istri < 3){
    //         $("#pendidikan_istri_error").html("");
    //         $("#pendidikan_istri_error").show();
    //         error_pendidikan_istri = true;
    //     }else{
    //         $("#pendidikan_istri_error").hide();
    //     }
    // });
    $("#pekerjaan_istri").focusout(function(){
        cek_pekerjaan_istri();
    });
    function cek_pekerjaan_istri(){
        var pekerjaan_istri = $("#pekerjaan_istri").val().length;
        if(pekerjaan_istri == 0){
            $("#pekerjaan_istri_error").html("Kolom Ini Harus Diisi");
            $("#pekerjaan_istri_error").show();
            error_pekerjaan_istri = true;
        }else{
            $("#pekerjaan_istri_error").hide();
        }
    }
    $("#nama_ayah_istri").focusout(function(){
        cek_nama_ayah_istri();
    });
    function cek_nama_ayah_istri(){
        var nama_ayah_istri = $("#nama_ayah_istri").val().length;
        if(nama_ayah_istri == 0){
            $("#nama_ayah_istri_error").html("Kolom Ini Harus Diisi");
            $("#nama_ayah_istri_error").show();
            error_nama_ayah_istri = true;
        }else{
            $("#nama_ayah_istri_error").hide();
        }
    }
    $("#nama_ibu_istri").focusout(function(){
        cek_nama_ibu_istri();
    });
    function cek_nama_ibu_istri(){
        var nama_ibu_istri = $("#nama_ibu_istri").val().length;
        if(nama_ibu_istri == 0){
            $("#nama_ibu_istri_error").html("Kolom Ini Harus Diisi");
            $("#nama_ibu_istri_error").show();
            error_nama_ibu_istri = true;
        }else{
            $("#nama_ibu_istri_error").hide();
        }
    }
    //anak
    $("#nik_anak1").focusout(function(){
        cek_nik_anak1();
    });
    function cek_nik_anak1(){
        var nik_anak1 = $("#nik_anak1").val().length;
        if(nik_anak1 == 0){
            $("#nik_anak1_error").html("Kolom Ini Harus Diisi");
            $("#nik_anak1_error").show();
            error_nik_anak1 = true;
        }else if(nik_anak1 !== 0 && nik_anak1 !== 16){
            $("#nik_anak1_error").html("NIK Harus Berisi 16 Karakter");
            $("#nik_anak1_error").show();
            error_nik_anak1 = true;
        }else{
            $("#nik_anak1_error").hide();
        }
    }
    $("#nama_anak1").focusout(function(){
        cek_nama_anak1();
    });
    function cek_nama_anak1(){
        var nama_anak1 = $("#nama_anak1").val().length;
        if(nama_anak1 == 0){
            $("#nama_anak1_error").html("Kolom Ini Harus Diisi");
            $("#nama_anak1_error").show();
            error_nama_anak1 = true;
        }else{
            $("#nama_anak1_error").hide();
        }
    }
    $("#tl_anak1").focusout(function(){
        cek_tl_anak1();
    });
    function cek_tl_anak1(){
        var tl_anak1 = $("#tl_anak1").val().length;
        if(tl_anak1 == 0){
            $("#tl_anak1_error").html("Kolom Ini Harus Diisi");
            $("#tl_anak1_error").show();
            error_tl_anak1 = true;
        }else{
            $("#tl_anak1_error").hide();
        }
    }
    $("#tll_anak1").focusout(function(){
        cek_tll_anak1();
    });
    function cek_tll_anak1(){
        var tll_anak1 = $("#tll_anak1").val().length;
        if(tll_anak1 == 0){
            $("#tll_anak1_error").html("Kolom Ini Harus Diisi");
            $("#tll_anak1_error").show();
            error_tll_anak1 = true;
        }else{
            $("#tll_anak1_error").hide();
        }
    }
    $("#pekerjaan_anak1").focusout(function(){
        cek_pekerjaan_anak1();
    });
    function cek_pekerjaan_anak1(){
        var pekerjaan_anak1 = $("#pekerjaan_anak1").val().length;
        if(pekerjaan_anak1 == 0){
            $("#pekerjaan_anak1_error").html("Kolom Ini Harus Diisi");
            $("#pekerjaan_anak1_error").show();
            error_pekerjaan_anak1 = true;
        }else{
            $("#pekerjaan_anak1_error").hide();
        }
    }
    $("#nik_anak2").focusout(function(){
        cek_nik_anak2();
    });
    function cek_nik_anak2(){
        var nik_anak2 = $("#nik_anak2").val().length;
        if(nik_anak2 == 0){
            $("#nik_anak2_error").html("Kolom Ini Harus Diisi");
            $("#nik_anak2_error").show();
            error_nik_anak2 = true;
        }else if(nik_anak2 > 0 && nik_anak2 < 16 ){
            $("#nik_anak2_error").html("NIK Harus Berisi 16 Karakter");
            $("#nik_anak2_error").show();
            error_nik_anak2 = true;
        }else{
            $("#nik_anak2_error").hide();
        }
    }
    $("#nama_anak2").focusout(function(){
        cek_nama_anak2();
    });
    function cek_nama_anak2(){
        var nama_anak2 = $("#nama_anak2").val().length;
        if(nama_anak2 == 0){
            $("#nama_anak2_error").html("Kolom Ini Harus Diisi");
            $("#nama_anak2_error").show();
            error_nama_anak2 = true;
        }else{
            $("#nama_anak2_error").hide();
        }
    }
    $("#tl_anak2").focusout(function(){
        cek_tl_anak2();
    });
    function cek_tl_anak2(){
        var tl_anak2 = $("#tl_anak2").val().length;
        if(tl_anak2 == 0){
            $("#tl_anak2_error").html("Kolom Ini Harus Diisi");
            $("#tl_anak2_error").show();
            error_tl_anak2 = true;
        }else{
            $("#tl_anak2_error").hide();
        }
    }
    $("#tll_anak2").focusout(function(){
        cek_tll_anak2();
    });
    function cek_tll_anak2(){
        var tll_anak2 = $("#tll_anak2").val().length;
        if(tll_anak2 == 0){
            $("#tll_anak2_error").html("Kolom Ini Harus Diisi");
            $("#tll_anak2_error").show();
            error_tll_anak2 = true;
        }else{
            $("#tll_anak2_error").hide();
        }
    }
    $("#pekerjaan_anak2").focusout(function(){
        cek_pekerjaan_anak2();
    });
    function cek_pekerjaan_anak2(){
        var pekerjaan_anak2 = $("#pekerjaan_anak2").val().length;
        if(pekerjaan_anak2 == 0){
            $("#pekerjaan_anak2_error").html("Kolom Ini Harus Diisi");
            $("#pekerjaan_anak2_error").show();
            error_pekerjaan_anak2 = true;
        }else{
            $("#pekerjaan_anak2_error").hide();
        }
    }
    $("#nik_anak3").focusout(function(){
        cek_nik_anak3();
    });
    function cek_nik_anak3(){
        var nik_anak3 = $("#nik_anak3").val().length;
        if(nik_anak3 == 0){
            $("#nik_anak3_error").html("Kolom Ini Harus Diisi");
            $("#nik_anak3_error").show();
            error_nik_anak3 = true;
        }else if(nik_anak3 !== 0 && nik_anak3 !== 16){
            $("#nik_anak3_error").html("NIK Harus Berisi 16 Karakter");
            $("#nik_anak3_error").show();
            error_nik_anak3 = true;
        }else{
            $("#nik_anak3_error").hide();
        }
    }
    $("#nama_anak3").focusout(function(){
        cek_nama_anak3();
    });
    function cek_nama_anak3(){
        var nama_anak3 = $("#nama_anak3").val().length;
        if(nama_anak3 == 0){
            $("#nama_anak3_error").html("Kolom Ini Harus Diisi");
            $("#nama_anak3_error").show();
            error_nama_anak3 = true;
        }else{
            $("#nama_anak3_error").hide();
        }
    }
    $("#tl_anak3").focusout(function(){
        cek_tl_anak3();
    });
    function cek_tl_anak3(){
        var tl_anak3 = $("#tl_anak3").val().length;
        if(tl_anak3 == 0){
            $("#tl_anak3_error").html("Kolom Ini Harus Diisi");
            $("#tl_anak3_error").show();
            error_tl_anak3 = true;
        }else{
            $("#tl_anak3_error").hide();
        }
    }
    $("#tll_anak3").focusout(function(){
        cek_tll_anak3();
    });
    function cek_tll_anak3(){
        var tll_anak3 = $("#tll_anak3").val().length;
        if(tll_anak3 == 0){
            $("#tll_anak3_error").html("Kolom Ini Harus Diisi");
            $("#tll_anak3_error").show();
            error_tll_anak3 = true;
        }else{
            $("#tll_anak3_error").hide();
        }
    }
    $("#pekerjaan_anak3").focusout(function(){
        cek_pekerjaan_anak3();
    });
    function cek_pekerjaan_anak3(){
        var pekerjaan_anak3 = $("#pekerjaan_anak3").val().length;
        if(pekerjaan_anak3 == 0){
            $("#pekerjaan_anak3_error").html("Kolom Ini Harus Diisi");
            $("#pekerjaan_anak3_error").show();
            error_pekerjaan_anak3 = true;
        }else{
            $("#pekerjaan_anak3_error").hide();
        }
    }
    $("#nik_anak4").focusout(function(){
        cek_nik_anak4();
    });
    function cek_nik_anak4(){
        var nik_anak4 = $("#nik_anak4").val().length;
        if(nik_anak4 == 0){
            $("#nik_anak4_error").html("Kolom Ini Harus Diisi");
            $("#nik_anak4_error").show();
            error_nik_anak4 = true;
        }else if(nik_anak4 !== 0 && nik_anak4 !== 16){
            $("#nik_anak4_error").html("NIK Harus Berisi 16 Karakter");
            $("#nik_anak4_error").show();
            error_nik_anak4 = true;
        }else{
            $("#nik_anak4_error").hide();
        }
    }
    $("#nama_anak4").focusout(function(){
        cek_nama_anak4();
    });
    function cek_nama_anak4(){
        var nama_anak4 = $("#nama_anak4").val().length;
        if(nama_anak4 == 0){
            $("#nama_anak4_error").html("Kolom Ini Harus Diisi");
            $("#nama_anak4_error").show();
            error_nama_anak4 = true;
        }else{
            $("#nama_anak4_error").hide();
        }
    }
    $("#tl_anak4").focusout(function(){
        cek_tl_anak4();
    });
    function cek_tl_anak4(){
        var tl_anak4 = $("#tl_anak4").val().length;
        if(tl_anak4 == 0){
            $("#tl_anak4_error").html("Kolom Ini Harus Diisi");
            $("#tl_anak4_error").show();
            error_tl_anak4 = true;
        }else{
            $("#tl_anak4_error").hide();
        }
    }
    $("#tll_anak4").focusout(function(){
        cek_tll_anak4();
    });
    function cek_tll_anak4(){
        var tll_anak4 = $("#tll_anak4").val().length;
        if(tll_anak4 == 0){
            $("#tll_anak4_error").html("Kolom Ini Harus Diisi");
            $("#tll_anak4_error").show();
            error_tll_anak4 = true;
        }else{
            $("#tll_anak4_error").hide();
        }
    }
    $("#pekerjaan_anak4").focusout(function(){
        cek_pekerjaan_anak4();
    });
    function cek_pekerjaan_anak4(){
        var pekerjaan_anak4 = $("#pekerjaan_anak4").val().length;
        if(pekerjaan_anak4 == 0){
            $("#pekerjaan_anak4_error").html("Kolom Ini Harus Diisi");
            $("#pekerjaan_anak4_error").show();
            error_pekerjaan_anak4 = true;
        }else{
            $("#pekerjaan_anak4_error").hide();
        }
    }
    $("#nik_anak5").focusout(function(){
        cek_nik_anak5();
    });
    function cek_nik_anak5(){
        var nik_anak5 = $("#nik_anak5").val().length;
        if(nik_anak5 == 0){
            $("#nik_anak5_error").html("Kolom Ini Harus Diisi");
            $("#nik_anak5_error").show();
            error_nik_anak5 = true;
        }else if(nik_anak5 !== 0 && nik_anak5 !== 16){
            $("#nik_anak5_error").html("NIK Harus Berisi 16 Karakter");
            $("#nik_anak5_error").show();
            error_nik_anak5 = true;
        }else{
            $("#nik_anak5_error").hide();
        }
    }
    $("#nama_anak5").focusout(function(){
        cek_nama_anak5();
    });
    function cek_nama_anak5(){
        var nama_anak5 = $("#nama_anak5").val().length;
        if(nama_anak5 == 0){
            $("#nama_anak5_error").html("Kolom Ini Harus Diisi");
            $("#nama_anak5_error").show();
            error_nama_anak5 = true;
        }else{
            $("#nama_anak5_error").hide();
        }
    }
    $("#tl_anak5").focusout(function(){
        cek_tl_anak5();
    });
    function cek_tl_anak5(){
        var tl_anak5 = $("#tl_anak5").val().length;
        if(tl_anak5 == 0){
            $("#tl_anak5_error").html("Kolom Ini Harus Diisi");
            $("#tl_anak5_error").show();
            error_tl_anak5 = true;
        }else{
            $("#tl_anak5_error").hide();
        }
    }
    $("#tll_anak5").focusout(function(){
        cek_tll_anak5();
    });
    function cek_tll_anak5(){
        var tll_anak5 = $("#tll_anak5").val().length;
        if(tll_anak5 == 0){
            $("#tll_anak5_error").html("Kolom Ini Harus Diisi");
            $("#tll_anak5_error").show();
            error_tll_anak5 = true;
        }else{
            $("#tll_anak5_error").hide();
        }
    }
    $("#pekerjaan_anak5").focusout(function(){
        cek_pekerjaan_anak5();
    });
    function cek_pekerjaan_anak5(){
        var pekerjaan_anak5 = $("#pekerjaan_anak5").val().length;
        if(pekerjaan_anak5 == 0){
            $("#pekerjaan_anak5_error").html("Kolom Ini Harus Diisi");
            $("#pekerjaan_anak5_error").show();
            error_pekerjaan_anak5 = true;
        }else{
            $("#pekerjaan_anak5_error").hide();
        }
    }


    


    
    
    

    



    $("#nama_anak").focusout(function(){
        cek_nama_anak();
    });
    function cek_nama_anak(){
        var nama_anak = $("#nama_anak").val().length;
        if(nama_anak == 0){
            $("#nama_anak_error").html("Kolom Ini Harus Diisi");
            $("#nama_anak_error").show();
            error_nama_anak = true;
        }else{
            $("#nama_anak_error").hide();
        }
    }
    $("#tempat_lahir").focusout(function(){
        cek_tempat_lahir();
    });
    function cek_tempat_lahir(){
        var tempat_lahir = $("#tempat_lahir").val().length;
        if(tempat_lahir == 0){
            $("#tempat_lahir_error").html("Kolom Ini Harus Diisi");
            $("#tempat_lahir_error").show();
            error_tempat_lahir = true;
        }else{
            $("#tempat_lahir_error").hide();
        }
    }
    $("#tll_anak").focusout(function(){
        cek_tll_anak();
    });
    function cek_tll_anak(){
        var tll_anak = $("#tll_anak").val().length;
        if(tll_anak == 0){
            $("#tll_anak_error").html("Kolom Ini Harus Diisi");
            $("#tll_anak_error").show();
            error_tll_anak = true;
        }else{
            $("#tll_anak_error").hide();
        }
    }
    $("#pukul").focusout(function(){
        cek_pukul();
    });
    function cek_pukul(){
        var pukul = $("#pukul").val().length;
        if(pukul == 0){
            $("#pukul_error").html("Kolom Ini Harus Diisi");
            $("#pukul_error").show();
            error_pukul = true;
        }else{
            $("#pukul_error").hide();
        }
    }
    $("#anak_ke").focusout(function(){
        cek_anak_ke();
    });
    function cek_anak_ke(){
        var anak_ke = $("#anak_ke").val().length;
        if(anak_ke == 0){
            $("#anak_ke_error").html("Kolom Ini Harus Diisi");
            $("#anak_ke_error").show();
            error_anak_ke = true;
        }else{
            $("#anak_ke_error").hide();
        }
    }
    $("#berat").focusout(function(){
        cek_berat();
    });
    function cek_berat(){
        var berat = $("#berat").val().length;
        if(berat == 0){
            $("#berat_error").html("Kolom Ini Harus Diisi");
            $("#berat_error").show();
            error_berat = true;
        }else{
            $("#berat_error").hide();
        }
    }
    $("#tinggi").focusout(function(){
        cek_tinggi();
    });
    function cek_tinggi(){
        var tinggi = $("#tinggi").val().length;
        if(tinggi == 0){
            $("#tinggi_error").html("Kolom Ini Harus Diisi");
            $("#tinggi_error").show();
            error_tinggi = true;
        }else{
            $("#tinggi_error").hide();
        }
    }
    

    $("#jumlah_anak").change(function(){
        var jumlah = document.getElementById("jumlah_anak").value;            
        var i =1;
        var a =5;
        if(jumlah > 0){
            for(i; i<=jumlah; i++){
                document.getElementById("anak"+i).style.display = "block";
                
            }
            for(a; a>jumlah; a--){
                document.getElementById("anak"+a).style.display = "none";
            }
        }else{
            for(a; a>=1; a--){
                document.getElementById("anak"+a).style.display = "none";
            }
        }   
    });
    
    
    var tab = 1;
    var tab1 = document.getElementById("kartu_keluarga");
    var tab2 = document.getElementById("bayi");
    var tab3 = document.getElementById("berkas");
    
    $("#next").click(function(){
        error_nomor_kk          = false;
        error_rt                = false;
        error_rw                = false;
        error_kode_pos          = false;
        error_desa_kelurahan    = false;
        error_kecamatan         = false;
        error_kabupaten         = false;
        error_provinsi          = false;
        error_nik_ayah          = false;
        error_nama_ayah         = false;
        error_tl_ayah           = false;
        error_tll_ayah          = false;
        error_agama_ayah        = false;
        error_pendidikan_ayah   = false;
        error_pekerjaan_ayah    = false;
        error_nama_ayah_ayah    = false;
        error_nama_ibu_ayah     = false;
        error_nik_istri         = false;
        error_nama_istri        = false;
        error_tgl_pernikahan    = false;
        error_tl_istri          = false;
        error_tll_istri         = false;
        error_agama_istri       = false;
        error_pendidikan_istri  = false;
        error_pekerjaan_istri   = false;
        error_nama_ayah_istri   = false;
        error_nama_ibu_istri    = false;

        error_nik_anak1         = false;
        error_nama_anak1        = false;
        error_tl_anak1          = false;
        error_tll_anak1         = false;
        error_pekerjaan_anak1   = false;
        
        error_nik_anak2         = false;
        error_nama_anak2        = false;
        error_tl_anak2          = false;
        error_tll_anak2         = false;
        error_pekerjaan_anak2   = false;
        
        error_nik_anak3         = false;
        error_nama_anak3        = false;
        error_tl_anak3          = false;
        error_tll_anak3         = false;
        error_pekerjaan_anak3   = false;
        
        error_nik_anak4         = false;
        error_nama_anak4        = false;
        error_tl_anak4          = false;
        error_tll_anak4         = false;
        error_pekerjaan_anak4   = false;
        
        error_nik_anak5         = false;
        error_nama_anak5        = false;
        error_tl_anak5          = false;
        error_tll_anak5         = false;
        error_pekerjaan_anak5   = false;
        
        error_nama_anak         = false;
        error_tempat_lahir      = false;
        error_tll_anak          = false;
        error_pukul             = false;
        error_anak_ke           = false;
        error_berat             = false;
        error_tinggi            = false;

        error_ktp_ayah          = false;
        error_ktp_ibu           = false;
        error_kk                = false;
        error_buku_nikah        = false;
        error_ket_lahir         = false;
        
        cek_nik_anak1();
        cek_nama_anak1();
        cek_tl_anak1();
        cek_tll_anak1();
        cek_pekerjaan_anak1();
        
        cek_nik_anak2();
        cek_nama_anak2();
        cek_tl_anak2();
        cek_tll_anak2();
        cek_pekerjaan_anak2();
        
        cek_nik_anak3();
        cek_nama_anak3();
        cek_tl_anak3();
        cek_tll_anak3();
        cek_pekerjaan_anak3();
        
        cek_nik_anak4();
        cek_nama_anak4();
        cek_tl_anak4();
        cek_tll_anak4();
        cek_pekerjaan_anak4();
        
        cek_nik_anak5();
        cek_nama_anak5();
        cek_tl_anak5();
        cek_tll_anak5();
        cek_pekerjaan_anak5();


        cek_nomor_kk();
        cek_rt();
        cek_rw();
        cek_kode_pos();
        cek_desa_kelurahan();
        cek_kecamatan();
        cek_kabupaten();
        cek_provinsi();
        cek_nik_ayah();
        cek_nama_ayah();
        cek_tl_ayah();
        cek_tll_ayah();
        cek_pekerjaan_ayah();
        cek_nama_ayah_ayah();
        cek_nama_ibu_ayah();
        cek_nik_istri();
        cek_nama_istri();
        cek_tgl_pernikahan();
        cek_tl_istri();
        cek_tll_istri();
        cek_pekerjaan_istri();
        cek_nama_ayah_istri();
        cek_nama_ibu_istri();

        cek_nama_anak();
        cek_tempat_lahir();
        cek_tll_anak();
        cek_pukul();
        cek_anak_ke();
        cek_berat();
        cek_tinggi();

        
    
    if(tab==1){
        if($("#jumlah_anak").val() == 0){
            if(error_nomor_kk || error_rt || error_rw || error_kode_pos || error_desa_kelurahan || error_kecamatan || error_kabupaten || 
                error_provinsi || error_nik_ayah || error_nama_ayah ||  error_tl_ayah || error_tll_ayah || 
                error_pekerjaan_ayah || error_nama_ayah_ayah || error_nama_ibu_ayah || error_nik_istri || error_nama_istri || 
                error_tgl_pernikahan || error_tl_istri || error_tll_istri || error_pekerjaan_istri || error_nama_ayah_istri || error_nama_ibu_istri
            ){
                return false;
            }else{
                    tab++;
                    if(tab == 1){
                        alert("tab menjadi 1");
                        tab1.style.display = "block";
                        tab2.style.display = "none";
                        tab3.style.display = "none";
                        document.getElementById("prev").style.display = "none";
                        document.getElementById("next").style.display = "block";
                    }else if(tab == 2){
                        $("#nama_anak_error").hide();
                        error_nama_anak = false;
                        $("#tempat_lahir_error").hide();
                        error_tempat_lahir = false;
                        $("#tll_anak_error").hide();
                        error_tll_anak = false;
                        $("#pukul_error").hide();
                        error_pukul = false;
                        $("#anak_ke_error").hide();
                        error_anak_ke = false;
                        $("#berat_error").hide();
                        error_berat = false;
                        $("#tinggi_error").hide();
                        error_tinggi = false;

                        tab2.style.display = "block";
                        tab1.style.display = "none";
                        tab3.style.display = "none";
                        document.getElementById("prev").style.display = "block";
                        document.getElementById("next").style.display = "block";
                    }else if(tab == 3){
                        tab3.style.display = "block";
                        tab1.style.display = "none";
                        tab2.style.display = "none";
                        document.getElementById("next").style.display = "none";
                        document.getElementById("block").style.display = "block";
                    }
                      
                    window.scrollTo(0, 0);
                }
                
        }else if($("#jumlah_anak").val() == 1){
            if(error_nomor_kk || error_rt || error_rw || error_kode_pos || error_desa_kelurahan || error_kecamatan || error_kabupaten || 
                error_provinsi || error_nik_ayah || error_nama_ayah ||  error_tl_ayah || error_tll_ayah || 
                error_pekerjaan_ayah || error_nama_ayah_ayah || error_nama_ibu_ayah || error_nik_istri || error_nama_istri || 
                error_tgl_pernikahan || error_tl_istri || error_tll_istri || error_pekerjaan_istri || error_nama_ayah_istri || error_nama_ibu_istri
                || error_nik_anak1 || error_nama_anak1 || error_tl_anak1 || error_tll_anak1 || error_pekerjaan_anak1
            ){
                return false;
            }else{
                    tab++;
                    if(tab == 1){
                        tab1.style.display = "block";
                        tab2.style.display = "none";
                        tab3.style.display = "none";
                        document.getElementById("prev").style.display = "none";
                        document.getElementById("next").style.display = "block";
                    }else if(tab == 2){
                        $("#nama_anak_error").hide();
                        error_nama_anak = false;
                        $("#tempat_lahir_error").hide();
                        error_tempat_lahir = false;
                        $("#tll_anak_error").hide();
                        error_tll_anak = false;
                        $("#pukul_error").hide();
                        error_pukul = false;
                        $("#anak_ke_error").hide();
                        error_anak_ke = false;
                        $("#berat_error").hide();
                        error_berat = false;
                        $("#tinggi_error").hide();

                        error_tinggi = false;
                        tab2.style.display = "block";
                        tab1.style.display = "none";
                        tab3.style.display = "none";
                        document.getElementById("prev").style.display = "block";
                        document.getElementById("next").style.display = "block";
                    }else if(tab == 3){
                        tab3.style.display = "block";
                        tab1.style.display = "none";
                        tab2.style.display = "none";
                        document.getElementById("next").style.display = "none";
                        document.getElementById("block").style.display = "block";
                    }
                      
                    window.scrollTo(0, 0);
                }
                
        }else if($("#jumlah_anak").val() == 2){
            if(error_nomor_kk || error_rt || error_rw || error_kode_pos || error_desa_kelurahan || error_kecamatan || error_kabupaten || 
                error_provinsi || error_nik_ayah || error_nama_ayah ||  error_tl_ayah || error_tll_ayah || 
                error_pekerjaan_ayah || error_nama_ayah_ayah || error_nama_ibu_ayah || error_nik_istri || error_nama_istri || 
                error_tgl_pernikahan || error_tl_istri || error_tll_istri || error_pekerjaan_istri || error_nama_ayah_istri || error_nama_ibu_istri
                || error_nik_anak1 || error_nama_anak1 || error_tl_anak1 || error_tll_anak1 || error_pekerjaan_anak1
                || error_nik_anak2 || error_nama_anak2 || error_tl_anak2 || error_tll_anak2 || error_pekerjaan_anak2
            ){
                return false;
            }else{
                    tab++;
                    if(tab == 1){
                        tab1.style.display = "block";
                        tab2.style.display = "none";
                        tab3.style.display = "none";
                        document.getElementById("prev").style.display = "none";
                        document.getElementById("next").style.display = "block";
                    }else if(tab == 2){
                        $("#nama_anak_error").hide();
                        error_nama_anak = false;
                        $("#tempat_lahir_error").hide();
                        error_tempat_lahir = false;
                        $("#tll_anak_error").hide();
                        error_tll_anak = false;
                        $("#pukul_error").hide();
                        error_pukul = false;
                        $("#anak_ke_error").hide();
                        error_anak_ke = false;
                        $("#berat_error").hide();
                        error_berat = false;
                        $("#tinggi_error").hide();
                        error_tinggi = false;

                        tab2.style.display = "block";
                        tab1.style.display = "none";
                        tab3.style.display = "none";
                        document.getElementById("prev").style.display = "block";
                        document.getElementById("next").style.display = "block";
                    }else if(tab == 3){
                        tab3.style.display = "block";
                        tab1.style.display = "none";
                        tab2.style.display = "none";
                        document.getElementById("next").style.display = "none";
                        document.getElementById("block").style.display = "block";
                    }
                      
                    window.scrollTo(0, 0);
                }
        }else if($("#jumlah_anak").val() == 3){
            if(error_nomor_kk || error_rt || error_rw || error_kode_pos || error_desa_kelurahan || error_kecamatan || error_kabupaten || 
                error_provinsi || error_nik_ayah || error_nama_ayah ||  error_tl_ayah || error_tll_ayah || 
                error_pekerjaan_ayah || error_nama_ayah_ayah || error_nama_ibu_ayah || error_nik_istri || error_nama_istri || 
                error_tgl_pernikahan || error_tl_istri || error_tll_istri || error_pekerjaan_istri || error_nama_ayah_istri || error_nama_ibu_istri
                || error_nik_anak1 || error_nama_anak1 || error_tl_anak1 || error_tll_anak1 || error_pekerjaan_anak1
                || error_nik_anak2 || error_nama_anak2 || error_tl_anak2 || error_tll_anak2 || error_pekerjaan_anak2
                || error_nik_anak3 || error_nama_anak3 || error_tl_anak3 || error_tll_anak3 || error_pekerjaan_anak3

            ){
                return false;
            }else{
                    tab++;
                    if(tab == 1){
                        tab1.style.display = "block";
                        tab2.style.display = "none";
                        tab3.style.display = "none";
                        document.getElementById("prev").style.display = "none";
                        document.getElementById("next").style.display = "block";
                    }else if(tab == 2){
                        $("#nama_anak_error").hide();
                        error_nama_anak = false;
                        $("#tempat_lahir_error").hide();
                        error_tempat_lahir = false;
                        $("#tll_anak_error").hide();
                        error_tll_anak = false;
                        $("#pukul_error").hide();
                        error_pukul = false;
                        $("#anak_ke_error").hide();
                        error_anak_ke = false;
                        $("#berat_error").hide();
                        error_berat = false;
                        $("#tinggi_error").hide();
                        error_tinggi = false;

                        tab2.style.display = "block";
                        tab1.style.display = "none";
                        tab3.style.display = "none";
                        document.getElementById("prev").style.display = "block";
                        document.getElementById("next").style.display = "block";
                    }else if(tab == 3){
                        tab3.style.display = "block";
                        tab1.style.display = "none";
                        tab2.style.display = "none";
                        document.getElementById("next").style.display = "none";
                        document.getElementById("block").style.display = "block";
                    }
                      
                    window.scrollTo(0, 0);
                }
        }else if($("#jumlah_anak").val() == 4){
            if(error_nomor_kk || error_rt || error_rw || error_kode_pos || error_desa_kelurahan || error_kecamatan || error_kabupaten || 
                error_provinsi || error_nik_ayah || error_nama_ayah ||  error_tl_ayah || error_tll_ayah || 
                error_pekerjaan_ayah || error_nama_ayah_ayah || error_nama_ibu_ayah || error_nik_istri || error_nama_istri || 
                error_tgl_pernikahan || error_tl_istri || error_tll_istri || error_pekerjaan_istri || error_nama_ayah_istri || error_nama_ibu_istri
                || error_nik_anak1 || error_nama_anak1 || error_tl_anak1 || error_tll_anak1 || error_pekerjaan_anak1
                || error_nik_anak2 || error_nama_anak2 || error_tl_anak2 || error_tll_anak2 || error_pekerjaan_anak2
                || error_nik_anak3 || error_nama_anak3 || error_tl_anak3 || error_tll_anak3 || error_pekerjaan_anak3
                || error_nik_anak4 || error_nama_anak4 || error_tl_anak4 || error_tll_anak4 || error_pekerjaan_anak4
            ){
                return false;
            }else{
                    tab++;
                    if(tab == 1){
                        tab1.style.display = "block";
                        tab2.style.display = "none";
                        tab3.style.display = "none";
                        document.getElementById("prev").style.display = "none";
                        document.getElementById("next").style.display = "block";
                    }else if(tab == 2){
                        $("#nama_anak_error").hide();
                        error_nama_anak = false;
                        $("#tempat_lahir_error").hide();
                        error_tempat_lahir = false;
                        $("#tll_anak_error").hide();
                        error_tll_anak = false;
                        $("#pukul_error").hide();
                        error_pukul = false;
                        $("#anak_ke_error").hide();
                        error_anak_ke = false;
                        $("#berat_error").hide();
                        error_berat = false;
                        $("#tinggi_error").hide();
                        error_tinggi = false;

                        tab2.style.display = "block";
                        tab1.style.display = "none";
                        tab3.style.display = "none";
                        document.getElementById("prev").style.display = "block";
                        document.getElementById("next").style.display = "block";
                    }else if(tab == 3){
                        tab3.style.display = "block";
                        tab1.style.display = "none";
                        tab2.style.display = "none";
                        document.getElementById("next").style.display = "none";
                        document.getElementById("block").style.display = "block";
                    }
                      
                    window.scrollTo(0, 0);
                }
        }else if($("#jumlah_anak").val() == 5){
            if(error_nomor_kk || error_rt || error_rw || error_kode_pos || error_desa_kelurahan || error_kecamatan || error_kabupaten || 
                error_provinsi || error_nik_ayah || error_nama_ayah ||  error_tl_ayah || error_tll_ayah || 
                error_pekerjaan_ayah || error_nama_ayah_ayah || error_nama_ibu_ayah || error_nik_istri || error_nama_istri || 
                error_tgl_pernikahan || error_tl_istri || error_tll_istri || error_pekerjaan_istri || error_nama_ayah_istri || error_nama_ibu_istri
                || error_nik_anak1 || error_nama_anak1 || error_tl_anak1 || error_tll_anak1 || error_pekerjaan_anak1
                || error_nik_anak2 || error_nama_anak2 || error_tl_anak2 || error_tll_anak2 || error_pekerjaan_anak2
                || error_nik_anak3 || error_nama_anak3 || error_tl_anak3 || error_tll_anak3 || error_pekerjaan_anak3
                || error_nik_anak4 || error_nama_anak4 || error_tl_anak4 || error_tll_anak4 || error_pekerjaan_anak4
                || error_nik_anak5 || error_nama_anak5 || error_tl_anak5 || error_tll_anak5 || error_pekerjaan_anak5
            ){
                return false;
            }else{
                    tab++;
                    if(tab == 1){
                        tab1.style.display = "block";
                        tab2.style.display = "none";
                        tab3.style.display = "none";
                        document.getElementById("prev").style.display = "none";
                        document.getElementById("next").style.display = "block";
                    }else if(tab == 2){
                        $("#nama_anak_error").hide();
                        error_nama_anak = false;
                        $("#tempat_lahir_error").hide();
                        error_tempat_lahir = false;
                        $("#tll_anak_error").hide();
                        error_tll_anak = false;
                        $("#pukul_error").hide();
                        error_pukul = false;
                        $("#anak_ke_error").hide();
                        error_anak_ke = false;
                        $("#berat_error").hide();
                        error_berat = false;
                        $("#tinggi_error").hide();
                        error_tinggi = false;

                        tab2.style.display = "block";
                        tab1.style.display = "none";
                        tab3.style.display = "none";
                        document.getElementById("prev").style.display = "block";
                        document.getElementById("next").style.display = "block";
                    }else if(tab == 3){

                        tab3.style.display = "block";
                        tab1.style.display = "none";
                        tab2.style.display = "none";
                        document.getElementById("next").style.display = "none";
                        document.getElementById("block").style.display = "block";
                    }
                      
                    window.scrollTo(0, 0);
                }
        
        }
    }else if(tab==2){
            if(error_nama_anak || error_tempat_lahir || error_tll_anak || error_pukul || error_anak_ke || error_berat || error_tinggi){
                return false;
            }else{
                tab++;
                if(tab == 1){
                    tab1.style.display = "block";
                    tab2.style.display = "none";
                    tab3.style.display = "none";
                    document.getElementById("prev").style.display = "none";
                    document.getElementById("next").style.display = "block";
                }else if(tab == 2){
                    tab2.style.display = "block";
                    tab1.style.display = "none";
                    tab3.style.display = "none";
                    document.getElementById("prev").style.display = "block";
                    document.getElementById("next").style.display = "block";
                }else if(tab == 3){
                    tab3.style.display = "block";
                    tab1.style.display = "none";
                    tab2.style.display = "none";
                    document.getElementById("next").style.display = "none";
                    document.getElementById("prev").style.display = "block";
                }
                
                window.scrollTo(0, 0);
            }
    }else if(tab == 3){
        console.log(error_buku_nikah);
    }
    
    });
    
    $("#prev").click(function(){

        tab--;
        if(tab == 1){
            tab1.style.display = "block";
            tab2.style.display = "none";
            tab3.style.display = "none";
            document.getElementById("prev").style.display = "none";
            document.getElementById("next").style.display = "block";
        }else if(tab == 2){
            tab2.style.display = "block";
            tab1.style.display = "none";
            tab3.style.display = "none";
            document.getElementById("prev").style.display = "block";
            document.getElementById("next").style.display = "block";
        }else if(tab == 3){
            tab3.style.display = "block";
            tab1.style.display = "none";
            tab2.style.display = "none";
            document.getElementById("prev").style.display = "none";
            document.getElementById("next").style.display = "block";
        }
        window.scrollTo(0, 0);
    });


});

        

















