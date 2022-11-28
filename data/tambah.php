<?php
require_once("../include/config.php");
if(!isset($_SESSION['user'])) {
  header("Location:".$base."login.php");
} else {
$msg_type = '';
?>
<!DOCTYPE html>
<html dir="ltr" lang="id">
  <head>
      <?php
      include_once("../include/head.php");
      ?>
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
      <?php
      include_once("../include/header.php");
      ?>
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <?php
                if ($_SESSION['msg_type']  == 'success') {
                  unset($_SESSION['msg_type']);
                  echo "<div class='alert alert-success'>$_SESSION[msg_content]</div>";
                } else if($_SESSION['msg_type']  == 'error') {
                  unset($_SESSION['msg_type']);
                  echo "<div class='alert alert-danger'>$_SESSION[msg_content]</div>";
                }
            ?>
            <form method="post" enctype="multipart/form-data" action="<?=$base;?>proses/tambah.php">
              <input type="hidden" name="redirect" value="<?=$base;?>data/tambah.php">
              <div class="row">
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header p-2">
                      <h4 class="card-title bold-text">
                        A. Indentitas Bencana
                      </h4>
                    </div>
                    <div class="card-body p-3 mb-0">
                      <div class="form-group row">
                        <label class="col-md-12  bold-text">I. Jenis Bencana</label>
                        <?php
                        echo JenisBencana();
                        ?>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-6 bold-text">II. Tanggal Bencana</label>
                        <div class="col-md-6">
                          <div class="input-group">
                            <input name="tanggal" type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy" required autocomplete="off">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-12 bold-text">III. Lokasi Bencana</label>
                        <label class="col-md-6 mb-2">Desa/Kelurahan</label>
                        <div class="col-md-6 mb-2">
                          <div class="input-group">
                            <input type="text" class="form-control" name="lokasi[]" placeholder="Tetehosi,Biouti" required autocomplete="off">
                          </div>
                        </div>
                        <label class="col-md-6 mb-2">Kecamatan</label>
                        <div class="col-md-6 mb-2">
                          <div class="input-group">
                            <input type="text" class="form-control" name="lokasi[]" placeholder="Idano Gawo" required autocomplete="off">
                          </div>
                        </div>
                        <label class="col-md-6">Provinsi</label>
                        <div class="col-md-6">
                          <div class="input-group">
                            <input type="text" class="form-control" name="lokasi[]" placeholder="Sumut" required autocomplete="off">
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-12 bold-text">IV. Titik Koordinat</label>
                        <label class="col-md-6 mb-2">Lat</label>
                        <div class="col-md-6 mb-2">
                          <div class="input-group">
                            <input name="lokasi[]" type="text" class="form-control" placeholder="1.044784" required autocomplete="off">
                          </div>
                        </div>
                        <label class="col-md-6 mb-2">Long</label>
                        <div class="col-md-6 mb-2">
                          <div class="input-group">
                            <input name="lokasi[]" type="text" class="form-control" placeholder="97.776481" required autocomplete="off">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card-header p-2">
                      <h4 class="card-title bold-text">
                        B. Detail Bencana
                      </h4>
                    </div>
                    <div class="card-body p-3 mb-0">
                      <div class="form-group row">
                        <label class="col-md-12  bold-text">Penyebab Bencana</label>
                        <div class='col-md-12'>
                          <textarea name='penyebab' class="ckeditor" id="ckeditor1"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-12  bold-text">Kronologi</label>
                        <div class='col-md-12'>
                          <textarea name='kronologi' class="ckeditor" id="ckeditor2"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-12  bold-text">Petugas</label>
                        <div class='col-md-12'>
                          <textarea name='petugas' class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-12  bold-text">Upaya</label>
                        <div class='col-md-12'>
                          <textarea name='upaya' class="ckeditor" id="ckeditor2" width='80'></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card">
                    <div class="card-header p-2">
                      <h4 class="card-title bold-text">
                        C. Korban
                      </h4>
                    </div>
                    <div class="card-body p-3 mb-0">
                     <div class="table-responsive">
                       <table class="table table-borderless table-sm p-0">
                         <thead>
                           <tr>
                             <th></th>
                             <th>Meninggal</th>
                             <th>Hilang</th>
                             <th>Terluka</th>
                             <th>Menderita</th>
                             <th>Mengungsi</th>
                             <th>Total</th>
                           </tr>
                         </thead>
                         <tbody>
                           <tr>
                             <th class="text-truncate"><b>Anak (L)</b></th>
                             <th>
                               <input id="Anak_L_Meninggal" name="Anak_L_Meninggal" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Anak_L_Hilang" name="Anak_L_Hilang" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Anak_L_Terluka" name="Anak_L_Terluka" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Anak_L_Menderita" name="Anak_L_Menderita" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Anak_L_Mengungsi" name="Anak_L_Mengungsi" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Total_Anak_L" placeholder="0" type="number" class="form-control" autocomplete="off" readonly>
                             </th>
                           </tr>
                           <tr>
                             <th class="text-truncate"><b>Anak (P)</b></th>
                             <th>
                               <input name="Anak_P_Meninggal" id="Anak_P_Meninggal" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Anak_P_Hilang" id="Anak_P_Hilang" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Anak_P_Terluka" id="Anak_P_Terluka" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Anak_P_Menderita" id="Anak_P_Menderita" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Anak_P_Mengungsi" id="Anak_P_Mengungsi" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Total_Anak_P" placeholder="0" type="number" class="form-control" autocomplete="off" readonly>
                             </th>
                           </tr>
                           <tr>
                             <th class="text-truncate"><b>Dewasa (L)</b></th>
                             <th>
                               <input name="Dewasa_L_Meninggal" id="Dewasa_L_Meninggal" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Dewasa_L_Hilang" id="Dewasa_L_Hilang" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Dewasa_L_Terluka" id="Dewasa_L_Terluka" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Dewasa_L_Menderita" id="Dewasa_L_Menderita" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Dewasa_L_Mengungsi" id="Dewasa_L_Mengungsi" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Total_Dewasa_L" placeholder="0" type="number" class="form-control" autocomplete="off" readonly>
                             </th>
                           </tr>
                           <tr>
                             <th class="text-truncate"><b>Dewasa (P)</b></th>
                             <th>
                               <input name="Dewasa_P_Meninggal" id="Dewasa_P_Meninggal" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Dewasa_P_Hilang" id="Dewasa_P_Hilang" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Dewasa_P_Terluka" id="Dewasa_P_Terluka" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Dewasa_P_Menderita" id="Dewasa_P_Menderita" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Dewasa_P_Mengungsi" id="Dewasa_P_Mengungsi" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Total_Dewasa_P" placeholder="0" type="number" class="form-control" readonly autocomplete="off">
                             </th>
                           </tr>
                           <tr>
                             <th class="text-truncate"><b>Lansia (L)</b></th>
                             <th>
                               <input name="Lansia_L_Meninggal" id="Lansia_L_Meninggal" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Lansia_L_Hilang" id="Lansia_L_Hilang" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Lansia_L_Terluka" id="Lansia_L_Terluka" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Lansia_L_Menderita" id="Lansia_L_Menderita" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Lansia_L_Mengungsi" id="Lansia_L_Mengungsi" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Total_Lansia_L" placeholder="0" type="number" class="form-control" autocomplete="off" readonly>
                             </th>
                           </tr>
                           <tr>
                             <th class="text-truncate"><b>Lansia (P)</b></th>
                             <th>
                               <input name="Lansia_P_Meninggal" id="Lansia_P_Meninggal" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Lansia_P_Hilang" id="Lansia_P_Hilang" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Lansia_P_Terluka" id="Lansia_P_Terluka" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Lansia_P_Menderita" id="Lansia_P_Menderita" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Lansia_P_Mengungsi" id="Lansia_P_Mengungsi" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Total_Lansia_P" placeholder="0" type="number" class="form-control" readonly autocomplete="off">
                             </th>
                           </tr>
                           <tr>
                             <th class="text-truncate"><b>Disabilitas (L)</b></th>
                             <th>
                               <input name="Disabilitas_L_Meninggal" id="Disabilitas_L_Meninggal" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Disabilitas_L_Hilang" id="Disabilitas_L_Hilang" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Disabilitas_L_Terluka" id="Disabilitas_L_Terluka" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Disabilitas_L_Menderita" id="Disabilitas_L_Menderita" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Disabilitas_L_Mengungsi" id="Disabilitas_L_Mengungsi" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Total_Disabilitas_L" placeholder="0" type="number" class="form-control" readonly autocomplete="off">
                             </th>
                           </tr>
                           <tr>
                             <th class="text-truncate"><b>Disabilitas (P)</b></th>
                             <th>
                               <input name="Disabilitas_P_Meninggal" id="Disabilitas_P_Meninggal" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Disabilitas_P_Hilang" id="Disabilitas_P_Hilang" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Disabilitas_P_Terluka" id="Disabilitas_P_Terluka" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Disabilitas_P_Menderita" id="Disabilitas_P_Menderita" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Disabilitas_P_Mengungsi" id="Disabilitas_P_Mengungsi" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Total_Disabilitas_P" placeholder="0" type="number" class="form-control" readonly autocomplete="off">
                             </th>
                           </tr>
                           <tr>
                             <th class="text-truncate"><b>Ibu Hamil</b></th>
                             <th>
                               <input name="Ibu_Hamil_Meninggal" id="Ibu_Hamil_Meninggal" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Ibu_Hamil_Hilang" id="Ibu_Hamil_Hilang" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Ibu_Hamil_Terluka" id="Ibu_Hamil_Terluka" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Ibu_Hamil_Menderita" id="Ibu_Hamil_Menderita" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Ibu_Hamil_Mengungsi" id="Ibu_Hamil_Mengungsi" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Total_Ibu_Hamil" id="Total_Ibu_Hamil" placeholder="0" type="number" class="form-control" readonly autocomplete="off">
                             </th>
                           </tr>
                           <tr>
                             <th class="text-truncate"><h5>Total</h5></th>
                             <th>
                               <input id="Total_Meninggal" placeholder="0" type="number" class="form-control" readonly autocomplete="off">
                             </th>
                             <th>
                               <input id="Total_Hilang" placeholder="0" type="number" class="form-control" readonly autocomplete="off">
                             </th>
                             <th>
                               <input id="Total_Terluka" placeholder="0" type="number" class="form-control" readonly autocomplete="off">
                             </th>
                             <th>
                               <input id="Total_Menderita" placeholder="0" type="number" class="form-control" readonly autocomplete="off">
                             </th>
                             <th>
                               <input id="Total_Mengungsi" placeholder="0" type="number" class="form-control" readonly autocomplete="off">
                             </th>
                           </tr>
                         </tbody>
                       </table>
                     </div>
                    </div>

                    <div class="card-header p-2">
                      <h4 class="card-title bold-text">
                        D. Kerusakan
                      </h4>
                    </div>
                    <div class="card-body p-3 mb-0">
                     <div class="table-responsive">
                       <table class="table table-borderless table-sm p-0">
                         <thead>
                           <tr>
                             <th></th>
                             <th>Rusak Berat</th>
                             <th>Rusak Sedang</th>
                             <th>Rusak Ringan</th>
                             <th>Terendam</th>
                             <th>Total</th>
                           </tr>
                         </thead>
                         <tbody>
                          <tr>
                             <th><b>Rumah</b></th>
                             <th>
                               <input name="Rumah_Rusak_berat" id='Rumah_Rusak_berat' placeholder="0" type="number" class="form-control" requi-red autocomplete="off" value="<?=GetValueKerusakan($db,'Rumah_Rusak_berat',$pid);?>">
                             </th>
                             <th>
                               <input name="Rumah_Rusak_Sedang" id='Rumah_Rusak_Sedang' placeholder="0" type="number" class="form-control" requi-red autocomplete="off" value="<?=GetValueKerusakan($db,'Rumah_Rusak_Sedang',$pid);?>">
                             </th>
                             <th>
                               <input name="Rumah_Rusak_Ringan" id='Rumah_Rusak_Ringan' placeholder="0" type="number" class="form-control" requi-red autocomplete="off" value="<?=GetValueKerusakan($db,'Rumah_Rusak_Ringan',$pid);?>">
                             </th>
                             <th>
                               <input name="Rumah_Terendam" id='Rumah_Terendam' placeholder="0" type="number" class="form-control" requi-red autocomplete="off" value="<?=GetValueKerusakan($db,'Rumah_Terendam',$pid);?>">
                             </th>
                             <th>
                               <input id="Total_Rumah" placeholder="0" type="number" class="form-control" readonly autocomplete="off" value="<?=GetTotalKerusakanHorizontal($db,$pid,'Rumah');?>">
                             </th>
                           </tr>
                           <tr>
                             <th><b>Kesehatan</b></th>
                             <th>
                               <input name="Kesehatan_Rusak_berat" id="Kesehatan_Rusak_berat" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Kesehatan_Rusak_Sedang" id="Kesehatan_Rusak_Sedang" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Kesehatan_Rusak_Ringan" id="Kesehatan_Rusak_Ringan" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Kesehatan_Terendam" id="Kesehatan_Terendam" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Total_Kesehatan" placeholder="0" type="number" class="form-control" readonly autocomplete="off">
                             </th>
                           </tr>
                           <tr>
                             <th><b>Pendidikan</b></th>
                             <th>
                               <input name="Pendidikan_Rusak_berat" id="Pendidikan_Rusak_berat" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Pendidikan_Rusak_Sedang" id="Pendidikan_Rusak_Sedang" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Pendidikan_Rusak_Ringan" id="Pendidikan_Rusak_Ringan" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Pendidikan_Terendam" id="Pendidikan_Terendam" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Total_Pendidikan" placeholder="0" type="number" class="form-control" readonly autocomplete="off">
                             </th>
                           </tr>
                           <tr>
                             <th><b>Peribadatan</b></th>
                             <th>
                               <input name="Peribadatan_Rusak_berat" id="Peribadatan_Rusak_berat" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Peribadatan_Rusak_Sedang" id="Peribadatan_Rusak_Sedang" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Peribadatan_Rusak_Ringan" id="Peribadatan_Rusak_Ringan" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Peribadatan_Terendam" id="Peribadatan_Terendam" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Total_Peribadatan" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0" readonly>
                             </th>
                           </tr>
                           <tr>
                             <th><b>Perkantoran</b></th>
                             <th>
                               <input name="Perkantoran_Rusak_berat" id="Perkantoran_Rusak_berat" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Perkantoran_Rusak_Sedang" id="Perkantoran_Rusak_Sedang" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Perkantoran_Rusak_Ringan" id="Perkantoran_Rusak_Ringan" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Perkantoran_Terendam" id="Perkantoran_Terendam" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Total_Perkantoran" placeholder="0" type="number" class="form-control" readonly autocomplete="off" value="0">
                             </th>
                           </tr>
                           <tr>
                             <th><b>Fasum</b></th>
                             <th>
                               <input name="Fasum_Rusak_berat" id="Fasum_Rusak_berat" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Fasum_Rusak_Sedang" id="Fasum_Rusak_Sedang" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Fasum_Rusak_Ringan" id="Fasum_Rusak_Ringan" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Fasum_Terendam" id="Fasum_Terendam" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Total_Fasum" placeholder="0" type="number" class="form-control" readonly autocomplete="off">
                             </th>
                           </tr>
                           <tr>
                             <th><b>Jembatan</b></th>
                             <th>
                               <input name="Jembatan_Rusak_berat" id="Jembatan_Rusak_berat" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Jembatan_Rusak_Sedang" id="Jembatan_Rusak_Sedang" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Jembatan_Rusak_Ringan" id="Jembatan_Rusak_Ringan" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Jembatan_Terendam" id="Jembatan_Terendam" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Total_Jembatan" placeholder="0" type="number" class="form-control" readonly autocomplete="off" value="0">
                             </th>
                           </tr>
                           <tr>
                             <th><b>Pabrik</b></th>
                             <th>
                               <input name="Pabrik_Rusak_berat" id="Pabrik_Rusak_berat" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Pabrik_Rusak_Sedang" id="Pabrik_Rusak_Sedang" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Pabrik_Rusak_Ringan" id="Pabrik_Rusak_Ringan" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Pabrik_Terendam" id="Pabrik_Terendam" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Total_Pabrik" placeholder="0" type="number" class="form-control" readonly autocomplete="off" value="0">
                             </th>
                           </tr>
                           <tr>
                             <th><b>Pertokoan</b></th>
                             <th>
                               <input name="Pertokoan_Rusak_berat" id="Pertokoan_Rusak_berat" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Pertokoan_Rusak_Sedang" id="Pertokoan_Rusak_Sedang" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Pertokoan_Rusak_Ringan" id="Pertokoan_Rusak_Ringan" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input name="Pertokoan_Terendam" id="Pertokoan_Terendam" placeholder="0" type="number" class="form-control" required autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Total_Pertokoan" placeholder="0" type="number" class="form-control" readonly autocomplete="off" value="0">
                             </th>
                           </tr>
                           <tr>
                             <th><b>Total</b></th>
                             <th>
                               <input id="Total_Rusak_Berat" placeholder="0" type="number" class="form-control" readonly autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Total_Rusak_Sedang" placeholder="0" type="number" class="form-control" readonly autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Total_Rusak_Ringan" placeholder="0" type="number" class="form-control" readonly autocomplete="off" value="0">
                             </th>
                             <th>
                               <input id="Total_Terendam" placeholder="0" type="number" class="form-control" readonly autocomplete="off" value="0">
                             </th>
                           </tr>
                         </tbody>
                       </table>
                     </div>
                    </div>

                    <div class="card-header p-2">
                      <h4 class="card-title bold-text">
                        E. Kerusakan Lain
                      </h4>
                    </div>
                    <div class="card-body p-3 mb-0">
                      <div class="form-group row">
                        <div class="col-sm-3 mb-2">
                            <label>Sawah (Ha)</label>
                            <input  name="Kerusakan_Sawah" type="text" class="form-control" placeholder="0" required autocomplete="off">
                        </div>
                        <div class="col-sm-3 mb-2">
                            <label>Jalan (Km)</label>
                            <input  name="Kerusakan_Jalan" type="text" class="form-control" placeholder="0" required autocomplete="off">
                        </div>
                        <div class="col-sm-3 mb-2">
                            <label>Kebun (Ha)</label>
                            <input  name="Kerusakan_Kebun" type="text" class="form-control" placeholder="0" required autocomplete="off">
                        </div>
                        <div class="col-sm-3 mb-2">
                            <label>Lahan (Ha)</label>
                            <input  name="Kerusakan_Lahan" type="text" class="form-control" placeholder="0" required autocomplete="off">
                        </div>
                        <div class="col-sm-3 mb-2">
                            <label>Hutan (Ha)</label>
                            <input  name="Kerusakan_Hutan" type="text" class="form-control" placeholder="0" required autocomplete="off">
                        </div>
                        <div class="col-sm-3 mb-2">
                            <label>Kolam (Ha)</label>
                            <input  name="Kerusakan_Kolam" type="text" class="form-control" placeholder="0" required autocomplete="off">
                        </div>
                        <div class="col-sm-3 mb-2">
                            <label>Irigasi (Km)</label>
                            <input  name="Kerusakan_Irigasi" type="text" class="form-control" placeholder="0" required autocomplete="off">
                        </div>
                        <div class="col-sm-3 mb-2">
                            <label>Perkebunan (Ha)</label>
                            <input  name="Kerusakan_Perkebunan" type="text" class="form-control" placeholder="0" required autocomplete="off">
                        </div>
                        <div class="col-sm-3 mb-2">
                            <label>Kerugian (Rp)</label>
                            <input  name="Kerusakan_Kerugian" type="text" class="form-control" placeholder="0" required autocomplete="off">
                        </div>
                        <div class="col-sm-3 mb-2">
                            <label>Kerusakan Lainnya</label>
                            <input  name="Kerusakan_lainnya" type="text" class="form-control" placeholder="0" required autocomplete="off">
                        </div>
                      </div>
                    </div>

                    <div class="card-header p-2">
                      <h4 class="card-title bold-text">
                        F. Foto Dokumentasi
                      </h4>
                    </div>
                    <div class="card-body p-3 mb-0">
                      <div class="drop-zone">
                        <span class="drop-zone__prompt">
                          Drop file here or click to upload
                          <div class="text-danger"><small>(JPG,JPEG,PNG,WEBP)</small></div>
                        </span>
                        <input type="file" name="myFile" class="drop-zone__input">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <button class="btn btn-success btn-block" type="submit" name="tambah">Submit</button>
                </div>
              </div>
            </form>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

        <?php
          include_once('../include/footer.php');
        ?>
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <?php
      include_once('../include/script.php');
    ?>
  </body>
</html>
<?php
  }
?>