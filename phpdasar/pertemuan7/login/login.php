<?php 
if (isset($_POST["submit"]) ) {
	if ( $_POST["username"] == "admin" && $_POST["password"] == "hidupmati" ) {
		header("Location: admin.php");
		exit;
		} else {
		$error = true;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
<h1>Login Admin</h1>

<?php if( isset($error)) : ?>
	<h1 style="color: red; font-style: italic; font-size: 20px;">Username / Password salah !</h1>
<?php endif; ?>

<ul>
	<form action="" method="post">
		<li>
			<label for="username">Username :</label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="passsword">Password :</label>
			<input type="password" name="password" id="passsword">
		</li>
		<li>
			<button type="submit" name="submit">Submit</button>
		</li>
	</form>
</ul>
</body>
</html>