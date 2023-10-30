<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
</head>
<body>
    <?= $this->include('navbar') ?>
	<div>
		<h1>Hello, <?= $nickname ?></h1>
	</div>
	<div class="container">
		<table class="table caption-top">
			<caption>List of users</caption>
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nama</th>
					<th scope="col">NPM</th>
					<th scope="col">Prodi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; ?>
				<?php foreach ($mahasiswa as $m) : ?>
					<tr>
						<th scope="row"><?= $no++; ?></th>
						<td><?= $m["nama"]; ?></td>
						<td><?= $m["npm"]; ?></td>
						<td><?= $m["prodi"]; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</body>
</html>
