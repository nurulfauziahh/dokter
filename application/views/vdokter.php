<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	</head>
	<body>
		<center><h1>DATA DOKTER</h1></center>
		<a href="<?= site_url('Dokter/tambah_data') ?>" class="btn btn-primary">TAMBAH DATA</a>
		<table class="table table-bordered mt-3">
			<thead>
				<tr>
					<th>NAMA</th>
					<th>SPESIALIS</th>
					<th>SHIFT</th>
					<th>EDIT</th>
					<th>DELETE</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($dat as $row){ ?>
					<tr>
						<td><?= $row->nama ?></td>
						<td><?= $row->spesialis ?></td>
						<td><?= $row->shift ?></td>
						<td><a href="<?= site_url('Dokter/ubah/'.$row->id) ?>" class="btn btn-warning">EDIT</a></td>
						<td><a href="<?= site_url('Dokter/delete_data/'.$row->id) ?>"  class="btn btn-danger" onclick="return confirm('yakin?');">DELETE</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</body>
</html>
