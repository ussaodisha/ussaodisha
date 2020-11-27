<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>

<section class="Gallery-page">
	<div class="gallery-heading text-center">
		<h1>Our Gallery</h1>
		<h4>Lorem ipsum dolor sit amet.</h4>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, ducimus?</p>
	</div>
	<div class="gallery-panel">
		<ul>
			<!-- <li data-aos="zoom-in">
				<img src="<?= base_url('Uploads/gallery-uploads/a.jpg'); ?>" alt="Gallery-image" loading="lazy">
			</li>
			<li data-aos="zoom-in">
				<img src="<?= base_url('Uploads/gallery-uploads/b.jpg'); ?>" alt="Gallery-image" loading="lazy">
			</li>

			<li data-aos="zoom-in">
				<img src="<?= base_url('Uploads/gallery-uploads/c.jpg'); ?>" alt="Gallery-image" loading="lazy">
			</li>
			<li data-aos="zoom-in">
				<img src="<?= base_url('Uploads/gallery-uploads/d.jpg'); ?>" alt="Gallery-image" loading="lazy">
			</li> -->
			<?php if(!empty($galleydata)):?>
			<?php foreach($galleydata as $value):?>
			<li data-aos="zoom-in">
				<img src="<?= base_url('Uploads/gallery-uploads/'.$value['image_name']); ?>" alt="Gallery-image"
					loading="lazy" data-toggle="modal" data-target="#<?= $value['gallery_id']; ?>">
			</li>
			<?php endforeach;?>
			<?php else: ?>
			<div class="no-data-found-panel text-center">
				<h1>No data Found</h1>
				<p><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Go back to <a href="">Homepage</a></p>
			</div>
			<?php endif;?>
		</ul>
	</div>

	<div class="images-modal-panel">
		<!-- Modal -->
		<!-- <?php if(!empty($galleydata)):?>
		<?php foreach($galleydata as $value):?>
		<div class="modal fade" id="<?= $value['gallery_id']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1"
			aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<div class="modal-image-box">
							<img src="<?= base_url('Uploads/gallery-uploads/'.$value['image_name']); ?>" alt="Gallery-image"
								loading="lazy">
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach;?>
		<?php else:?>
				<div class="no-data-found-panel">
					<h1>No data Found</h1>
					<p><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Go back to <a href="">Homepage</a></p>
				</div>
		<?php endif;?> -->
		<!-- Modal -->
		<!-- <div class="modal fade" id="gallery_image_2" data-backdrop="static" data-keyboard="false" tabindex="-1"
				aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-xl modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<div class="modal-image-box">
								<img src="<?= base_url('Uploads/gallery-uploads/b.jpg'); ?>" alt="Gallery-image" loading="lazy">
							</div>
						</div>
					</div>
				</div>
			</div> -->
	</div>

	<!-- Button trigger modal -->
	<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
		Launch static backdrop modal
	</button> -->

</section>

<?= $this->endSection()?>