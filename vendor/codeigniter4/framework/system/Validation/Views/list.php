<?php if (! empty($errors)) : ?>
	<div class="errors" role="alert">
		<ul class="m-0">
		<?php foreach ($errors as $error) : ?>
			<li><small><?= esc($error) ?></small></li>
		<?php endforeach ?>
		</ul>
	</div>
<?php endif ?>
