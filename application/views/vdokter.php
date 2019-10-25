
		<center><h1>DATA DOKTER</h1></center>
		<div class="container">
		<a href="<?= site_url('Dokter/tambah_data') ?>" class="btn btn-primary">TAMBAH DATA</a>
		<table class="table table-bordered mt-3 md-5">
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
		</div>

