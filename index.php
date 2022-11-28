<?php 
require_once('include/config.php');
$msg_type = '';
if(!isset($_SESSION['user'])) {
header("Location:".$base."login.php");
} else {
if (isset($_POST['hapus'])) {
  $pid = preg_replace("/[^0-9]/", "",$_POST['pid']);
  $delete_identitas = mysqli_query($db,"DELETE FROM `identitas` WHERE pid = '$pid' ");
  $delete_korban = mysqli_query($db,"DELETE FROM `korban` WHERE pid = '$pid' ");
  $delete_kerusakan = mysqli_query($db,"DELETE FROM `kerusakan` WHERE pid = '$pid' ");
  $delete_kerusakan_lain = mysqli_query($db,"DELETE FROM `kerusakan_lain` WHERE pid = '$pid' ");
  $delete_dokumentasi = mysqli_query($db,"DELETE FROM `dokumentasi` WHERE pid = '$pid' ");
  if ($delete_identitas == true) {
    $msg_type = 'success';
    $msg_content = "Berhasil! Salah Satu Data Dengan Nomor PID ($pid) Berhasil Di Hapus.";
  } else {
    $msg_type = 'error';
    $msg_content = 'Gagal! Ada Kesalahan System.';
  }
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
      <?php 
        include_once('include/head.php');
      ?>
  </head>
  <body>
      
      <!-- ============================================================== -->
      <!-- Main wrapper - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <div id="main-wrapper">
          <?php 
          include_once('include/header.php');
          ?>
          <!-- Page wrapper  -->
          <!-- ============================================================== -->
          <div class="page-wrapper">
              <!-- ============================================================== -->
              <!-- Container fluid  -->
              <!-- ============================================================== -->
              <div class="container-fluid">
                <?php
                  if ($msg_type == 'error') {
                    echo "<div class='alert alert-danger'>$msg_content</div>";
                  } else if($msg_type == 'success') {
                    echo "<div class='alert alert-success'>$msg_content</div>";
                  } else {

                  }
                ?>
                <div class="card">
                  <div class="card-header p-3">
                    <h3 class="card-title">Tabel Data Bencana</h3>
                  </div>
                  <div class="card-body p-3 w-100">
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead class="bg-dark text-white">
                          <tr>
                            <th scope="row">Aksi</th>
                            <th scope="row">ID</th>
                            <th scope="row">PID</th>
                            <th scope="row">Tanggal</th>
                            <th scope="row">Jenis Bencana</th>
                            <th scope="row">Lokasi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $dataPerPage = 10;
                            if(isset($_GET['page']))
                            {
                              $noPage = $_GET['page'];
                            } 
                            else $noPage = 1;
                            $offset = ($noPage - 1) * $dataPerPage;
                            if (isset($_GET['search'])) {
                              $key_search = $_GET['search'];
                              $param = "";
                              $query = "SELECT * FROM identitas WHERE pid LIKE '%$key_search%' OR jenis LIKE '%$key_search%' OR lokasi LIKE '%$key_search%' OR petugas LIKE '%$key_search%' OR tanggal LIKE '%$key_search%' ORDER BY id DESC";
                            } else {
                              $query = "SELECT * FROM identitas ORDER BY id DESC";
                            }
                            $new_query = $query." LIMIT $offset,$dataPerPage";
                            $result = mysqli_query($db,$new_query);
                            while($data = mysqli_fetch_array($result)){
                              $jenis = json_decode($data['jenis'],true);
                              $lokasi = json_decode($data['lokasi'],true);
                          ?>                  
                          <tr>
                            <td>
                              <a href="<?=$base;?>data/edit.php?pid=<?=$data['pid'];?>" class="btn btn-primary"><i class='fa fa-eye'></i> Detail Dan Edit</a>
                              <a href="<?=$base;?>data/hapus.php?pid=<?=$data['pid'];?>" class="btn btn-danger"><i class='fa fa-trash'></i> Hapus</a>
                            </td>
                            <th scope="row"><?=$data['id'];?></th>
                            <th scope="row"><?=$data['pid'];?></th>
                            <td><?=date('d/m/Y',strtotime($data['tanggal']));?></td>
                            <td><?php echo GetArray($jenis);?></td>
                            <td><?php echo GetArray($lokasi);?></td>
                          </tr>
                          <?php 
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card-body p-3">
                    <ul class="pagination pagination-sm">
                      <?php
                        if (isset($_GET['search'])) {
                          $self = $base."?search=".$_GET['search']."&";
                        } else $self = $base."?";
                        $jumData = mysqli_num_rows(mysqli_query($db,$query));
                        $jumPage = ceil($jumData/$dataPerPage);
                        if ($noPage > 1) echo  "<li class='page-item'><a class='page-link' href='".$self."page=".($noPage-1)."'><i class='fa fa-angle-left'></i></a></li>"; 
                        for($page = 1; $page <= $jumPage; $page++)
                        {
                          if ((($page >= $noPage - 2) && ($page <= $noPage + 2)) || ($page == 1) || ($page == $jumPage)) 
                          {   
                            if (($page != ($jumPage - 1)) && ($page == $jumPage))  echo "<li class='page-item'><a class='page-link'>...</a></li>";
                            if ($page == $noPage) echo "<li class='page-item active'><a class='page-link'>".$page."</a></li>";
                            else echo "<li class='page-item'><a class='page-link' href='".$self."page=".$page."'>".$page."</a></li>";
                          }
                        } 
                        if ($noPage < $jumPage) echo "<li class='page-item'><a class='page-link' href='".$self."page=".($noPage+1)."'><i class='fa fa-angle-right'></i></a></li>";
                      ?>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- ============================================================== -->
              <!-- End Container fluid  -->
              <!-- ============================================================== -->
              <?php 
              include_once('include/footer.php');
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
      include_once('include/script.php');
      ?>
  </body>
</html>
<?php 
}
?>