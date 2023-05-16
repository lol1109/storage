<?php 

	$con = mysqli_connect("localhost","root","","databasebukutamu");
	if (!$con) {
		echo "error" + mysql_error();
	}

	function query($query){
		global $con;
		$result = mysqli_query($con, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}

	function queryaccount($queryaccount){
		/*
		login.php --> data.php --> dibagian profile menampilakan gmail 
		*/
		global $con;
		$result = mysqli_query($con, $queryaccount);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}

	function tambah($data){
		global $con;
		//ambil data

		$nama = $data['Nama'];
		$kontak = $data['Kontak'];
		$nowa = $data['noWa'];
		$bidang = $data['Bidang'];
		$tujuan = $data['Tujuan'];
		$ji = $data['JenisInformasi'];
		$Info = $data['Informasi'];
		$Kesimpulan = $data['Kesimpulan'];

		//insert data
		$query = "INSERT INTO datatamu values(
		'','$nama','$kontak', '$nowa', '$bidang', '$tujuan', '$ji', '$Info', '$Kesimpulan')";
		mysqli_query($con, $query);

		return mysqli_affected_rows($con);
	}
	function hapus($id) {
		global $con;
		$query = "DELETE FROM datatamu WHERE id_tamu = $id";
		mysqli_query($con, $query);

		return mysqli_affected_rows($con);
	}

	function change($dat) {
		global $con;
		//ambil dat

		$id = $dat['id'];
		$nama = htmlspecialchars($dat['Nama']);
		$Kontak = htmlspecialchars($dat['Kontak']);
		$noWa = htmlspecialchars($dat['noWa']);
		$bidang = htmlspecialchars($dat['Bidang']);
		$tujuan = htmlspecialchars($dat['Tujuan']);
		$ji = htmlspecialchars($dat['JenisInformasi']);
		$Info = htmlspecialchars($dat['Informasi']);
		$Kesimpulan = htmlspecialchars($dat['Kesimpulan']);

		//insert dat
		$query = "UPDATE datatamu SET Nama = '$nama', Kontak = '$Kontak', noWa = '$noWa', Bidang = '$bidang', Tujuan = '$tujuan', JenisInformasi = '$ji', Informasi = 'Info', Kesimpulan = 'Kesimpulan' WHERE id_tamu = $id";
		mysqli_query($con, $query);

		return mysqli_affected_rows($con);
	}

	function cari($keyword) {
		$query = "SELECT * FROM datatamu WHERE Nama LIKE '%$keyword%' OR Kontak LIKE '%$keyword%' OR noWa LIKE '%$keyword%' OR Bidang LIKE '%$keyword%' OR Tujuan LIKE '%$keyword%' OR JenisInformasi LIKE '%$keyword%' OR Informasi LIKE '%$keyword%'";
		return query($query);
	}

	function registrasi($data){
		global $con;

		//create variable
		$gmail = $data["gmail"];
		$password = mysqli_real_escape_string($con, $data["password"]);

		//cek username apakah sudah ada atau belum
		$result = mysqli_query($con, "SELECT gmail FROM user WHERE gmail = '$gmail'");

		if (mysqli_fetch_assoc($result)) {
			echo "
				<script>
					alert('akun telah dibuat!');
				</script>
			";
			return false;
		}

		/*cek aoakah p1 dan c p sama 
		if ($password !== $password2) {
			echo "
				<script>
					alert('confirm password and password is diffrent');
				</script>
			";
			return false;
		}*/

		//enkripsi password

		$password = password_hash($password, PASSWORD_DEFAULT);

		//insert ke database
		mysqli_query($con, "INSERT INTO user VALUES('','$gmail','$password')");

		return mysqli_affected_rows($con);

	}

?>