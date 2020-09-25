<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Hello</title>
    </head>

    <body>
        <div>
        <span style="padding-right: 0px;font-size: 17px;font-family: Helvetica">
		    <a href="?modul=produk&aksi=add">CREATE</a>
	    </span>
        </div>
        <table border="1" width="100%">
			<thead>
				<th>NO</th>
				<th>ID</th>
				<th>Nama Produk</th>
				<th>Harga</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
				<th>Aksi</th>
			</thead>
			<tbody>
				<?php
                    include 'config/koneksi.php';
					$no=1;
					$sql = mysqli_query($conn, "SELECT * FROM produk");
					while($rs=mysqli_fetch_array($sql))
					{
						echo '
							<tr>
								<td>'.$no.'</td>
								<td>'.$rs['id'].'</td>
								<td>'.$rs['nama_produk'].'</td>
								<td>'.$rs['harga'].'</td>
								<td>'.$rs['jumlah'].'</td>
								<td>'.$rs['keterangan'].'</td>
								<td>
									<a href = "?modul=produk&aksi=edit&id='.$rs['id'].'"> Edit ||</a>
									<a href = "?modul=produk&aksi=hapus&id='.$rs['id'].'"> Hapus</a>
								</td>
							</tr>
						';
					  $no++;
					}

				?>
			</tbody>
		</table>
    </body>
</html>
