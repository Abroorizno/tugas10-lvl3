<?php

		include 'config/koneksi.php';

		if(isset($_GET['id'])){

			$id = $_GET['id'];
		
			mysqli_query($conn, "DELETE FROM produk WHERE id='".$_GET['id']."'");
			header('location:?modul=produk');
	}	
?>
