<div class="container-fluid">
	<?php
	$news = $this->News_model->GetBerita();
	?>
	<a href="<?= base_url('news/create') ?>" class="btn btn-primary mb-3">Add New News</a>
	<table class="table mt-4">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Title</th>
				<th scope="col">Content</th>
				<th scope="col">Date</th>
				<th scope="col">Thumbnail</th>
				<th scope="col">Slug</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody class="table-group-divider">
			<?php foreach ($news as $i => $news) : ?>
				<tr>
					<td><?= $i + 1 ?></td>
					<td><?= $news['title_berita'] ?></td>
					<td><?= $news['content_berita'] ?></td>
					<td><?= $news['date_berita'] ?></td>
					<td><?= $news['thumbnail_berita'] ?></td>
					<td><?= $news['slug_berita'] ?></td>
					<td>
						<a href="<?= base_url('news/edit/' . $news['id_berita']) ?>" class="btn btn-warning">Edit</a>
						<a href="<?= base_url('news/Delete_news/' . $news['id_berita']) ?>" class="btn btn-danger">Hapus</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->