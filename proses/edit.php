<?php 
require_once("../include/config.php");
  if (isset($_POST['edit'])) {
    $pid = mysqli_real_escape_string($db,$_POST['pid']);
    $check = mysqli_query($db,"SELECT * FROM identitas WHERE pid = '$pid' ");
    if (mysqli_num_rows($check) > 0) {
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
      $Kesehatan_Rusak_berat = mysqli_real_escape_string($db,$_POST['Kesehatan_Rusak_berat']);
      $Kesehatan_Rusak_Sedang = mysqli_real_escape_string($db,$_POST['Kesehatan_Rusak_Sedang']);
      $Kesehatan_Rusak_Ringan = mysqli_real_escape_string($db,$_POST['Kesehatan_Rusak_Ringan']);
      $Kesehatan_Terendam = mysqli_real_escape_string($db,$_POST['Kesehatan_Terendam']);
      $Pendidikan_Rusak_berat = mysqli_real_escape_string($db,$_POST['Pendidikan_Rusak_berat']);
      $Pendidikan_Rusak_Sedang = mysqli_real_escape_string($db,$_POST['Pendidikan_Rusak_Sedang']);
      $Pendidikan_Rusak_Ringan = mysqli_real_escape_string($db,$_POST['Pendidikan_Rusak_Ringan']);
      $Pendidikan_Terendam = mysqli_real_escape_string($db,$_POST['Pendidikan_Terendam']);
      $Peribadatan_Rusak_berat = mysqli_real_escape_string($db,$_POST['Peribadatan_Rusak_berat']);
      $Peribadatan_Rusak_Sedang = mysqli_real_escape_string($db,$_POST['Peribadatan_Rusak_Sedang']);
      $Peribadatan_Rusak_Ringan = mysqli_real_escape_string($db,$_POST['Peribadatan_Rusak_Ringan']);
      $Peribadatan_Terendam = mysqli_real_escape_string($db,$_POST['Peribadatan_Terendam']);
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
      $Rumah_Rusak_berat = mysqli_real_escape_string($db,$_POST['Rumah_Rusak_berat']);
      $Rumah_Rusak_Sedang = mysqli_real_escape_string($db,$_POST['Rumah_Rusak_Sedang']);
      $Rumah_Rusak_Ringan = mysqli_real_escape_string($db,$_POST['Rumah_Rusak_Ringan']);
      $Rumah_Terendam = mysqli_real_escape_string($db,$_POST['Rumah_Terendam']);
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

      $update_identitas = mysqli_query($db,"UPDATE identitas SET jenis='$jenis',lokasi='$lokasi',penyebab='$penyebab',kronologi='$kronologi',petugas='$petugas',upaya='$upaya' WHERE pid = '$pid' ");
      if ($update_identitas == true) {
        $_SESSION['msg_type'] = 'success';
        $_SESSION['msg_content'] = 'Berhasil! Data Telah Berhasil Di Edit.';
        header("location:".$_POST['redirect']);
        UpdateFormKorban($db,$pid,'Anak_L_Meninggal',$Anak_L_Meninggal);
        UpdateFormKorban($db,$pid,'Anak_L_Hilang',$Anak_L_Hilang);
        UpdateFormKorban($db,$pid,'Anak_L_Terluka',$Anak_L_Terluka);
        UpdateFormKorban($db,$pid,'Anak_L_Menderita',$Anak_L_Menderita);
        UpdateFormKorban($db,$pid,'Anak_L_Mengungsi',$Anak_L_Mengungsi);
        UpdateFormKorban($db,$pid,'Anak_P_Meninggal',$Anak_P_Meninggal);
        UpdateFormKorban($db,$pid,'Anak_P_Hilang',$Anak_P_Hilang);
        UpdateFormKorban($db,$pid,'Anak_P_Terluka',$Anak_P_Terluka);
        UpdateFormKorban($db,$pid,'Anak_P_Menderita',$Anak_P_Menderita);
        UpdateFormKorban($db,$pid,'Anak_P_Mengungsi',$Anak_P_Mengungsi);
        UpdateFormKorban($db,$pid,'Dewasa_L_Meninggal',$Dewasa_L_Meninggal);
        UpdateFormKorban($db,$pid,'Dewasa_L_Hilang',$Dewasa_L_Hilang);
        UpdateFormKorban($db,$pid,'Dewasa_L_Terluka',$Dewasa_L_Terluka);
        UpdateFormKorban($db,$pid,'Dewasa_L_Menderita',$Dewasa_L_Menderita);
        UpdateFormKorban($db,$pid,'Dewasa_L_Mengungsi',$Dewasa_L_Mengungsi);
        UpdateFormKorban($db,$pid,'Dewasa_P_Meninggal',$Dewasa_P_Meninggal);
        UpdateFormKorban($db,$pid,'Dewasa_P_Hilang',$Dewasa_P_Hilang);
        UpdateFormKorban($db,$pid,'Dewasa_P_Terluka',$Dewasa_P_Terluka);
        UpdateFormKorban($db,$pid,'Dewasa_P_Menderita',$Dewasa_P_Menderita);
        UpdateFormKorban($db,$pid,'Dewasa_P_Mengungsi',$Dewasa_P_Mengungsi);
        UpdateFormKorban($db,$pid,'Lansia_L_Meninggal',$Lansia_L_Meninggal);
        UpdateFormKorban($db,$pid,'Lansia_L_Hilang',$Lansia_L_Hilang);
        UpdateFormKorban($db,$pid,'Lansia_L_Terluka',$Lansia_L_Terluka);
        UpdateFormKorban($db,$pid,'Lansia_L_Menderita',$Lansia_L_Menderita);
        UpdateFormKorban($db,$pid,'Lansia_L_Mengungsi',$Lansia_L_Mengungsi);
        UpdateFormKorban($db,$pid,'Lansia_P_Meninggal',$Lansia_P_Meninggal);
        UpdateFormKorban($db,$pid,'Lansia_P_Hilang',$Lansia_P_Hilang);
        UpdateFormKorban($db,$pid,'Lansia_P_Terluka',$Lansia_P_Terluka);
        UpdateFormKorban($db,$pid,'Lansia_P_Menderita',$Lansia_P_Menderita);
        UpdateFormKorban($db,$pid,'Lansia_P_Mengungsi',$Lansia_P_Mengungsi);
        UpdateFormKorban($db,$pid,'Disabilitas_L_Meninggal',$Disabilitas_L_Meninggal);
        UpdateFormKorban($db,$pid,'Disabilitas_L_Hilang',$Disabilitas_L_Hilang);
        UpdateFormKorban($db,$pid,'Disabilitas_L_Terluka',$Disabilitas_L_Terluka);
        UpdateFormKorban($db,$pid,'Disabilitas_L_Menderita',$Disabilitas_L_Menderita);
        UpdateFormKorban($db,$pid,'Disabilitas_L_Mengungsi',$Disabilitas_L_Mengungsi);
        UpdateFormKorban($db,$pid,'Disabilitas_P_Meninggal',$Disabilitas_P_Meninggal);
        UpdateFormKorban($db,$pid,'Disabilitas_P_Hilang',$Disabilitas_P_Hilang);
        UpdateFormKorban($db,$pid,'Disabilitas_P_Terluka',$Disabilitas_P_Terluka);
        UpdateFormKorban($db,$pid,'Disabilitas_P_Menderita',$Disabilitas_P_Menderita);
        UpdateFormKorban($db,$pid,'Disabilitas_P_Mengungsi',$Disabilitas_P_Mengungsi);
        UpdateFormKorban($db,$pid,'Ibu_Hamil_Meninggal',$Ibu_Hamil_Meninggal);
        UpdateFormKorban($db,$pid,'Ibu_Hamil_Hilang',$Ibu_Hamil_Hilang);
        UpdateFormKorban($db,$pid,'Ibu_Hamil_Terluka',$Ibu_Hamil_Terluka);
        UpdateFormKorban($db,$pid,'Ibu_Hamil_Menderita',$Ibu_Hamil_Menderita);
        UpdateFormKorban($db,$pid,'Ibu_Hamil_Mengungsi',$Ibu_Hamil_Mengungsi);
        UpdateFormKerusakan($db,$pid,'Kesehatan_Rusak_berat',$Kesehatan_Rusak_berat);
        UpdateFormKerusakan($db,$pid,'Kesehatan_Rusak_Sedang',$Kesehatan_Rusak_Sedang);
        UpdateFormKerusakan($db,$pid,'Kesehatan_Rusak_Ringan',$Kesehatan_Rusak_Ringan);
        UpdateFormKerusakan($db,$pid,'Kesehatan_Terendam',$Kesehatan_Terendam);
        UpdateFormKerusakan($db,$pid,'Pendidikan_Rusak_berat',$Pendidikan_Rusak_berat);
        UpdateFormKerusakan($db,$pid,'Pendidikan_Rusak_Sedang',$Pendidikan_Rusak_Sedang);
        UpdateFormKerusakan($db,$pid,'Pendidikan_Rusak_Ringan',$Pendidikan_Rusak_Ringan);
        UpdateFormKerusakan($db,$pid,'Pendidikan_Terendam',$Pendidikan_Terendam);
        UpdateFormKerusakan($db,$pid,'Peribadatan_Rusak_berat',$Peribadatan_Rusak_berat);
        UpdateFormKerusakan($db,$pid,'Peribadatan_Rusak_Sedang',$Peribadatan_Rusak_Sedang);
        UpdateFormKerusakan($db,$pid,'Peribadatan_Rusak_Ringan',$Peribadatan_Rusak_Ringan);
        UpdateFormKerusakan($db,$pid,'Peribadatan_Terendam',$Peribadatan_Terendam);
        UpdateFormKerusakan($db,$pid,'Perkantoran_Rusak_berat',$Perkantoran_Rusak_berat);
        UpdateFormKerusakan($db,$pid,'Perkantoran_Rusak_Sedang',$Perkantoran_Rusak_Sedang);
        UpdateFormKerusakan($db,$pid,'Perkantoran_Rusak_Ringan',$Perkantoran_Rusak_Ringan);
        UpdateFormKerusakan($db,$pid,'Perkantoran_Terendam',$Perkantoran_Terendam);
        UpdateFormKerusakan($db,$pid,'Fasum_Rusak_berat',$Fasum_Rusak_berat);
        UpdateFormKerusakan($db,$pid,'Fasum_Rusak_Sedang',$Fasum_Rusak_Sedang);
        UpdateFormKerusakan($db,$pid,'Fasum_Rusak_Ringan',$Fasum_Rusak_Ringan);
        UpdateFormKerusakan($db,$pid,'Fasum_Terendam',$Fasum_Terendam);
        UpdateFormKerusakan($db,$pid,'Jembatan_Rusak_berat',$Jembatan_Rusak_berat);
        UpdateFormKerusakan($db,$pid,'Jembatan_Rusak_Sedang',$Jembatan_Rusak_Sedang);
        UpdateFormKerusakan($db,$pid,'Jembatan_Rusak_Ringan',$Jembatan_Rusak_Ringan);
        UpdateFormKerusakan($db,$pid,'Jembatan_Terendam',$Jembatan_Terendam);
        UpdateFormKerusakan($db,$pid,'Pabrik_Rusak_berat',$Pabrik_Rusak_berat);
        UpdateFormKerusakan($db,$pid,'Pabrik_Rusak_Sedang',$Pabrik_Rusak_Sedang);
        UpdateFormKerusakan($db,$pid,'Pabrik_Rusak_Ringan',$Pabrik_Rusak_Ringan);
        UpdateFormKerusakan($db,$pid,'Pabrik_Terendam',$Pabrik_Terendam);
        UpdateFormKerusakan($db,$pid,'Pertokoan_Rusak_berat',$Pertokoan_Rusak_berat);
        UpdateFormKerusakan($db,$pid,'Pertokoan_Rusak_Sedang',$Pertokoan_Rusak_Sedang);
        UpdateFormKerusakan($db,$pid,'Pertokoan_Rusak_Ringan',$Pertokoan_Rusak_Ringan);
        UpdateFormKerusakan($db,$pid,'Pertokoan_Terendam',$Pertokoan_Terendam);
        UpdateFormKerusakan($db,$pid,'Rumah_Rusak_berat',$Rumah_Rusak_berat);
        UpdateFormKerusakan($db,$pid,'Rumah_Rusak_Sedang',$Rumah_Rusak_Sedang);
        UpdateFormKerusakan($db,$pid,'Rumah_Rusak_Ringan',$Rumah_Rusak_Ringan);
        UpdateFormKerusakan($db,$pid,'Rumah_Terendam',$Rumah_Terendam);
        UpdateFormKerusakanLain($db,$pid,'Kerusakan_Sawah',$Kerusakan_Sawah);
        UpdateFormKerusakanLain($db,$pid,'Kerusakan_Jalan',$Kerusakan_Jalan);
        UpdateFormKerusakanLain($db,$pid,'Kerusakan_Kebun',$Kerusakan_Kebun);
        UpdateFormKerusakanLain($db,$pid,'Kerusakan_Lahan',$Kerusakan_Lahan);
        UpdateFormKerusakanLain($db,$pid,'Kerusakan_Hutan',$Kerusakan_Hutan);
        UpdateFormKerusakanLain($db,$pid,'Kerusakan_Kolam',$Kerusakan_Kolam);
        UpdateFormKerusakanLain($db,$pid,'Kerusakan_Irigasi',$Kerusakan_Irigasi);
        UpdateFormKerusakanLain($db,$pid,'Kerusakan_Perkebunan',$Kerusakan_Perkebunan);
        UpdateFormKerusakanLain($db,$pid,'Kerusakan_Kerugian',$Kerusakan_Kerugian);
        UpdateFormKerusakanLain($db,$pid,'Kerusakan_lainnya',$Kerusakan_lainnya);

        $ekstensi_diperbolehkan = array('png','jpg','jpeg','webp');
        $nama = $_FILES['myFile']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['myFile']['size'];
        $file_tmp = $_FILES['myFile']['tmp_name'];  
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
          if($ukuran < 11044070){     
            $path_gambar = $base.'assets/'.$nama; 
            move_uploaded_file($file_tmp, '../assets/'.$nama);
            $query = mysqli_query($db,"INSERT INTO `dokumentasi`(`pid`, `path`) VALUES ('$pid','$path_gambar')");
            if($query){
            }else{
            }
          }else{
          }
        }else{
        }
        //batas
      } else {
        $_SESSION['msg_type'] = 'error';
        $_SESSION['msg_content'] = "Gagal! Error System";
        header("location:".$_POST['redirect']);
      }
    } else {
      $_SESSION['msg_type'] = 'error';
      $_SESSION['msg_content'] = "Gagal! Data Tidak DItemukan";
      header("location:".$_POST['redirect']);
    }
  }
?>