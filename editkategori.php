<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <title>Sistem Informasi Penjualan</title>
  </head>

  <body>
	<?php include "menu.php";?>
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              FORM INPUT KATEGORI
            </div>
            <div class="card-body">
			<?PHP
				include "koneksi.php";
				$idsiswa=$_GET['idsiswa'];
				$hasil = mysql_query("SELECT * FROM tbsiswa WHERE idsiswa='$idsiswa'");
				$data=mysql_fetch_array($hasil);
				if (isset($_POST['input'])) {
				$idsiswa= $_POST['idsiswa'];
				$namasiswa= $_POST['namasiswa'];
				$alamat= $_POST['alamat'];
				$asalsekolah= $_POST['asalsekolah'];
				$myqry="UPDATE tbsiswa SET namasiswa='$namasiswa', alamat='$alamat', asalsekolah='$asalsekolah' WHERE idsiswa='$idsiswa' LIMIT 1";
				mysql_query($myqry) or die(mysql_error());
				echo "<meta http-equiv='refresh' content='0; url=laporankategori.php'>";
				}
			?>
				
             <form action="" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                  <label>ID Siswa</label>
                  <input type="text" name="idsiswa" id="idsiswa" value="<?php echo $data ['idsiswa'];?>" readonly="readonly"class="form-control">
                </div>
				
                <div class="form-group">
                  <label>Nama Siswa</label>
                  <input type="text" name="namasiswa" id="namasiswa" value="<?php echo $data ['namasiswa'];?>"class="form-control">
                </div>
				
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" id="alamat" value="<?php echo $data ['alamat'];?>"class="form-control">
                </div>
				
                <div class="form-group">
                  <label>Asal Sekolah</label>
                  <input type="text" name="asalsekolah" id="asalsekolah" value="<?php echo $data ['asalsekolah'];?>"class="form-control">
                </div>
                
                <button type="submit" id="input" name="input" class="btn btn-success">
                  <i class="fas fa-save"></i> SIMPAN
                </button>
                <button type="reset" class="btn btn-warning">
                  <i class="fas fa-undo"></i> RESET
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>