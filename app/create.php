<?php
    include 'config/koneksi.php';

    if(isset($_POST['simpan']))
    {
    
        $nm_produk = $_POST['nama'];
        $ket = $_POST['ket'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        mysqli_query($conn, "INSERT INTO produk (nama_produk, keterangan, harga, jumlah) VALUES 
        ('$nm_produk','$ket','$harga','$jumlah')") OR DIE(mysqli_error());
        header('location:?modul=produk');
}
?>

<!DOCTYPE html>
<html>
        <head>
            <link rel="stylesheet" href="style.css">
            <title>Document</title>
        </head>
    <body>
        <form method="post">
        <div class="jumbotron">
            <table>
            <tr>
				<td>Nama Produk</td> 
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
            <tr>
				<td>Keterangan</td> 
				<td>:</td>
				<td><input type="text" name="ket"></td>
			</tr>
            <tr>
				<td>Harga</td> 
				<td>:</td>
				<td><input type="text" name="harga"></td>
			</tr>
            <tr>
				<td>Jumlah</td> 
				<td>:</td>
				<td><input type="text" name="jumlah"></td>
			</tr>
            </table>

            <tr>
				<td><input type="submit" class="btn-sv" name="simpan" value="SAVE">
				</td>
			</tr>
        </div>
    </body>
</html>