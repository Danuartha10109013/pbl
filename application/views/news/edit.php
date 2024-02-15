<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('message'); ?>

    <div class="form-group">
        <form action="<?= base_url('news/Update_news/' . $news_data['id_berita']); ?>" method="post" enctype="multipart/form-data">
            <!-- Assuming you have an $article_id variable to identify the article being edited -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Judul Berita" value="<?= $news_data['title_berita']; ?>">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Contents</label>
                <input type="text" class="form-control" id="content" name="content" placeholder="Content Berita" value="<?= $news_data['content_berita']; ?>"></input>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" placeholder="Tanggal Berita" value="<?= $news_data['date_berita']; ?>">
            </div>
            <div class="mb-3">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <input type="file" class="form-control" id="thumbnail" name="thumbnail" placeholder="Thumbnail Berita" value="<?= $news_data['thumbnail_berita']; ?>">
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Your link for the article" value="<?= $news_data['slug_berita']; ?>">
            </div>
            <div class="input-footer">
                <button type="submit" class='btn btn-primary'>Update</button>
                <a class="btn btn-secondary" href='<?= base_url('admin/news') ?>'>Cancel</a>
            </div>
        </form>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->