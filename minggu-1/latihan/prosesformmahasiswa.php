<html>
<head>
	<title>Form Mahasiswa</title>
</head>
<body>
	<h3 align="center"><blink>Hasil Akhir Nilai Mahasiswa</blink></h3>
	<table align="center" border="2">
		<?php
		error_reporting(0) ;
		$nim=$_POST['nim'];
		$ps=$_POST['progdi'];
		$tugas=$_POST['tugas'];
		$uts=$_POST['uts'];
		$uas=$_POST['uas'];
		$khdr=$_POST['kehadiran'];
		$inter=$_POST['interaktif'];
		$tdtugas=$_POST['tugasontime'];
		?>

		<?php
		$akhir=(0.40*$tugas)+(0.30*$uts)+(0.30*$uas);
		?>

		<?php
		if ($akhir <= 40 )
		{
		$nh = 'E' ;
		}
		else if ($akhir <= 50 )
		{
		$nh = 'D' ;
		}

		else if ($akhir <= 70 )
		{
		$nh = 'C' ;
		}
		else if ($akhir <= 80 )
		{
		$nh = 'B' ;
		}
		else
		{
		$nh = 'A' ;
		}
		?>

		<?php
		if ($akhir < 60 )
		{
		$stat = 'TIDAK LULUS' ;
		}
		else if ($akhir < 101 )
		{
		$stat = 'LULUS' ;
		}
		else
		{
		$stat = 'INVALID' ;
		}
		?>

		<tr>
			<th>Program Studi</th>
			<th>NIM</th>
			<th>Nilai Angka</th>
			<th>Nilai Huruf</th>
			<th>STATUS</th>
			<th>Catatan Khusus</th>
		</tr>
		<tr>
			<td align="center"><?php echo$ps; ?></td>
			<td align="center"><?php echo$nim;?></td>
			<td align="center"><?php echo$akhir;?></td>
			<td align="center"><?php echo$nh;?></td>
			<td align="center"><?php echo$stat;?></td>
			<td align="center">
			<?php echo$khdr;?><br>
			<?php echo$inter;?><br>
			<?php echo$tdtugas;?>
			</td>
		</tr>
	</table>
</body>
</html>