<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>

<section class="Event-page">
	<div class="row m-0">
		<div class="col-8">
			<div class="text-center">
				<h1 class="display-1">Events</h1>
			</div>
		</div>
		<div class="col-4">
			<div>
				<p>Sidebar</p>
				<ul>
					<li><a href="<?= base_url('/');?>">Home</a></li>
					<li><a href="<?= base_url('/About');?>">About Us</a></li>
					<li><a href="<?= base_url('/Events');?>">Events</a></li>
					<li><a href="<?= base_url('/Gallery');?>">Gallery</a></li>
					<li><a href="<?= base_url('/Contact');?>">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection()?> 