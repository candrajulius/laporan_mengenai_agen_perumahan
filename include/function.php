<?php

function GetArray($length){
    $numItems = count($length);
    $i = 0;
    $str = "";
    foreach($length as $value) {
      if(++$i === $numItems) {
        $str .= $value;
      } else {
        $str .= $value.",";
      }
    }
    return $str;
}

function random_number($length) {
	$str = "";
	$characters = array_merge(range('1','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}

function JenisBencana(){
	$JenisBencana = array(
		'Banjir' ,
		'Gelombang Ekstrim' ,
		'Gempa Bumi' ,
		'Tsunami' ,
		'Karhutla' ,
		'Kegagalan Teknologi' ,
		'Konflik' ,
		'Kekeringan' ,
		'Letusan Gunung Api' ,
		'Cuaca Ekstrim' ,
		'Tanah Longsor' ,
		'Banjir Bandang' ,
		'Likuifaksi'
	);
	foreach ($JenisBencana as $value) {
		echo "
		<div class='col-md-6'>
      <div class='custom-control custom-checkbox mr-sm-2'>
          <input name='JenisBencana[]' value='$value' type='checkbox' class='custom-control-input' id='$value'>
          <label class='custom-control-label text-truncate' for='$value' style='font-size:13px'>$value</label>
      </div>
    </div>
		";
	}
}


function InsertFormKorban($db,$pid,$korban,$jumlah) {
	$check = mysqli_query($db,"SELECT * FROM korban WHERE pid = '$pid' AND korban = '$korban'");
		if (mysqli_num_rows($check) == 0) {
			$InsertFormKorban = mysqli_query($db,"INSERT INTO `korban`(`pid`, `korban`, `jumlah`) VALUES ('$pid','$korban','$jumlah')");
		}
}

function InsertFormKerusakan($db,$pid,$kasus,$jumlah) {
	$check = mysqli_query($db,"SELECT * FROM kerusakan WHERE pid = '$pid' AND kasus = '$kasus'");
		if (mysqli_num_rows($check) == 0) {
			$InsertFormKerusakan = mysqli_query($db,"INSERT INTO `kerusakan`(`pid`, `kasus`, `jumlah`) VALUES ('$pid','$kasus','$jumlah')");
		}
}

function InsertFormKerusakanLain($db,$pid,$kasus,$jumlah) {
	$check = mysqli_query($db,"SELECT * FROM kerusakan_lain WHERE pid = '$pid' AND kasus = '$kasus'");
		if (mysqli_num_rows($check) == 0) {
			$InsertFormKerusakanLain = mysqli_query($db,"INSERT INTO `kerusakan_lain`(`pid`, `kasus`, `jumlah`) VALUES ('$pid','$kasus','$jumlah')");
		}
}

function GetValueKorban($db,$row,$pid){
	$query = mysqli_query($db,"SELECT * FROM korban WHERE pid = '$pid' AND korban = '$row'");
	$data = mysqli_fetch_array($query);
	echo $data['jumlah'];
}

function GetValueKerusakan($db,$row,$pid) {
	$query = mysqli_query($db,"SELECT * FROM kerusakan WHERE pid = '$pid' AND kasus = '$row'");
	$data = mysqli_fetch_array($query);
	echo $data['jumlah'];
}

function GetValueKerusakanLain($db,$row,$pid) {
	$query = mysqli_query($db,"SELECT * FROM kerusakan_lain WHERE pid = '$pid' AND kasus = '$row'");
	$data = mysqli_fetch_array($query);
	echo $data['jumlah'];
}

function GetDokumentasi($base,$db,$pid) {
	$query = mysqli_query($db,"SELECT * FROM dokumentasi WHERE pid = '$pid'");
	while($data = mysqli_fetch_array($query)){
		$id = $data['id'];
		$pid = $data['pid'];
		$path = $data['path'];
		echo "
			<div class='col-md-3 mb-2'>
				<img src='$path' style='width:100%;height:100px;object-fit:cover' class='border shadow-sm rounded'/>
				<div><a href='{$base}proses/hapus-dokumentasi.php?id={$id}&pid=$pid'>Hapus</a></div>
			</div>
		";
	}
}

function GetTotalKorbanHorizontal($db,$pid,$korban){
	$query = mysqli_query($db, "SELECT SUM(jumlah) AS total FROM korban where pid = '$pid' AND korban LIKE '%$korban%'
");
	$data = mysqli_fetch_array($query);
	echo $data['total'];
}

function GetTotalKerusakanHorizontal($db,$pid,$property){
	$query = mysqli_query($db, "SELECT SUM(jumlah) AS total FROM kerusakan where pid = '$pid' AND kasus LIKE '%$property%';");
	$data = mysqli_fetch_array($query);
	echo $data['total'];
}


function UpdateFormKorban($db,$pid,$korban,$jumlah) {
	$check = mysqli_query($db,"SELECT * FROM korban WHERE pid = '$pid' AND korban = '$korban'");
	if (mysqli_num_rows($check) > 0) {
		$UpdateFormKorban = mysqli_query($db,"UPDATE `korban` SET `jumlah`='$jumlah' WHERE pid = '$pid' AND korban = '$korban' ");
	}
}

function UpdateFormKerusakan($db,$pid,$kasus,$jumlah) {
	$check = mysqli_query($db,"SELECT * FROM kerusakan WHERE pid = '$pid' AND kasus = '$kasus'");
		if (mysqli_num_rows($check) > 0) {
			$UpdateFormKerusakan = mysqli_query($db,"UPDATE `kerusakan` SET `jumlah`='$jumlah' WHERE pid = '$pid' AND kasus ='$kasus'");
		}
}

function UpdateFormKerusakanLain($db,$pid,$kasus,$jumlah) {
	$check = mysqli_query($db,"SELECT * FROM kerusakan_lain WHERE pid = '$pid' AND kasus = '$kasus'");
		if (mysqli_num_rows($check) > 0) {
			$UpdateFormKerusakanLain = mysqli_query($db,"UPDATE `kerusakan_lain` SET `jumlah`='$jumlah' WHERE pid = '$pid' AND kasus ='$kasus'");
		}
}
?>

