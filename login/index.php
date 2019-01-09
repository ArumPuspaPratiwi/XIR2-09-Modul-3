<html>
<head>
	<title>LOG IN WIFI</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center><h2>LOG IN WIFI SMK TELKOM MALANG</h2></center>
	<div class="login">
		<form action="login.php" method="POST">
			<div>
				<label>Nama Lengkap:</label>
				<input type="text" name="nama" id="nama" required>
			</div>
			<div>
				<label>Email:</label>
				<input type="email" name="email" id="email" required>
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" required>
			</div>
			<div>
				<input type="submit" value="Daftar" class="tombol" onclick="return">
			</div>
		</form>
	</div>
</body>
</html>
