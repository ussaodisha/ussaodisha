<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>

<section class="Event-page">
	<!-- <div class="row m-0">
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
	</div> -->

	<div class="Event-panel">
		<div class="Event-heading">
			<h1>Our Events</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, eaque.</p>
		</div>
		<div class="Event-panel-box">

			<!-- <div class="primary-event-section">
				<div class="Event-box" data-aos="zoom-in">
					<div class="Event-image-box" data-aos="zoom-in" data-aos-delay="200">
						<img src="<?= base_url('Uploads/post-uploads/a.jpg'); ?>" alt="event-image">
					</div>
					<div class="Event-content-box">
						<div class="content-area-text">
							<h5><?= $value['Post_title']; ?>Lorem ipsum dolor sit amet.</h5>
							<p><?= $value['Post_description']; ?>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro dolorem delectus velit eum placeat, natus ut excepturi suscipit est veritatis! Dolore illum dolor aliquam quos unde corrupti minima, error ipsa molestiae cupiditate! Cupiditate est accusamus saepe ad. Porro totam nulla, ipsa qui minima sapiente adipisci quo consectetur soluta error atque! Corporis vitae tempora quis, minus voluptates ut inventore odit mollitia hic porro quaerat facere assumenda ullam fugiat beatae voluptate numquam!</p>
							<small style="float:right;"> - <?= $value['Post_date']; ?>20-nov-2020</small>
						</div>
						<br>
						<a class="readmore-btn">Show More</a>
					</div>
				</div>
			</div>

			<div class="primary-event-section">
				<div class="Event-box" data-aos="zoom-in">
					<div class="Event-image-box" data-aos="zoom-in" data-aos-delay="200">
						<img src="<?= base_url('Uploads/post-uploads/d.jpg'); ?>" alt="event-image">
					</div>
					<div class="Event-content-box">
						<div class="content-area-text">
							<h5><?= $value['Post_title']; ?>Lorem ipsum dolor sit amet.</h5>
							<p><?= $value['Post_description']; ?>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur explicabo, officia incidunt natus nemo, numquam voluptatibus ipsa voluptatem in, a tempore. Esse error aut fugiat quidem, sapiente autem. Reiciendis repellat quam cum quod, suscipit repellendus doloribus. Odio aperiam repellendus ipsa officia. Minima quasi repellendus officiis magnam odio a magni nam voluptatem aperiam, nobis deleniti excepturi eius. Sed asperiores odio et odit optio possimus aliquid omnis illo, vero maiores accusantium magnam.</p>
							<small style="float:right;"> - <?= $value['Post_date']; ?>20-nov-2020</small>
						</div>
						<br>
						<a class="readmore-btn">Show More</a>
					</div>
				</div>
			</div> -->
			<?php if(!empty($eventdata)):?>
			<?php foreach($eventdata as $value):?>
			<div class="primary-event-section">
				<div class="Event-box" data-aos="zoom-in">
					<div class="Event-image-box" data-aos="zoom-in" data-aos-delay="200">
						<img src="<?= base_url('Uploads/post-uploads/'.$value['Post_image']); ?>" alt="event-image">
					</div>
					<div class="Event-content-box">
						<div class="content-area-text">
							<h5><?= $value['Post_title']; ?></h5>
							<p><?= $value['Post_description']; ?></p>
							<small style="float:right;"> - <?= $value['Post_date']; ?></small>
						</div>
						<br>
						<a class="readmore-btn">Show More</a>
					</div>
				</div>
			</div>
			<?php endforeach;?>
			<?php else:?>
			<div class="no-data-found-panel text-center">
				<h1>No data Found</h1>
				<p><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Go back to <a
						href="<?= base_url('/');?>">Homepage</a></p>
			</div>
			<?php endif;?>

		</div>
	</div>
</section>

<?= $this->endSection()?>