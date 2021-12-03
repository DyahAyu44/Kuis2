<html>
    <body>
<?php

$server = "172.20.0.2";
$user = "root";
$password = "admin";
$nama_database = "dbmobil";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>
</body>
</html>