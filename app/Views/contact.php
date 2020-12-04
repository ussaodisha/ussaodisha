<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>

<section class="Contact-page">
	<div class="contact-background">
		<span>Contact Us</span>
	</div>
	<div class="contact-content">
		<div class="contact-content-layer">
			<div class="row m-0">
				<div class="col-sm-12 col-md-4 col-lg-4">
					<div class="contact-panel-box" data-aos="zoom-in">
						<h4>Address</h4>
						<p>Branch Office & Communication address: <br> 41-Diplex, 7 Acres, Chandrasekharpur,
							Bhubaneswaer-751016</p>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4" data-aos="zoom-in">
					<div class="contact-panel-box">
						<h4>Address</h4>
						<p>Regd. Office : <br> At/Po-Patana, Via-Mitrapur, Dist-Balasore-756001</p>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4" data-aos="zoom-in">
					<div class="contact-panel-box">
						<h4>Contact</h4>
						<p><i class="fa fa-phone" aria-hidden="true"></i> +91 9861070217<br>
							<i class="fa fa-phone" aria-hidden="true"></i> +91 9437631966</p>

						<h4>Email</h4>
						<p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a
								href="mailto:ussa2008@rediffmail.com">ussa2008@rediffmail.com</a></p>
						<p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a
								href="mailto:info@ussaodisha.org">info@ussaodisha.org</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="primary-content">
		<div class="feedback-section" data-aos="fade-up">
			<div class="heading">
				<h2>Get in touch</h2>
				<p>Agriculture / farming are the most noble and oldest <br>
					profession for mankind. Hindustan.</p>
			</div>
			<div class="feedback-form">
				<div class="form">
					<form action="<?= base_url("Home/subscribe_emails") ?>" method="POST">
						<div class="form-group">
							<input type="text" name="name" id="name" class="form-control" placeholder="Enter Name " />
						</div>
						<div class="form-group">
							<input type="email" name="email" id="email" class="form-control" placeholder="Enter Email " required />
						</div>
						<div class="form-group">
							<textarea name="message" id="message" rows="5" class="form-control"
								placeholder="Your Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Submit" name="submit" class="submit-btn">
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="contact-map-section" data-aos="fade-up">
			<div class="map-panel">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834733.08178569!2d82.19145318107849!3d20.181698462423313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a226aece9af3bfd%3A0x133625caa9cea81f!2sOdisha!5e0!3m2!1sen!2sin!4v1606118024683!5m2!1sen!2sin"
					width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
					tabindex="0"></iframe>
			</div>
		</div>
	</div>
	<div class="bottom-background">

	</div>
	<div class="extra-space">

	</div>
</section>

<?= $this->endSection() ?>