<?php
    include 'config/koneksi.php';
	$modul = isset($_GET['modul']) ? $_GET['modul'] : '';
    $aksi = isset($_GET['aksi']) ? $_GET['aksi'] : '';
    if ($modul=="produk") 
	{
		if($aksi=="add"){
			include 'app/create.php';
		}elseif ($aksi=="edit") {
			include 'app/edit.php';
		}elseif ($aksi=="hapus") {
			include 'app/delete.php';
        }else{
            include 'app/view.php';
        }
    }else{
		include 'app/view.php';
	}
?>