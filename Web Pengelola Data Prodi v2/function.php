<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

	// $conn = mysqli_connect("localhost", "root", "", "kelas_a4");
	$conn = mysqli_connect("sql305.infinityfree.com", "if0_36932547", "AxtHlhlVgi", "if0_36932547_web_prodi");

	function query($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while($row = mysqli_fetch_assoc($result) ) {
			$rows [] = $row;
		}
		return $rows;
	}



	function tambahmk($data) {
		global $conn;
		$kode = htmlspecialchars($data["kode_matakuliah"]);
		$nama = htmlspecialchars($data["nama_matakuliah"]);
		$sks = htmlspecialchars($data["sks"]);
	
		$query = "INSERT INTO MataKuliah (kode_matakuliah, nama_matakuliah, sks) VALUES ('$kode', '$nama', '$sks')";
			mysqli_query($conn, $query);
	
		return mysqli_affected_rows($conn);
	}

	function tambahDosen($data) {
		global $conn;
		$kode = htmlspecialchars($data["kode_dosen"]);
		$nama = htmlspecialchars($data["nama"]);
		$email = htmlspecialchars($data["email"]);
	
		$query = "INSERT INTO Dosen (kode_dosen, nama_dosen, email) VALUES ('$kode', '$nama', '$email')";
			mysqli_query($conn, $query);
	
		return mysqli_affected_rows($conn);
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

	function tambahKelas($data) {
		global $conn;
		$kode = htmlspecialchars($data["kode"]);
		$nama = htmlspecialchars($data["nama"]);
	
		$query = "INSERT INTO Kelas (kode_kelas, nama_kelas) VALUES ('$kode', '$nama')";
			mysqli_query($conn, $query);
	
		return mysqli_affected_rows($conn);
	}

	function tambahJadwal($data) {
		global $conn;
		$kelas = htmlspecialchars($data["kode_kelas"]);
		$dosen = htmlspecialchars($data["kode_dosen"]);
		$matakuliah = htmlspecialchars($data["kode_matakuliah"]);
		$hari = htmlspecialchars($data["hari"]);
		$mulai = htmlspecialchars($data["jam_mulai"]);
		$selesai = htmlspecialchars($data["jam_selesai"]);
	
		$query = "INSERT INTO `Jadwal` (`id`, `nama_kelas`, `nama_dosen`, `nama_matakuliah`, `hari`, `jam_mulai`, `jam_selesai`) VALUES (NULL, '$kelas', '$dosen', '$matakuliah', '$hari', '$mulai', '$selesai');";
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

	function hapusmk($id) {
		global $conn;
   	 	mysqli_query($conn, "DELETE FROM MataKuliah WHERE id = $id");
		return mysqli_affected_rows($conn);
	}

	function hapusDosen($id) {
		global $conn;
   	 	mysqli_query($conn, "DELETE FROM Dosen WHERE id = $id");
		return mysqli_affected_rows($conn);
	}

	function hapusKelas($id) {
		global $conn;
   	 	mysqli_query($conn, "DELETE FROM Kelas WHERE id = $id");
		return mysqli_affected_rows($conn);
	}

	function hapusJadwal($id) {
		global $conn;
   	 	mysqli_query($conn, "DELETE FROM Jadwal WHERE id = $id");
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

	function ubahMatakuliah($id, $data) {
		global $conn;
		$kode = htmlspecialchars($data["kode"]);
		$nama = htmlspecialchars($data["nama"]);
		$sks = htmlspecialchars($data["sks"]);
	
		$query = "UPDATE MataKuliah SET kode_matakuliah = '$kode', nama_matakuliah = '$nama', sks = '$sks' WHERE `id` = $id";
			mysqli_query($conn, $query);
	

		return mysqli_affected_rows($conn);
	}

	function ubahDosen($id, $data) {
		global $conn;
		$kode = htmlspecialchars($data["kode"]);
		$nama = htmlspecialchars($data["nama"]);
		$email = htmlspecialchars($data["email"]);
	
		$query = "UPDATE Dosen SET kode_dosen = '$kode', nama_dosen = '$nama', email = '$email' WHERE `id` = $id";
			mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function ubahKelas($id, $data) {
		global $conn;
		$kode = htmlspecialchars($data["kode"]);
		$nama = htmlspecialchars($data["nama"]);
	
		$query = "UPDATE Kelas SET kode_kelas = '$kode', nama_kelas = '$nama' WHERE `id` = $id";
			mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function ubahJadwal($id, $data) {
		global $conn;
		$kelas = htmlspecialchars($data["kelas"]);
		$dosen = htmlspecialchars($data["dosen"]);
		$matakuliah = htmlspecialchars($data["matakuliah"]);
		$hari = htmlspecialchars($data["hari"]);
		$mulai = htmlspecialchars($data["mulai"]);
		$selesai = htmlspecialchars($data["selesai"]);
	
		$query = "UPDATE Jadwal SET nama_kelas = '$kelas', nama_dosen = '$dosen', nama_matakuliah = '$matakuliah', hari = '$hari', jam_mulai = '$mulai', jam_selesai = '$selesai' WHERE `id` = $id";
			mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function cari($keyword) {
		$query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nim LIKE '%$keyword%' OR alamat LIKE '%$keyword%' OR email LIKE '%$keyword%'";
		return query($query);
	}

	function carimk($keyword) {
		$query = "SELECT * FROM MataKuliah WHERE kode_matakuliah LIKE '%$keyword%' OR nama_matakuliah LIKE '%$keyword%' OR sks LIKE '%$keyword%'";
		return query($query);
	}

	function caridosen($keyword) {
		$query = "SELECT * FROM Dosen WHERE kode_dosen LIKE '%$keyword%' OR nama_dosen LIKE '%$keyword%' OR email LIKE '%$keyword%'";
		return query($query);
	}

	function cariKelas($keyword) {
		$query = "SELECT * FROM Kelas WHERE kode_kelas LIKE '%$keyword%' OR nama_kelas LIKE '%$keyword%'";
		return query($query);
	}

	function cariJadwal($keyword) {
		$query = "SELECT 
						Jadwal.id, 
						Kelas.kode_kelas, 
						Dosen.kode_dosen, 
						MataKuliah.kode_matakuliah, 
						Jadwal.hari, 
						Jadwal.jam_mulai, 
						Jadwal.jam_selesai 
					FROM 
						Jadwal 
					JOIN 
						Kelas ON Jadwal.nama_kelas = Kelas.nama_kelas 
					JOIN 
						Dosen ON Jadwal.nama_dosen = Dosen.nama_dosen 
					JOIN 
						MataKuliah ON Jadwal.nama_matakuliah = MataKuliah.nama_matakuliah 
					WHERE 
						kode_kelas LIKE '%$keyword%' OR kode_dosen LIKE '%$keyword%' OR kode_matakuliah LIKE '%$keyword%' OR hari LIKE '%$keyword%'
					ORDER BY
						Jadwal.id ASC	
						
						";
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