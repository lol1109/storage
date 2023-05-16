<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<h1>Data User</h1>
	<table border="1" cellpadding="10">
		<tr>
			<th>no</th>
			<th>nama</th>
		</tr>
			<?php $no=1; ?>
			<?php foreach ($gmail as $u) : ?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $u->gmail; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
</body>
</html>
