<?php 

    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    function query($query) {
        global $conn; 
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row; 
        }
        return $rows;
    }

    function tambah($data) {
        global $conn;
        $nrp = htmlspecialchars($data["nrp"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);

        // query inster data 
        $query = "INSERT INTO mahasiswa 
                    VALUES
                (NULL, '$nrp', '$nama', '$email', '$jurusan', '$gambar')
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
        return mysqli_query_affected_rows($conn);
    }
?>
