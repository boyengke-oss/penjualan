<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Sistem Informasi Penjualan</title>
  </head>

  <body>
	<?php include "menu.php";?>
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
			<!--Program Laporan di bawah ini-->
			<div class="card">
				<div class="card-header">
					JUDUL LAPORAN
				</div>
				<div class="card-body">
					
						<table class="table table-bordered" id="myTable">
							<thead>
								<tr>
									<th scope="col">Field1</th>
									<th scope="col">Field2</th>
									<th scope="col">Field3</th>
									<th scope="col">Field4..dst</th>
								</tr>
							</thead>
							<tbody>
							  
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							
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