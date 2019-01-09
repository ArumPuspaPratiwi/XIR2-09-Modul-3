<?php
$user=$_POST['nama'];
$email=$_POST['email'];
$pass=$_POST['password'];

if ($user == "arum" && $email == "arum_puspa_26rpl@student.smktelkom-mlg.sch.id" && $pass == "1234") {
  echo "<p>Login Berhasil</p>";
}
else {
  echo "<p>Login Gagal</p>";
}
?>
