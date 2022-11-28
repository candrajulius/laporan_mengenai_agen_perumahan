<?php 
require_once ("../include/config.php");
if (isset($_GET['id']) && isset($_GET['pid'])) {
	$target_id = mysqli_real_escape_string($db,$_GET['id']);
	$target_pid = mysqli_real_escape_string($db,$_GET['pid']);
	$check = mysqli_query($db,"SELECT * FROM dokumentasi WHERE id = '$target_id'");
	$data = mysqli_fetch_array($check);
	if (mysqli_num_rows($check) > 0) {
		$delete_dokumentasi = mysqli_query($db,"DELETE FROM dokumentasi WHERE id = '$target_id' ");
		if ($delete_dokumentasi ==  true) {
			$_SESSION['msg_type'] = 'success';
			$_SESSION['msg_content'] = "Dokumentasi dengan id '$target_id' Berhasil Di Hapus.";
			header("location:{$base}data/edit.php?pid=$target_pid");
		} else {
			$_SESSION['msg_type'] = 'error';
			$_SESSION['msg_content'] = "Gagal! Sistem error";
			header("location:{$base}data/edit.php?pid=$target_pid");
		}
	} else {
		$_SESSION['msg_type'] = 'error';
		$_SESSION['msg_content'] = "Data Tidak Di Temukan.";
		header("location:{$base}data/edit.php?pid=$target_pid");
	}
} else {
	header("location:$base");
}
?>