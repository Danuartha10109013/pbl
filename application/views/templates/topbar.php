<?php
// Get the current page from the URL
$current_page = basename($_SERVER['PHP_SELF']);

// Get the main menu items from the database
$menu = $this->db->get('main_menu')->result_array();
?>

<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container px-5">
		<a class="navbar-brand" href="<?= base_url('home'); ?>">Rc Electronics <?= $title ?></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
				<?php if (!empty($menu)) : ?>
					<?php foreach ($menu as $m) : ?>
						<?php $is_active = ($current_page == $m['main_menu']) ? 'active' : ''; ?>
						<li class="nav-item <?= $is_active; ?>">
							<a class="nav-link pb-0" href="<?= base_url($m['main_menu']) ?>"><?= $m['main_menu'] ?></a>
						</li>
					<?php endforeach; ?>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</nav>