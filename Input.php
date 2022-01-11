<html>
<head>
	<title>Input</title>
</head>
<body>
	<form action="Output.php" method="post">
		
		<b>KONSER AMAL INDAHNYA BERBAGI</b>
		<br>
		
		<pre>
Nama Pemesan	: <input type="text" name="nama" size="17" maxlength="50">
Kode Studio	: <select name="kode">
					<option value="-Pilih-">
					<option value="Studio 1">Studio 1
					<option value="Studio 2">Studio 2
				
				  </select>
Jenis Kelas	: <input type="radio" name="jenis" value="VIP">VIP <input type="radio" name="jenis" value="Festifal">Festifal
Jumlah Tiket	: <input type="text" name="jml" size="17" maxlength="50">
		  <input type="submit" value="Tampil"><input type="reset" value="Batal">
		</pre>
		
	</form>	
</body>
</html>