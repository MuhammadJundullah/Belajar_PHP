<?php

session_start();

if (!isset($_SESSION['login'])) {
	header("Location: ../login.php");
	exit;
}

require '../function.php';

$id = $_GET["id"];

if (hapusmk($id) > 0) {
    echo 
    "<script>
    alert ('Data berhasil dihapus!');
    document.location.href = 'matakuliah.php';
    </script>";
} else {
    echo 
    "<script>
    alert ('Data gagal dihapus!');
    document.location.href = 'matakuliah.php';
    </script>";
}

?>