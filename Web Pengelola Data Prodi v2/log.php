<?php

session_start();

if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}

require 'function.php';
$table = query("SELECT * FROM login_logs");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Data Mahasiswa Unimal</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

<!-- icons -->
<link rel="icon" type="icon/x-icon" href="https://icons8.com/icon/83326/home" />

<!-- My CSS -->
<link rel="stylesheet" href="style.css" />

</head>

<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top">
      <div class="container">
	  <img style="width: 50px; margin-right: 20px" src="img/unimal.png" alt="unimal">
        <a class="navbar-brand" href="#">Logs</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

	<!-- Data Mahasiswa -->
	<section class="data_mhs">
		<div class="container">

	<date_interval_create_from_date_string class="row">
	    <div class="col-3">
		    </div>
                <table class="table table-striped table-hover table-bordered border-light" style="margin-left: 3px;">
                    <tr> 
                        <th>id</th>
                        <th>username</th>
                        <th>login_time</th>
                        <th>ip_address</th>
                        <th>user_agent</th>
                    </tr>
                    <?php $i = 1;?>
                    <?php foreach ($table as $row) : ?>
                        <tr class="align-middle">
                            <td><?php echo $i?></td>
                            <td><?php echo $row["username"]?></td>
                            <td><?php echo $row["login_time"]?></td>
                            <td><?php echo $row["ip_address"]?></td>
                            <td><?php echo $row["user_agent"]?></td>
                        </tr>
                    <?php $i ++;?>
                    <?php endforeach; ?>
                </table>
            </div>
		</div>
	</section>
	<!-- Akhir Data Mahasiswa -->

</body>
</html>