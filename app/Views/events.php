<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>

	<div class="row">
		<div class="col-8">
			<div class="text-center">
				<h1 class="display-1">Events</h1>
			</div>
		</div>
		<div class="col-4">
			<div>
				<p>Sidebar</p>
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="/About">About Us</a></li>
					<li><a href="/Events">Events</a></li>
					<li><a href="/Gallery">Gallery</a></li>
					<li><a href="/Contact">Contact Us</a></li>
			
				</ul>
			</div>
		</div>
	</div>

<?= $this->endSection()?> 