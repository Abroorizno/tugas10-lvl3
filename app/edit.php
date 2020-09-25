<?php
    include 'config/koneksi.php';

    $sql = mysqli_query($conn,"SELECT * FROM produk WHERE id='".$_GET['id']."'");
    $row = mysqli_fetch_array($sql);

        if(isset($_POST['edit']))
        {
            $id = $_POST['id'];
            $nm_produk = $_POST['nama'];
            $ket = $_POST['ket'];
            $harga = $_POST['harga'];
            $jumlah = $_POST['jumlah'];

            mysqli_query($conn, "UPDATE produk SET nama_produk='$nm_produk', keterangan='$ket', harga='$harga', jumlah='$jumlah' 
            WHERE id='$id'") OR DIE(mysqli_error());
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
				<td>
                    <input type="text" name="nama" value="<?=$row['nama_produk']?>">
                    <input type="hidden" name="id" value="<?=$row['id']?>">
                </td>
			</tr>
            <tr>
				<td>Keterangan</td> 
				<td>:</td>
				<td>
                    <input type="text" name="ket" value="<?=$row['keterangan']?>">
                </td>
			</tr>
            <tr>
				<td>Harga</td> 
				<td>:</td>
				<td>
                    <input type="text" name="harga" value="<?=$row['harga']?>">
                </td>
			</tr>
            <tr>
				<td>Jumlah</td> 
				<td>:</td>
				<td>
                    <input type="text" name="jumlah" value="<?=$row['jumlah']?>">
                </td>
			</tr>
            <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>
                    <input type="submit" class="btn-ed" name="edit" id="edit" value="EDIT">
				</td>
			</tr>
            </table>
        </div>
    </body>
</html>