<?php 
	$conn = mysqli_connect("localhost", "root", "", "kelas_a4");

	function query($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while($row = mysqli_fetch_assoc($result) ) {
			$rows [] = $row;
		}
		return $rows;
	}

	function tambah($data, $files) {
		global $conn;
		$no = htmlspecialchars($data["no"]);
		$nim = htmlspecialchars($data["nim"]);
		$nama = htmlspecialchars($data["nama"]);
		$alamat = htmlspecialchars($data["alamat"]);
		$email = htmlspecialchars($data["email"]);
		$foto = $files["foto"]["name"];
	
		$dir = "img/";
		$tmpfile = $files["foto"]["tmp_name"];
	
		move_uploaded_file($tmpfile, $dir.$foto);
	
		$query = "INSERT INTO mahasiswa VALUES ('$no','$nim','$nama','$alamat','$email','$foto')";
			mysqli_query($conn, $query);
	

		return mysqli_affected_rows($conn);
	}

	function hapus($id) {
		global $conn;
   	 	mysqli_query($conn, "DELETE FROM mahasiswa WHERE `no` = $id");
		return mysqli_affected_rows($conn);
	}

	function ubah($id, $data, $files) {
		global $conn;
		$nim = htmlspecialchars($data["nim"]);
		$nama = htmlspecialchars($data["nama"]);
		$alamat = htmlspecialchars($data["alamat"]);
		$email = htmlspecialchars($data["email"]);
		$foto = $files["foto"]["name"];
	
		$dir = "img/";
		$tmpfile = $files["foto"]["tmp_name"];
	
		move_uploaded_file($tmpfile, $dir.$foto);
	
		$query = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', alamat = '$alamat', email = '$email', photo = '$foto' WHERE `no` = $id";
			mysqli_query($conn, $query);
	

		return mysqli_affected_rows($conn);
	}
 ?>