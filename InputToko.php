<html>
<head>
	<title>Input Toko Cat</title>
</head>
<body>
	<form action="OutputToko.php" method="post">
		
		<b>TOKO CAT GUNA BANGUN JAYA</b>
		<br>
		
		<pre>
Nama Customer	: <input type="text" name="nama" size="21" maxlength="50">
Alamat		: <input type="text" name="alamat" size="21" maxlength="50">
Jenis Cat	: <select name="jenis">
					<option value="-Pilih-">
					<option value="MOWILEX">MOWILEX
					<option value="DANAPAINT">DANAPAINT
					<option value="CATYLAC">CATYLAC
				  </select>
Warna Cat	: <input type="radio" name="warna" value="Merah">Merah <input type="radio" name="warna" value="Biru">Biru <input type="radio" name="warna" value="Kuning">Kuning 
Jumlah Beli	: <input type="text" name="jml" size="21" maxlength="50"> <br>
<input type="submit" value="Hitung"><input type="reset" value="Batal">
		</pre>
		
	</form>	
</body>
</html>