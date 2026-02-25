<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <title>Sistem Informasi Pendaftaran Siswa Baru</title>
  </head>

  <body>
	<?php include "menu.php";?>
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
			<!--Program Laporan di bawah ini-->
			<div class="card">
				<div class="card-header">
					DATA Siswa
				</div>
				<div class="card-body">
					<a href="tambahkategori.php" class="btn
					btn-success" style="margin-bottom" 10px">TAMBAH
					DATA</a>
						<table class="table table-bordered" id="myTable	">
							<thead>
								<tr>	
									<th scope="col">No.</th>
									<th scope="col">ID Siswa</th>
									<th scope="col">Nama Siswa</th>
									<th scope="col">Alamat Siswa</th>
									<th scope="col">Asal Sekolah</th>
								</tr>
							</thead>
							<tbody>
							  <?php
									include "koneksi.php";
									$query="select * from tbsiswa";
									$hasil=mysql_query($query);
									$i=1;
									while ($row = mysql_fetch_array(
									$hasil))
									{
								?>
								
							<tr>
								<td><?php echo $i;?></td>
								<td><?php echo $row['idsiswa'];?></td>
								<td><?php echo $row['namasiswa'];?></td>
								<td><?php echo $row['alamat'];?></td>
								<td><?php echo $row['asalsekolah'];?></td>
								
								<td>
								
								<a href="editkategori.php?idsiswa=
								<?php echo $row['idsiswa']?>">Edit
								</a>
								
								<a href="hapuskategori.php?idsiswa=
								<?php echo $row['idsiswa']?>">Hapus
								</a>
								
								</td>
							</tr>
							<?php
								$i++;
								}
							?>
							</tbody>
						</table>
				</div>
			</div>
			<!--Batas Tutup-->
		</div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>