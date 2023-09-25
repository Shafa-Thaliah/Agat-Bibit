<?php
//memasukkan file config.php
include('config.php');
?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Data Mahasiswa</font></center>
		<hr>
		<a href="index.php?page=tambah_mhs"><button class="btn btn-dark right">Tambah Data</button></a>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Produk</th>
					<th>Deskripsi Produk</th>
					<th>Jenis Produk</th>
					<th>Status</th>
					<th>Harga</th>
				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM detail ORDER BY id_detail DESC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						echo '
						<tr>
						
							<td>'.$data['id_detail'].'</td>
							<td>'.$data['nama_produk'].'</td>
							<td>'.$data['deskripsi_produk'].'</td>
							<td>'.$data['jenis_produk'].'</td>
							<td>'.$data['status_produk'].'</td>
							<td>'.$data['harga_produk'].'</td>

							<td>
								<a href="admin.php?page=edit_mhs&Nim='.$data['id_detail'].'" class="btn btn-secondary btn-sm">Edit</a>
								<a href="delete.php?Nim='.$data['Nim'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
	</div>
	</div>
