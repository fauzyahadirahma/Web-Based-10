<html>
<head>
	<title>Output</title>
</head>
<body>
	<?php
		$nama=$_POST['nama'];
		$kode=$_POST['kode'];
		$jenis=$_POST['jenis'];
		$jml=$_POST['jml'];

		$harga=0;
		if($jenis == "VIP"){
			$harga = "500000";
		}else{
			$harga = "250000";
		}
		$total_harga = $jml * $harga;
	?>
	
	
	<b>KONSER AMAL INDAHNYA BERBAGI</b>
	<br>
	================================
	<br>
	<pre>
Nama Pemesanan		: <?php echo $nama;?> <br>
Kode Studio		: <?php echo $kode;?> <br>
Bintang Tamu		: <?php
					$kode == "Studio 1";
					if ($kode == "Studio 1") {
						echo "Opik";
					} else {
						echo "Raihan";
					}
				  ?><br>
Jenis Kelas		: <?php echo $jenis;?> <br>
Harga 			: <?php echo $harga; ?> <br>
Jumlah Beli		: <?php echo $jml;?>
	</pre>
	<br>
	================================
	<br>
	<pre>
Total Harga		: <?php echo $total_harga; ?>
	</pre>
	<a href="Input.php">Kembali ke Awal</a>
	
</body>
</html>