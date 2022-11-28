




    <!-- ============================================================== -->
    <script src="<?=$base;?>assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?=$base;?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?=$base;?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?=$base;?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?=$base;?>assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?=$base;?>dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?=$base;?>dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?=$base;?>dist/js/custom.min.js"></script>
    <script src="<?=$base;?>dist/js/upload.js"></script>
    <!-- This Page JS -->
    <script src="<?=$base;?>assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="<?=$base;?>dist/js/pages/mask/mask.init.js"></script>
    <script src="<?=$base;?>assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?=$base;?>assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="<?=$base;?>assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="<?=$base;?>assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="<?=$base;?>assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="<?=$base;?>assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="<?=$base;?>assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?=$base;?>assets/libs/quill/dist/quill.min.js"></script>
    <script>
      jQuery('.mydatepicker').datepicker();
      jQuery('#datepicker-autoclose').datepicker({
          autoclose: true,
          todayHighlight: true
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        //=======================================================HORIZONTAL
        $("#Anak_L_Meninggal,#Anak_L_Hilang,#Anak_L_Terluka,#Anak_L_Menderita,#Anak_L_Mengungsi").keyup(function(){
          var Anak_L_Meninggal = $("#Anak_L_Meninggal").val();
          var Anak_L_Hilang = $("#Anak_L_Hilang").val();
          var Anak_L_Terluka = $("#Anak_L_Terluka").val();
          var Anak_L_Menderita = $("#Anak_L_Menderita").val();
          var Anak_L_Mengungsi = $("#Anak_L_Mengungsi").val();
          var Total_Anak_L = parseInt(Anak_L_Meninggal) + parseInt(Anak_L_Hilang) + parseInt(Anak_L_Terluka) + parseInt(Anak_L_Menderita) + parseInt(Anak_L_Mengungsi);
          $("#Total_Anak_L").val(Total_Anak_L);
        });
        $("#Anak_P_Meninggal,#Anak_P_Hilang,#Anak_P_Terluka,#Anak_P_Menderita,#Anak_P_Mengungsi").keyup(function(){
          var Anak_P_Meninggal = $("#Anak_P_Meninggal").val();
          var Anak_P_Hilang = $("#Anak_P_Hilang").val();
          var Anak_P_Terluka = $("#Anak_P_Terluka").val();
          var Anak_P_Menderita = $("#Anak_P_Menderita").val();
          var Anak_P_Mengungsi = $("#Anak_P_Mengungsi").val();
          var Total_Anak_P = parseInt(Anak_P_Meninggal) + parseInt(Anak_P_Hilang) + parseInt(Anak_P_Terluka) + parseInt(Anak_P_Menderita) + parseInt(Anak_P_Mengungsi);
          $("#Total_Anak_P").val(Total_Anak_P);
        });
        $("#Dewasa_L_Meninggal,#Dewasa_L_Hilang,#Dewasa_L_Terluka,#Dewasa_L_Menderita,#Dewasa_L_Mengungsi").keyup(function(){
          var Dewasa_L_Meninggal = $("#Dewasa_L_Meninggal").val();
          var Dewasa_L_Hilang = $("#Dewasa_L_Hilang").val();
          var Dewasa_L_Terluka = $("#Dewasa_L_Terluka").val();
          var Dewasa_L_Menderita = $("#Dewasa_L_Menderita").val();
          var Dewasa_L_Mengungsi = $("#Dewasa_L_Mengungsi").val();
          var Total_Dewasa_L = parseInt(Dewasa_L_Meninggal) + parseInt(Dewasa_L_Hilang) + parseInt(Dewasa_L_Terluka) + parseInt(Dewasa_L_Menderita) + parseInt(Dewasa_L_Mengungsi);
          $("#Total_Dewasa_L").val(Total_Dewasa_L);
        });
        $("#Dewasa_P_Meninggal,#Dewasa_P_Hilang,#Dewasa_P_Terluka,#Dewasa_P_Menderita,#Dewasa_P_Mengungsi").keyup(function(){
          var Dewasa_P_Meninggal = $("#Dewasa_P_Meninggal").val();
          var Dewasa_P_Hilang = $("#Dewasa_P_Hilang").val();
          var Dewasa_P_Terluka = $("#Dewasa_P_Terluka").val();
          var Dewasa_P_Menderita = $("#Dewasa_P_Menderita").val();
          var Dewasa_P_Mengungsi = $("#Dewasa_P_Mengungsi").val();
          var Total_Dewasa_P = parseInt(Dewasa_P_Meninggal) + parseInt(Dewasa_P_Hilang) + parseInt(Dewasa_P_Terluka) + parseInt(Dewasa_P_Menderita) + parseInt(Dewasa_P_Mengungsi);
          $("#Total_Dewasa_P").val(Total_Dewasa_P);
        });
        $("#Lansia_L_Meninggal,#Lansia_L_Hilang,#Lansia_L_Terluka,#Lansia_L_Menderita,#Lansia_L_Mengungsi").keyup(function(){
          var Lansia_L_Meninggal = $("#Lansia_L_Meninggal").val();
          var Lansia_L_Hilang = $("#Lansia_L_Hilang").val();
          var Lansia_L_Terluka = $("#Lansia_L_Terluka").val();
          var Lansia_L_Menderita = $("#Lansia_L_Menderita").val();
          var Lansia_L_Mengungsi = $("#Lansia_L_Mengungsi").val();
          var Total_Lansia_L = parseInt(Lansia_L_Meninggal) + parseInt(Lansia_L_Hilang) + parseInt(Lansia_L_Terluka) + parseInt(Lansia_L_Menderita) + parseInt(Lansia_L_Mengungsi);
          $("#Total_Lansia_L").val(Total_Lansia_L);
        });
        $("#Lansia_P_Meninggal,#Lansia_P_Hilang,#Lansia_P_Terluka,#Lansia_P_Menderita,#Lansia_P_Mengungsi").keyup(function(){
          var Lansia_P_Meninggal = $("#Lansia_P_Meninggal").val();
          var Lansia_P_Hilang = $("#Lansia_P_Hilang").val();
          var Lansia_P_Terluka = $("#Lansia_P_Terluka").val();
          var Lansia_P_Menderita = $("#Lansia_P_Menderita").val();
          var Lansia_P_Mengungsi = $("#Lansia_P_Mengungsi").val();
          var Total_Lansia_P = parseInt(Lansia_P_Meninggal) + parseInt(Lansia_P_Hilang) + parseInt(Lansia_P_Terluka) + parseInt(Lansia_P_Menderita) + parseInt(Lansia_P_Mengungsi);
          $("#Total_Lansia_P").val(Total_Lansia_P);
        });
        $("#Disabilitas_L_Meninggal,#Disabilitas_L_Hilang,#Disabilitas_L_Terluka,#Disabilitas_L_Menderita,#Disabilitas_L_Mengungsi").keyup(function(){
          var Disabilitas_L_Meninggal = $("#Disabilitas_L_Meninggal").val();
          var Disabilitas_L_Hilang = $("#Disabilitas_L_Hilang").val();
          var Disabilitas_L_Terluka = $("#Disabilitas_L_Terluka").val();
          var Disabilitas_L_Menderita = $("#Disabilitas_L_Menderita").val();
          var Disabilitas_L_Mengungsi = $("#Disabilitas_L_Mengungsi").val();
          var Total_Disabilitas_L = parseInt(Disabilitas_L_Meninggal) + parseInt(Disabilitas_L_Hilang) + parseInt(Disabilitas_L_Terluka) + parseInt(Disabilitas_L_Menderita) + parseInt(Disabilitas_L_Mengungsi);
          $("#Total_Disabilitas_L").val(Total_Disabilitas_L);
        });
        $("#Disabilitas_P_Meninggal,#Disabilitas_P_Hilang,#Disabilitas_P_Terluka,#Disabilitas_P_Menderita,#Disabilitas_P_Mengungsi").keyup(function(){
          var Disabilitas_P_Meninggal = $("#Disabilitas_P_Meninggal").val();
          var Disabilitas_P_Hilang = $("#Disabilitas_P_Hilang").val();
          var Disabilitas_P_Terluka = $("#Disabilitas_P_Terluka").val();
          var Disabilitas_P_Menderita = $("#Disabilitas_P_Menderita").val();
          var Disabilitas_P_Mengungsi = $("#Disabilitas_P_Mengungsi").val();
          var Total_Disabilitas_P = parseInt(Disabilitas_P_Meninggal) + parseInt(Disabilitas_P_Hilang) + parseInt(Disabilitas_P_Terluka) + parseInt(Disabilitas_P_Menderita) + parseInt(Disabilitas_P_Mengungsi);
          $("#Total_Disabilitas_P").val(Total_Disabilitas_P);
        });
        $("#Ibu_Hamil_Meninggal,#Ibu_Hamil_Hilang,#Ibu_Hamil_Terluka,#Ibu_Hamil_Menderita,#Ibu_Hamil_Mengungsi").keyup(function(){
          var Ibu_Hamil_Meninggal = $("#Ibu_Hamil_Meninggal").val();
          var Ibu_Hamil_Hilang = $("#Ibu_Hamil_Hilang").val();
          var Ibu_Hamil_Terluka = $("#Ibu_Hamil_Terluka").val();
          var Ibu_Hamil_Menderita = $("#Ibu_Hamil_Menderita").val();
          var Ibu_Hamil_Mengungsi = $("#Ibu_Hamil_Mengungsi").val();
          var Total_Ibu_Hamil = parseInt(Ibu_Hamil_Meninggal) + parseInt(Ibu_Hamil_Hilang) + parseInt(Ibu_Hamil_Terluka) + parseInt(Ibu_Hamil_Menderita) + parseInt(Ibu_Hamil_Mengungsi);
          $("#Total_Ibu_Hamil").val(Total_Ibu_Hamil);
        });
        $("#Ibu_Hamil_Meninggal,#Ibu_Hamil_Hilang,#Ibu_Hamil_Terluka,#Ibu_Hamil_Menderita,#Ibu_Hamil_Mengungsi").keyup(function(){
          var Ibu_Hamil_Meninggal = $("#Ibu_Hamil_Meninggal").val();
          var Ibu_Hamil_Hilang = $("#Ibu_Hamil_Hilang").val();
          var Ibu_Hamil_Terluka = $("#Ibu_Hamil_Terluka").val();
          var Ibu_Hamil_Menderita = $("#Ibu_Hamil_Menderita").val();
          var Ibu_Hamil_Mengungsi = $("#Ibu_Hamil_Mengungsi").val();
          var Total_Ibu_Hamil = parseInt(Ibu_Hamil_Meninggal) + parseInt(Ibu_Hamil_Hilang) + parseInt(Ibu_Hamil_Terluka) + parseInt(Ibu_Hamil_Menderita) + parseInt(Ibu_Hamil_Mengungsi);
          $("#Total_Ibu_Hamil").val(Total_Ibu_Hamil);
        });
        //=======================================================VERTIKAL
        $("#Anak_L_Meninggal,#Anak_P_Meninggal,#Dewasa_L_Meninggal,#Dewasa_P_Meninggal,#Lansia_L_Meninggal,#Lansia_P_Meninggal,#Disabilitas_L_Meninggal,#Disabilitas_P_Meninggal,#Ibu_Hamil_Meninggal").keyup(function(){
          var Anak_L_Meninggal = $("#Anak_L_Meninggal").val();
          var Anak_P_Meninggal = $("#Anak_P_Meninggal").val();
          var Dewasa_L_Meninggal = $("#Dewasa_L_Meninggal").val();
          var Dewasa_P_Meninggal = $("#Dewasa_P_Meninggal").val();
          var Lansia_L_Meninggal = $("#Lansia_L_Meninggal").val();
          var Lansia_P_Meninggal = $("#Lansia_P_Meninggal").val();
          var Disabilitas_L_Meninggal = $("#Disabilitas_L_Meninggal").val();
          var Disabilitas_P_Meninggal = $("#Disabilitas_P_Meninggal").val();
          var Ibu_Hamil_Meninggal = $("#Ibu_Hamil_Meninggal").val();
          var Total_Meninggal = parseInt(Anak_L_Meninggal) + parseInt(Anak_P_Meninggal) + parseInt(Dewasa_L_Meninggal) + parseInt(Dewasa_P_Meninggal) + parseInt(Lansia_L_Meninggal) + parseInt(Lansia_P_Meninggal) + parseInt(Disabilitas_L_Meninggal) + parseInt(Disabilitas_P_Meninggal) + parseInt(Ibu_Hamil_Meninggal);
          $("#Total_Meninggal").val(Total_Meninggal);
        });
        $("#Anak_L_Hilang,#Anak_P_Hilang,#Dewasa_L_Hilang,#Dewasa_P_Hilang,#Lansia_L_Hilang,#Lansia_P_Hilang,#Disabilitas_L_Hilang,#Disabilitas_P_Hilang,#Ibu_Hamil_Hilang").keyup(function(){
          var Anak_L_Hilang = $("#Anak_L_Hilang").val();
          var Anak_P_Hilang = $("#Anak_P_Hilang").val();
          var Dewasa_L_Hilang = $("#Dewasa_L_Hilang").val();
          var Dewasa_P_Hilang = $("#Dewasa_P_Hilang").val();
          var Lansia_L_Hilang = $("#Lansia_L_Hilang").val();
          var Lansia_P_Hilang = $("#Lansia_P_Hilang").val();
          var Disabilitas_L_Hilang = $("#Disabilitas_L_Hilang").val();
          var Disabilitas_P_Hilang = $("#Disabilitas_P_Hilang").val();
          var Ibu_Hamil_Hilang = $("#Ibu_Hamil_Hilang").val();
          var Total_Hilang = parseInt(Anak_L_Hilang) + parseInt(Anak_P_Hilang) + parseInt(Dewasa_L_Hilang) + parseInt(Dewasa_P_Hilang) + parseInt(Lansia_L_Hilang) + parseInt(Lansia_P_Hilang) + parseInt(Disabilitas_L_Hilang) + parseInt(Disabilitas_P_Hilang) + parseInt(Ibu_Hamil_Hilang);
          $("#Total_Hilang").val(Total_Hilang);
        });
        $("#Anak_L_Terluka,#Anak_P_Terluka,#Dewasa_L_Terluka,#Dewasa_P_Terluka,#Lansia_L_Terluka,#Lansia_P_Terluka,#Disabilitas_L_Terluka,#Disabilitas_P_Terluka,#Ibu_Hamil_Terluka").keyup(function(){
          var Anak_L_Terluka = $("#Anak_L_Terluka").val();
          var Anak_P_Terluka = $("#Anak_P_Terluka").val();
          var Dewasa_L_Terluka = $("#Dewasa_L_Terluka").val();
          var Dewasa_P_Terluka = $("#Dewasa_P_Terluka").val();
          var Lansia_L_Terluka = $("#Lansia_L_Terluka").val();
          var Lansia_P_Terluka = $("#Lansia_P_Terluka").val();
          var Disabilitas_L_Terluka = $("#Disabilitas_L_Terluka").val();
          var Disabilitas_P_Terluka = $("#Disabilitas_P_Terluka").val();
          var Ibu_Hamil_Terluka = $("#Ibu_Hamil_Terluka").val();
          var Total_Terluka = parseInt(Anak_L_Terluka) + parseInt(Anak_P_Terluka) + parseInt(Dewasa_L_Terluka) + parseInt(Dewasa_P_Terluka) + parseInt(Lansia_L_Terluka) + parseInt(Lansia_P_Terluka) + parseInt(Disabilitas_L_Terluka) + parseInt(Disabilitas_P_Terluka) + parseInt(Ibu_Hamil_Terluka);
          $("#Total_Terluka").val(Total_Terluka);
        });
        $("#Anak_L_Menderita,#Anak_P_Menderita,#Dewasa_L_Menderita,#Dewasa_P_Menderita,#Lansia_L_Menderita,#Lansia_P_Menderita,#Disabilitas_L_Menderita,#Disabilitas_P_Menderita,#Ibu_Hamil_Menderita").keyup(function(){
          var Anak_L_Menderita = $("#Anak_L_Menderita").val();
          var Anak_P_Menderita = $("#Anak_P_Menderita").val();
          var Dewasa_L_Menderita = $("#Dewasa_L_Menderita").val();
          var Dewasa_P_Menderita = $("#Dewasa_P_Menderita").val();
          var Lansia_L_Menderita = $("#Lansia_L_Menderita").val();
          var Lansia_P_Menderita = $("#Lansia_P_Menderita").val();
          var Disabilitas_L_Menderita = $("#Disabilitas_L_Menderita").val();
          var Disabilitas_P_Menderita = $("#Disabilitas_P_Menderita").val();
          var Ibu_Hamil_Menderita = $("#Ibu_Hamil_Menderita").val();
          var Total_Menderita = parseInt(Anak_L_Menderita) + parseInt(Anak_P_Menderita) + parseInt(Dewasa_L_Menderita) + parseInt(Dewasa_P_Menderita) + parseInt(Lansia_L_Menderita) + parseInt(Lansia_P_Menderita) + parseInt(Disabilitas_L_Menderita) + parseInt(Disabilitas_P_Menderita) + parseInt(Ibu_Hamil_Menderita);
          $("#Total_Menderita").val(Total_Menderita);
        });
        $("#Anak_L_Mengungsi,#Anak_P_Mengungsi,#Dewasa_L_Mengungsi,#Dewasa_P_Mengungsi,#Lansia_L_Mengungsi,#Lansia_P_Mengungsi,#Disabilitas_L_Mengungsi,#Disabilitas_P_Mengungsi,#Ibu_Hamil_Mengungsi").keyup(function(){
          var Anak_L_Mengungsi = $("#Anak_L_Mengungsi").val();
          var Anak_P_Mengungsi = $("#Anak_P_Mengungsi").val();
          var Dewasa_L_Mengungsi = $("#Dewasa_L_Mengungsi").val();
          var Dewasa_P_Mengungsi = $("#Dewasa_P_Mengungsi").val();
          var Lansia_L_Mengungsi = $("#Lansia_L_Mengungsi").val();
          var Lansia_P_Mengungsi = $("#Lansia_P_Mengungsi").val();
          var Disabilitas_L_Mengungsi = $("#Disabilitas_L_Mengungsi").val();
          var Disabilitas_P_Mengungsi = $("#Disabilitas_P_Mengungsi").val();
          var Ibu_Hamil_Mengungsi = $("#Ibu_Hamil_Mengungsi").val();
          var Total_Mengungsi = parseInt(Anak_L_Mengungsi) + parseInt(Anak_P_Mengungsi) + parseInt(Dewasa_L_Mengungsi) + parseInt(Dewasa_P_Mengungsi) + parseInt(Lansia_L_Mengungsi) + parseInt(Lansia_P_Mengungsi) + parseInt(Disabilitas_L_Mengungsi) + parseInt(Disabilitas_P_Mengungsi) + parseInt(Ibu_Hamil_Mengungsi);
          $("#Total_Mengungsi").val(Total_Mengungsi);
        });
        //=======================================================KERUSAKAN HORIZONTAL
        $("#Rumah_Rusak_berat,#Rumah_Rusak_Sedang,#Rumah_Rusak_Ringan,#Rumah_Terendam").keyup(function(){
          var Rumah_Rusak_berat = $("#Rumah_Rusak_berat").val();
          var Rumah_Rusak_Sedang = $("#Rumah_Rusak_Sedang").val();
          var Rumah_Rusak_Ringan = $("#Rumah_Rusak_Ringan").val();
          var Rumah_Terendam = $("#Rumah_Terendam").val();
          var Total_Rumah = parseInt(Rumah_Rusak_berat) + parseInt(Rumah_Rusak_Sedang) + parseInt(Rumah_Rusak_Ringan) + parseInt(Rumah_Terendam);
          $("#Total_Rumah").val(Total_Rumah);
        });
        $("#Pendidikan_Rusak_berat,#Pendidikan_Rusak_Sedang,#Pendidikan_Rusak_Ringan,#Pendidikan_Terendam").keyup(function(){
          var Pendidikan_Rusak_berat = $("#Pendidikan_Rusak_berat").val();
          var Pendidikan_Rusak_Sedang = $("#Pendidikan_Rusak_Sedang").val();
          var Pendidikan_Rusak_Ringan = $("#Pendidikan_Rusak_Ringan").val();
          var Pendidikan_Terendam = $("#Pendidikan_Terendam").val();
          var Total_Pendidikan = parseInt(Pendidikan_Rusak_berat) + parseInt(Pendidikan_Rusak_Sedang) + parseInt(Pendidikan_Rusak_Ringan) + parseInt(Pendidikan_Terendam);
          $("#Total_Pendidikan").val(Total_Pendidikan);
        });
        $("#Peribadatan_Rusak_berat,#Peribadatan_Rusak_Sedang,#Peribadatan_Rusak_Ringan,#Peribadatan_Terendam").keyup(function(){
          var Peribadatan_Rusak_berat = $("#Peribadatan_Rusak_berat").val();
          var Peribadatan_Rusak_Sedang = $("#Peribadatan_Rusak_Sedang").val();
          var Peribadatan_Rusak_Ringan = $("#Peribadatan_Rusak_Ringan").val();
          var Peribadatan_Terendam = $("#Peribadatan_Terendam").val();
          var Total_Peribadatan = parseInt(Peribadatan_Rusak_berat) + parseInt(Peribadatan_Rusak_Sedang) + parseInt(Peribadatan_Rusak_Ringan) + parseInt(Peribadatan_Terendam);
          $("#Total_Peribadatan").val(Total_Peribadatan);
        });
        $("#Kesehatan_Rusak_berat,#Kesehatan_Rusak_Sedang,#Kesehatan_Rusak_Ringan,#Kesehatan_Terendam").keyup(function(){
          var Kesehatan_Rusak_berat = $("#Kesehatan_Rusak_berat").val();
          var Kesehatan_Rusak_Sedang = $("#Kesehatan_Rusak_Sedang").val();
          var Kesehatan_Rusak_Ringan = $("#Kesehatan_Rusak_Ringan").val();
          var Kesehatan_Terendam = $("#Kesehatan_Terendam").val();
          var Total_Kesehatan = parseInt(Kesehatan_Rusak_berat) + parseInt(Kesehatan_Rusak_Sedang) + parseInt(Kesehatan_Rusak_Ringan) + parseInt(Kesehatan_Terendam);
          $("#Total_Kesehatan").val(Total_Kesehatan);
        });
        $("#Perkantoran_Rusak_berat,#Perkantoran_Rusak_Sedang,#Perkantoran_Rusak_Ringan,#Perkantoran_Terendam").keyup(function(){
          var Perkantoran_Rusak_berat = $("#Perkantoran_Rusak_berat").val();
          var Perkantoran_Rusak_Sedang = $("#Perkantoran_Rusak_Sedang").val();
          var Perkantoran_Rusak_Ringan = $("#Perkantoran_Rusak_Ringan").val();
          var Perkantoran_Terendam = $("#Perkantoran_Terendam").val();
          var Total_Perkantoran = parseInt(Perkantoran_Rusak_berat) + parseInt(Perkantoran_Rusak_Sedang) + parseInt(Perkantoran_Rusak_Ringan) + parseInt(Perkantoran_Terendam);
          $("#Total_Perkantoran").val(Total_Perkantoran);
        });
        $("#Fasum_Rusak_berat,#Fasum_Rusak_Sedang,#Fasum_Rusak_Ringan,#Fasum_Terendam").keyup(function(){
          var Fasum_Rusak_berat = $("#Fasum_Rusak_berat").val();
          var Fasum_Rusak_Sedang = $("#Fasum_Rusak_Sedang").val();
          var Fasum_Rusak_Ringan = $("#Fasum_Rusak_Ringan").val();
          var Fasum_Terendam = $("#Fasum_Terendam").val();
          var Total_Fasum = parseInt(Fasum_Rusak_berat) + parseInt(Fasum_Rusak_Sedang) + parseInt(Fasum_Rusak_Ringan) + parseInt(Fasum_Terendam);
          $("#Total_Fasum").val(Total_Fasum);
        });
        $("#Jembatan_Rusak_berat,#Jembatan_Rusak_Sedang,#Jembatan_Rusak_Ringan,#Jembatan_Terendam").keyup(function(){
          var Jembatan_Rusak_berat = $("#Jembatan_Rusak_berat").val();
          var Jembatan_Rusak_Sedang = $("#Jembatan_Rusak_Sedang").val();
          var Jembatan_Rusak_Ringan = $("#Jembatan_Rusak_Ringan").val();
          var Jembatan_Terendam = $("#Jembatan_Terendam").val();
          var Total_Jembatan = parseInt(Jembatan_Rusak_berat) + parseInt(Jembatan_Rusak_Sedang) + parseInt(Jembatan_Rusak_Ringan) + parseInt(Jembatan_Terendam);
          $("#Total_Jembatan").val(Total_Jembatan);
        });
        $("#Pabrik_Rusak_berat,#Pabrik_Rusak_Sedang,#Pabrik_Rusak_Ringan,#Pabrik_Terendam").keyup(function(){
          var Pabrik_Rusak_berat = $("#Pabrik_Rusak_berat").val();
          var Pabrik_Rusak_Sedang = $("#Pabrik_Rusak_Sedang").val();
          var Pabrik_Rusak_Ringan = $("#Pabrik_Rusak_Ringan").val();
          var Pabrik_Terendam = $("#Pabrik_Terendam").val();
          var Total_Pabrik = parseInt(Pabrik_Rusak_berat) + parseInt(Pabrik_Rusak_Sedang) + parseInt(Pabrik_Rusak_Ringan) + parseInt(Pabrik_Terendam);
          $("#Total_Pabrik").val(Total_Pabrik);
        });
        $("#Pertokoan_Rusak_berat,#Pertokoan_Rusak_Sedang,#Pertokoan_Rusak_Ringan,#Pertokoan_Terendam").keyup(function(){
          var Pertokoan_Rusak_berat = $("#Pertokoan_Rusak_berat").val();
          var Pertokoan_Rusak_Sedang = $("#Pertokoan_Rusak_Sedang").val();
          var Pertokoan_Rusak_Ringan = $("#Pertokoan_Rusak_Ringan").val();
          var Pertokoan_Terendam = $("#Pertokoan_Terendam").val();
          var Total_Pertokoan = parseInt(Pertokoan_Rusak_berat) + parseInt(Pertokoan_Rusak_Sedang) + parseInt(Pertokoan_Rusak_Ringan) + parseInt(Pertokoan_Terendam);
          $("#Total_Pertokoan").val(Total_Pertokoan);
        });
        //=======================================================KERUSAKAN VERTIKAl
        $("#Kesehatan_Rusak_berat,#Pendidikan_Rusak_berat,#Peribadatan_Rusak_berat,#Perkantoran_Rusak_berat,#Fasum_Rusak_berat,#Jembatan_Rusak_berat,#Pabrik_Rusak_berat,#Pertokoan_Rusak_berat").keyup(function(){
          var Kesehatan_Rusak_berat = $("#Kesehatan_Rusak_berat").val();
          var Pendidikan_Rusak_berat = $("#Pendidikan_Rusak_berat").val();
          var Peribadatan_Rusak_berat = $("#Peribadatan_Rusak_berat").val();
          var Perkantoran_Rusak_berat = $("#Perkantoran_Rusak_berat").val();
          var Fasum_Rusak_berat = $("#Fasum_Rusak_berat").val();
          var Jembatan_Rusak_berat = $("#Jembatan_Rusak_berat").val();
          var Pabrik_Rusak_berat = $("#Pabrik_Rusak_berat").val();
          var Pertokoan_Rusak_berat = $("#Pertokoan_Rusak_berat").val();
          var Total_Rusak_Berat = parseInt(Kesehatan_Rusak_berat) + parseInt(Pendidikan_Rusak_berat) + parseInt(Peribadatan_Rusak_berat) + parseInt(Perkantoran_Rusak_berat) + parseInt(Fasum_Rusak_berat) + parseInt(Jembatan_Rusak_berat) + parseInt(Pabrik_Rusak_berat) + parseInt(Pertokoan_Rusak_berat);
          $("#Total_Rusak_Berat").val(Total_Rusak_Berat);
        });
        $("#Kesehatan_Rusak_Sedang,#Pendidikan_Rusak_Sedang,#Peribadatan_Rusak_Sedang,#Perkantoran_Rusak_Sedang,#Fasum_Rusak_Sedang,#Jembatan_Rusak_Sedang,#Pabrik_Rusak_Sedang,#Pertokoan_Rusak_Sedang").keyup(function(){
          var Kesehatan_Rusak_Sedang = $("#Kesehatan_Rusak_Sedang").val();
          var Pendidikan_Rusak_Sedang = $("#Pendidikan_Rusak_Sedang").val();
          var Peribadatan_Rusak_Sedang = $("#Peribadatan_Rusak_Sedang").val();
          var Perkantoran_Rusak_Sedang = $("#Perkantoran_Rusak_Sedang").val();
          var Fasum_Rusak_Sedang = $("#Fasum_Rusak_Sedang").val();
          var Jembatan_Rusak_Sedang = $("#Jembatan_Rusak_Sedang").val();
          var Pabrik_Rusak_Sedang = $("#Pabrik_Rusak_Sedang").val();
          var Pertokoan_Rusak_Sedang = $("#Pertokoan_Rusak_Sedang").val();
          var Total_Rusak_Sedang = parseInt(Kesehatan_Rusak_Sedang) + parseInt(Pendidikan_Rusak_Sedang) + parseInt(Peribadatan_Rusak_Sedang) + parseInt(Perkantoran_Rusak_Sedang) + parseInt(Fasum_Rusak_Sedang) + parseInt(Jembatan_Rusak_Sedang) + parseInt(Pabrik_Rusak_Sedang) + parseInt(Pertokoan_Rusak_Sedang);
          $("#Total_Rusak_Sedang").val(Total_Rusak_Sedang);
        });
        $("#Kesehatan_Rusak_Ringan,#Pendidikan_Rusak_Ringan,#Peribadatan_Rusak_Ringan,#Perkantoran_Rusak_Ringan,#Fasum_Rusak_Ringan,#Jembatan_Rusak_Ringan,#Pabrik_Rusak_Ringan,#Pertokoan_Rusak_Ringan").keyup(function(){
          var Kesehatan_Rusak_Ringan = $("#Kesehatan_Rusak_Ringan").val();
          var Pendidikan_Rusak_Ringan = $("#Pendidikan_Rusak_Ringan").val();
          var Peribadatan_Rusak_Ringan = $("#Peribadatan_Rusak_Ringan").val();
          var Perkantoran_Rusak_Ringan = $("#Perkantoran_Rusak_Ringan").val();
          var Fasum_Rusak_Ringan = $("#Fasum_Rusak_Ringan").val();
          var Jembatan_Rusak_Ringan = $("#Jembatan_Rusak_Ringan").val();
          var Pabrik_Rusak_Ringan = $("#Pabrik_Rusak_Ringan").val();
          var Pertokoan_Rusak_Ringan = $("#Pertokoan_Rusak_Ringan").val();
          var Total_Rusak_Ringan = parseInt(Kesehatan_Rusak_Ringan) + parseInt(Pendidikan_Rusak_Ringan) + parseInt(Peribadatan_Rusak_Ringan) + parseInt(Perkantoran_Rusak_Ringan) + parseInt(Fasum_Rusak_Ringan) + parseInt(Jembatan_Rusak_Ringan) + parseInt(Pabrik_Rusak_Ringan) + parseInt(Pertokoan_Rusak_Ringan);
          $("#Total_Rusak_Ringan").val(Total_Rusak_Ringan);
        });
        $("#Kesehatan_Terendam,#Pendidikan_Terendam,#Peribadatan_Terendam,#Perkantoran_Terendam,#Fasum_Terendam,#Jembatan_Terendam,#Pabrik_Terendam,#Pertokoan_Terendam").keyup(function(){
          var Kesehatan_Terendam = $("#Kesehatan_Terendam").val();
          var Pendidikan_Terendam = $("#Pendidikan_Terendam").val();
          var Peribadatan_Terendam = $("#Peribadatan_Terendam").val();
          var Perkantoran_Terendam = $("#Perkantoran_Terendam").val();
          var Fasum_Terendam = $("#Fasum_Terendam").val();
          var Jembatan_Terendam = $("#Jembatan_Terendam").val();
          var Pabrik_Terendam = $("#Pabrik_Terendam").val();
          var Pertokoan_Terendam = $("#Pertokoan_Terendam").val();
          var Total_Terendam = parseInt(Kesehatan_Terendam) + parseInt(Pendidikan_Terendam) + parseInt(Peribadatan_Terendam) + parseInt(Perkantoran_Terendam) + parseInt(Fasum_Terendam) + parseInt(Jembatan_Terendam) + parseInt(Pabrik_Terendam) + parseInt(Pertokoan_Terendam);
          $("#Total_Terendam").val(Total_Terendam);
        });



      });
    </script>





















