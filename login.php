<?php
  require('include/config.php');
  $msg_type = '';
  if (isset($_SESSION['user'])) {
    header("Location: $base");
  }
  if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);

    $check_login = mysqli_query($db,"SELECT * FROM admin WHERE username = '$username' AND password = '$password' ");
    $data_user = mysqli_fetch_array($check_login);
    if (mysqli_num_rows($check_login) == 0) {
      $msg_type = 'error';
      $msg_content = 'Gagal! Mohon Maaf, Akun Anda Tidak Terdafar, Mohon Diperiksa kembali.';
    } else if(empty($username) || empty($password)) {
      $msg_type = 'error';
      $msg_content = 'Gagal! Mohon Maaf, Tolong mengisi seluruh input yang telah tersedia.';
    } else {
      $msg_type = 'success';
      $msg_content = 'Berhasil! Anda Akan Diarahkan Kehalaman Utama Dalam Beberapa Detik.';
      $_SESSION['user'] = $data_user;
      echo "<meta http-equiv='refresh' content='3; url=$base'>";
    }
  }
?>
<!DOCTYPE html>
<html dir="ltr">

<head>
    <?php
      include('include/head.php');
    ?>
</head>

<body>
    <div class="main-wrapper">
        
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div id="loginform">
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db"><img src="assets/images/logo-text.png?t=<?=time();?>" alt="logo" width='178'/></span>
                    </div>
                    <!-- Form -->
                    <form class="form-horizontal m-t-20" id="loginform" method="post">
                        <?php
                          if ($msg_type == 'error') {
                            echo "<div class='alert alert-danger'>$msg_content</div>";
                          } else if($msg_type == 'success') {
                            echo "<div class='alert alert-success'>$msg_content</div>";
                          } else {

                          }
                        ?>
                        <div class="row p-b-30">
                            <div class="col-12">
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                </div>
                                <input type="text"  name="username" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required="">
                              </div>
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                </div>
                                <input type="password" name="password"  class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required="">
                              </div>
                              <div class="input-group">
                                <button class="btn btn-success w-100" name="login" type="submit">Login</button>
                              </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
    </div>

</body>

</html>