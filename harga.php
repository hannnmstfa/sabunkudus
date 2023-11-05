<!DOCTYPE html>
<html>
<head>
	<title>FA Store</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<nav class="navbar">

	<div class="dropdown" style="float: right;">
	  <button class="dropbtn">☰</button>
	  <div class="dropdown-content">
	    <a href="index.php">Home</a>
	    <a href="harga.php">Daftar Harga</a>
	    <a href="bayar.php">Metode Pembayaran</a>
	  </div>
	</div>
</nav>
	<?php
	$dm=[86,172,257,344,429,514,706];
	$asli=[78, 156,234,312,390,468,625];
	$bonus=[8,16,23,32,39,46,81];
	$pass=["Twilight Pass", "Weekly Diamond Pass","Starlight Card (Via Gift)"];
	$hrg1=["21,000","42,000","61,500","81,000","100,000","125,000","165,000"];
	$hrg2=["137,000", "28,000","60,000"];
	$jml1= count($hrg1);
	$jml2= count($hrg2);
	?>
<center>
	<h1 style="font-family: cursive">List Diamond<br>Mobile Legends Bang Bang<br>by FA Store</h1>
	<table border="1" cellspacing="" width="50%" bgcolor="white">
		<tr style="background-color: #487c94">
			<th>PAKET</th>
			<th>HARGA</th>
		</tr>
		<?php for ($x=0; $x<$jml1; $x++){ ?>
		<tr>
			<td style="text-align: center"><?php echo $dm[$x] ?> Diamond (<?php echo $asli[$x]; echo " + "; echo $bonus[$x] ?> Bonus)</td>
			<td style="text-align: right">Rp <?php echo $hrg1[$x] ?></td>
		</tr>
		<?php } ?>
		<?php for ($y=0; $y<$jml2; $y++){ ?>
		<tr>
			<td style="text-align: center"><?php echo $pass[$y] ?></td>
			<td style="text-align: right">Rp <?php echo $hrg2[$y] ?></td>
		</tr>
		<?php } ?>
		<tr>
			<td colspan="2" style="text-align: center; background-color: yellow">HARGA SUDAH TERMASUK PAJAK</td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center; background-color: yellow">PROSES 1-10 MENIT</td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center; background-color: yellow">APABILA TERJADI ERROR PROSES MAKS 1x24 JAM</td>
		</tr>
	</table>
</center>
</body>
</html>