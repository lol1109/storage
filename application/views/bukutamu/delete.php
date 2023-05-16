<?php 
	require "koneksi.php";

	//mengambil id komik dari cari.php
	$id = $_GET['id_tamu'];

	if ( hapus($id) > 0 ) {
		echo "
				<script>
					alert('data berhasil dihapus!');
					document.location.href = 'data.php';
				</script>
			";
	} else {
		echo "data gagal dihapus!";
	}
?>