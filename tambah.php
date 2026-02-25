<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <title>Sistem Informasi Penjualan</title>
  </head>

  <body>
	<?php include "menu.php";?>
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              JUDUL DISINI
            </div>
            <div class="card-body">
             <form action="" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                  <label>Judul Field1</label>
                  <input type="text" name="field1" placeholder="Judul Field1" class="form-control">
                </div>

                <div class="form-group">
                  <label>Judul Field2</label>
                  <input type="text" name="field2" placeholder="Judul Field2" class="form-control">
                </div>

				<div class="form-group">
                  <label>Judul Field3</label>
                  <input type="text" name="field3" placeholder="Judul Field3" class="form-control">
                </div>
				
                <div class="form-group">
                  <label>Text Area (Kolom Lebih Lebar)</label>
                  <textarea class="form-control" name="field4" placeholder="Text Area" rows="4"></textarea>
                </div>
                
                <button type="submit" id="input" name="input" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

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