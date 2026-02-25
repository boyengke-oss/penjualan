<?php
include "koneksi.php";

$id = $_GET['idsiswa'];

mysql_query("DELETE FROM tbsiswa WHERE idsiswa='$id'");

echo "<script>
	alert('Data berhasil dihapus');
	window.location='laporankategori.php';
</script>";
?>