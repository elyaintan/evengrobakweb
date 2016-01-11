<html>
<head>
	<title>Tabel Pengguna</title>
</head>
<body>
	<table>
		<tr>
			<th>id</th>
			<th>nama</th>
			<th>keterangan</th>
			<th>file gambar</th>
			<th>file video</th>
			<th>action</th>
			
		</tr>
		<?php foreach($data as $d){ ?>
		<tr>
			<td><?php echo $d['id'] ?></td>
			<td><?php echo $d['nama'] ?></td>
			<th><?php echo $d['keterangan'] ?></th>
			<th><?php echo $d['file_gambar'] ?></th>
			<th><?php echo $d['file_video'] ?></th>
			<td>
				<a href="#">Edit</a>
				<a href="#">Delete</a>
			</td>
			
		</tr>
		<?php } ?>
	</table>

</body>
</html>