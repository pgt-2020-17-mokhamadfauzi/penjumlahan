<?php 

$koneksi=mysqli_connect("localhost","root","", "hitung");
if (mysqli_connect_errno()) {
	echo "Gagal Konek Ke Database" . mysqli_connect_error();
}
 ?>