<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<?= $this->session->flashdata('message'); ?>

	<div class="mb-3">
		<label for="title" class="form-label">Title</label>
		<input type="text" class="form-control" id="title" name="title" placeholder="Your title here">
	</div>
	<div class="mb-3">
		<label for="contens" class="form-label">Contents</label>
		<textarea class="form-control" id="contens" name="contens" placeholder="Your main contents"></textarea>
	</div>
	<div class="mb-3">
		<label for="image" class="form-label">Img</label>
		<input type="file" class="form-control" id="image" name="image" placeholder="Your image">
	</div>
	<div class="mb-3">
		<label for="link" class="form-label">Link</label>
		<input type="text" class="form-control" id="link" name="link" placeholder="Your link for the article">
	</div>
	<div class="mb-3">
		<label for="date_created" class="form-label">Date Created</label>
		<input type="text" class="form-control" id="date_created" name="date_created" placeholder="Your article publish date">
	</div>
	<div class="input-footer">
		<button type="submit" class='btn btn-primary'>Add</button>
		<a class="btn btn-secondary" href='<?= base_url('admin/article') ?>'>Close</a>
	</div>
	</form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->