<?php 
	// $conn = mysqli_connect("localhost", "root", "", "kelas_a4");
	$conn = mysqli_connect("sql305.infinityfree.com", "if0_36932547", "AxtHlhlVgi", "if0_36932547_web_mahasiswa");

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
		
		$foto = upload();
		if (!$foto) {
			return false;
		}
	
		$query = "INSERT INTO mahasiswa VALUES (NULL,'$nim','$nama','$alamat','$email','$foto')";
			mysqli_query($conn, $query);
	

		return mysqli_affected_rows($conn);
	}

	function upload() {
		 $namaFile = $_FILES['foto']['name'];
		 $ukuranFile = $_FILES['foto']['size'];
		 $error = $_FILES['foto']['error'];
		 $tmpName = $_FILES['foto']['tmp_name'];

		 if ($error === 4) {
			echo "<script> alert ('Upload foto terlebih dahulu !'); document.location.href = 'tambah.php'; </script>";
			return false;
		 }

		 $validFormat = ['jpg', 'jpeg', 'png']; 
		 $format = explode('.',$namaFile);
		 $format = strtolower(end($format));
		 if (!in_array($format, $validFormat)) {
			echo "<script> alert ('File yang di upload tidak valid !'); document.location.href = 'tambah.php'; </script>";
			return false;
		 }

		 if ($ukuranFile > 2000000) {
			echo "<script> alert ('Berkas Foto melebihi 2MB !'); document.location.href = 'tambah.php';
				</script>";
			return false;
		 }

		 $renamefoto = uniqid();
		 $renamefoto .= '.';
		 $renamefoto .= $format; 

		 $dir = "img/";
		 move_uploaded_file($tmpName, $dir.$renamefoto);

		 return $renamefoto;
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
		$fotoLama = $data['gambarLama'];

		if ($_FILES['foto']['error'] === 4) {
			$foto = $fotoLama;
		} else {
			$foto = upload();
		}

		$dir = "img/";
		$tmpfile = $files["foto"]["tmp_name"];
	
		move_uploaded_file($tmpfile, $dir.$foto);
	
		$query = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', alamat = '$alamat', email = '$email', photo = '$foto' WHERE `no` = $id";
			mysqli_query($conn, $query);
	

		return mysqli_affected_rows($conn);
	}

	function cari($keyword) {
		$query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nim LIKE '%$keyword%' OR alamat LIKE '%$keyword%' OR email LIKE '%$keyword%'";
		return query($query);
	}

	function registrasi($data) {
		global $conn; 

		$username = strtolower(stripcslashes($data['username']));
		$password = mysqli_real_escape_string($conn, $data['password']);
		$password2 = mysqli_real_escape_string($conn, $data['password2']);

		$result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
		if (mysqli_fetch_assoc($result) ) {
				echo "<script> alert ('Username sudah digunakan !'); </script>";
			return false;
		}  
		
		if ($password !== $password2) {
			echo "<script> alert ('Konfirmasi password tidak sesuai !'); </script>";
			return false;
		}

		$password = password_hash($password, PASSWORD_DEFAULT);
		
		mysqli_query($conn, "INSERT INTO users VALUES (NULL, '$username', '$password')");

		return mysqli_affected_rows($conn);
	}
 ?>