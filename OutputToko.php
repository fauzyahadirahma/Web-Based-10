<html>
<head>
	<title>Output Toko Cat</title>
</head>
<body>
	<?php
		$nama=$_POST['nama'];
		$alamat=$_POST['alamat'];
		$jenis=$_POST['jenis'];
		$warna=$_POST['warna'];
		$jml=$_POST['jml'];

		$harga=0;
		if ($jenis == "MOWILEX"){
			$harga = "20000";
		}elseif ($jenis == "DANAPAINT") {
			$harga = "30000";
		}else{
			$harga = "40000";
		}
		$total_harga = $jml * $harga;
		
		$diskon=0;
		if ($jml >= 5){
			$diskon = $total_harga*5/100;
		}elseif ($jml >= 10){
			$diskon = $total_harga*10/100;
		}else{
			$diskon = $total_harga*0;
		}
		$total_bayar = $total_harga - $diskon;
		
	?>
	
	
	<b>TOKO CAT GUNA BANGUN JAYA</b>
	<br>
	----------------------------------------------------------
	<br>
	<pre>
Nama Customer		: <?php echo $nama;?> <br>
Alamat			: <?php echo $alamat?> <br>
Jenis Cat		: <?php echo $jenis;?> <br>
Warna			: <?php echo $warna?><br>
Harga 			: <?php echo $harga; ?> <br>
Jumlah Beli		: <?php echo $jml;?>
	</pre>
	<br>
	----------------------------------------------------------
	<br>
	<pre>
Total Harga		: <?php echo $total_harga; ?> <br>
Diskon			: <?php echo $diskon; ?> 
	</pre>
	
    ----------------------------------------------------------
	
	<pre>
Total Bayar		: <?php echo $total_bayar; ?>
	</pre>
	<a href="InputToko.php">Kembali</a>	
</body>
</html>