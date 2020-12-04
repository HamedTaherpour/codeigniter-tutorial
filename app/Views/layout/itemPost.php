<div class="card">
	<a href="post.html">
		<img class="card-img-top" src="<?= base_url($post['img']) ?>" alt="">
	</a>
	<div class="card-body">
		<a href="post.html">
			<h5 class="card-title"><?= $post['title'] ?></h5>
		</a>
		<p class="card-text"><?= $post['content'] ?></p>
	</div>
	<div class="card-footer">
		<small class="text-muted"><?= $post['date'] ?></small>
	</div>
</div>
