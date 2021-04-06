<html> 
<head>
	<title>Form Input Mahasiswa</title>
</head>  
<body>   
	<form action ="prosesformmahasiswa.php" method="post" name="input">
	<h3>FORM INPUT MAHASISWA</h3>
	<table>
		<tr>
			<td>
				NIM 
			</td>
			<td>
				<input type="text" name="nim" id=""><br>
			</td>
		</tr>
		<tr>
			<td>
				Program Studi 
			</td>
			<td>
				<select name="progdi">
					<option value="Teknik Informatika S1">Teknik Informatika S1</option> <br>  
					<option value="Sistem Informasi S1">Sistem Informasi S1</option> <br>
					<option value="Teknik Informatika D3">Teknik Informatika D3</option>
				</select>
				<br>	
			</td>
		</tr>
		<tr>
			<td>
				Nilai Tugas 
			</td>
			<td>
				<input type="number" name="tugas" min="10" max="100"><br>
			</td>
		</tr>
		<tr>
			<td>
				Nilai UTS 
			</td>
			<td>
				<input type="number" name="uts" min="10" max="100"><br>
			</td>
		</tr>
		<tr>
			<td>
				Nilai UAS 
			</td>
			<td>
				<input type="number" name="uas" min="10" max="100"><br>
			</td>
		</tr>
		<tr>
			<td>
				Catatan Khusus 
			</td>
			<td>
				<input type="checkbox" name="kehadiran" value="Kehadiran">
				<label for="kehadiran">Kehadiran >= 70%</label><br>
				<input type="checkbox" name="interaktif" value="Interaktif">
				<label for="interaktif">Interaktif dikelas</label><br>
				<input type="checkbox" name="tugasontime" value="Tugas Ontime">
				<label for="tugasontime">Tidak terlambat mengumpulkan tugas</label>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="simpan">
			</td>
			<td></td>
		</tr>
	</table>    
		   
	</form>  
</body> 
</html> 