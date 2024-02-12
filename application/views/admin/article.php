<!-- Begin Page Content -->
<div class="container-fluid">
	<?php
	$articles = $this->db->get('article')->result_array();
	?>
	<a href="<?= base_url('article/add') ?>" class="btn btn-primary mb-3">Add New Article</a>
	<form action="<?= base_url('article/add') ?>" method="post">
		<table class="table mt-4">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Title</th>
					<th scope="col">Contens</th>
					<th scope="col">img</th>
					<th scope="col">key</th>
					<th scope="col">link</th>
					<th scope="col">created at</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody class="table-group-divider">
				<?php foreach ($articles as $i => $article) : ?>
					<tr>
						<td><?= $i + 1 ?></td>
						<td><?= $article['title'] ?></td>
						<td><?= $article['contens'] ?></td>
						<td><?= $article['img'] ?></td>
						<td><?= $article['key'] ?></td>
						<td><?= $article['link'] ?></td>
						<td><?= $article['created_at'] ?></td>
						<td>
							<button href="<?= base_url('article/edit') ?>" class="btn btn-warning">Edit</button>
							<button href='' class="btn btn-danger">Hapus</button>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->