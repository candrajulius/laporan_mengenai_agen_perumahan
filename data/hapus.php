<?php
require_once("../include/config.php");
if(!isset($_SESSION['user'])) {
  header("Location:".$base."login.php");
} else {
if (isset($_GET['pid'])) {
  $pid = preg_replace("/[^0-9]/", "",$_GET['pid']);
  $check_bencana = mysqli_query($db,"SELECT * FROM identitas WHERE pid  = '$pid' ");
  $data = mysqli_fetch_array($check_bencana);
  if (mysqli_num_rows($check_bencana) == 0) {
    header("Location:".$base."404.php");
  } else {
}
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
              if (isset($_POST['tambah'])) {
                $pid = random_number(6);
                $jenis = mysqli_real_escape_string($db,json_encode($_POST['JenisBencana']));
                $tanggal = date('Y-m-d',strtotime($_POST['tanggal']));
                $lokasi = mysqli_real_escape_string($db,json_encode($_POST['lokasi']));
                $penyebab = mysqli_real_escape_string($db,$_POST['penyebab']);
                $kronologi = mysqli_real_escape_string($db,$_POST['kronologi']);
                $petugas = mysqli_real_escape_string($db,$_POST['petugas']);
                $upaya = mysqli_real_escape_string($db,$_POST['upaya']);
                $Anak_L_Meninggal = mysqli_real_escape_string($db,$_POST['Anak_L_Meninggal']);
                $Anak_L_Hilang = mysqli_real_escape_string($db,$_POST['Anak_L_Hilang']);
                $Anak_L_Terluka = mysqli_real_escape_string($db,$_POST['Anak_L_Terluka']);
                $Anak_L_Menderita = mysqli_real_escape_string($db,$_POST['Anak_L_Menderita']);
                $Anak_L_Mengungsi = mysqli_real_escape_string($db,$_POST['Anak_L_Mengungsi']);
                $Anak_P_Meninggal = mysqli_real_escape_string($db,$_POST['Anak_P_Meninggal']);
                $Anak_P_Hilang = mysqli_real_escape_string($db,$_POST['Anak_P_Hilang']);
                $Anak_P_Terluka = mysqli_real_escape_string($db,$_POST['Anak_P_Terluka']);
                $Anak_P_Menderita = mysqli_real_escape_string($db,$_POST['Anak_P_Menderita']);
                $Anak_P_Mengungsi = mysqli_real_escape_string($db,$_POST['Anak_P_Mengungsi']);
                $Dewasa_L_Meninggal = mysqli_real_escape_string($db,$_POST['Dewasa_L_Meninggal']);
                $Dewasa_L_Hilang = mysqli_real_escape_string($db,$_POST['Dewasa_L_Hilang']);
                $Dewasa_L_Terluka = mysqli_real_escape_string($db,$_POST['Dewasa_L_Terluka']);
                $Dewasa_L_Menderita = mysqli_real_escape_string($db,$_POST['Dewasa_L_Menderita']);
                $Dewasa_L_Mengungsi = mysqli_real_escape_string($db,$_POST['Dewasa_L_Mengungsi']);
                $Dewasa_P_Meninggal = mysqli_real_escape_string($db,$_POST['Dewasa_P_Meninggal']);
                $Dewasa_P_Hilang = mysqli_real_escape_string($db,$_POST['Dewasa_P_Hilang']);
                $Dewasa_P_Terluka = mysqli_real_escape_string($db,$_POST['Dewasa_P_Terluka']);
                $Dewasa_P_Menderita = mysqli_real_escape_string($db,$_POST['Dewasa_P_Menderita']);
                $Dewasa_P_Mengungsi = mysqli_real_escape_string($db,$_POST['Dewasa_P_Mengungsi']);
                $Lansia_L_Meninggal = mysqli_real_escape_string($db,$_POST['Lansia_L_Meninggal']);
                $Lansia_L_Hilang = mysqli_real_escape_string($db,$_POST['Lansia_L_Hilang']);
                $Lansia_L_Terluka = mysqli_real_escape_string($db,$_POST['Lansia_L_Terluka']);
                $Lansia_L_Menderita = mysqli_real_escape_string($db,$_POST['Lansia_L_Menderita']);
                $Lansia_L_Mengungsi = mysqli_real_escape_string($db,$_POST['Lansia_L_Mengungsi']);
                $Lansia_P_Meninggal = mysqli_real_escape_string($db,$_POST['Lansia_P_Meninggal']);
                $Lansia_P_Hilang = mysqli_real_escape_string($db,$_POST['Lansia_P_Hilang']);
                $Lansia_P_Terluka = mysqli_real_escape_string($db,$_POST['Lansia_P_Terluka']);
                $Lansia_P_Menderita = mysqli_real_escape_string($db,$_POST['Lansia_P_Menderita']);
                $Lansia_P_Mengungsi = mysqli_real_escape_string($db,$_POST['Lansia_P_Mengungsi']);
                $Disabilitas_L_Meninggal = mysqli_real_escape_string($db,$_POST['Disabilitas_L_Meninggal']);
                $Disabilitas_L_Hilang = mysqli_real_escape_string($db,$_POST['Disabilitas_L_Hilang']);
                $Disabilitas_L_Terluka = mysqli_real_escape_string($db,$_POST['Disabilitas_L_Terluka']);
                $Disabilitas_L_Menderita = mysqli_real_escape_string($db,$_POST['Disabilitas_L_Menderita']);
                $Disabilitas_L_Mengungsi = mysqli_real_escape_string($db,$_POST['Disabilitas_L_Mengungsi']);
                $Disabilitas_P_Meninggal = mysqli_real_escape_string($db,$_POST['Disabilitas_P_Meninggal']);
                $Disabilitas_P_Hilang = mysqli_real_escape_string($db,$_POST['Disabilitas_P_Hilang']);
                $Disabilitas_P_Terluka = mysqli_real_escape_string($db,$_POST['Disabilitas_P_Terluka']);
                $Disabilitas_P_Menderita = mysqli_real_escape_string($db,$_POST['Disabilitas_P_Menderita']);
                $Disabilitas_P_Mengungsi = mysqli_real_escape_string($db,$_POST['Disabilitas_P_Mengungsi']);
                $Ibu_Hamil_Meninggal = mysqli_real_escape_string($db,$_POST['Ibu_Hamil_Meninggal']);
                $Ibu_Hamil_Hilang = mysqli_real_escape_string($db,$_POST['Ibu_Hamil_Hilang']);
                $Ibu_Hamil_Terluka = mysqli_real_escape_string($db,$_POST['Ibu_Hamil_Terluka']);
                $Ibu_Hamil_Menderita = mysqli_real_escape_string($db,$_POST['Ibu_Hamil_Menderita']);
                $Ibu_Hamil_Mengungsi = mysqli_real_escape_string($db,$_POST['Ibu_Hamil_Mengungsi']);
                $Rumah_Rusak_berat = mysqli_real_escape_string($db,$_POST['Rumah_Rusak_berat']);
                $Rumah_Rusak_Sedang = mysqli_real_escape_string($db,$_POST['Rumah_Rusak_Sedang']);
                $Rumah_Rusak_Ringan = mysqli_real_escape_string($db,$_POST['Rumah_Rusak_Ringan']);
                $Rumah_Terendam = mysqli_real_escape_string($db,$_POST['Rumah_Terendam']);
                $Pendidikan_Rusak_berat = mysqli_real_escape_string($db,$_POST['Pendidikan_Rusak_berat']);
                $Pendidikan_Rusak_Sedang = mysqli_real_escape_string($db,$_POST['Pendidikan_Rusak_Sedang']);
                $Pendidikan_Rusak_Ringan = mysqli_real_escape_string($db,$_POST['Pendidikan_Rusak_Ringan']);
                $Pendidikan_Terendam = mysqli_real_escape_string($db,$_POST['Pendidikan_Terendam']);
                $Peribadatan_Rusak_berat = mysqli_real_escape_string($db,$_POST['Peribadatan_Rusak_berat']);
                $Peribadatan_Rusak_Sedang = mysqli_real_escape_string($db,$_POST['Peribadatan_Rusak_Sedang']);
                $Peribadatan_Rusak_Ringan = mysqli_real_escape_string($db,$_POST['Peribadatan_Rusak_Ringan']);
                $Peribadatan_Terendam = mysqli_real_escape_string($db,$_POST['Peribadatan_Terendam']);
                $Kesehatan_Rusak_berat = mysqli_real_escape_string($db,$_POST['Kesehatan_Rusak_berat']);
                $Kesehatan_Rusak_Sedang = mysqli_real_escape_string($db,$_POST['Kesehatan_Rusak_Sedang']);
                $Kesehatan_Rusak_Ringan = mysqli_real_escape_string($db,$_POST['Kesehatan_Rusak_Ringan']);
                $Kesehatan_Terendam = mysqli_real_escape_string($db,$_POST['Kesehatan_Terendam']);
                $Perkantoran_Rusak_berat = mysqli_real_escape_string($db,$_POST['Perkantoran_Rusak_berat']);
                $Perkantoran_Rusak_Sedang = mysqli_real_escape_string($db,$_POST['Perkantoran_Rusak_Sedang']);
                $Perkantoran_Rusak_Ringan = mysqli_real_escape_string($db,$_POST['Perkantoran_Rusak_Ringan']);
                $Perkantoran_Terendam = mysqli_real_escape_string($db,$_POST['Perkantoran_Terendam']);
                $Fasum_Rusak_berat = mysqli_real_escape_string($db,$_POST['Fasum_Rusak_berat']);
                $Fasum_Rusak_Sedang = mysqli_real_escape_string($db,$_POST['Fasum_Rusak_Sedang']);
                $Fasum_Rusak_Ringan = mysqli_real_escape_string($db,$_POST['Fasum_Rusak_Ringan']);
                $Fasum_Terendam = mysqli_real_escape_string($db,$_POST['Fasum_Terendam']);
                $Jembatan_Rusak_berat = mysqli_real_escape_string($db,$_POST['Jembatan_Rusak_berat']);
                $Jembatan_Rusak_Sedang = mysqli_real_escape_string($db,$_POST['Jembatan_Rusak_Sedang']);
                $Jembatan_Rusak_Ringan = mysqli_real_escape_string($db,$_POST['Jembatan_Rusak_Ringan']);
                $Jembatan_Terendam = mysqli_real_escape_string($db,$_POST['Jembatan_Terendam']);
                $Pabrik_Rusak_berat = mysqli_real_escape_string($db,$_POST['Pabrik_Rusak_berat']);
                $Pabrik_Rusak_Sedang = mysqli_real_escape_string($db,$_POST['Pabrik_Rusak_Sedang']);
                $Pabrik_Rusak_Ringan = mysqli_real_escape_string($db,$_POST['Pabrik_Rusak_Ringan']);
                $Pabrik_Terendam = mysqli_real_escape_string($db,$_POST['Pabrik_Terendam']);
                $Pertokoan_Rusak_berat = mysqli_real_escape_string($db,$_POST['Pertokoan_Rusak_berat']);
                $Pertokoan_Rusak_Sedang = mysqli_real_escape_string($db,$_POST['Pertokoan_Rusak_Sedang']);
                $Pertokoan_Rusak_Ringan = mysqli_real_escape_string($db,$_POST['Pertokoan_Rusak_Ringan']);
                $Pertokoan_Terendam = mysqli_real_escape_string($db,$_POST['Pertokoan_Terendam']);
                $Kerusakan_Sawah = mysqli_real_escape_string($db,$_POST['Kerusakan_Sawah']);
                $Kerusakan_Jalan = mysqli_real_escape_string($db,$_POST['Kerusakan_Jalan']);
                $Kerusakan_Kebun = mysqli_real_escape_string($db,$_POST['Kerusakan_Kebun']);
                $Kerusakan_Lahan = mysqli_real_escape_string($db,$_POST['Kerusakan_Lahan']);
                $Kerusakan_Hutan = mysqli_real_escape_string($db,$_POST['Kerusakan_Hutan']);
                $Kerusakan_Kolam = mysqli_real_escape_string($db,$_POST['Kerusakan_Kolam']);
                $Kerusakan_Irigasi = mysqli_real_escape_string($db,$_POST['Kerusakan_Irigasi']);
                $Kerusakan_Perkebunan = mysqli_real_escape_string($db,$_POST['Kerusakan_Perkebunan']);
                $Kerusakan_Kerugian = mysqli_real_escape_string($db,$_POST['Kerusakan_Kerugian']);
                $Kerusakan_lainnya = mysqli_real_escape_string($db,$_POST['Kerusakan_lainnya']);


                $check_identitas = mysqli_query($db,"SELECT * FROM identitas WHERE pid = $pid");
                if (mysqli_num_rows($check_identitas) == 0) {
                  $insert_identitas = mysqli_query($db,"INSERT INTO `identitas`(`pid`, `jenis`, `lokasi`, `tanggal`, `penyebab`, `kronologi`, `petugas`, `upaya`) VALUES ('$pid','$jenis','$lokasi','$tanggal','$penyebab','$kronologi','$petugas','$upaya')");
                  if ($insert_identitas == true) {
                    $msg_type = 'success';
                    $msg_content = 'Berhasil! Data Yang Kamu Kirimkan Berhasil Di Input';
                    InsertFormKorban($db,$pid,'Anak_L_Meninggal',$Anak_L_Meninggal);
                    InsertFormKorban($db,$pid,'Anak_L_Hilang',$Anak_L_Hilang);
                    InsertFormKorban($db,$pid,'Anak_L_Terluka',$Anak_L_Terluka);
                    InsertFormKorban($db,$pid,'Anak_L_Menderita',$Anak_L_Menderita);
                    InsertFormKorban($db,$pid,'Anak_L_Mengungsi',$Anak_L_Mengungsi);
                    InsertFormKorban($db,$pid,'Anak_P_Meninggal',$Anak_P_Meninggal);
                    InsertFormKorban($db,$pid,'Anak_P_Hilang',$Anak_P_Hilang);
                    InsertFormKorban($db,$pid,'Anak_P_Terluka',$Anak_P_Terluka);
                    InsertFormKorban($db,$pid,'Anak_P_Menderita',$Anak_P_Menderita);
                    InsertFormKorban($db,$pid,'Anak_P_Mengungsi',$Anak_P_Mengungsi);
                    InsertFormKorban($db,$pid,'Dewasa_L_Meninggal',$Dewasa_L_Meninggal);
                    InsertFormKorban($db,$pid,'Dewasa_L_Hilang',$Dewasa_L_Hilang);
                    InsertFormKorban($db,$pid,'Dewasa_L_Terluka',$Dewasa_L_Terluka);
                    InsertFormKorban($db,$pid,'Dewasa_L_Menderita',$Dewasa_L_Menderita);
                    InsertFormKorban($db,$pid,'Dewasa_L_Mengungsi',$Dewasa_L_Mengungsi);
                    InsertFormKorban($db,$pid,'Dewasa_P_Meninggal',$Dewasa_P_Meninggal);
                    InsertFormKorban($db,$pid,'Dewasa_P_Hilang',$Dewasa_P_Hilang);
                    InsertFormKorban($db,$pid,'Dewasa_P_Terluka',$Dewasa_P_Terluka);
                    InsertFormKorban($db,$pid,'Dewasa_P_Menderita',$Dewasa_P_Menderita);
                    InsertFormKorban($db,$pid,'Dewasa_P_Mengungsi',$Dewasa_P_Mengungsi);
                    InsertFormKorban($db,$pid,'Lansia_L_Meninggal',$Lansia_L_Meninggal);
                    InsertFormKorban($db,$pid,'Lansia_L_Hilang',$Lansia_L_Hilang);
                    InsertFormKorban($db,$pid,'Lansia_L_Terluka',$Lansia_L_Terluka);
                    InsertFormKorban($db,$pid,'Lansia_L_Menderita',$Lansia_L_Menderita);
                    InsertFormKorban($db,$pid,'Lansia_L_Mengungsi',$Lansia_L_Mengungsi);
                    InsertFormKorban($db,$pid,'Lansia_P_Meninggal',$Lansia_P_Meninggal);
                    InsertFormKorban($db,$pid,'Lansia_P_Hilang',$Lansia_P_Hilang);
                    InsertFormKorban($db,$pid,'Lansia_P_Terluka',$Lansia_P_Terluka);
                    InsertFormKorban($db,$pid,'Lansia_P_Menderita',$Lansia_P_Menderita);
                    InsertFormKorban($db,$pid,'Lansia_P_Mengungsi',$Lansia_P_Mengungsi);
                    InsertFormKorban($db,$pid,'Disabilitas_L_Meninggal',$Disabilitas_L_Meninggal);
                    InsertFormKorban($db,$pid,'Disabilitas_L_Hilang',$Disabilitas_L_Hilang);
                    InsertFormKorban($db,$pid,'Disabilitas_L_Terluka',$Disabilitas_L_Terluka);
                    InsertFormKorban($db,$pid,'Disabilitas_L_Menderita',$Disabilitas_L_Menderita);
                    InsertFormKorban($db,$pid,'Disabilitas_L_Mengungsi',$Disabilitas_L_Mengungsi);
                    InsertFormKorban($db,$pid,'Disabilitas_P_Meninggal',$Disabilitas_P_Meninggal);
                    InsertFormKorban($db,$pid,'Disabilitas_P_Hilang',$Disabilitas_P_Hilang);
                    InsertFormKorban($db,$pid,'Disabilitas_P_Terluka',$Disabilitas_P_Terluka);
                    InsertFormKorban($db,$pid,'Disabilitas_P_Menderita',$Disabilitas_P_Menderita);
                    InsertFormKorban($db,$pid,'Disabilitas_P_Mengungsi',$Disabilitas_P_Mengungsi);
                    InsertFormKorban($db,$pid,'Ibu_Hamil_Meninggal',$Ibu_Hamil_Meninggal);
                    InsertFormKorban($db,$pid,'Ibu_Hamil_Hilang',$Ibu_Hamil_Hilang);
                    InsertFormKorban($db,$pid,'Ibu_Hamil_Terluka',$Ibu_Hamil_Terluka);
                    InsertFormKorban($db,$pid,'Ibu_Hamil_Menderita',$Ibu_Hamil_Menderita);
                    InsertFormKorban($db,$pid,'Ibu_Hamil_Mengungsi',$Ibu_Hamil_Mengungsi);
                    InsertFormKerusakan($db,$pid,'Rumah_Rusak_berat',$Rumah_Rusak_berat);
                    InsertFormKerusakan($db,$pid,'Rumah_Rusak_Sedang',$Rumah_Rusak_Sedang);
                    InsertFormKerusakan($db,$pid,'Rumah_Rusak_Ringan',$Rumah_Rusak_Ringan);
                    InsertFormKerusakan($db,$pid,'Rumah_Terendam',$Rumah_Terendam);
                    InsertFormKerusakan($db,$pid,'Pendidikan_Rusak_berat',$Pendidikan_Rusak_berat);
                    InsertFormKerusakan($db,$pid,'Pendidikan_Rusak_Sedang',$Pendidikan_Rusak_Sedang);
                    InsertFormKerusakan($db,$pid,'Pendidikan_Rusak_Ringan',$Pendidikan_Rusak_Ringan);
                    InsertFormKerusakan($db,$pid,'Pendidikan_Terendam',$Pendidikan_Terendam);
                    InsertFormKerusakan($db,$pid,'Peribadatan_Rusak_berat',$Peribadatan_Rusak_berat);
                    InsertFormKerusakan($db,$pid,'Peribadatan_Rusak_Sedang',$Peribadatan_Rusak_Sedang);
                    InsertFormKerusakan($db,$pid,'Peribadatan_Rusak_Ringan',$Peribadatan_Rusak_Ringan);
                    InsertFormKerusakan($db,$pid,'Peribadatan_Terendam',$Peribadatan_Terendam);
                    InsertFormKerusakan($db,$pid,'Kesehatan_Rusak_berat',$Kesehatan_Rusak_berat);
                    InsertFormKerusakan($db,$pid,'Kesehatan_Rusak_Sedang',$Kesehatan_Rusak_Sedang);
                    InsertFormKerusakan($db,$pid,'Kesehatan_Rusak_Ringan',$Kesehatan_Rusak_Ringan);
                    InsertFormKerusakan($db,$pid,'Kesehatan_Terendam',$Kesehatan_Terendam);
                    InsertFormKerusakan($db,$pid,'Perkantoran_Rusak_berat',$Perkantoran_Rusak_berat);
                    InsertFormKerusakan($db,$pid,'Perkantoran_Rusak_Sedang',$Perkantoran_Rusak_Sedang);
                    InsertFormKerusakan($db,$pid,'Perkantoran_Rusak_Ringan',$Perkantoran_Rusak_Ringan);
                    InsertFormKerusakan($db,$pid,'Perkantoran_Terendam',$Perkantoran_Terendam);
                    InsertFormKerusakan($db,$pid,'Fasum_Rusak_berat',$Fasum_Rusak_berat);
                    InsertFormKerusakan($db,$pid,'Fasum_Rusak_Sedang',$Fasum_Rusak_Sedang);
                    InsertFormKerusakan($db,$pid,'Fasum_Rusak_Ringan',$Fasum_Rusak_Ringan);
                    InsertFormKerusakan($db,$pid,'Fasum_Terendam',$Fasum_Terendam);
                    InsertFormKerusakan($db,$pid,'Jembatan_Rusak_berat',$Jembatan_Rusak_berat);
                    InsertFormKerusakan($db,$pid,'Jembatan_Rusak_Sedang',$Jembatan_Rusak_Sedang);
                    InsertFormKerusakan($db,$pid,'Jembatan_Rusak_Ringan',$Jembatan_Rusak_Ringan);
                    InsertFormKerusakan($db,$pid,'Jembatan_Terendam',$Jembatan_Terendam);
                    InsertFormKerusakan($db,$pid,'Pabrik_Rusak_berat',$Pabrik_Rusak_berat);
                    InsertFormKerusakan($db,$pid,'Pabrik_Rusak_Sedang',$Pabrik_Rusak_Sedang);
                    InsertFormKerusakan($db,$pid,'Pabrik_Rusak_Ringan',$Pabrik_Rusak_Ringan);
                    InsertFormKerusakan($db,$pid,'Pabrik_Terendam',$Pabrik_Terendam);
                    InsertFormKerusakan($db,$pid,'Pertokoan_Rusak_berat',$Pertokoan_Rusak_berat);
                    InsertFormKerusakan($db,$pid,'Pertokoan_Rusak_Sedang',$Pertokoan_Rusak_Sedang);
                    InsertFormKerusakan($db,$pid,'Pertokoan_Rusak_Ringan',$Pertokoan_Rusak_Ringan);
                    InsertFormKerusakan($db,$pid,'Pertokoan_Terendam',$Pertokoan_Terendam);
                    InsertFormKerusakanLain($db,$pid,'Kerusakan_Sawah',$Kerusakan_Sawah);
                    InsertFormKerusakanLain($db,$pid,'Kerusakan_Jalan',$Kerusakan_Jalan);
                    InsertFormKerusakanLain($db,$pid,'Kerusakan_Kebun',$Kerusakan_Kebun);
                    InsertFormKerusakanLain($db,$pid,'Kerusakan_Lahan',$Kerusakan_Lahan);
                    InsertFormKerusakanLain($db,$pid,'Kerusakan_Hutan',$Kerusakan_Hutan);
                    InsertFormKerusakanLain($db,$pid,'Kerusakan_Kolam',$Kerusakan_Kolam);
                    InsertFormKerusakanLain($db,$pid,'Kerusakan_Irigasi',$Kerusakan_Irigasi);
                    InsertFormKerusakanLain($db,$pid,'Kerusakan_Perkebunan',$Kerusakan_Perkebunan);
                    InsertFormKerusakanLain($db,$pid,'Kerusakan_Kerugian',$Kerusakan_Kerugian);
                    InsertFormKerusakanLain($db,$pid,'Kerusakan_lainnya',$Kerusakan_lainnya);
                    $ekstensi_diperbolehkan = array('png','jpg','jpeg','webp');
                    $nama = $_FILES['myFile']['name'];
                    $x = explode('.', $nama);
                    $ekstensi = strtolower(end($x));
                    $ukuran = $_FILES['myFile']['size'];
                    $file_tmp = $_FILES['myFile']['tmp_name'];  
                    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                      if($ukuran < 11044070){     
                        $path_gambar = $base.'assets/RudyWind-'.$nama; 
                        move_uploaded_file($file_tmp, 'assets/'.'RudyWind-'.$nama);
                        $query = mysqli_query($db,"INSERT INTO `dokumentasi`(`pid`, `path`) VALUES ('$pid','$path_gambar')");
                        if($query){
                        }else{
                        }
                      }else{
                      }
                    }else{
                    }
                } else {
                  $msg_type = 'error';
                  $msg_content = 'Gagal! Sistem Error, Periksa Kembali Seluruh Form Yang Telah Anda Input.';
                }
                } else {
                  $msg_type = 'error';
                  $msg_content = 'Gagal! ID Untuk Identitas Bencana Ini Telah Terdaftar, Silahkan Kirim Ulang Melalui Tombol Submit.';
                }
                
              }
            ?>
            <?php
              if ($msg_type == 'error') {
                echo "<div class='alert alert-danger'>$msg_content</div>";
              } else if($msg_type == 'success') {
                echo "<div class='alert alert-success'>$msg_content</div>";
              } else {

              }
            ?>
            <form method="post" enctype="multipart/form-data" action="<?=$base;?>">
              <input type="hidden" name="pid" value="<?=$pid;?>">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header p-3">
                      <h5>Hapus <?=$data['pid'];?></h5>
                    </div>
                    <div class="card-body p-3">
                      Anda Yakin Ingin Menghapus Data Dengan Nomor PID <?=$data['pid'];?>?<br>
                      Silahkan Periksa terlebih dahulu [<a href="<?=$base."data/edit.php?pid=".$data['pid'];?>">Disini</a>] untuk memastikan anda yakin ingin menghapus data ini.
                    </div>
                    <div class="card-footer">
                      <a href='<?=$base;?>' class="btn btn-primary">Batal</a>
                      <button type="submit" name="hapus" class="btn btn-danger">Hapus</button>
                    </div>
                  </div>
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
  }
?>