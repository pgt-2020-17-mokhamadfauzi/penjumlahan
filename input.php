<?php 	include("konfig.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>Menghitung</title>
</head>
<body>
	

 	 	<!--<form action="edit.php?id=<?php echo $id; ?>" method="post"> -->

<form method="get" action="">
	<h1>MENGHITUNG </h1>
	 
	A : <input type="text" name="a" value=""><br> 
	B : <input type="text" name="b" style="margin-top: 10px"><br>
	<input type="submit" name ="hitung"value="hitung" style="margin-top: 20px ">
	<input type="submit" name ="hitungruntun"value="hitungruntun" style="margin-left: 20px ; margin-top: 20px">
	<br>
</form>
<?php
	if (isset($_GET['hitung'])){
		
		$a = $_GET['a'];
		$b = $_GET['b'];
		$c = $a+$b;
		//echo "<div style='height :40px;background-color : skyblue''>";
		echo "Hasil = $c";

		//Untuk Keterangan
	if($c >= 0 && $c <= 10 ) {
        echo "Anda Mendapat A";
       	$ket = "A"; 
    }elseif ($c >10 && $c <= 20) {
        echo "Anda Mendapat B";
       	$ket = "B";
    }elseif ($c >20 ) {
        echo "Anda Mendapat C";
       	$ket = "C";
     }elseif ($c < 0 ) {
        echo "Anda Mendapat D";
       	$ket = "D";
     }


		$sql = mysqli_query($koneksi, "INSERT INTO `tb_hitung`(`a`, `b`, `c`, `ket`) VALUES ('$a','$b','$c','$ket')") or die(mysqli_error($koneksi)); 
 	 	 	 
 	 	 	if($sql){ 
 	 	 	 	echo 	'<script>alert("Berhasil menyimpan data."); document.location="input.php?";</script>'; 
 	 	 	}else{ 
 	 	 	 	echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>'; 
 	 	 	} 

		//echo "</div>";

	}
	?>

	<!--Perhitungan Bertingkat-->

	<?php 
	
		if (isset($_GET['hitungruntun'])) {
			$a = $_GET['a'];
			$b = $_GET['b'];
			for ($i=1; $i <= 10 ; $i++) { 
				$c = $a+$b;

				//Untuk Keterangan
	if($c >= 0 && $c <= 10 ) {
        echo "Anda Mendapat A";
       	$ket = "A"; 
    }elseif ($c >10 && $c <= 20) {
        echo "Anda Mendapat B";
       	$ket = "B";
    }elseif ($c >20 ) {
        echo "Anda Mendapat C";
       	$ket = "C";
     }elseif ($c < 0 ) {
        echo "Anda Mendapat D";
       	$ket = "D";
     }


		$sql = mysqli_query($koneksi, "INSERT INTO `tb_hitungruntun`(`a`, `b`, `c`, `ket`) VALUES ('$a','$b','$c','$ket')") or die(mysqli_error($koneksi)); 
 	 	 	  
			$a = $b;
			$b = $c;

			}
 	 	 	 
 	 	 	if($sql){ 
 	 	 	 	echo 	'<script>alert("Berhasil menyimpan data."); document.location="input.php?";</script>'; 
 	 	 	}else{ 
 	 	 	 	echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>'; 
 	 	 	} 	
		}
	


	 ?>


<br>	
<br>	
<br>
 	 	<p>	Menampilkan Data</p>
 	<table border="1">
		<tr>
			<th>ID</th>
			<th>A</th>
			<th>B</th>
			<th>C</th>
			<th>Keterangan</th>
		</tr>
		<?php 
		$data = mysqli_query($koneksi,"select * from tb_hitung");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['a']; ?></td>
				<td><?php echo $d['b']; ?></td>
				<td><?php echo $d['c']; ?></td>
				<td><?php echo $d['ket']; ?></td>
				
				
			</tr>
			<?php 
		}
		?>
	</table>

<br>	
<br>	
<br>
 	 	<p>	Menampilkan Data Hitung Runtun</p>
 	<table border="1">
		<tr>
			<th>ID</th>
			<th>A</th>
			<th>B</th>
			<th>C</th>
			<th>Keterangan</th>
		</tr>
		<?php 
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_hitungruntun");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['a']; ?></td>
				<td><?php echo $d['b']; ?></td>
				<td><?php echo $d['c']; ?></td>
				<td><?php echo $d['ket']; ?></td>
				
				
			</tr>
			<?php 
		}
		?>
	</table>

 	 	<br>	
 	 	<br>	
 	 	<br>
 	 	<form method="get" action="">
 	 		<input type="submit" name ="hapus"value="hapus" style="margin-left: 20px">
 	 	</form>
<?php 
if (isset($_GET['hapus'])) {
	$sql = mysqli_query($koneksi, "DELETE FROM `tb_hitungruntun`");
	if($sql){ 
 	 	 	 	echo 	'<script>alert("Berhasil hapus data."); document.location="input.php?";</script>'; 
 	 	 	}else{ 
 	 	 	 	echo '<div class="alert alert-warning">Gagal melakukan proses hapus data.</div>'; 
 	 	 	} 
}

 ?>


</body>
</html>